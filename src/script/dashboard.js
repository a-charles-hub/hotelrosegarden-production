import { openModal, close } from "./modalUtils.js";
import { fetchMenu } from "./menu.js";  

// Modal - Add Menu
const modalAddMenu = () => {
    const btn = document.getElementById('btn-add-menu');
    const modal = document.getElementById('modal-add-menu');

    // Open modal
    openModal(modal, btn);
}

// Modal - Edit Menu
const modalEditMenu = () => {
    const editBtn = document.querySelectorAll('.open-modal');
    const modal = document.getElementById('modal-edit-menu');

    // Open modal
    openModal(modal, editBtn);
}

// Modal - Delete menu
const modalDeleteMenu = () => {
    const deleteBtn = document.getElementById('delete-menu');
    const modal = document.getElementById('modal-delete-menu');

    // Open modal
    openModal(modal, deleteBtn);
}

// Close Modals
const closeModals = () => {
    const closeBtn = document.querySelectorAll('.close-modal');
    const modalContent = document.querySelectorAll('.modal-content');
    const modal = document.querySelectorAll('.modal');

    // Close modals
    close(modal, modalContent, closeBtn);
    
}

// Choosing file input
const fileInput = () => {
    const uploads = document.getElementById('upload-box');
    const inputField = document.getElementById('file-input');
    
    uploads.addEventListener('click', () => {
        inputField.click();
    });
}

// Modal - Menu confirmation
const modalMenuConfirmation = () => {
    const modal = document.getElementById('modal-confirmation');

    modal.classList.add('show')
}

const dragDrop = () => {
    const fileInput = document.getElementById('file-input');
    const imagePreview = document.getElementById('image-preview');  // Corrected target to #image-preview
    
    // Event listener to display the image when selected
    fileInput.addEventListener('change', function(event) {
        const file = event.target.files[0];  // Get the selected file
        
        // Check if a file is selected
        if (file) {

            const uploads = document.getElementById('uploads');
            const uploadBox = document.getElementById('upload-box');

            uploads.style.display="none";
            const reader = new FileReader();
    
            // When the file is loaded, display the image
            reader.onload = function(e) {
                // Get the preview image element
                const img = document.createElement('img');
                img.src = e.target.result;
                img.alt = "Selected Image";
                
                // Clear previous previews (if any)
                imagePreview.innerHTML = ''; // Clear any previous content
                imagePreview.appendChild(img);  // Add the image to the preview area
                imagePreview.style.display="block";
                uploadBox.style.border="none";
            };
    
            reader.readAsDataURL(file);  // Read the file as a data URL (base64)
        }
    });
};

// Adding new menu using fetch() API
const addNewMenu = () => {
    // Variables
    const menuForm = document.getElementById('uploadForm');
    const fileInput = document.getElementById('file-input');
    const menuTitle = document.getElementById('title');
    const menuCategory = document.getElementById('category');
    const menuDescription = document.getElementById('description');

    menuForm.addEventListener('submit', async (e) => {
        e.preventDefault();  // Prevent the form from submitting the default way

        // Create a FormData object
        const formData = new FormData();
        
        // Append form data to the FormData object
        formData.append('file', fileInput.files[0]);  // Append the file
        formData.append('title', menuTitle.value);
        formData.append('category', menuCategory.value);
        formData.append('description', menuDescription.value);

        try {
            // Send the FormData via fetch()
            const response = await fetch('../../public/app/includes/upload.inc.php', {
                method: 'POST',
                body: formData,
            });

            // Parse the response as JSON
            const result = await response.json();

            if (result.success === true) {
                console.log("Upload successful: ", result);

                // Variables
                const modal = document.getElementById('modal-add-menu');
                const menu = document.getElementById('menu-added');
                const imagePreview = document.getElementById('image-preview');
                const uploads = document.getElementById('uploads');
                const uploadBox = document.getElementById('upload-box');
    
                // Close modal
                modal.classList.remove('show');

                // Display success message
                modalMenuConfirmation();
                menu.textContent = menuTitle.value + " added to menu.";

                // Reset form
                menuForm.reset();
                fileInput.value = '';       // Explicitly clear file input
                imagePreview.innerHTML = ''; // Clear image preview (if exists)
                uploads.style.display="flex";
                imagePreview.style.display="none";
                uploadBox.style.border="1px dotted rgb(0, 0, 0, 0.5)";

                // Fetch and update data 
                fetchMenu();

            } else {
                console.log(result.error);
            }
        } catch (error) {
            console.error("Upload failed: ", error);
        }
    });
};

// Call functions
fileInput();
addNewMenu();
modalAddMenu();
modalEditMenu();
modalDeleteMenu();
closeModals();
dragDrop();
