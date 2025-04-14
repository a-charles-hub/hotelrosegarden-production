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
                    <li class="default" id="dashboard">
                        <a href="#"><i class="material-icons">dashboard</i>Dashboard</a>
                    </li>
                    <li id="manage-reservations">
                        <a href="#"><i class="material-icons">event_seat</i>Manage Reservations</a>
                    </li>
                    <li id="menu-management">
                        <a href="menu-management.php"><i class="material-icons">lunch_dining</i>Menu Management</a>
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
            <section class="menu-management" hidden>
            </section>
        </div>
    </div>

    <!-- Local JS -->
    <script type="module"  src="../../src/script/dashboard.js" defer></script>
</body>
</html>