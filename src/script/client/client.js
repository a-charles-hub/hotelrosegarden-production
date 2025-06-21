export const clientFetch = async () => {
    try {
        // Variables
        const cardContainer = document.querySelector('.menu-container');
        const menu = document.querySelector('.card-menu');

        const response = await fetch('../app/includes/menu.inc.php', {
            method: "GET"
        });

        // Parse the response as JSON
        const result = await response.json();

        if(result.success === true) {
            result.data.forEach(menuItem => {
                //console.log(menuItem.description);

                displayCardsClient(menuItem, cardContainer, menu);
            });
        }
        else {
            cardContainer.innerHTML = "Our menu is being prepared. Please check back soon!";
        }

    } catch (error) {
        console.log("Error checking or fetching menu data:", error);
    }
}

const displayCardsClient = (data, cardContainer, menu) => {

    // Clone hidden templates
    const menuClone = menu.cloneNode(true);
    menuClone.classList.remove('hide');
    menuClone.classList.add('show');
    
    // Find elements inside the clone
    const img = document.createElement('img');
    const cardImage = menuClone.querySelector('.card-img');
    const menuTitle = menuClone.querySelector('.menu-title');
    const description = menuClone.querySelector('.menu-description');
    const price = menuClone.querySelector('.price');
    const category = menuClone.querySelector('.menu-category');

    // Fill contents
    img.src = data.url;
    img.alt = data.title;
    img.style.margin="0 5px";
    img.setAttribute('loading', 'lazy');

    menuTitle.textContent = data.title;
    description.textContent = data.description;
    price.textContent = '₹' + data.price;
    category.textContent = data.category;

    // Clear and add image
    cardImage.innerHTML = '';
    cardImage.appendChild(img); 
    // Append the card
    cardContainer.appendChild(menuClone);
}

