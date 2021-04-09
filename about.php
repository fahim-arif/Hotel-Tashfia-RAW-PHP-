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
        
        <section class="about">
            <div class="container">
                <h5 class="section-head">
                    <span class="heading">About Us</span>
                    <span class="sub-heading">Know who we are</span>
                </h5>
                <div class="contact-content">
                    <div class="traveler-wrap">
                        <img src="./img/traveler.png" alt="">
                    </div>
                </div>
            </div>
            <div class="final">
                <div class="about-us">
                    <div class="inner-section grid-2">
                        <div>
                            <img src="./img/hotel4.jpg" alt="">
                        </div>
                        <div class="contact-text">
                            <h1 class="about-title">Learn About Us</h1>
                            <p class="text-about">
                                Lorem ipsum dolor sit amet consectetur adipisicing elitur necessitatibus eius dicta a voluptates sit
                                deleniti autem error eo.<br><br>
                                Doloribus velit ducimus, enim inventore earum, eligendi
                                nostrum pariatur necessitatibus eius dicta a voluptates sit
                                deleniti autem error eos totam.ur necessitatibus eius dicta a voluptates sit
                                deleniti autem error eo<br><br>
                                nisi neque voluptates sit deleniti autem error eos totam nisi neque.ur necessitatibus eius dicta a voluptates sit
                                deleniti autem error eour necessitatibus eius dicta a voluptates sit
                                deleniti autem error eo
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <h1></h1>
        <script src="main.js"></script>
    </body>


    </html>


    <?php
    include_once './footer.php'

    ?>