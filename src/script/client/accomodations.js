/**
 * accomodations.js
 * 
 * Main JavaScript file for the "Accomodations" page. It handles button functionalities and UI interactions.
 * 
 */

import { toggleNavbar, menuToggle, menuCategorySelect } from '../modalUtils.js';


// Flatpickr
flatpickr("#dateRange", {
    mode: "range",
    minDate: "today",
    dateFormat: "M d, Y",
});

toggleNavbar();