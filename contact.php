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
    <section>
        <div class="container">
            <h5 class="section-head">
                <span class="heading">Contact</span>
                <span class="sub-heading">Get in touch with us</span>
            </h5>
            <div class="contact-content">
                <div class="traveler-wrap">
                    <img src="./img/contact-us.png" alt="">
                </div>
            </div>
            <form action="contactForm.php" class="form contact-form" method="POST">
                <div class="input-group-wrap">
                    <div class="input-group">
                        <input type="text" name="name" class="input" placeholder="Name" required>
                        <span class="bar"></span>
                    </div>
                    <div class="input-group">
                        <input type="email" class="input" name="email" placeholder="E-mail" required>
                        <span class="bar"></span>
                    </div>
                </div>
                <div class="input-group">
                    <input type="text" name="subject" class="input" placeholder="Subject">
                    <span class="bar"></span>
                </div>
                <div class="input-group">
                    <textarea class="input" cols="30" row="8" name="message" placeholder="Message" required></textarea>
                    <span class="bar"></span>
                </div>
                <button type="submit" name="submit" class="btn form-btn btn-purple">Send Message</button>

            </form>
        </div>
    </section>
    <script src="main.js"></script>
</body>

<?php
include_once './footer.php';
?>