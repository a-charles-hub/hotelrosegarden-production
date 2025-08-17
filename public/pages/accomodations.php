<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accomodations | Hotel Rose Garden</title>
    <!-- Local CSS -->
    <link rel="stylesheet" href="../../src/styles/client/main.css">
    <link rel="stylesheet" href="../../src/styles/client/layout.css">
    <link rel="stylesheet" href="../../src/styles/client/main-media-query.css">
    <link rel="stylesheet" href="../../src/styles/client/accomodations.css">
    <link rel="stylesheet" href="../../src/styles/client/accomodations-media-query.css">
    <link rel="stylesheet" href="../../src/styles/client/layout-media-query.css">

    <!-- Flatpickr CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

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
                <img src="https://images.unsplash.com/photo-1596394516093-501ba68a0ba6?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
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
                        <h1 class="content-title">Accomodations</h1>
                        <h2 class="subtitle">Your Home Away From Home</h2>

                        <p class="description">Unwind in stylish, well-appointed rooms designed for comfort and relaxation. Whether you're here for business or leisure, our accommodations provide a peaceful escape with modern amenities and warm hospitality.</p>
                    </div>
                </div>

                <div class="book-btn-mobile">
                    <button class="book-btn"><i class="fa-solid fa-calendar-days"></i> Book Now</button>
                </div>

                <!-- Bookin input field -->
  
                <div class="booking-bar">
                    <form action="" class="booking-form">
                        <div class="booking-item">
                            <label for="check-out">Select dates</label>
                            <input id="dateRange" type="text" placeholder="Add dates" />
                        </div>

                        <div class="booking-item">
                            <label for="guests">Add guests</label>
                            <input id="guests" type="number" min="1" placeholder="Add guests" />
                        </div>

                        <button class="booking-btn" aria-label="Search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
        </header>

        <!-- Main content -->
        <div class="accomodations">
            <section class="introduction">
                <div class="introduction-heading animate">
                    <h2>Welcome to Your Home Away From Home - Hotel Rose Garden</h2>
                </div>

                <div class="introduction-subheading animate">
                    <h3>Kick back, relax, and make yourself at home.</h3>
                </div>

                <div class="introduction-gallery">
                    <div class="group-1 animate">
                        <div class="images image-1">
                            <img src="https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image 1" title="image 1">
                        </div>

                        <div class="images image-2">
                            <img src="https://images.unsplash.com/photo-1725962479542-1be0a6b0d444?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image 2" title="image 2" class="tall">
                        </div>

                        <div class="images image-3">
                            <img src="https://images.unsplash.com/photo-1631049035182-249067d7618e?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image 3" title="image 3">
                        </div>
                    </div>

                    <div class="group-2 animate">
                        <div class="images image-4">
                            <img src="https://images.unsplash.com/photo-1679310289994-9033a196b136?q=80&w=1074&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image 4" title="image 4">
                        </div>

                        <div class="images image-5">
                            <img src="https://plus.unsplash.com/premium_photo-1682094031102-45e46cbbbf90?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image 5" title="image 5" class="tall">
                        </div>

                        <div class="images image-6">
                            <img src="https://images.unsplash.com/photo-1520014384091-f75776a1ca4f?q=80&w=736&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image 6" title="image 6">
                        </div>
                    </div>
                </div>
            </section>

            <section class="rooms-container">
                <div class="room-dropdown-nav animate">
                    <span class="show-label">SHOW</span>
                    
                    <div class="dropdown-wrapper">
                        <select class="room-dropdown">
                        <option value="all">All Rooms</option>
                        <option value="one">One Bedroom</option>
                        <option value="two">Two Bedrooms</option>
                        <option value="three">Three Bedrooms</option>
                        </select>
                        <i class="fa-solid fa-caret-down dropdown-icon"></i>
                    </div>
                </div>

                <div class="rooms animate">
                    <div class="room" data-category="Two Bedrooms">
                        <div class="room-image">
                            <img src="https://images.unsplash.com/photo-1648383228240-6ed939727ad6?q=80&w=1074&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">

                            <span class="room-detail">Twin Room</span>
                        </div>
                    </div>

                    <div class="room animate">
                        <div class="room-image" data-category="Three Bedrooms">
                            <img src="https://images.unsplash.com/photo-1560184897-67f4a3f9a7fa?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">

                            <span class="room-detail">Family Room</span>
                        </div>
                    </div>

                    <div class="room animate">
                        <div class="room-image" data-category="Two Bedrooms">
                            <img src="https://plus.unsplash.com/premium_photo-1671269705768-cad27668134c?q=80&w=1021&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">

                            <span class="room-detail">Deluxe Room</span>
                        </div>
                    </div>

                    <div class="room animate">
                        <div class="room-image" data-category="One Bedroom">
                            <img src="https://plus.unsplash.com/premium_photo-1661963657190-ecdd1ca794f9?q=80&w=1129&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">

                            <span class="room-detail">Junior Room</span>
                        </div>
                    </div>

                    <div class="room animate">
                        <div class="room-image" data-category="Two Bedrooms">
                            <img src="https://images.unsplash.com/photo-1718851972754-6638b49b4775?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">

                            <span class="room-detail">Premium Room</span>
                        </div>
                    </div>

                    <div class="room animate">
                        <div class="room-image" data-category="Two Bedrooms">
                            <img src="https://images.unsplash.com/photo-1664227430717-9a62112984cf?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">

                            <span class="room-detail">Standard Room</span>
                        </div>
                    </div>
                </div>

            </section>
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
    <script type="module" src="../../src/script/client/accomodations.js" defer></script>

    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</body>
</html>