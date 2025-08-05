import { clientFetch } from '../client/client.js';
import { observer, redirectTo, cardNavigation } from '../modalUtils.js';


const animateElements = () => {
    const dataBoxes = document.querySelectorAll('.animate');
    dataBoxes.forEach(el => observer.observe(el));
}

const redirectToOtherPage = () => {
    redirectTo(document.querySelector('.explore-accomodations'), 'public/pages/accomodations.php');
    redirectTo(document.querySelector('.explore-amenities'), 'public/pages/amenities.php');
}



// Call functions
clientFetch(); // Fetch menu data and display cards
animateElements(); // Animate elements on scroll
redirectToOtherPage(); // Redirect to other page on click
cardNavigation(); // Implement card navigation based on category