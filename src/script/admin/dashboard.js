import { reloadCache, fileInput, modalMenuConfirmation } from "../modalUtils.js";
import { fetchMenu } from "./menu.js";  
import { modalAddMenu, closeModals } from "./menu-management.js";  
import { search } from "./search.js";

const previewImage = () => {
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
    const submitBtn = document.getElementById('submit-btn');
    const menuPrice = document.getElementById('price');

    menuForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        // Disable the submit button initially to prevent double submissions
        submitBtn.disabled = true;

        if(!formValidation()){
            submitBtn.disabled = false; // Re-enable submit button if validation fails
            return;
        }

        // Create a FormData object
        const formData = new FormData();
        
        // Append form data to the FormData object
        formData.append('file', fileInput.files[0]);  // Append the file
        formData.append('title', menuTitle.value);
        formData.append('category', menuCategory.value);
        formData.append('description', menuDescription.value);
        formData.append('price', menuPrice.value)

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
                const confirm = document.getElementById('confirmMenu');

                // Close modal
                modal.classList.remove('show');

                // Display success message
                menuConfirmation();
                menu.textContent = menuTitle.value + ' added to menu.';
                confirm.addEventListener('click', () => {
                    location.reload();

                    // Refresh cache
                    const modal = document.getElementById('modal-add-menu');
                    const modalBox = document.getElementById('add-menu-modal');
                    reloadCache(modal, modalBox);

                    // Reset form
                    menuForm.reset();
                    fileInput.value = '';       // Explicitly clear file input
                    imagePreview.innerHTML = ''; // Clear image preview (if exists)
                    uploads.style.display="flex";
                    imagePreview.style.display="none";
                    uploadBox.style.border="1px dotted rgb(0, 0, 0, 0.5)";
                });
            } else {
                console.log(result.error);
            }
        } catch (error) {
            console.error("Upload failed: ", error);
        }
    });
    
};

// Form validation 
const formValidation = () => {
    // Variables
    const fileInput = document.getElementById('file-input');
    const form = document.getElementById('uploadForm');
    const menuCategory = document.getElementById('category');
    const menuDescription = document.getElementById('description');
    const uploadBox = document.getElementById('upload-box');
    const fileError = document.getElementById('file-error');
    const categoryError = document.getElementById('category-error');
    const descriptionError = document.getElementById('description-error');
    const titleError = document.getElementById('title-error');
    const menuTitle = document.getElementById('title');

    const price = document.getElementById('price');
    const priceError = document.getElementById('price-error');

    // Array for each input fields
    const inputs = [
        { element: fileInput, errorElement: fileError, message: 'Please select an image.', uploadBox: uploadBox},
        { element: menuTitle, errorElement: titleError, message: 'Please enter menu title.' },
        { element: menuCategory, errorElement: categoryError, message: 'Please select a category.' },
        { element: menuDescription, errorElement: descriptionError, message: 'Please enter menu description.' },
        { element: price, errorElement: priceError, message: 'Please enter menu price.' }
    ];

    let isValid = true; // Assume the form is valid initially

    // Loop through each input and validat
    inputs.forEach(input => {
        if(!inputValidation(input.element, input.errorElement, input.message)) {
            isValid = false; // If any input is invalid, set isValid to false

            if(input.uploadBox) {
                input.uploadBox.classList.add('error-input');
            }
        } 
        else {
            if(input.uploadBox) {
                input.uploadBox.classList.remove('error-input');
            }
        }
    });

    console.log("Validation result:", isValid);
    return isValid;
}

export const inputValidation = (element, errorElement, message) => {
    const validate = () => {
        // Variables to handle either file or text
        const isFile = element.type === "file";
        const isEmpty = isFile ? element.files.length === 0 : element.value.trim() === "";

        if (isEmpty) {
            errorElement.textContent = message;
            errorElement.classList.add('error');
            element.classList.add('error-input');
            element.classList.remove('valid-input');
            return false;
        } else {
            errorElement.textContent = "";
            errorElement.classList.remove('error');
            element.classList.remove('error-input');
            element.classList.add('valid-input');
            return true;
        }
    }

    // Run validation immediately
    if(!element.dataset.listenerAttached) {
        element.addEventListener('input', validate);
        element.dataset.listenerAttached = "true";
    }

    return validate();
}

const selectFile = () => {
    const uploads = document.getElementById('upload-box');
    const inputField = document.getElementById('file-input');

    fileInput(uploads, inputField);
}

const menuConfirmation = () => {
    const modal = document.getElementById('modal-confirmation');

    modalMenuConfirmation(modal);
}

// Call functions
selectFile();
modalAddMenu(); 
closeModals();
previewImage();
addNewMenu();