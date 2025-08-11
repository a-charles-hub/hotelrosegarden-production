<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Menu | Hotel Rose Garden</title>
    <!-- Local CSS -->
    <link rel="stylesheet" href="../../src/styles/client/main.css">
    <link rel="stylesheet" href="../../src/styles/client/main-media-query.css">
    <link rel="stylesheet" href="../../src//styles/client/our-menu.css">
    <link rel="stylesheet" href="../../src/styles/client/layout.css">
    <link rel="stylesheet" href="../../src/styles/client/our-menu-media-query.css">
    <!-- Favicon -->
    <link rel="icon" href="../assets/img/logo.png">
    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <!-- Google Fonts / Montserrat-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Google Fonts / Cizel -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/6c2535758c.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <header class="header-container">
            <div class="background-container">
                <img src="https://images.unsplash.com/photo-1613292443284-8d10ef9383fe?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            </div>

            <div class="header">
                <nav class="nav">
                    <!-- Logo -->
                    <div class="mobile-logo">
                        <img src="../../public/assets/img/logo.png" alt="Hotel Rose Garden">
                    </div>

                    <!-- Hamburger Menu -->
                    <div class="hamburger-menu" id="hamburger-menu" aria-label="Toggle navigation">    
                        <i class="fa-solid fa-bars"></i>
                    </div>

                    <div class="nav-wrap">
                        <!-- Navigation Links -->
                        <ul class="nav-links left">
                            <li><a href="../../index.php">Overview</a></li>
                            <li><a href="../../public/pages/our-menu.php">Menu</a></li>
                            <li><a href="">Accomodation</a></li>
                            <li><a href="../../public/pages/amenities.php">Amenities</a></li>
                        </ul>    
                        
                        <!-- Logo -->
                        <div class="logo">
                            <img src="../../public/assets/img/logo.png" alt="Hotel Rose Garden">
                        </div>

                        <ul class="nav-links right">
                            <li><a href=""><i class="fa-solid fa-calendar-days"></i> Book Now</a></li>
                            <li><a href=""><i class="fa-solid fa-right-to-bracket"></i> Sign In</a></li>
                        </ul>


                        <div class="socials">
                            <span>
                                <img src="../../public/assets/img/icons/facebook.svg" alt="facebook">
                            </span>
                            <span>
                                <img src="../../public/assets/img/icons/instagram.svg" alt="instagram">
                            </span>
                            <span>
                                <img src="../../public/assets/img/icons/whatsapp.svg" alt="whatsapp">
                            </span>
                            <span>
                                <img src="../../public/assets/img/icons/twitter.svg" alt="twitter">
                            </span>
                        </div>

                        <!-- Close Menu -->
                        <div class="close-menu" id="close-menu" aria-label="Close navigation">    
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                    </div>
                </nav>

                <div class="header-content">
                    <div class="header-wrap">
                        <h1 class="content-title">Our Menu</h1>
                        <h2 class="subtitle">A Taste of India, for Everyone</h2>

                        <p class="description">Enjoy authentic Indian cuisine made with halal-certified ingredients. Our menu celebrates tradition and flavor, offering a vibrant selection of vegan and vegetarian dishes that welcome every palate and honor India’s rich culinary heritage.</p>
                    </div>
                </div>
        </header>

        <div class="content-container">
            <div class="navigation">
                <div class="navigation-wrap">
                    <div class="menu-links">
                        <ul class="navigation-links">
                            <li data-category="Beef Dishes">Beef Dishes</li>
                            <li data-category="Breakfast">Breakfast</li>
                            <li data-category="Chicken Dishes">Chicken Dishes</li>
                            <li data-category="Lunch">Lunch</li>
                            <li data-category="Desserts">Platters</li>
                            <li data-category="Drinks">Drinks</li>
                            <li data-category="Desserts">Desserts</li>
                            <li data-category="Dinner">Dinner</li>
                            <li data-category="Specials">Side Dishes</li>
                            <li data-category="Vegetarian">Vegetarian</li>
                        </ul>
                    </div>

                    <div class="menu-burger-wrap">
                        <div class="menu-burger-description">
                            <span>Categories</span>
                        </div>

                        <div class="menu-burger" id="menu-burger" aria-label="Toggle menu">
                            <i class="fa-solid fa-bars"></i>
                        </div>
                    </div>
                </div>


            </div>

            <!-- TEMPLATE FOR CATEGORY SECTION -->
            <div class="menu card-category content hide" id="menu-template">
                <div class="menu-category-section">
                    <div class="category-title">
                        <h2 class="category header"></h2>
                    </div>

                    <div class="menu-container"></div>

                    <!-- TEMPLATE CARD (hidden) -->
                    <div class="card-menu hide">
                        <div class="menu card-wrap">
                            <div class="menu-img card-img"></div>

                            <div class="menu card-content">
                                <div class="card-title">
                                    <h3 class="menu-title"></h3>
                                </div>
                                <div class="card-description">
                                    <p class="menu-description"></p>
                                </div>
                                <div class="card-price">
                                    <p class="price"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Where new category sections will be inserted -->
            <div class="category-sections animate" id="category-sections"></div>
        </div>

        <footer class="footer-container animate">
            <div class="footer-wrap">
                <div class="wrap">
                    <div class="footer-info">
                        <div class="logo">
                            <img src="../assets/img/logo.png" alt="logo">
                        </div>

                        <div class="footer-hotel-info">
                            <div class="footer-heading">Hotel Rose Garden</div>
                            <span class="sub-heading address">
                                <i class="fa-solid fa-location-dot"></i>Ankleshwar, Nana Borsara
                                Gujarat 394115, India
                            </span>
                            <span class="sub-heading email">
                                <i class="fa-solid fa-envelope"></i>contact@hotelrosegarden.in
                            </span>
                            <span class="sub-heading phone-number">
                                <i class="fa-solid fa-phone"></i>+91 98765 43210
                            </span>
                        </div>
                    </div>

                    <div class="links footer-links">
                        <div class="footer-heading">Stay With Us</div>
                        <ul>
                            <li><a href="#">Dining</a></li>
                            <li><a href="#">Weddings</a></li>
                            <li><a href="#">Meetings & Events</a></li>
                            <li><a href="#">Rooms & Suites</a></li>
                            <li><a href="#">Amenities</a></li>
                        </ul>
                    </div>

                    <div class="links help-center">
                        <div class="footer-heading">Experience More</div>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Franchise Inquiry</a></li>
                        </ul>
                    </div>

                    <div class="socials">
                        <div class="footer-heading">Follow Us</div>

                        <span>
                            <img src="../assets/img/icons/facebook.svg" alt="facebook">
                        </span>
                        <span>
                            <img src="../assets/img/icons/instagram.svg" alt="instagram">
                        </span>
                        <span>
                            <img src="../assets/img/icons/whatsapp.svg" alt="whatsapp">
                        </span>
                        <span>
                            <img src="../assets/img/icons/twitter.svg" alt="twitter">
                        </span>
                    </div>
                </div>
            </div>

            <div class="footer-end">
                <div class="copyright">
                    <span>
                        © 2025 Hotel Rose Garden. All Rights Reserved.
                    </span>
                </div>

                <div class="developer">
                    <span>
                        Powered by <span class="blue"><a href="#">Web Innovate</a></span>
                    </span>
                </div>
            </div>
        </footer>

    </div>

    <!-- Modal -->
    <div class="modal">
        <button class="btn-top" id="back-to-top" aria-label="Back to top">
            <i class="fa-solid fa-arrow-up fa-2xl"></i>
        </button>
    </div>

    <!-- Local JS -->
    <script type="module" src="../../src/script/client/main.js" defer></script>
    <script src="../../src/script/client/clients.js" defer></script>
    <script type="module" src="../../src/script/client/our-menu.js" defer></script>
</body>
</html>