// Open modal
const openModal = () => {
    const hamburger = document.getElementById('hamburger-menu');
    const close = document.getElementById('close');
    const navlinks = document.querySelector('.nav-links');
    
    hamburger.addEventListener('click', () => {
        navlinks.classList.add('open');
        close.style.display = 'block';
        hamburger.style.display = 'none';
    });

    close.addEventListener('click', () => {
        navlinks.classList.remove('open');
        close.style.display = 'none';
        hamburger.style.display = 'block';
    });
}

// Call functions
openModal();