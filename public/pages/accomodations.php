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
                <div class="introduction-heading">
                    <h2>Welcome to Your Home Away From Home - Hotel Rose Garden</h2>
                </div>

                <div class="introduction-subheading">
                    <h3>Kick back, relax, and make yourself at home.</h3>
                </div>

                <div class="introduction-gallery">
                    <div class="group-1">
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

                    <div class="group-2">
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

            <section class="rooms">
                <div class="our-rooms">
                    <div class="room-heading">
                        <h2>Our Rooms</h2>
                    </div>

                    <div class="rooms-gallery">
                        <div class="room">
                            <div class="room-card">
                                <div class="room-image">
                                    <img src="https://images.unsplash.com/photo-1626868449668-fb47a048d9cb?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                                </div>

                                <div class="room-details">
                                    <div class="wrap">
                                        <div class="room-title">
                                            <span>Deluxe Room</span>
                                        </div>

                                        <div class="room-price">
                                            <span>$49.99 per night</span>
                                        </div>
                                    </div>

                                    <div class="room-description">
                                        <span>Spacious double room with modern décor, comfy beds, and all essential amenities for a relaxing stay.</span>
                                    </div>

                                    <div class="room-amenities">
                                        <span class="amenities-title">Amenities</span>

                                        <span class="wifi">
                                            <i class="fa-solid fa-wifi"></i>
                                            <span class="text">Free Wifi</span>
                                        </span>

                                        <span class="aircon">
                                            <i class="fa-solid fa-wind"></i>
                                            <span class="text">Airconditioner</span>
                                        </span>

                                        <span class="tv">
                                            <i class="fa-solid fa-tv"></i>
                                            <span class="text">TV</span>
                                        </span>
                                    </div>

                                    <div class="room-descriptor">
                                        <span>Simple. Cozy. Comfortable</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="room">
                            <div class="room-card">
                                <div class="room-image">
                                    <img src="https://plus.unsplash.com/premium_photo-1675615667752-2ccda7042e7e?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                                </div>

                                <div class="room-details">
                                    <div class="wrap">
                                        <div class="room-title">
                                            <span>Standard Room</span>
                                        </div>

                                        <div class="room-price">
                                            <span>$49.99 per night</span>
                                        </div>
                                    </div>

                                    <div class="room-description">
                                        <span >A comfortable and practical room designed to meet all your basic needs. Ideal for travelers seeking convenience and value, the Standard Room offers a cozy space to rest and recharge.</span>
                                    </div>

                                    <div class="room-amenities">
                                        <span class="amenities-title">Amenities</span>
                                        
                                        <span class="wifi">
                                            <i class="fa-solid fa-wifi"></i>
                                            <span class="text">Free Wifi</span>
                                        </span>

                                        <span class="aircon">
                                            <i class="fa-solid fa-wind"></i>
                                            <span class="text">Airconditioner</span>
                                        </span>

                                        <span class="tv">
                                            <i class="fa-solid fa-tv"></i>
                                            <span class="text">TV</span>
                                        </span>
                                    </div>

                                    <div class="room-descriptor">
                                        <span>Simple. Cozy. Comfortable</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="room">
                            <div class="room-card">
                                <div class="room-image">
                                    <img src="https://plus.unsplash.com/premium_photo-1661963657190-ecdd1ca794f9?q=80&w=1129&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                                </div>

                                <div class="room-details">
                                    <div class="wrap">
                                        <div class="room-title">
                                            <span>Junior Suite</span>
                                        </div>

                                        <div class="room-price">
                                            <span>$49.99 per night</span>
                                        </div>
                                    </div>

                                    <div class="room-description">
                                        <span>Spacious double room with modern décor, comfy beds, and all essential amenities for a relaxing stay.</span>
                                    </div>

                                    <div class="room-amenities">
                                        <span class="amenities-title">Amenities</span>

                                        <span class="wifi">
                                            <i class="fa-solid fa-wifi"></i>
                                            <span class="text">Free Wifi</span>
                                        </span>

                                        <span class="aircon">
                                            <i class="fa-solid fa-wind"></i>
                                            <span class="text">Airconditioner</span>
                                        </span>

                                        <span class="tv">
                                            <i class="fa-solid fa-tv"></i>
                                            <span class="text">TV</span>
                                        </span>
                                    </div>

                                    <div class="room-descriptor">
                                        <span>Simple. Cozy. Comfortable</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="room">
                            <div class="room-card">
                                <div class="room-image">
                                    <img src="https://images.unsplash.com/photo-1560184897-67f4a3f9a7fa?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                                </div>

                                <div class="room-details">
                                    <div class="wrap">
                                        <div class="room-title">
                                            <span>Family Room</span>
                                        </div>

                                        <div class="room-price">
                                            <span>$49.99 per night</span>
                                        </div>
                                    </div>

                                    <div class="room-description">
                                        <span class="text">Spacious double room with modern décor, comfy beds, and all essential amenities for a relaxing stay.</span>
                                    </div>

                                    <div class="room-amenities">
                                        <span class="amenities-title">Amenities</span>

                                        <span class="wifi">
                                            <i class="fa-solid fa-wifi"></i>
                                            <span class="text">Free Wifi</span>
                                        </span>

                                        <span class="aircon">
                                            <i class="fa-solid fa-wind"></i>
                                            <span class="text">Airconditioner</span>
                                        </span>

                                        <span class="tv">
                                            <i class="fa-solid fa-tv"></i>
                                            <span class="text">TV</span>
                                        </span>
                                    </div>

                                    <div class="room-descriptor">
                                        <span>Simple. Cozy. Comfortable</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="room">
                            <div class="room-card">
                                <div class="room-image">
                                    <img src="https://images.unsplash.com/photo-1648383228240-6ed939727ad6?q=80&w=1074&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                                </div>

                                <div class="room-details">
                                    <div class="wrap">
                                        <div class="room-title">
                                            <span>Twin Room</span>
                                        </div>

                                        <div class="room-price">
                                            <span>$49.99 per night</span>
                                        </div>
                                    </div>

                                    <div class="room-description">
                                        <span>Spacious double room with modern décor, comfy beds, and all essential amenities for a relaxing stay.</span>
                                    </div>

                                    <div class="room-amenities">
                                        <span class="amenities-title">Amenities</span>

                                        <span class="wifi">
                                            <i class="fa-solid fa-wifi"></i>
                                            <span class="text">Free Wifi</span>
                                        </span>

                                        <span class="aircon">
                                            <i class="fa-solid fa-wind"></i>
                                            <span class="text">Airconditioner</span>
                                        </span>

                                        <span class="tv">
                                            <i class="fa-solid fa-tv"></i>
                                            <span class="text">TV</span>
                                        </span>
                                    </div>

                                    <div class="room-descriptor">
                                        <span>Simple. Cozy. Comfortable</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="room">
                            <div class="room-card">
                                <div class="room-image">
                                    <img src="https://plus.unsplash.com/premium_photo-1661957292212-3dfdc45303ea?q=80&w=1074&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                                </div>

                                <div class="room-details">
                                    <div class="wrap">
                                        <div class="room-title">
                                            <span>Executive Room</span>
                                        </div>

                                        <div class="room-price">
                                            <span>$49.99 per night</span>
                                        </div>
                                    </div>

                                    <div class="room-description">
                                        <span>Spacious double room with modern décor, comfy beds, and all essential amenities for a relaxing stay.</span>
                                    </div>

                                    <div class="room-amenities">
                                        <span class="amenities-title">Amenities</span>

                                        <span class="wifi">
                                            <i class="fa-solid fa-wifi"></i>
                                            <span class="text">Free Wifi</span>
                                        </span>

                                        <span class="aircon">
                                            <i class="fa-solid fa-wind"></i>
                                            <span class="text">Airconditioner</span>
                                        </span>

                                        <span class="tv">
                                            <i class="fa-solid fa-tv"></i>
                                            <span class="text">TV</span>
                                        </span>
                                    </div>

                                    <div class="room-descriptor">
                                        <span>Simple. Cozy. Comfortable</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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

                    <div class="footer-group">
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
    <script type="module" src="../../src/script/client/accomodations.js" defer></script>

    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</body>
</html>