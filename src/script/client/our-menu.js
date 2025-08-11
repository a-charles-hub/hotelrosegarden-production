/**
 * our-menu.js
 * 
 * Main JavaScript file for the "Our Menu" page. It handles button functionalities and UI interactions.
 * 
 */

import { toggleNavbar, menuToggle, menuCategorySelect } from '../modalUtils.js';


const toggleMenu = () => {
    const btn = document.querySelector('.menu-burger-wrap');
    const container = document.querySelector('.menu-links');

    menuToggle(btn, container);
}




// Toggle navbar on scroll
toggleNavbar();
// Toggle menu for mobile view
toggleMenu();
// Handle menu category selection
menuCategorySelect(); 