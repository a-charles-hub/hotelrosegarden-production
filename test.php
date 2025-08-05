// Imports
import { openModal, reloadCache } from "./modalUtils.js";
import { modalEditMenu } from './menu-management.js';

let currentMenuId = null;

export const fetchMenu = async () => {
    try {
        const response = await fetch('../../public/app/includes/menu.inc.php', {
            method: 'GET'
        });

        // Parse the response as JSON
        const result = await response.json();

        // Variables
        const menuContainer = document.getElementById('menu-container');
        const menu = document.querySelector('.menu');

        if(result.success === true) {
            result.data.forEach(menuItem => {
                console.log(menuItem);

                // Menu id
                let menuId = menuItem.menu_id;

                displayCards(menuItem, menuId);
                //modalEditMenu(menuId, editBtn, modal);

            });

            deleteMenu();
        }

    } catch (error) {
        console.log("Unable to retrieve data: ", error);
    }

    // Function to display delete modal
    const modalDelete = () => {
        // Variables
        const deleteBtn = document.getElementById('delete-menu');
        const modal = document.getElementById('modal-delete-menu');

        deleteBtn.addEventListener('click', () => {
            modal.classList.add('show');
        });
    }

    // Call function
    modalDelete();
}

// Function to display cards
const displayCards = (data, menuId, menuContainer, menu) => {
    // Declare variables
    const allDishCount = document.querySelector('.all-dish');

    // Clone the menu title
    const menuClone = menu.cloneNode(true); // Deep clone entire menu

    // Show the cloned menu
    menuClone.style.display = "grid";

    // Clone variables
    const cardImage = menuClone.querySelector('.card-image');
    const menuTitle = menuClone.querySelector('.menu-title');
    const category = menuClone.querySelector('.card-category');
    const price = menuClone.querySelector('.price');

    // Add style
    menuContainer.classList.add('menu');

    // Update the content with data
    const img = document.createElement('img'); // Create img element to dynamically populate data
    img.src = data.url;
    img.setAttribute('loading', 'lazy');

    menuTitle.textContent = data.title;
    category.textContent = data.category;
    menuClone.setAttribute('data-menu-id', menuId);
    allDishCount.textContent = data.total_rows;
    price.textContent = '$' + data.price + '/Serving';

    // Append
    cardImage.innerHTML = ''; // 🧹 clears out existing image(s)
    cardImage.appendChild(img);
    menuContainer.appendChild(menuClone);
}

const deleteMenu = async () => {
    const confirmBtn = document.getElementById('confirm-btn');

    confirmBtn.addEventListener('click', async () => {
        try {
            const response = await fetch(`../../public/app/includes/delete.inc.php?menu_id=${currentMenuId}`, {
                method: 'GET'
            });

            const result = await response.json();

            if(result.success === true) {
                console.log(result);

                // Hide delete modal and display confirmation
                const deleteModal = document.getElementById('modal-delete-menu');
                const deleteSuccess = document.getElementById('modal-delete-success');
                const menuConfirmation = document.getElementById('menu-deleted');
                const editModal = document.getElementById('modal-edit-menu');
                const modalBox = document.getElementById('delete-confirmation');

                // Remove menu from ui as soon as deleted
                const item = document.querySelector(`[data-menu-id="${currentMenuId}"]`);
                item?.remove();

                editModal.style.display = "none";
                deleteModal.style.display = "none";
                deleteSuccess.classList.add('show');
                menuConfirmation.textContent = 'Dish removed from menu.'

                const cancel = document.getElementById('cancel');
                const confirmBtn = document.getElementById('confirmDelete');

                cancel.addEventListener('click', () => {
                    deleteModal.classList.remove('show');
                });

                confirmBtn.addEventListener('click', () => {
                    location.reload();
                });

                // Reload cache
                reloadCache(deleteSuccess, modalBox)
            }   
            else {
                console.log('error');
            }
    
        } catch (error) {
            console.log('Unable to delete menu: ', error);
        }
    });
}

/*
    This file contains the styles for the client layout 
    
    List of affected pages:
    - Our Menu
    - Accomodation
    - Amenities

*/

/* Header Content */
.header-content {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50vh;

}

.header-wrap {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    line-height: 1;
    gap: 1px;
}

.header-wrap h1 {
    font-family: var(--font);
    font-size: 92px;
    font-weight: 500;
    color: #fff;
    text-align: center;
}

.header-wrap .subtitle {
    font-family: var(--font-body);
    font-size: 28px;
    font-weight: 500;
    color: #fff;
    text-align: center;
}

.header-wrap .description {
    font-family: var(--font-body);
    font-size: 20px;
    font-weight: 300;
    color: #fff;
    text-align: center;
    width: 1000px;
    min-width: 100%;
    line-height: 1.3;
}

/* Content Styles */
.content-container {
    background: #F2F2F2;
    height: auto;
    padding: 0 50px 50px;
}

.navigation-wrap {
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-bottom: 5px solid rgba(21, 29, 36, 0.3);
    margin-top: 50px;
} 

.navigation-links {
    display: flex;
    flex-direction: row;
    justify-content: center;
    gap: 50px;
    font-family: var(--font-body);
    font-weight: 500;
}

.navigation-links li a {
    color: #151D24;
}

/* Card Styles */
.card-menu.hide {
    display: none;
}

.show {
    display: block;
}

.navigation-links li {
    cursor: pointer;
    border-bottom: 3px solid transparent; /* reserve space */
}

.navigation-links li:hover {
    border-bottom-color: #151D24; /* reveal visible border */
}

.menu-container {
    display: grid;
    grid-template-columns: repeat(4, 400px);
    gap: 50px;
    padding: 50px 0;
    justify-content: center; /* center the whole grid horizontally */
}

