/**
 * modalUtils.js
 * 
 * Summary:
 * This file contains utility functions for handling modals and other UI interactions.
 * It provides functions to open and close modals, handle file input selection, and manage back-to-top functionality.
 * 
 * Functions:
 * - openModal(): Open modals.
 * - close(): Closes modals.
 * - reloadCache(): Reloads the page when clicking outside of modal content.
 * - fileInput(): Handles file input selection.
 * - modalMenuConfirmation(): Opens a confirmation modal for menu actions.
 * - backToTop(): Implements a back-to-top button functionality.
 * - intersecrtionObserver(): Observes elements for visibility changes.
 * 
 */


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

export const reloadCache = (modal, modalBox) => {
    // Close if user clicks outside of modal content
    modal.addEventListener('click', (event) => {
        if (!modalBox.contains(event.target)) {
            modal.classList.remove('show');
            location.reload();
        }
    });
}

// Choosing file input
export const fileInput = (uploads, inputField) => {
    if (!uploads || !inputField) return;
    
    uploads.addEventListener('click', () => {
        inputField.click();
    });
}

// Modal - Menu confirmation
export const modalMenuConfirmation = (modal) => {
    modal.classList.add('show')
}
 
export const backToTop = () => {
    const btn = document.getElementById('back-to-top');

    window.onscroll = () => {
        btn.style.display = (document.documentElement.scrollTop > 300) ? "block" : "none";
    };

    btn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth" 
        });
    });
}

export const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    } else {
      entry.target.classList.remove('visible');
    }
  });
}, {
  threshold: 0.1 // start animating when 25% is in view
});

export const redirectTo = (btn, url) => {
    btn.addEventListener('click', () => {
        window.location.href = url;
    });
}

export const cardNavigation = () => {
    const navlinks = document.querySelectorAll('.navigation-links li');

    navlinks.forEach(link => {
        link.addEventListener('click', () => {
            const selectedCategory = link.getAttribute('data-category');
            const cards = document.querySelectorAll('.card');

            cards.forEach(card => {
                const cardCategory = card.getAttribute('data-category');

                if (selectedCategory === 'All' || cardCategory === selectedCategory) {
                    card.style.display = 'block'; // show matching cards
                } else {
                    card.style.display = 'none'; // hide non-matching cards
                }
            });
        });
    });
};


