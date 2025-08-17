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
                <img src="../assets/img/background/our-menu.avif" alt="">
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
                        <h1 class="content-title">Our Menu</h1>
                        <h2 class="subtitle">A Taste of India, for Everyone</h2>

                        <p class="description">Enjoy authentic Indian cuisine made with halal-certified ingredients. Our menu celebrates tradition and flavor, offering a vibrant selection of vegan and vegetarian dishes that welcome every palate and honor India’s rich culinary heritage.</p>
                    </div>
                </div>
        </header>

        <div class="content-container menu">
            <div class="navigation">
                <div class="navigation-wrap">
                    <div class="menu-links">
                        <ul class="navigation-links menu-nav">
                            <li data-category="Beef Dishes">Beef Dishes</li>
                            <li data-category="Breakfast">Breakfast</li>
                            <li data-category="Chicken Dishes">Chicken Dishes</li>
                            <li data-category="Lunch">Lunch</li>
                            <li data-category="Platters">Platters</li>
                            <li data-category="Drinks">Drinks</li>
                            <li data-category="Desserts">Desserts</li>
                            <li data-category="Dinner">Dinner</li>
                            <li data-category="Side Dishes">Side Dishes</li>
                            <li data-category="Vegetarian">Vegetarian</li>
                            <li data-category="Vegan">Vegan</li>
                            <li data-category="Seafood">Seafood</li>
                            <li data-category="Appetizers">Appetizers</li>
                            <li data-category="Soups">Soups</li>
                            <li data-category="Salads">Salads</li>
                            <li data-category="Tandoori">Tandoori</li>
                            <li data-category="Street Food">Street Food</li>
                            <li data-category="Rice Dishes">Rice Dishes</li>
                            <li data-category="Breads">Breads</li>
                            <li data-category="Curries">Curries</li>
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

        <!-- Menu Gallery -->
        <div class="menu-gallery animate">
            <div class="gallery-heading">
                <h2>Our Culinary Creations</h2>
            </div>
            <div class="carousel">
                <button class="carousel-btn carousel-left">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                
                <div class="carousel-track-container">
                    <ul class="carousel-track">
                        <li class="carousel-slide">
                            <img src="https://images.unsplash.com/photo-1625398407796-82650a8c135f?q=80&w=880&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="1">
                        </li>
                        <li class="carousel-slide">
                            <img src="https://images.unsplash.com/photo-1603554593710-89285666b691?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="2">
                        </li>
                        <li class="carousel-slide">
                            <img src="https://images.unsplash.com/photo-1567337710282-00832b415979?q=80&w=1330&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="3">
                        </li>
                        <li class="carousel-slide">
                            <img src="https://images.unsplash.com/photo-1683533761804-5fc12be0f684?q=80&w=688&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="4">
                        </li>
                        <li class="carousel-slide">
                            <img src="https://images.unsplash.com/photo-1546833999-b9f581a1996d?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="4">
                        </li>
                    </ul>
                </div>
                
                <button class="carousel-btn carousel-right">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
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

    <script>
        const track = document.querySelector('.carousel-track');
        const slides = Array.from(track.children);
        const nextBtn = document.querySelector('.carousel-right');
        const prevBtn = document.querySelector('.carousel-left');
        const slideWidth = slides[0].getBoundingClientRect().width;

        // Clone slides for seamless loop
        slides.forEach(slide => track.appendChild(slide.cloneNode(true)));

        let index = 0;
        track.style.transform = 'translateX(0px)';

        const moveSlide = dir => {
            index += dir;
            track.style.transition = 'transform 0.5s ease-in-out';
            track.style.transform = `translateX(-${slideWidth * index}px)`;
            if (index >= slides.length || index < 0) {
                setTimeout(() => {
                    track.style.transition = 'none';
                    index = (index + slides.length) % slides.length;
                    track.style.transform = `translateX(-${slideWidth * index}px)`;
                }, 500);
            }
        };

        nextBtn.onclick = () => moveSlide(1);
        prevBtn.onclick = () => moveSlide(-1);

    </script>

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