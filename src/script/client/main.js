import { backToTop } from '../modalUtils.js';
import { clientFetch } from '../client/client.js';

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
        navlinks.classList.add('close');
        close.style.display = 'none';
        hamburger.style.display = 'block';
    });
}

export const paginationMenu = () => {
    const previousBtn = document.getElementById('previous-btn');
    const nextBtn = document.getElementById('next-btn');
    const pageNumbers = document.getElementById('page-numbers');
    const cards = document.querySelectorAll('.card-menu');
    let currentPage = 1;

    const getItemsPerPage = () => {
        const width = window.innerWidth;
        if (width >= 1920) return 15;
        if (width >= 1200) return 8;
        if (width <= 1024) return 8;
        if (width >= 768) return 6;
        return 4;
    };

    const renderPagination = () => {
        const itemsPerPage = getItemsPerPage();
        const totalPages = Math.ceil(cards.length / itemsPerPage);
    
        // Ensure currentPage stays within valid range
        if (currentPage > totalPages) currentPage = totalPages;
        if (currentPage < 1) currentPage = 1;

        // Show only cards for current page
        cards.forEach((card, index) => {
            const start = (currentPage - 1) * itemsPerPage;
            const end = currentPage * itemsPerPage;
            card.classList.toggle('hidden', index < start || index >= end);
        });
    

        // Update page numbers
        pageNumbers.innerHTML = '';
        for (let i = 1; i <= totalPages; i++) {
            const page = document.createElement('div');
            page.textContent = i;
            page.classList.toggle('active', i === currentPage);
            page.addEventListener('click', () => {
                currentPage = i;
                renderPagination();
            });
            pageNumbers.appendChild(page);
        }

        previousBtn.disabled = currentPage === 1;
        nextBtn.disabled = currentPage === totalPages;
    };

    // Button listeners
    previousBtn.addEventListener('click', () => {
        currentPage--;
        renderPagination();
    });

    nextBtn.addEventListener('click', () => {
        currentPage++;
        renderPagination();
    });

    // Re-render on screen resize
    window.addEventListener('resize', () => {
        currentPage = 1;
        renderPagination();
    });

    renderPagination();
};

// Redirect to menu page
const menuBtn = () => {
    const menuBtn = document.querySelectorAll('.menu-btn');

    menuBtn.forEach(btn => {
        btn.addEventListener('click', () => {
            window.location.href = 'public/pages/our-menu.php';
        });
    })
}


// Call functions
openModal();
backToTop();
menuBtn();
clientFetch();
console.log("Client script loaded successfully.");