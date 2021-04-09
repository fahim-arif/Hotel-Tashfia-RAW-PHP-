<!DOCTYPE html>

<head>
    <title>HOTEL MANAGEMENT</title>
    <!--<link rel="stylesheet" type="text/css" href="style.css">-->
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Francois+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">


</head>

<body>


    <!--navigation-->
    <header class="header">
        <div class="kkk">
            <div>
            </div>
        </div>
        <div class="container">
            <nav class="nav">
                <div class="main-logo">
                    <a href="index.php" class="">
                        <img src="./img/logo1.png" alt="hotel">
                    </a>
                </div>
                <div class="hamburger-menu">
                    <i class="fas fa-bars"></i>
                    <i class="fa fa-times"></i>
                </div>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://localhost:8080/tashfia/rooms.php" class="nav-link">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://localhost:8080/tashfia/contact.php" class="nav-link">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://localhost:8080/tashfia/about.php" class="nav-link">About</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="hotels">
        <div class="container">
            <h5 class="section-head">
                <span class="heading">Feature Rooms</span>
                <span class="sub-heading">Our Beautiful hotels</span>
            </h5>
            <div class="grid">
                <div class="grid-item featured-hotels">
                    <img src="./img/hotel1.jpg" alt="" class="hotel-image">
                    <h5 class="hotel-name">Hotel Tashfia</h5>
                    <span class="hotel-price">From 2000 Taka/Night</span>
                    <div class="hotel-rating">
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                    </div>
                    <a href="#" class="btn btn-gradient" <?php
                                                            $_SESSION['hotel1'] = "Hotel Tashfia";
                                                            ?>>Book Now</a>
                </div>


                <div class="grid-item featured-hotels">
                    <img src="./img/hotel3.jpg" alt="" class="hotel-image">
                    <h5 class="hotel-name">Hotel Tashfia</h5>
                    <span class="hotel-price">From 2000 Taka/Night</span>
                    <div class="hotel-rating">
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star-half rating"></i>
                    </div>
                    <a href="#" class="btn btn-gradient">Book Now</a>
                </div>


                <div class="grid-item featured-hotels">
                    <img src="./img/hotel4.jpg" alt="" class="hotel-image">
                    <h5 class="hotel-name">Hotel Malbue</h5>
                    <span class="hotel-price">From 3000 Taka/Night</span>
                    <div class="hotel-rating">
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>

                    </div>
                    <a href="#" class="btn btn-gradient">Book Now</a>
                </div>

                <div class="grid-item featured-hotels">
                    <img src="./img/the_paradise_bg.jpg" alt="" class="hotel-image">
                    <h5 class="hotel-name">Hotel Paradise</h5>
                    <span class="hotel-price">From 5000 Taka/Night</span>
                    <div class="hotel-rating">
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                        <i class="fas fa-star rating"></i>
                    </div>
                    <a href="#" class="btn btn-gradient">Book Now</a>
                </div>
            </div>
        </div>
    </section>

    <?php
    include_once './footer.php';
    ?>
    <script src="main.js"></script>
</body>