// Open Add Menu modal
export const openModal = (modal, openBtn) => {
    // Open modal
    openBtn.addEventListener('click', () => {
        modal.classList.add('show');
    });
}

// Close modal
export const close = (modal, modalBox, closeBtn) => {
    // Close when close button is clicked
    closeBtn.addEventListener('click', () => {
        modal.classList.remove('show');
    });

    // Close if user clicks outside of modal
    modal.addEventListener('click', (event) => {
        if(!modalBox.contains(event.target)) {
            modal.classList.remove('show');
        }
    });
}