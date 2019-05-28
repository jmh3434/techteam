<?php
if(isset($_POST['submit'])){
    $to = "jmh3434@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Tech Team</title>
	<meta charset="UTF-8">
	<meta name="description" content="tech team">
	<meta name="keywords" content="tech team, elevate">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>



	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<a href="index.html" class="site-logo">
				<img src="img/logo.png" alt="logo">
			</a>
			<!-- Switch button -->
			<div class="nav-switch">
				<div class="ns-bar"></div>
			</div>
			<div class="header-right">
				<ul class="main-menu">
					<li><a href="index.html">Home</a></li>
					<li class="active"><a href="contact.php">Contact</a></li>
					<li><a href="quiz.html">Onboarding Quiz</a></li>
				</ul>
				<div class="header-btns">
					<a href="#" class="site-btn sb-c3">Register For Class</a>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page Top section -->
	<section class="page-top-section set-bg" data-setbg="img/bg-2.jpg">
		<div class="container">
			<h2>Contact Us</h2>
		</div>
	</section>
	<!-- Page Top section end -->


	<!-- Services section -->
	<section class="contact-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg contact-text">
					<h4 class="contact-title">Contact us to register for class!</h4>
					<p>Send us an email and we will respond within the business day!</p>
					<div class="contact-info">
						<div class="ci-icon">
							<img src="img/contact-icons/1.png" alt="">
						</div>
						<h6>Chapel Hill, NC</h6>
					</div>
					<div class="contact-info">
						<div class="ci-icon">
							<img src="img/contact-icons/2.png" alt="">
						</div>
						<h6>(919)-903-7060</h6>
					</div>
					<div class="contact-info">
						<div class="ci-icon">
							<img src="img/contact-icons/3.png" alt="">
						</div>
						<h6>techtelevate@gmail.com</h6>
					</div>
				</div>

			</div>
			<!-- <div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10784.188505644011!2d19.053119335158936!3d47.48899529453826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1543907528304" style="border:0" allowfullscreen></iframe>
			</div> dx-->
		</div>
	</section>
	<!-- Services section end -->






	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="footer-nav">
				<ul>
					<li><a href="home.html">Home</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="quiz.html">Onboarding Quiz</a></li>
				</ul>
			</div>
			<div class="copyright">
				<p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tech Team

</p>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
