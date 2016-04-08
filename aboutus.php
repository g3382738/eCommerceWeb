<?php
	session_start();
?>


<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>About Us - DreamOverseas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">
			<!-- Header -->
			<header id="header">
            <img src="images/logo.png" width="200" height="42">
			  <nav id="nav">
				<ul>
						  <?php
						  		if(isset($_SESSION['Username']))
						  		{
						  ?>
						  		<li><a href="memberHome.php">Welcome, <?php echo $_SESSION['Username'];?></a></li>
						  		<li><a href="index.php">Home</a></li>
						  		<li><a href="aboutus.php">About Us</a></li>
						  		<li><a href="Signout.php" class="button">Sign Out</a></li>
						  <?php
						  		} else {
						  ?>
						  		<li><a href="index.php">Home</a></li>
						  		<li><a href="aboutus.php">About Us</a></li>
						  		<li><a href="signin.php" class="button">Sign In</a></li>
						  		<li><a href="signup.php" class="button">Sign Up</a></li>
						  <?php
						  	}
						  ?>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="container">
				<header>
				  <h2>About Us</h2>
				  <p>Learn about our professional team and our services</p>
				</header>
			    <div class="box">
					<span class="image featured"><img src="images/discussion.jpg"></span>
					<p>DreamOverseas is your partner who provides the most professional consulting services on college application and studying abroad. Our team is formed by a group of students who are studying in or newly graduated from the top tier universities in United States, Europe, Asian and Oceania. </p>
					<p>Helping our clients to realize their dreams on international education is our consistent pursue. We would evaluate our client’s profile and intention, then assign the fittest advisor. What we offer is not only the application assistance, we build a platform for our clients to know the camps life including course information, research opportunity and career plan from our advisor before the start of their journey. </p>
					<p>We believe that the information asymmetry is the major obstacle during the college selection and application. Therefore, we use the advanced data analysis method to find client’s best match, and build connection between client and our student advisor through internet. </p>
					<a href="signup.php" class="a-btn"> <center><span class="a-btn-text">Become a member</span> <span class="a-btn-slide-text">Sign up Now!</span> <span class="a-btn-icon-right"><span></span></span></center></a>
					<h2>Get a profile evaluation <strong3>Now</strong3> ! </h2>
				</div>
			</section>

			<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
					<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
					<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
				</ul>
				<ul class="copyright">
				   <li>&copy; DreamOverseas &nbsp;All rights reserved.</li>
				   <li>Design: Tong, Patrick, Cain</li>
				</ul>
			</footer>
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>