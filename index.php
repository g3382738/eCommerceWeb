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
		<title>Dream Overseas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
		  <header id="header" class="alt">
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

			<!-- Banner -->
		  <section id="banner">
					<div class="inner">

						<header>
						  <h2>Dream<br>
						    Overseas</h2>
						</header>
						<p>Your direct path to the </p>
						<p>worldwide <strong>top-tier</strong> <br>
					  universities.</p>
						<footer>
							<ul class="buttons vertical">
								<a href="#main" class="button fit scrolly">Tell Me More</a>
							</ul>
						</footer>

					</div>
		  </section>
<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
					  <header class="major">
						  <h2>The earth is round. I want to wander around.<br>
					      </h2>
						  <p>Dream Overseas is an organization that helps students who want to study abroad. Our target is to provide you with the most useful and professional information and service to help you obtain the offer of your dream school.</p>
					  </header>
					  <span class="image featured"><img src="images/fountain-pen-on-paper1.jpg" alt="" /></span>
					</section>
					
	<section class="box special features">
					  <h2>Why you choose DreamOverseas</h2>
					  <div class="features-row">
                         
						  <section>
                                <img src="images/1.png" width="80" height="79">
                                <h3>Professional Team</h3>
                                <p>Our team is formed by a group of students who are studying in or newly graduated from the best universities in United States, Europe, Asian and Oceania. Most of them had applied by themselves and achieve great success.</p>
						  </section>
							<section>
								<img src="images/2.png" width="80" height="79">
							  <h3>Plan Ahead</h3>
								<p>The application is only the first step of your life aboard. Our experienced team can help you plan ahead and provide suggestions in class setting, job seeking, research direction .etc.</p>
						  </section>
					  </div>
						<div class="features-row">
							<section>
								<img src="images/3.png" width="80" height="80">
								<h3>VIP Treatment</h3>
								<p>Our counseling services are always individual. One member of our team will be fully responsible for your application. We provide efficient and professional services.</p>
						  </section>
							<section>
								<img src="images/4.png" width="80" height="80">
							  <h3>Personal Tailor</h3>
								<p>Our team member will learn your background, dig your potential and provide plan and suggestions based on your characteristics. We can maximum your education investment.</p>
						  </section>
						</div>
                     </section>
                <section class="box special features">
                  <h2>Why you will love DreamOverseas</h2>
                  <div class="features-row">
                  <br>
                  <p><span class="image left"><img src="images/cap-icon.png"></span><strong2>Admissions Experience</strong2><br>“Because my consultant worked in admissions at Yale University, he provided crucial advice that was always spot-on and he knew the admissions process inside and out. Thank you so much DreamOverseas!” <br><strong1>-Rolando C.</strong1></p>
                  <p><span class="image left"><img src="images/book-icon.png"></span><strong2>Insider Expertise</strong2><br>“My consultant provided me with tons of information about Columbia that was not readily available through my online research. She helped me to convey my story in a vivid and memorable way.”<br>
<strong1> -Ben C.</strong1></p>
                  <p><span class="image left"><img src="images/person-icon.png"></span><strong2>Personal Attention</strong2><br>“I felt that my consultant’s strength was establishing a personal connection with me, understanding who I am and what I want, then channeling those elements into composing the best possible application.” <br>
<strong1> -Dan S.</strong1></p>
                  <p><span class="image left"><img src="images/admit-icon.png" width="91" height="77"></span><strong2>Proven Results</strong2><br>
“As stressful as it was applying to colleges, I am eternally grateful to my consultant for helping me through the process and also making it fun. I got into Princeton University through early action. Go Tigers!”<br>
<strong1> -Maria J.</strong1></p>
					</div>
                </section>
<div class="row">
  <div class="12u 12u(narrower)"> </div>
</div>
		  </section>

			<!-- CTA -->
				<section id="cta">

					<h2>Sign up to get a free profile evaluation today.</h2>
					<center><a href="signup.html" class="button">Sign Up</a></center>

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
					  <li>Design: Tong, Patrick, Cain</li
					</ul>
				</footer>

	</div>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>