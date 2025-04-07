export const fetchMenu = async () => {
    // Variables
    const cardImage = document.querySelector('.card-image');
    const menuTitle = document.querySelector('.menu-title');
    const category = document.querySelector('.category');
    const menuContainer = document.querySelector('.cards');
    
    try {
        const response = await fetch('../../public/app/includes/menu.inc.php', {
            method: 'GET'
        });

        // Parse the response as JSON
        const result = await response.json();

        if(result.success === true) {
            menuContainer.innerHTML='';

            result.data.forEach(menuItem => {
                console.log(menuItem);
            });
        }

    } catch (error) {
        console.log("Unable to retrieve data: ", error);
    }

}

fetchMenu();