.card {
    background: #FFFFFF;
}

/* Card Styles | Affects menu and amenities card*/

/* Menu container */
.card-menu {
    width: 420px;
    height: 220px;
    border-radius: 10px;
    background: #FFFFFF;
}

.card-wrap {
    display: flex;
    flex-direction: row;
    align-items: center;
}

/* Amenity image */
.amenity-img img {
    width: 400px;
    height: 275px;
    object-fit: cover;
    border-radius: 10px 10px 0 0;
}

.card-content {
    padding: 30px;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.card-title {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 10px;
    justify-content: center;
}

/* Amenity Card */
.card-title .price {
    font-family: var(--font-body);
    font-size: 18px;
    font-weight: 400;
}

.card-title h3 {
    font-family: var(--font);
    font-size: 20px;
    color: #151D24;
    font-weight: 500;
    text-align: center;
}

.card-category h4 {
    font-family: var(--font-body);
    font-size: 16px;
    font-weight: 500;
    text-align: center;
}

.card-description p {
    font-family: var(--font-body);
    font-size: 16px;
    letter-spacing: 1px;
    line-height: 22px;
    text-align: center;
}

/* Card Menu */
.content {
    border: 1px solid red;
}

.menu-img img {
    width: 100px;
    height: 100px;
    border-radius: 10px;
    object-fit: cover;
}

.menu-title, .price {
    font-family: var(--font-body);
    font-size: 16px !important;
    font-weight: 500;
}

.menu-description {
    font-family: var(--font-body);
    font-size: 12px !important;
    font-weight: 400;
    line-height: 1.5;
}

/* Animation */
.animate {
  opacity: 0;
  transform: translateY(40px); /* slight offset */
  transition: opacity 0.6s ease, transform 0.6s ease;
  will-change: opacity, transform;
}

.animate.visible {
  opacity: 1;
  transform: translateY(0);
}

export const clientFetch = async () => {
    try {
        const response = await fetch('../app/includes/menu.inc.php', {
            method: "GET"
        });

        const result = await response.json();

        if (result.success === true) {
            const data = result.data;

            // Get unique categories
            const categories = [...new Set(data.map(item => item.category))];

            // Get the section template and container
            const categoryTemplate = document.getElementById('menu-template');
            const categorySectionsContainer = document.getElementById('category-sections');

            // Loop through each category
            categories.forEach(category => {
                const filteredItems = data.filter(item => item.category === category);
                renderByCategory(category, filteredItems, categoryTemplate, categorySectionsContainer);
            });

        } else {
            document.getElementById('category-sections').innerHTML =
                "Our menu is being prepared. Please check back soon!";
        }

    } catch (error) {
        console.log("Error fetching menu data:", error);
    }
};

const renderByCategory = (categoryName, items, categoryTemplate, categorySectionsContainer) => {
    const sectionClone = categoryTemplate.cloneNode(true);
    sectionClone.classList.remove('hide');
    sectionClone.id = ''; // remove duplicate ID

    // Set the category title
    const title = sectionClone.querySelector('.category.header');
    title.textContent = categoryName;

    // Get the card container & card template inside this category section
    const cardContainer = sectionClone.querySelector('.menu-container');
    const cardTemplate = sectionClone.querySelector('.card-menu');

    // Render each item in this category
    items.forEach(item => {
        const cardClone = cardTemplate.cloneNode(true);
        cardClone.classList.remove('hide');

        const img = document.createElement('img');
        img.src = item.url;
        img.alt = item.title;
        img.loading = 'lazy';
        img.style.margin = '0 5px';

        cardClone.querySelector('.menu-title').textContent = item.title;
        cardClone.querySelector('.menu-description').textContent = item.description;
        cardClone.querySelector('.price').textContent = '₹' + item.price;
        cardClone.querySelector('.card-img').appendChild(img);

        cardContainer.appendChild(cardClone);
    });

    // Append this section to the DOM
    categorySectionsContainer.appendChild(sectionClone);
};

export const clientFetch = async () => {
    try {
        const response = await fetch('../app/includes/menu.inc.php', {
            method: "GET"
        });

        // Parse the response as JSON
        const result = await response.json();

        if(result.success === true) {
            // All data
            const data = result.data;
            // Categories
            const categories = [...new Set(data.map(item => item.category))];
            

            categories.forEach(category => {
                // Create category title element    
                console.log(category);
                console.log(data);

            });

            result.data.forEach(menuItem => {
                displayCardsClient(menuItem, cardContainer, menu);
            });
        }
        else {
            cardContainer.innerHTML = "Our menu is being prepared. Please check back soon!";
        }

    } catch (error) {
        console.log("Error checking or fetching menu data:", error);
    }
}


// Displays menu items as cards in the card container
const displayCardsClient = (data, cardContainer, menu) => {
    // Clone hidden templates
    const menuClone = menu.cloneNode(true);
    menuClone.classList.remove('hide');
    menuClone.classList.add('show');
    
    // Find elements inside the clone
    const img = document.createElement('img');
    const cardImage = menuClone.querySelector('.card-img');
    const menuTitle = menuClone.querySelector('.menu-title');
    const description = menuClone.querySelector('.menu-description');
    const price = menuClone.querySelector('.price');

    // Fill contents
    img.src = data.url;
    img.alt = data.title;
    img.style.margin="0 5px";
    img.setAttribute('loading', 'lazy');

    menuTitle.textContent = data.title;
    description.textContent = data.description;
    price.textContent = '₹' + data.price;

    // Clear and add image
    cardImage.innerHTML = '';
    cardImage.appendChild(img); 
    // Append the card
    cardContainer.appendChild(menuClone);
}