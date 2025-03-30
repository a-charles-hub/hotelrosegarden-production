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

const paginationMenu = () => {
    // Variables
    const previousBtn = document.getElementById('previous-btn'); // Previous button
    const nextBtn = document.getElementById('next-btn'); // Next button
    let currentPage = 1; // Default page (use let to allow updating)
    const itemsPerPage = 6; // Items displayed per page
    const cards = document.querySelectorAll('.card-menu'); // Get all card items (menu)
    const pageNumbers = document.getElementById('page-numbers');
    const totalPages = Math.ceil(cards.length / itemsPerPage); // Calculate the total number of pages based on itemsPerPage

    // Function to update pagination
    const updatePagination = () => {
        // Hide all cards
        cards.forEach((card, index) => {
            // Check if card is part of the current page and display it
            card.classList.toggle('hidden', !(index >= (currentPage - 1) * itemsPerPage && index < currentPage * itemsPerPage));
        });

        // Render the page numbers
        pageNumbers.innerHTML = ''; // Clear existing page numbers before adding new ones

        // Loop through all pages and create clickable page numbers
        for (let i = 1; i <= totalPages; i++) {
            let pageNumber = document.createElement('div'); // Correcting the typo here (dive -> div)
            pageNumber.textContent = i; // Set the page number
            pageNumber.classList.toggle('active', i === currentPage); // Add the 'active' class if it's the current page

            // On click, go to that page
            pageNumber.onclick = () => {
                currentPage = i;
                updatePagination(); // Update the pagination to show the new page
            };

            pageNumbers.appendChild(pageNumber); // Add the page number to the container
        }
    };

    // Event listener for the Previous Button
    previousBtn.addEventListener('click', () => {
        if (currentPage > 1) { // Only go to the previous page if we are not on the first page
            currentPage--; // Decrease the current page by 1
            updatePagination(); // Update the pagination display
        }
    });

    // Event listener for the Next Button
    nextBtn.addEventListener('click', () => {
        if (currentPage < totalPages) { // Only go to the next page if we are not on the last page
            currentPage++; // Increase the current page by 1
            updatePagination(); // Update the pagination display
        }
    });

    // Initialize the pagination
    updatePagination();
};

// Call functions
openModal();
paginationMenu();

