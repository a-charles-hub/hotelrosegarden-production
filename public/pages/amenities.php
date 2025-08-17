<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amenities | Hotel Rose Garden</title>
    <!-- Local CSS -->
    <link rel="stylesheet" href="../../src/styles/client/main.css">
    <link rel="stylesheet" href="../../src/styles/client/layout.css">
    <link rel="stylesheet" href="../../src/styles/client/amenities.css">
    <link rel="stylesheet" href="../../src/styles/client/main-media-query.css">
    <link rel="stylesheet" href="../../src/styles/client/amenities-media-query.css">
    <link rel="stylesheet" href="../../src/styles/client/layout-media-query.css">
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
                <img src="https://images.unsplash.com/photo-1598605272254-16f0c0ecdfa5?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
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
                            <li><a href="../../public/pages/accomodations.php">Accomodations</a></li>
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
                        <h1 class="content-title">Amenities</h1>
                        <h2 class="subtitle">Everything You Need, All in One Place</h2>

                        <p class="description">Enjoy a wide range of curated amenities designed for comfort, leisure, and convenience. From spacious rooms and scenic venues to playgrounds, a cricket field, indoor and outdoor dining, and a serene prayer hall — every visit feels complete.</p>
                    </div>
                </div>
        </header>

        <div class="content-container">
            <div class="navigation animate">
                <div class="navigation-wrap">
                    <ul class="navigation-links">
                        <li data-category="All">All</a></li>
                        <li data-category="Recreation">Recreation</a></li>
                        <li data-category="Dining">Dining</a></li>
                        <li data-category="Spiritual">Spiritual</a></li>
                        <li data-category="Events">Events</a></li>
                    </ul>
                </div>

                <div class="menu-burger-wrap" id="dropdown">
                    <div class="menu-burger-description">
                        <span>Categories</span>
                    </div>

                    <div class="dropdown" aria-label="Toggle menu">
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>
            </div>

            <div class="content content-amenities">
                <div class="card animate" data-category="Recreation">
                    <div class="card-wrap">
                        <div class="card-img amenity-img">
                            <img src="https://images.unsplash.com/photo-1567943346767-72780dd14cd5?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                        </div>

                        <div class="card-content">
                            <div class="card-title">
                                <h3>THE CRICKET GROUNDS</h3>
                            </div>

                            <div class="card-category">
                                <h4>Recreation</h4>
                            </div>

                            <div class="card-description">
                                <p>
                                    Enjoy a game or practice your swing on our well-maintained cricket field, perfect for friendly matches and outdoor fun. Surrounded by natural greenery, it’s an ideal spot for both casual play and organized events.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card animate" data-category="Recreation">
                    <div class="card-wrap">
                        <div class="card-img amenity-img">
                            <img src="https://images.unsplash.com/photo-1575783970733-1aaedde1db74?q=80&w=2076&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                        </div>

                        <div class="card-content">
                            <div class="card-title">
                                <h3>PLAY & EXPLORE</h3>
                            </div>

                            <div class="card-category">
                                <h4>Recreation</h4>
                            </div>

                            <div class="card-description">
                                <p>
                                    A fun-filled spot for children to laugh, run, and climb! With plenty of space and safe play structures, the playground is a hit with families.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card animate" data-category="Dining">
                    <div class="card-wrap">
                        <div class="card-img amenity-img">
                            <img src="https://images.unsplash.com/photo-1494346480775-936a9f0d0877?q=80&w=2016&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                        </div>

                        <div class="card-content">
                            <div class="card-title">
                                <h3>INDOOR DINING</h3>
                            </div>

                            <div class="card-category">
                                <h4>DINING</h4>
                            </div>

                            <div class="card-description">
                                <p>
                                    Enjoy a comfortable and inviting dining experience indoors, perfect for all seasons. Our indoor space blends ambiance with delicious cuisine, offering the ideal setting for meals with family and friends. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card animate" data-category="Dining">
                    <div class="card-wrap">
                        <div class="card-img amenity-img">
                            <img src="https://images.unsplash.com/photo-1585894711506-e492159d7fbc?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                        </div>

                        <div class="card-content">
                            <div class="card-title">
                                <h3>OUTDOOR DINING</h3>
                            </div>

                            <div class="card-category">
                                <h4>DINING</h4>
                            </div>

                            <div class="card-description">
                                <p>
                                    Savor your meals in the fresh air with our serene outdoor dining spaces. Surrounded by natural beauty, it's the perfect spot for relaxed gatherings, celebrations, or quiet evenings under the sky.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card animate" data-category="Spiritual">
                    <div class="card-wrap">
                        <div class="card-img amenity-img">
                            <img src="https://plus.unsplash.com/premium_photo-1678916185608-5b3fe97e97fc?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                        </div>

                        <div class="card-content">
                            <div class="card-title">
                                <h3>THE PRAYER HALL</h3>
                            </div>

                            <div class="card-category">
                                <h4>SPIRITUAL</h4>
                            </div>

                            <div class="card-description">
                                <p>
                                    Our serene prayer hall offers a quiet and welcoming space for reflection, meditation, and spiritual connection. Open to all, it’s designed to provide comfort and peace.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card animate" data-category="Events">
                    <div class="card-wrap">
                        <div class="card-img amenity-img">
                            <img src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?q=80&w=2098&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                        </div>

                        <div class="card-content">
                            <div class="card-title">
                                <h3>THE GRAND VENUE</h3>
                            </div>

                            <div class="card-category">
                                <h4>EVENTS</h4>
                            </div>

                            <div class="card-description">
                                <p>
                                    Our venue is a flexible space perfect for hosting a wide range of events — from corporate meetings and conferences to weddings and celebrations.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                <!-- Prefooter -->
         <div class="prefooter animate">
            <div class="prefooter-image">
                <img src="https://images.unsplash.com/photo-1535827841776-24afc1e255ac?q=80&w=735&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" loading="lazy">
            </div>

            <div class="prefooter-details">
                <div class="prefooter-heading">
                    <h2>Enjoy Your Stay At Hotel Rose Garden</h2>
                </div>

                <div class="prefooter-location">
                    <span>Ankleshwar,Nana Borsara, Gujarat 394115, India</span>
                </div>

                <div class="prefooter-btn">
                    <button class="btn btn-book-now">Book your stay</button>
                </div>
            </div>
         </div>

        <!-- Instagram -->
        <div class="instagram">
            <div class="instagram-heading animate">
                <h2>Follow Us On Instagram</h2>
            </div>

            <div class="instagram-gallery animate">
                <div class="insta-grid">
                    <a href="https://www.instagram.com/rose_garden_food/" target="_blank">
                        <img src="https://images.unsplash.com/photo-1535275226173-7ee8b465f0c1?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </a>

                    <a href="https://www.instagram.com/rose_garden_food/" target="_blank">
                        <img src="https://images.unsplash.com/photo-1618449840665-9ed506d73a34?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </a>
 
                    <a href="https://www.instagram.com/rose_garden_food/" target="_blank">
                        <img src="https://images.unsplash.com/photo-1549294413-26f195200c16?q=80&w=764&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </a>

                    <a href="https://www.instagram.com/rose_garden_food/" target="_blank">
                        <img src="https://images.unsplash.com/photo-1596450514735-111a2fe02935?q=80&w=1111&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </a>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="footer-container animate">
                <div class="footer-wrap">
                    <div class="footer-heading address">
                        <h4>Address</h4>

                        <span class="location">Ankleshwar, Nana Borsara, Gujarat 394115, India</span>
                    </div>

                    <div class="reservations">
                        <h4>Reservations</h4>

                        <span class="number">(919) 8765 43210</span>
                    </div>
                </div>

                <div class="footer-wrap about">
                    <div class="footer-heading about">
                        <h4>About</h4>
                            
                        <ul class="footer-links">
                            <li><a href="#">Blog & News</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Subscribe</a></li>
                        </ul>
                    </div>
                </div>

                <div class="footer-wrap">
                    <div class="footer-heading your-stay">
                        <h4>Your Stay</h4>
                            
                        <ul class="footer-links">
                            <li><a href="#">Our Menu</a></li>
                            <li><a href="#">Amenities</a></li>
                            <li><a href="#">Accomodations</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </div>
                </div>

                <div class="footer-wrap connect">
                    <div class="footer-heading connect">
                        <h4>Connect</h4>

                        <div class="footer-socials">
                            <span>
                                <i class="fa-brands fa-instagram"></i>
                            </span>

                            <span>
                                <i class="fa-brands fa-x-twitter"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-end animate">
                <div class="copyright">
                    <span>© 2025 Hotel Rose Garden. All Rights Reserved.</span>
                </div>

                <div class="developer">
                    <span>Powered by <a href="www.webinnovate.io">Web Innovate</a></span>
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
    <script type="module" src="../../src/script/client/amenities.js" defer></script>
</body>
</html>