// Open Add Menu modal
export const openModal = (modal, openBtn) => {
    // Check if openBtn is a single element or NodeList
    const buttons = openBtn instanceof NodeList ? openBtn : [openBtn];

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            modal.classList.add('show');
        });
    });

}

// Close modal
export const close = (modals, modalBoxes, closeBtns) => {
    // Close when close button is clicked
    closeBtns.forEach(button => {
        button.addEventListener('click', () => {
            button.closest('.modal').classList.remove('show');
        });
    });

    // Close if user clicks outside of modal content
    modals.forEach((modal, index) => {
        const modalBox = modalBoxes[index];
        modal.addEventListener('click', (event) => {
            if (!modalBox.contains(event.target)) {
                modal.classList.remove('show');
            }
        });
    });
};