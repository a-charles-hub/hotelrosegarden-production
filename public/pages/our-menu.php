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
    <div class="header">
        <nav class="nav">
            <div class="logo">
                <img src="../../public/assets/img/logo.png" alt="Hotel Rose Garden">
            </div>

            <ul class="nav-links">
                <li><a href="../../index.php">Overview</a></li>
                <li><a href="">Dinning</a></li>
                <li><a href="">Menu</a></li>
                <li><a href="">Events</a></li>
                <li><a href="">Stay</a></li>
                <li><a href="">Amenities</a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href=""><i class="fa-solid fa-user"></i> Sign In</a></li>

                <div class="nav-socials">
                    <li><img src="../../public/assets/img/icons/facebook.svg" alt="facebook"></li>
                    <li><img src="../../public/assets/img/icons/instagram.svg" alt="instagram"></li>
                    <li><img src="../../public/assets/img/icons/whatsapp.svg" alt="whatsapp"></li>
                    <li><img src="../../public/assets/img/icons/twitter.svg" alt="twitter"></li>
                </div>
            </ul>

            <div class="hamburger-menu" id="hamburger-menu">
               <i class="fa-solid fa-bars fa-xl" style="color: #fff;"></i>
            </div>

            <div class="close" id="close">
                <i class="fa-solid fa-xmark fa-xl" style="color: #fff;"></i>
            </div>
        </nav>

        <div class="carousel">
            <div class="slides">
                <img src="https://wallpapers.com/images/hd/traditional-indian-food-in-flat-lay-photograph-l808i2de2j2bacdi.jpg" alt="" class="slide active">
                <img src="https://images.ctfassets.net/3s5io6mnxfqz/6ZImCEzx6UuvuKaAiZEDDN/50479ee4a0902deb4eb1bab720ce248a/image1.jpg" alt="" class="slide">
                <img src="https://wallpaperaccess.com/full/2975587.jpg" alt="" class="slide">
            </div>

            <div class="buttons">
                <button class="slide-btn btn-prev"><i class="fa-solid fa-angle-left fa-2xl"></i></button>
                <button class="slide-btn btn-next"><i class="fa-solid fa-angle-right fa-2xl"></i></button>
            </div>
        </div>

        <div class="title-header">
            <h3>Our Menu</h3>
        </div>
    </div>

    <div class="container">
        <div class="introduction">
            <div class="card-introduction">
                <h3>A Journey Through Indian Cuisine</h3>
                
                <p class="description">
                    Discover a delicious variety of dishes made with fresh ingredients and crafted with care. From savory starters to mouthwatering mains and indulgent desserts, there’s something for every craving. Whether you're here for a light bite or a full-course feast, our menu is designed to satisfy.
                </p>
            </div>
        </div>

        <div class="featured-menu-container">
            <div class="featured-menu">
                <div id="menu-container"></div>

                <div class="cards hide" id="cards">
                    <div class="card-menu" id="card-menu">
                        <div class="card-image"></div>

                        <div class="text-wrap">
                            <div class="group">
                                <h3 class="menu-title"></h3>
                                <span class="price"></span>
                            </div>
                            
                            <p class="menu-description"></p>

                        </div>
                    </div>
                </div>

                <div class="pagination-container">
                    <div class="pagination">
                        <div class="previous">
                            <button type="button" id="previous-btn" class="btn previous-btn"><i class="fa-solid fa-backward"></i> <span class="prev-text">Prev</span></button>
                        </div>
                        
                        <div class="page-numbers" id="page-numbers"></div>
                        <div class="next">
                            <button type="button" id="next-btn" class="btn btn-next"><span class="next-text">Next</span> <i class="fa-solid fa-forward"></i></button>
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
    <script src="../../src/script/client/our-menu.js" defer></script>
</body>
</html>