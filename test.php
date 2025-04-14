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
