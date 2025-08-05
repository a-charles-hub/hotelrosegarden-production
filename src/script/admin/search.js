/**
 * search.js
 * 
 * Summary:
 * This file handles the search functionality for a menu-management.
 * It listens for input changes in a search field, debounces the input to avoid excessive requests,
 * 
 * Functions:
 * - search(): Handles search menu.
 * 
 */


import { displayCards, fetchMenu } from "./menu.js";

export const search = (searchInput, cachedData) => {
    let debounceTimeout;

    searchInput.addEventListener('input', () => {
        const searchVal = searchInput.value.trim();

        // Clear timeout before starting a new one
        clearTimeout(debounceTimeout);

        debounceTimeout = setTimeout(async () => {
            console.log(searchVal);

            if(searchVal !== '') {
                // Variables
                const menuContainer = document.getElementById('menu-container');
                const menu = document.getElementById('menu-template');

                // Clear previous data
                menuContainer.innerHTML = '';

                const filteredData = cachedData.data.filter(item => 
                    item.title.toLowerCase().includes(searchVal.toLowerCase())
                );

                if(filteredData.length > 0) {
                    filteredData.forEach(result => {
                        const currentMenuId = result.menu_id;
                        displayCards(result, currentMenuId, menuContainer, menu);
                    });
                }
                else {
                    menuContainer.innerHTML = "No results found.";
                }
            }
            else {
                fetchMenu();
            }
        }, 300);
    });
}
