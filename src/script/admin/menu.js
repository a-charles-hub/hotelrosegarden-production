// Imports
import { reloadCache } from "./modalUtils.js";
import { menuModal } from './menu-management.js';
import { search } from "./search.js";

// Global variables
let cachedData = []; // Data is from fetchMenu*) function. This cointains cached data. 

export const fetchMenu = async () => {
    try {
        const response = await fetch('../../public/app/includes/menu.inc.php', {
            method: 'GET'
        });

        // Parse the response as JSON
        const result = await response.json();
        cachedData = result;

        // Variables
        const menuContainer = document.getElementById('menu-container');
        const menu = document.getElementById('menu-template');

        // Clear previous data
        menuContainer.innerHTML = '';
        if(result.success === true) {
            result.data.forEach(menuItem => {
                console.log(menuItem);
                
                // Menu id
                let currentMenuId = menuItem.menu_id;

                // Call function to display cards
                displayCards(menuItem, currentMenuId, menuContainer, menu);
            });

            modalDelete();
            dishCategory(result.data);

            // Count
            dishCount(result.data);

        }
        else {
            menuContainer.innerHTML = 'No dishes found. Want to add a new one?';
        }
    } catch (error) {
        console.log("Unable to retrieve data: ", error);
    }
}

const dishCategory = (data) => {
    const categoryElement = document.querySelectorAll('#category-list li');
    const menuContainer = document.getElementById('menu-container');
    const menu = document.getElementById('menu-template');

    //console.log(data);

    categoryElement.forEach(category => {
        category.addEventListener('click', () => {
            const selectedCategory = category.getAttribute('data-category');
            menuContainer.innerHTML = ''; // Clear container before rendering
    
            if (selectedCategory === "All") {
                data.forEach(item => {
                    let currentMenuId = item.menu_id;
                    displayCards(item, currentMenuId, menuContainer, menu);
                });
            } else {
                const filteredDishes = data.filter(item => item.category === selectedCategory);
            
                if (filteredDishes.length > 0) {
                    filteredDishes.forEach(item => {
                        let currentMenuId = item.menu_id;
                        displayCards(item, currentMenuId, menuContainer, menu);
                    });
                } else {
                    menuContainer.innerHTML = '<p>No dishes found in this category.</p>';
                }
            }
        });
    });
}

// Dish category count
const dishCount = (data) => {
    const categoryElements = document.querySelectorAll('#category-list li');

    categoryElements.forEach(li => {
        const category = li.getAttribute('data-category');
        
        // Handle "All" separately
        const count = category === 'All'
            ? data.length
            : data.filter(item => item.category === category).length;
        
        const span = li.querySelector('.dish-count');
        if (span) {
            span.textContent = count;
        }
    });
};

// Function to display cards
export const displayCards = (data, menuId, menuContainer, menu) => {
    const modal = document.getElementById('modal-edit-menu');

    // Clone hidden template
    menuContainer.classList.add('menu');
    const menuClone = menu.cloneNode(true);
    menuClone.style.display = "grid";

    // Find elements inside the clone
    const cardImage = menuClone.querySelector('.card-image');
    const menuTitle = menuClone.querySelector('.menu-title');
    const category = menuClone.querySelector('.card-category');
    const price = menuClone.querySelector('.price');
    const menuBtn = menuClone.querySelectorAll('.card-menu-btn');

    // Fill content
    const img = document.createElement('img');
    img.src = data.url;
    img.setAttribute('loading', 'lazy');

    menuTitle.textContent = data.title;
    category.textContent = data.category;
    price.textContent = `$${data.price}/Serving`;
    menuClone.setAttribute('data-menu-id', menuId);

    // Clear and add image
    cardImage.innerHTML = '';
    cardImage.appendChild(img);

    // Append the card
    menuContainer.appendChild(menuClone);

    // Init modal
    menuModal(menuId, menuBtn, modal);
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


export const deleteMenu = async (currentMenuId) => {
    const confirmBtn = document.getElementById('confirm-btn');

    confirmBtn.addEventListener('click', async () => {
        console.log('confirmed');
        console.log(currentMenuId);
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

(async () => {
    await fetchMenu();
    const input = document.getElementById('search');
    search(input, cachedData);
})();
