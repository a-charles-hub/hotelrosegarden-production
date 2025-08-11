/**
 * amenities.js
 * 
 * Main JavaScript file for the "Amenities" page. It handles button functionalities and UI interactions.
 * 
 */

import { toggleNavbar, menuToggle, menuCategorySelect } from '../modalUtils.js';


const toggleMenu = () => {
    const btn = document.getElementById('dropdown');
    const container = document.querySelector('.navigation-wrap');

    menuToggle(btn, container);
}


// Toggle navbar on scroll
toggleNavbar(); 
// Toggle dropdown
toggleMenu();