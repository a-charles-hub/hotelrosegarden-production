import { openModal, close } from "./modalUtils.js";

// Shared modal elements
const menuModal = document.querySelector('.edit-menu-modal');
const menuModalBox = document.querySelector('.edit-menu');
const openMenuBtn = document.querySelectorAll('.card-menu-btn');
const closeDeleleMenu = document.querySelector('.cancel');

// Add Menu Modal
function addMenuModal() {
    // Variables
    const openBtn = document.getElementById('add-menu');
    const closeBtn = document.getElementById('modal-close');
    const modal = document.querySelector('.modal');
    const modalBox = document.getElementById('add-menu-modal');

    openModal(modal, openBtn);

    // Close modal
    close(modal, modalBox, closeBtn);
}

// Edit Menu Modal
function openEditModal() {
    openMenuBtn.forEach((btn) => {
        openModal(menuModal, btn);
    });
    
    // Close modal
    close(menuModal, menuModalBox, closeDeleleMenu);
}

// Delete Menu
function deleteMenu() {
    const deleteModal = document.querySelector('.delete-menu-modal');
    const deleteModalBox = document.querySelector('.delete-menu');
    const deleteBtn = document.getElementById('delete-menu');
    const cancelBtn = document.getElementById('cancel');

    // When Open delete modal is triggered, close edit menu modal
    openModal(deleteModal, deleteBtn);

    // Close modal
    close(deleteModal, deleteModalBox, cancelBtn);


}


addMenuModal();
openEditModal();
deleteMenu();