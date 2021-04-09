<?php
session_start();
?>
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


		<main>
			<div class="hero">
				<div class="container">
					<div class="main-heading">
						<h1 class="main-title">Discover</h1>
						<h2 class="subtitle">Luxurious hotel</h2>
					</div>
					<a href="#" class="btn btn-gradient">Explore</a>

				</div>
			</div>

			<section class="booking">
				<div class="container">
					<form method="POST" action="" class="book-form">
						
						<div class="input-group">
							<label for="check-in" class="input-label">Check in</label>
							<input type="date" class="input" id="check-in" name="checkin" required>
						</div>
						<div class="input-group">
							<label for="check-out" class="input-label">Check out</label>
							<input type="date" class="input" id="check-out" name="checkout" required>
						</div>



						<button type="submit" value="submit" name="submit" class="btn form-btn btn-purple">
							Search
						</button>
					</form>
				</div>
				</div>
			</section>
			<?php






			if (isset($_REQUEST['submit'])) {
				$_SESSION['checkins'] = $_POST['checkin'];
				$_SESSION['checkouts'] = $_POST['checkout'];

				$conn = mysqli_connect('localhost', 'root', '', 'tashfia');
				$sql = "SELECT * FROM room_details";
				$result = mysqli_query($conn, $sql);




				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_array($result)) {

						$room_cat = $row['room_name'];
						$sql = "SELECT * FROM room_details WHERE room_name='$room_cat'";
						$query = mysqli_query($conn, $sql);
						$row2 = mysqli_fetch_array($query);
						if ($row2['room_name'] == 'Duplex') {
							$img = './img/room_7.jpg';
						} else if ($row2['room_name'] == 'Family') {
							$img = './img/room_8.jpg';
						} else {
							$img = './img/room_4.jpg';
						}


						echo "
						<br><br>
                            <div class='container'>
							<div class='grid'>
							<div class='grid-item featured-hotels'>
							<img alt='#' src='$img'/></div>
                            <div>
								<h2 class='hotel-name-db'>" . $row2['room_name'] . "</h2><hr><br><br>
								<h3>Room Details: </h3> <br>
                                <h4>No of Beds: " . $row2['no_bed'] . " " . $row2['bedtype'] . " bed.</h4>
                                <h4>Available Rooms: " . $row2['available'] . "</h4>
								<h4>Price: " . $row2['price'] . " tk/night.</h4>
								 <a href='./hotel1.php?room_name=" . $_SESSION['room17'] = $row2['room_name'] . "'><button class='btn form-btn btn-purple dbs'>Book Now</button></a>
							 
                            </div>
                            
                               
							</div> 
                            </div>
                            
                            
                        
                    
                         ";
					}
				}
			}

			?>



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
		</main>

		<footer class="footer">
			<div class="container">
				<div class="footer-content grid-3">

					<div>
						<h2>Hotel Tashfia</h2>
						<p>Copyright &copy; 2020</p>
					</div>
					<nav>

						<ul>

							<li><a href="index.html">Home</a></li>
							<li><a href="features.html">Book Rooms</a></li>
							<li><a href="docs.html">Contact Us</a></li>
						</ul>
					</nav>
					<div class="social">
						<h4 class="follow-us">Follow Us</h4>
						<a href="#"><i class="fab fa-github fa-2x"></i></a>
						<a href="#"><i class="fab fa-twitter fa-2x"></i></a>
						<a href="#"><i class="fab fa-facebook fa-2x"></i></a>
						<a href="#"><i class="fab fa-instagram fa-2x"></i></a>
					</div>

				</div>
			</div>
		</footer>







		<!-----------------------------script--
			<script>
				var slider = document.getElementById('slider');
				var active = document.getElementById('active');
				var line1 = document.getElementById('line1');
				var line2 = document.getElementById('line2');
				var line3 = document.getElementById('line3');
				var line4 = document.getElementById('line4');
				var container = document.getElementsByClassName('container')[0];

				line1.onclick = function() {
					slider.style.transform = 'translateX(0)';
					active.style.top = '0px';
					container.style.backgroundImage = 'linear-gradient(rgba(0,0,0, 0.7),rgba(0,0,0, 0.7)),url(img/blah.jpg)';


				}
				line2.onclick = function() {
					slider.style.transform = 'translateX(-25%)';
					active.style.top = '80px';
					container.style.backgroundImage = 'linear-gradient(rgba(0,0,0, 0.7),rgba(0,0,0, 0.7)),url(img/pexels-chan-walrus-958545.jpg)';

				}
				line3.onclick = function() {
					slider.style.transform = 'translateX(-50%)';
					active.style.top = '160px';
					container.style.backgroundImage = 'linear-gradient(rgba(0,0,0, 0.7),rgba(0,0,0, 0.7)),url(img/pexels-konstantinos-eleftheriadis-2034335.jpg)';

				}
				line4.onclick = function() {
					slider.style.transform = 'translateX(-75%)';
					active.style.top = '240px';
					container.style.backgroundImage = 'linear-gradient(rgba(0,0,0, 0.7),rgba(0,0,0, 0.7)),url(img/pexels-naim-benjelloun-2825525.jpg)';

				}
			</script>
			

	---------------------------------->
		<!------------------------------section3--------------------------->
		<!--  
	<section>
		<div class="contact-section">
			<h1>Contact Us</h1>
			<div class="border"></div>
			<form class="contact-form" action="index.html" method="post">
				<input type="text" class="contact-form-text" placeholder="your Name">
				<input type="email" class="contact-form-text" placeholder="your email">
				<input type="text" class="contact-form-text" placeholder="your phone">
				<textarea class="contact-form-text" placeholder="your message"></textarea>
				<input type="submit" class="contact-form-btn" value="send">
			</form>
		</div>

	</section>
	-->
		<script src="main.js"></script>

	</body>

	</html>