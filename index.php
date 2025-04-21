<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Experience luxury and comfort at Hotel Rose Garden in Borsara, Gujarat. Located in a peaceful setting, we offer elegant rooms, fine dining, and premium hospitality. Book now for a memorable stay.">
    <meta name="keywords" content="Hotel Rose Garden, luxury hotel Borsara, best hotels in Gujarat, accommodation in Ankleshwar, fine dining, premium hospitality">
    <meta name="author" content="Hotel Rose Garden">
    <title>Hotel Rose Garden</title>
    <!-- Local CSS -->
    <link rel="stylesheet" href="src/styles/client/main.css">
    <link rel="stylesheet" href="src/styles/client/main-media-query.css">
    <!-- Favicon -->
    <link rel="icon" href="public/assets/img/logo.png">
    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <!-- Google Fonts / Montserrat-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Google Fonts / Cizel -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/6c2535758c.js" crossorigin="anonymous"></script>
</head>
</head>
<body>
    <!-- Container starts -->
    <div class="container">
        <!-- Header starts -->
        <header class="header-container">
            <div class="video-container">
                <video autoplay muted loop id="background-video">
                    <source src="public/assets/video/restaurant.mp4" type="video/mp4" role="presentation">
                    Your browser does not support the video tag.
                </video>
                <div class="video-overlay"></div>
            </div>

            <div class="header">
                <nav class="nav">
                    <div class="logo">
                        <img src="public/assets/img/logo.png" alt="Hotel Rose Garden">
                    </div>

                    <ul class="nav-links">
                        <li><a href="index.php">Overview</a></li>
                        <li><a href="">Dinning</a></li>
                        <li><a href="public/pages/our-menu.php">Menu</a></li>
                        <li><a href="">Events</a></li>
                        <li><a href="">Stay</a></li>
                        <li><a href="">Amenities</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href=""><i class="fa-solid fa-user"></i> Sign In</a></li>

                        <div class="nav-socials">
                            <li><img src="public/assets/img/icons/facebook.svg" alt="facebook"></li>
                            <li><img src="public/assets/img/icons/instagram.svg" alt="instagram"></li>
                            <li><img src="public/assets/img/icons/whatsapp.svg" alt="whatsapp"></li>
                            <li><img src="public/assets/img/icons/twitter.svg" alt="twitter"></li>
                        </div>
                    </ul>

                    <div class="hamburger-menu" id="hamburger-menu">
                       <i class="fa-solid fa-bars fa-xl" style="color: #fff;"></i>
                    </div>

                    <div class="close" id="close">
                        <i class="fa-solid fa-xmark fa-xl" style="color: #fff;"></i>
                    </div>
                </nav>
            </div>

            <div class="card-container">
                <div class="hero-section">
                    <div class="hero-heading">
                        <h3>A Place That Feels Like Coming  Home</h3>
                    </div>
                    <div class="hero-subheading">
                        <h4>Where comfort meets tradition in every corner. More than just a visit — it’s a feeling of belonging.</h4>
                    </div>

                    <div class="our-menu">
                        <button id="our-menu" class="menu-btn">Our menu</button>
                    </div>
                </div>  

                <div class="card">
                    <div class="card-left">
                        <div class="card-group">
                            <h1 class="card-title">Hotel Rose Garden</h1>
                            <p class="card-info address">
                                <i class="fa-solid fa-location-dot"></i>Ankleshwar, Nana Borsara, Gujarat 394115, India</p>
                            <p class="card-info contact-number">
                                <i class="fa-solid fa-phone"></i>+919876543210
                            </p>
                        </div>
                    </div>

                    <div class="card-right">
                        <div class="card-group">
                            <h3 class="card-header">Welcome! Your next delightful experience awaits.</h3>
                            <button class="menu-btn our-menu-btn">Our Menu</button>
                            <p class="reservation-link">I Already Have a Reservation</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Hotel History -->
        <div class="hotel-history-container">
            <div class="title-wrap">
                <h4 class="title">A LUXURIOUS HOTEL RESTAURANT</h4>
            </div>

            <div class="history-container">
                <p class="history paragraph-1">Founded in 2010, Hotel Rose Garden was born from a vision to create a welcoming space where guests could experience warmth, comfort, and the rich flavors of Indian cuisine. Located along a scenic highway, we stand as a beacon for travelers, locals, and food lovers alike, offering a respite where the road meets unforgettable dining.</p>

                <p class="history paragraph-2">From humble beginnings, our journey has been one of passion and dedication—committed to serving dishes made with the finest ingredients, steeped in tradition, and crafted with love. Every corner of our hotel echoes this story, with our banquet hall, serene prayer spaces, and lush outdoor settings designed to offer moments of peace and joy for all who visit.</p>

                <p class="history paragraph-3">At Hotel Rose Garden, we believe in the power of food to bring people together, whether for a quiet meal or a grand celebration. As we continue to grow, we remain deeply rooted in the values of hospitality and the timeless beauty of Indian culture.</p>
            </div>

            <div class="hotel-info">
                <p class="hotel-location">Ankleshwar, Nana Borsara, Gujarat 394115, India</p>

                <p class="hotel-contact">+91 98765 43210</p>
            </div>
        </div>

        <!-- Amenities -->
        <div class="amenities-container">
            <div class="amenities-header">
                <div class="title-wrap">
                    <h4 class="descriptor">Rest, Relax, and Rejuvenate</h4>
                    <h2 class="title">Amenities</h2>
                </div>
            </div>

            <div class="amenities">
                <div class="amenity indoor-dining">
                    <img src="https://media.cnn.com/api/v1/images/stellar/prod/201006124420-indoor-dining-covid-19.jpg?q=x_0,y_374,h_2268,w_4032,c_crop/h_833,w_1480" alt="" loading="lazy">

                    <div class="text-wrap">
                        <div class="heading-wrap">
                            <h4 class="sub-heading">Seamless Comfort</h4>
                            <h1 class="heading">Indoor Dining</h1>
                        </div>
    
                        <p class="description">Experience the warmth of elegant indoor dining, where refined ambiance meets exceptional flavors. Enjoy a cozy, sophisticated setting with impeccable service, perfect for intimate meals, family gatherings, or business meetings.</p>
                    </div>
                </div>

                <div class="amenity outdoor-dining">
                    <img src="https://media.architecturaldigest.com/photos/618a7d98d4dc025cc87e313d/4:3/w_5336,h_4002,c_limit/Exterior%203.jpg" alt="" loading="lazy">

                    <div class="text-wrap">
                        <div class="heading-wrap">
                            <div class="sub-heading">Seamless Comfort</div>
                            <h3 class="heading">Outdoor Dining</h3>
                        </div>
    
                        <p class="description">Delight in al fresco dining amidst nature’s beauty, where fresh air, scenic views, and exquisite cuisine come together. Enjoy a relaxed yet elegant atmosphere perfect for unwinding with loved ones or celebrating special moments.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Rose Pavilion -->
         <div class="rose-pavilion-container show-element">
            <div class="rose-pavilion">
                <div class="gallery">
                    <div class="main-image">
                        <img src="https://img.cdn-pictorem.com/uploads/collection/R/RT5LRO2KGR/900_Socratubik_IMG_1857071712.jpg" alt="" loading="lazy">
                    </div>

                    <div class="thumnails">
                        <div class="thumnail">
                            <img src="https://contentgrid.homedepot-static.com/hdus/en_US/DTCCOMNEW/Articles/PlaygroundHero.jpg" alt="" loading="lazy">
                        </div>

                        <div class="thumnail">
                            <img src="https://thearchitectsdiary.com/wp-content/uploads/2023/11/Cricket-Stadiums-in-India-09-1024x768.webp" alt="" loading="lazy">
                        </div>
                    </div>
                </div>

                <div class="right-aligned-content">
                    <div class="text-wrap">
                        <div class="heading-wrap">
                            <h4 class="sub-heading">A Refined and Multi-purpose Space</h4>
                            <h3 class="heading">The Rose Pavilion</h3>
                        </div>

                        <p class="description">Nestled within our serene grounds, The Rose Pavilion offers a unique space where elegance meets convenience. Whether you're celebrating a milestone, hosting an intimate gathering, or enjoying outdoor leisure, this versatile venue is designed for every occasion. With a stunning cricket field, peaceful prayer hall, vibrant playground, and more, it provides a perfect balance of relaxation and excitement for all ages and interests.</p>

                        <div class="explore-now">Explore Now</div>
                    </div>
                </div>
            </div>
         </div>

        <!-- Exclusive Venues -->
        <div class="exclusive-venues-container">
            <div class="exclusive-venues">
                <div class="left-aligned-content">
                    <div class="text-wrap">
                        <div class="heading-wrap">
                            <h4 class="sub-heading">Your Ultimate Party Destination</h4>
                            <h3 class="heading">Exclusive Venues</h3>
                        </div>

                        <p class="description">Our Party Hall is the perfect setting for your most cherished moments. With a capacity to host up to 1200 guests, it offers a spacious, elegant environment for weddings, corporate events, and large family gatherings. Experience exceptional service, luxurious ambiance, and an atmosphere that brings your celebrations to life.</p>

                        <div class="explore-now">Explore Now</div>
                    </div>
                </div>
                
                <div class="gallery">
                    <div class="main-image">
                        <img src="https://cdn.shortpixel.ai/spai/w_1082+q_glossy+ret_img+to_webp/www.eventsource.ca/blog/wp-content/uploads/2022/04/Barn-1906.jpg" alt="" loading="lazy">
                    </div>
                </div>
            </div>
        </div>

        <!-- Accomodations -->
        <div class="accomodations-container">
            <div class="accomodations">
                <div class="gallery">
                    <div class="main-image">
                        <img src="https://media.edinburgh.org/wp-content/uploads/2023/04/23154056/The-Balmoral-Executive-View-Room-e1682260891619.jpg" alt="" loading="lazy">
                    </div>
                </div>

                <div class="right-aligned-content">
                    <div class="text-wrap">
                        <div class="heading-wrap">
                            <h4 class="sub-heading">Comfortable Stays</h4>
                            <h3 class="heading">Accomodations</h3>
                        </div>

                        <p class="description">Our 10 elegantly designed guest rooms offer a blend of comfort and convenience, perfect for travelers seeking a peaceful stay. Whether you're here for a short visit or an extended getaway, each room provides a warm ambiance, modern amenities, and a serene escape from the bustle of the road. Experience hospitality at its finest in a setting that feels like home.</p>

                        <div class="explore-now">Explore Now</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Gallery -->
        <div class="instagram-gallery-container">
            <div class="instagram-gallery">
                <div class="title-wrap">
                    <h4 class="descriptor">What's Happening</h4>
                    <h2 class="title">Instagram Gallery</h2>
                </div>

                <div class="cards-container">
                    <div class="cards">
                        <div class="card">
                            <img src="https://i.pinimg.com/originals/fe/33/28/fe3328080d12ae8f28a3c7e7fd4f946f.jpg" alt="" loading="lazy">
                        </div>
                        <div class="card">
                            <img src="https://th.bing.com/th/id/R.1a32300a1f3d69708d49b08c6eb89693?rik=lt4UftWfwKgojw&pid=ImgRaw&r=0" alt="" loading="lazy">
                        </div>
                        <div class="card">
                            <img src="https://wallpaperaccess.com/full/1317096.jpg" alt="" loading="lazy">
                        </div>
                        <div class="card">
                            <img src="https://images.pexels.com/photos/958546/pexels-photo-958546.jpeg?cs=srgb&dl=food-healthy-vegetables-958546.jpg&fm=jpg" alt="" loading="lazy">
                        </div>
                        <div class="card">
                            <img src="https://s4.scoopwhoop.com/dan/spicyfood1/15.jpg" alt="" loading="lazy">
                        </div>
                        <div class="card">
                            <img src="https://wallpapercave.com/wp/wp7137084.jpg" alt="" loading="lazy">
                        </div>
                        <div class="card">
                            <img src="https://th.bing.com/th/id/R.8a37848f44b93aa9e7f924a937660259?rik=%2bw9XHaoDdl5o%2fQ&pid=ImgRaw&r=0" alt="" loading="lazy">
                        </div>
                        <div class="card">
                            <img src="https://www.cricketbio.com/wp-content/uploads/2019/02/Playing-Cricket-Games-With-Your-Children-Can-Improve-Their-Life-at-School.jpg" alt="" loading="lazy">
                        </div>
                        <div class="card">
                            <img src="https://sukhis.com/app/uploads/2022/04/image3-4.jpg" alt="" loading="lazy">
                        </div>
                        <div class="card">
                            <img src="https://th.bing.com/th/id/R.50a981d1df95ddc3b6b174244f86f309?rik=FoHJGxVjvJ8uLQ&riu=http%3a%2f%2fstacyhart.com%2fwp-content%2fuploads%2f2017%2f12%2f14-14393-post%2fthe-knot-real-wedding-indian-wedding-events-cherished-philadelphia-wedding-photographer-deerfield-wedding-photos_0074.jpg&ehk=eoKDwT92s6HCoQpyhoVzgsdMlaWSfY4Y%2bYQTwMig590%3d&risl=&pid=ImgRaw&r=0" alt="" loading="lazy">
                        </div>
                        <div class="card">
                            <img src="https://lh5.googleusercontent.com/p/AF1QipNCSnkbwgun6igcdoMmF_4nyCOb-f255CV1qtYp=w408-h306-k-no" alt="" loading="lazy">
                        </div>
                        <div class="card">
                            <img src="https://d1vp8nomjxwyf1.cloudfront.net/wp-content/uploads/sites/9/2019/11/29145839/Quarto-Twin-2.jpg" alt="" loading="lazy">
                        </div>
                        <div class="card">
                            <img src="https://img.freepik.com/premium-photo/indian-family-eating-food-dining-table-home-restaurant-having-meal-together_466689-12715.jpg?w=826" alt="" loading="lazy">
                        </div>
                        <div class="card">
                            <img src="https://www.visitdubai.com/-/media/gathercontent/article/d/dubais-romantic-restaurants/fallback-image/dubais-romantic-restaurants-hero-eventorganiser-aug-2022.jpg" alt="" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer-top">
            <div class="footer">
                <div class="title-wrap">
                    <h4 class="descriptor
                    ">Hotel Rose Garden</h4>
                    <h3 class="title">Located In The Heart of Borsara</h3>
                </div>

                <div class="contact-info">
                    <div class="phone"><i class="fa-solid fa-phone"></i> +919876543210</div>
                    <div class="contact-email"><i class="fa-solid fa-envelope"></i> contact@hotelrosegarden.in</div>
                    <div class="location"><i class="fa-solid fa-location-dot"></i> Ankleshwar, Nana Borsara, Gujarat 394115, India</div>
                </div>

                <div class="google-maps">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d231.97183124760082!2d73.00518893372956!3d21.5253666500026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be03dc03603a155%3A0x9cd3b6726918272d!2sHotel%20Rose%20Garden!5e0!3m2!1sen!2sca!4v1742707428255!5m2!1sen!2sca" 
                        allowfullscreen 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Google Maps view of Hotel Rose Garden in Borsara, Gujarat">
                    </iframe>
                </div>
                
            </div>
        </div>

        <footer class="footer-container">
            <div class="footer-wrap">
                <div class="wrap">
                    <div class="footer-info">
                        <div class="logo">
                            <img src="public/assets/img/logo.png" alt="">
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
                            <li><a href="#">Dinning</a></li>
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
                            <img src="public/assets/img/icons/facebook.svg" alt="facebook">
                        </span>
                        <span>
                            <img src="public/assets/img/icons/instagram.svg" alt="instagram">
                        </span>
                        <span>
                            <img src="public/assets/img/icons/whatsapp.svg" alt="whatsapp">
                        </span>
                        <span>
                            <img src="public/assets/img/icons/twitter.svg" alt="twitter">
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

    <!-- Local JS --> 
    <script type="module" src="src/script/client/main.js" defer></script>
</body>
</html>