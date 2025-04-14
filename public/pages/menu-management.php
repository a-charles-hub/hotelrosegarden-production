<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Hotel Rose Garden</title>
    <!-- Local CSS -->
    <link rel="stylesheet" href="../../src/styles/menu-management.css">
    <link rel="stylesheet" href="../../src/styles/modals.css">
    <link rel="stylesheet" href="../../src/styles/dashboard-media-query.css">
    <!-- Favicon -->
    <link rel="icon" href="../assets/img/logo.png">
    <!-- Google Fonts / Montserrat-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Google Fonts / Cizel -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Google Fonts / Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/6c2535758c.js" crossorigin="anonymous"></script>
    <!-- Google Icons CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- JQUERY CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
</head>
<body>
    <div class="container">
        <!-- Sidebar starts -->
        <div class="sidebar">
            <!-- Logo -->
            <div class="logo">
                <img src="../../public/assets/img/logo.png" alt="Hotel Rose Garden Logo">
                
                <div class="nav-brand">
                    <h3>Hotel Rose Garden</h3>
                </div>
            </div>
            <!-- Logo ends -->

            <!-- Navlinks starts -->
            <div class="nav-links">
                <ul>
                    <li id="dashboard">
                        <a href="dashboard.php"><i class="material-icons">dashboard</i>Dashboard</a>
                    </li>
                    <li id="manage-reservations">
                        <a href="#"><i class="material-icons">event_seat</i>Manage Reservations</a>
                    </li>
                    <li id="menu-management">
                        <a href="#"><i class="material-icons">lunch_dining</i>Menu Management</a>
                    </li>
                    <li id="manage-orders">
                        <a href="#"><i class="material-icons">restaurant</i>Manage Orders</a>
                    </li>
                    <li id="event-bookings">
                        <a href="#"><i class="material-icons">menu_book</i>Events & Bookings</a>
                    </li>
                    <li id="settings">
                        <a href="#"><i class="material-icons">settings</i>Settings</a>
                    </li>
                </ul>
    
                <ul>
                    <li class="logout" id="logout">
                        <a href="#"><i class="material-icons">logout</i>Logout</a>
                    </li>
                </ul>
            </div>
            <!-- Navlinks ends -->
        </div>
        <!-- Sidebar ends -->

        <!-- Flex container starts -->
        <div class="flex-container">
            <div class="top-nav">
                <div class="search">
                    <input type="search" placeholder="Search">
                    <i class="material-icons">search</i>
                </div>
    
                <div class="header-actions">
                    <div class="toggle-theme">
                        <i class="icons fa-solid fa-toggle-on"></i>
                    </div>

                    <div class="notification-bell">
                        <i class="icons fa-solid fa-bell"></i>
                    </div>

                    <div class="profile">
                        <img src="https://i.pinimg.com/736x/60/c6/e2/60c6e2db768bf66c947fa22cd50dbcec.jpg" alt="Profile picture">
                    </div>
                </div>
            </div>
                <!-- Top navbar ends -->
            <section class="menu-management">
                <div class="main-content">
                    <div class="main-heading">
                        <h3>Manage Menu</h3>
                    </div>
                
                    <!-- Content -->
                    <div class="content">
                        <!-- Dish category starts -->
                        <div class="dish-category">
                            <div class="sub-heading">
                                <h3>Dish Category</h3>
                            </div>

                            <ul id="category-list">
                                <li data-category="All">All Dishes<span class="all-dish dish-count"></span></li>
                                <li data-category="Breakfast">Breakfast<span class="dish-count breakfast"></span></li>
                                <li data-category="Beef Dishes">Beef Dishes<span class="dish-count beef"></span></li>
                                <li data-category="Chicken Dishes">Chicken Dishes<span class="dish-count chicken"></span></li>
                                <li data-category="Desserts">Desserts<span class="dish-count desserts"></span></li>
                                <li data-category="Drinks">Drinks<span class="dish-count drinks"></span></li>
                                <li data-category="Lunch">Lunch<span class="dish-count lunch"></span></li>
                                <li data-category="Platters">Platters<span class="dish-count platters"></span></li>
                                <li data-category="Vegetarian">Vegetarian<span class="dish-count vegetarian"></span></li>
                                <li data-category="Side Dishes">Side Dishes<span class="dish-count sides"></span></li>
                            </ul>

                            <div class="btn new-category"><i class="material-icons">add</i>New Category</div>
                        </div>
                        <!-- Dish category ends -->

                        <div class="manage-menu">
                            <!-- Menu top nav starts -->
                            <div class="top-menu-nav">
                                <div class="menu-nav">
                                    <div class="flex-wrap">
                                        <div class="sub-heading">
                                            <h3>Manage Menu</h3>
                                        </div>
                    
                                        <div class="menu-search">
                                            <input type="search" placeholder="Search">
                                            <i class="material-icons">search</i>
                                        </div>
                                    </div>
                
                                    <button class="add-menu-btn" id="btn-add-menu">
                                        <i class="material-icons">add</i>New Menu 
                                    </button>
                                </div>
                            </div>

                            <div id="menu-container"></div>

                            <!--- Menu list starts -->
                            <div class="menu" style="display:none;" data-menu-id="" id="menu-template">
                                <div class="cards">
                                    <div class="card">
                                        <div class="open-modal card-menu-btn">
                                            <i class="material-icons">more_horiz</i>
                                        </div>

                                        <div class="card-image">
                                            <!-- Image goes here -->
                                        </div>

                                        <div class="text-wrap">
                                            <h4 class="menu-title title"></h4>
                                            <p class="price"></p>
                                        </div>

                                        <div class="category">
                                            <div class="card card-category">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content ends -->
                </div>
            </div>
        </div>
        <!-- Flex container ends -->
        
        <!-- Modals -->
        <!-- Modal - Menu confirmation -->
        <div class="modal hidden" id="modal-confirmation">
            <div class="modal-content menu-confirmation" id="menu-confirmation">
                <div class="food-icon">
                    <img src="../assets/img/icons/menu-confimation-icon.webp" alt="confimation-menu-icon">
                </div>

                <div class="confirmation-text">
                    <h3>Menu Added!</h3>
                    <p id="menu-added"></p>
                </div>

                <div class="confirmation-button">
                    <button class="close-modal confirmation" id="confirmMenu">Confirm</button>
                </div>
            </div>
        </div>

        <!-- Modal - Add menu  starts -->
        <div class="modal hidden" id="modal-add-menu">
            <div class="modal-content add-menu" id="add-menu-modal" >
                <div class="modal-nav-top">
                    <div class="modal-heading">
                        <h3>Upload Menu</h3>
                    </div>

                    <div class="close-modal close" id="confirm-menu">
                        <i class="material-icons">close</i>
                    </div>
                </div>

                <div class="form">
                    <form method="post" enctype="multipart/form-data" id="uploadForm" autocomplete="off">
                        <div class="upload upload-box" id="upload-box">
                            <div class="flex-wrap" id="uploads">
                                <i class="upload upload-icon fa-solid fa-cloud-arrow-up fa-2xl"></i>
                                <div class="upload-form">
                                    
                                        <div class="form-group">
                                            <input type="file" name="file" class="file-input" id="file-input">
                                        </div>
                                    
                                </div>
                                
                                <div class="sub-heading">
                                    <p class="upload">Click here to select an image to upload.</p>
                                    <span class="error" id="file-error"></span>
                                </div>
                            </div>

                            <div id="image-preview" class="image-preview">
                                <img src="" alt="">
                            </div>
                        </div>
                                
                        <div class="post-details">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" placeholder="Chicken Biryani" name="title" id="title" autocomplete="off">
                                <span class="error" id="title-error"></span>
                            </div>
                                
                            <div class="form-group">
                                <label for="title">Category</label>
                                
                                <select name="category" id="category">
                                    <option value="">Select a category</option>
                                    <option value="breakfast">Breakfast</option>
                                    <option value="beef dishes">Beef Dishes</option>
                                    <option value="chicken dishes">Chicken Dishes</option>
                                    <option value="desserts">Desserts</option>
                                    <option value="drinks">Drinks</option>
                                    <option value="lunch">Lunch</option>
                                    <option value="platters">Platters</option>
                                    <option value="vegetarian">Vegetarian</option>
                                    <option value="side dishes">Side Dishes</option>
                                </select>
                                <span class="error" id="category-error"></span>
                            </div>
                                
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" placeholder="Fragrant basmati rice cooked with tender chicken, infused with a blend of aromatic spices, and layered to perfection. A traditional, savory delight with every bite!" name="description" id="description" autocomplete="off"></textarea>
                                <span class="error" id="description-error"></span>
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" step="0.01" min="0" placeholder="$19.99" name="price" id="price" autocomplete="off">
                                <span class="error" id="price-error"></span>
                            </div>

                            <div class="modal-button">
                                <button type="submit" class="submit-btn" id="submit-btn"><i class="fa-solid fa-paper-plane"></i>Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal = Edit menu starts -->
        <div class="modal hidden" id="modal-edit-menu">
            <div class="modal-content edit-menu">
                <ul>
                    <li class="edit active" id="edit-menu">Edit Menu</li>
                    <li class="delete" id="delete-menu">Delete</li>
                    <li class="close-modal">Cancel</li>
                </ul>
            </div>
        </div>

        <!-- Modal - Delete menu ends -->
        <div class="modal hidden" id="modal-delete-menu">
            <div class="modal-content delete-menu">
                <div class="delete-icon">
                    <i class="fa-solid fa-trash fa-2xl" style="color: #5b5d62;"></i>
                </div>

                <div class="heading">
                    <h3>Are you sure you want to delete this menu?</h3>
                </div>

                <div class="confirmation">
                    <button class="close-modal cancel" id="cancel">No, Cancel</button>
                    <button class="confirm" id="confirm-btn">Yes, I'm sure</button>
                </div>
            </div>
        </div>

        <!-- Modal - Menu deleted confirmation -->
        <div class="modal hidden" id="modal-delete-success">
            <div class="modal-content menu-confirmation" id="delete-confirmation">
                <div class="food-icon">
                    <img src="../assets/img/icons/menu-confimation-icon.webp" alt="confimation-menu-icon">
                </div>

                <div class="confirmation-text">
                    <h3>Menu removed!</h3>
                    <p id="menu-deleted"></p>
                </div>

                <div class="confirmation-button">
                    <button class="close-modal confirmation" id="confirmDelete">Confirm</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Local JS -->
    <script type="module"  src="../../src/script/dashboard.js" defer></script>
</body>
</html>