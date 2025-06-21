<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Menu</title>
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
                    <div class="nav-wrap">
                        <ul class="nav-links">
                            <li><a href="../../index.php">Overview</a></li>
                            <li><a href="../pages/our-menu.php">Menu</a></li>
                            <li><a href="../pages/accomodation.php">Accomodation</a></li>
                            <li><a href="../pages/amenities.php">Amenities</a></li>
                        </ul>    
                        
                        <!-- Logo -->
                        <div class="logo">
                            <img src="../assets/img/logo.png" alt="Hotel Rose Garden">
                        </div>

                        <ul class="nav-links right">
                            <li><a href=""><i class="fa-solid fa-calendar-days"></i> Book Now</a></li>
                            <li><a href=""><i class="fa-solid fa-right-to-bracket"></i> Sign In</a></li>
                        </ul>
                    </div>
                </nav>

                <div class="header-content">
                    <div class="header-wrap">
                        <h1 class="content-title">Our Menu</h1>
                        <h2 class="subtitle">A Taste of India, for Everyone</h2>

                        <p class="description">Enjoy a rich journey through authentic Indian cuisine, where every dish is thoughtfully prepared with halal-certified ingredients and an emphasis on flavor, tradition, and inclusivity. Whether you're a local seeking comfort food or a traveler discovering new tastes, our menu offers a vibrant variety of vegan-friendly and vegetarian options—each crafted to honor India’s culinary heritage while welcoming every palate and preference.</p>
                    </div>
                </div>
        </header>

        <div class="content-container">
            <div class="navigation">
                <div class="navigation-wrap">
                    <ul class="navigation-links">
                        <li><a href="#all">All</a></li>
                        <li><a href="#breakfast">Breakfast</a></li>
                        <li><a href="#lunch">Lunch</a></li>
                        <li><a href="#dinner">Dinner</a></li>
                        <li><a href="#desserts">Vegetarian</a></li>
                        <li><a href="#specials">Specials</a></li>
                    </ul>
                </div>
            </div>

            <div class="content">
                <div class="menu-container"></div>

                <!-- TEMPLATE CARD (hidden) -->
                <div class="card-menu hide">
                    <div class="card-wrap">
                        <div class="card-img"></div>
                        <div class="card-content">
                            <div class="card-title">
                                <h3 class="menu-title"></h3>
                                <p class="price"></p>
                            </div>
                            <div class="card-category">
                                <h4 class="menu-category"></h4>
                            </div>
                            <div class="card-description">
                                <p class="menu-description"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer-container">
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
        <button id="back-to-top">
            <i class="fa-solid fa-arrow-up fa-2xl"></i>
        </button>
    </div>

    <script type="module" src="../../src/script/client/main.js" defer></script>
    <script src="../../src/script/client/clients.js" defer></script>
</body>
</html>