import { openModal, close } from "./modalUtils.js";
import { deleteMenu } from "./menu.js";

export const categoryList = (element, section, defaultHover) => {
    element.addEventListener('click', (e) => {
        e.preventDefault();
        
        section.hidden = false;
        
        element.classList.add('active');
        defaultHover.classList.remove('default');
    });
}

// Modal - Menu modal
export const menuModal = (menuId, modalBtn, modal) => {
    let currentId;

    modalBtn.forEach(modalBtn => {
        modalBtn.addEventListener('click', () => {
            modal.classList.add('show');
            currentId = menuId;
    
            console.log('menu: ' + currentId);

            deleteMenu(currentId);
        });
    });
}

// Modal - Add Menu
export const modalAddMenu = () => {
    const btn = document.getElementById('btn-add-menu');
    const modal = document.getElementById('modal-add-menu');

    // Open modal
    openModal(modal, btn);
}

// Modal - Delete menu
export const modalDeleteMenu = (deleteBtn, modal) => {
    // Open modal
    openModal(modal, deleteBtn);
}

// Close Modals
export const closeModals = () => {
    const closeBtn = document.querySelectorAll('.close-modal');
    const modalContent = document.querySelectorAll('.modal-content');
    const modal = document.querySelectorAll('.modal');

    // Close modals
    close(modal, modalContent, closeBtn);
}
