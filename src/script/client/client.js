/**
 * client.js
 * 
 * Summary:
 * This file handles the main functionality of displaying menu to client menu page.
 * It fetches menu data from the server, processes it, and displays it in a structured format.
 * The menu items are displayed as cards with images, titles, descriptions, prices, and categories.
 * 
 * Functions:
 * - clientFetch(): Fetches data and passes parameters to displayCardsClient().
 * - displayCardsClient(data, cardContainer, menu): Displays the menu items as cards.
 * 
 */

import { backToTop, cardNavigation } from '../modalUtils.js';

// Fetches menu data from server and renders it on the client side
export const clientFetch = async () => {
    try {
        const response = await fetch('../app/includes/menu.inc.php', {
            method: "GET"
        });

        const result = await response.json();

        if (result.success === true) {
            const data = result.data;

            // Get unique categories
            const categories = [...new Set(data.map(item => item.category))].sort();

            // Get the section template and container
            const categoryTemplate = document.getElementById('menu-template');
            const categorySectionsContainer = document.getElementById('category-sections');

            // Loop through each category
            categories.forEach(category => {
                const filteredItems = data.filter(item => item.category === category);
                renderByCategory(category, filteredItems, categoryTemplate, categorySectionsContainer);
            });

        } else {
            document.getElementById('category-sections').innerHTML =
                "Our menu is being prepared. Please check back soon!";
        }

    } catch (error) {
        console.log("Error fetching menu data:", error);
    }
};

const renderByCategory = (categoryName, items, categoryTemplate, categorySectionsContainer) => {
    const sectionClone = categoryTemplate.cloneNode(true);
    sectionClone.classList.remove('hide');
    sectionClone.id = ''; // remove duplicate ID

    // Set the category title
    const title = sectionClone.querySelector('.category.header');
    title.textContent = categoryName;

    // Get the card container & card template inside this category section
    const cardContainer = sectionClone.querySelector('.menu-container');
    const cardTemplate = sectionClone.querySelector('.card-menu');

    // Render each item in this category
    items.forEach(item => {
        const cardClone = cardTemplate.cloneNode(true);
        cardClone.classList.remove('hide');

        const img = document.createElement('img');
        img.src = item.url;
        img.alt = item.title;
        img.loading = 'lazy';
        img.style.margin = '0 5px';

        cardClone.querySelector('.menu-title').textContent = item.title;
        cardClone.querySelector('.menu-description').textContent = item.description;
        cardClone.querySelector('.price').textContent = '₹' + item.price;
        cardClone.querySelector('.card-img').appendChild(img);

        cardContainer.appendChild(cardClone);
    });

    // Append this section to the DOM
    categorySectionsContainer.appendChild(sectionClone);
};


// Call functions
backToTop(); // Implement back-to-top button functionality
cardNavigation(); // Implement card navigation based on category