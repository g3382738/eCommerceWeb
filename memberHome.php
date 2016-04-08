<?php
	session_start();
	if(!isset($_SESSION['Username'])){
			$home_url = 'signin.php';
    		header('Location: '.$home_url);
	}
?>

<html>
	<head>
		<title><?php echo $_SESSION['Username'];?>'s Home Page - Dreamoverseas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/member.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
		  <header id="header" class="alt">
                <img src="images/logo.png" width="200" height="42">
				    <nav id="nav">
						<ul>
						  		<li><a href="">Welcome, <?php echo $_SESSION['Username'];?></a></li>
						  		<li><a href="index.php">Home</a></li>
						  		<li><a href="aboutus.php">About Us</a></li>
						  		<li><a href="Signout.php" class="button">Sign Out</a></li>
					  </ul>
		    		</nav>
		  </header>

		<!-- Banner -->
		  <section id="banner">
					
						  <h2><?php echo $_SESSION['Username'];?>'s Home Page</h2>
					
		  </section> 
<!-- Main -->
				<section id="main" class="container">

                 <section class="box special features">
                  <h3>Welcome, our valuable client <?php echo $_SESSION['Username'];?>. </h3>
                  <div class="features-row">
                  	<h3>Services you have: </h3>
                    <p><span class="image left"><img src="images/earlybird.png" width="105" height="105"></span><a href= "#"><strong2>Early Bird Services</strong2></a><br>
                  		Take advantage of the time prior to your senior year to lessen the grueling nature of applying and maximize your opportunity for success.
                        Implement advice and support from advisors including school counselors, parents, and us. </p>
                    <p><span class="image left"><img src="images/recom.png" width="105" height="105"></span><a href= "#"><strong2>University Recommendation</strong2></a>
                  		<br>Fill in the form to obtain our professional university selection suggestion. We will analyze your basic education background and provide you with the stretch universities, target
                  		universities and "safe" universities to give you a balanced approach to the admissions process.</p><br>
                  		<a href="#scrolldown" class="button fit scrolly">Get more services!</a>
					</div>
                </section>
					
                <div class="row">
						<div class="6u 12u(narrower)">
							<section class="box special" id="scrolldown">
								<span class="image featured"><img src="images/test3.png" alt="test1" width="90" height="232"/></span>
								<h3>TOEFL/IELTS</h3>
								<p>Our primary service is to coordinate 1-1 TOEFL/IELTS tutoring.  We have a small team of extremely experienced and 
									accomplished tutors who can work with you online via Skype or in-person (depending on your location).</p>
								<ul class="actions">
									<li><a href="cartService.php" class="button special">Detail</a></li>
								</ul>
							</section>

						</div>
						<div class="6u 12u(narrower)">

							<section class="box special">
								<span class="image featured"><img src="images/test2.jpg" alt="test2" width="90" height="232"/></span>
								<h3>GRE/GMAT</h3>
								<p>Receive personally tailored GRE/GMAT lessons from exceptional tutors in a one-on-one setting. We focus on connecting
									 you with in-home GRE/GMAT tutoring that offers flexible scheduling and your choice of locations.</p>
								<ul class="actions">
									<li><a href="cartService.php" class="button special">Detail</a></li>
								</ul>
							</section>

						</div>
                        <div class="6u 12u(narrower)">

							<section class="box special">
								<span class="image featured"><img src="images/test1.jpg" alt="test2" height="232"/></span>
								<h3>Essay Structuring & editing</h3>
								<p>Your essays are the one true opportunity you possess to interpret your achievements and have complete control over your messaging. While other elements are fixed,
									 your essays are flexible differentiators which must be tailored to your brand and each program.</p>
								<ul class="actions">
									<li><a href="cartService.php" class="button special">Detail</a></li>
								</ul>
							</section>

						</div>
                       <div class="6u 12u(narrower)">

							<section class="box special">
								<span class="image featured"><img src="images/test4.jpg" alt="test2" height="232"/></span>
								<h3>Interview Preparation</h3>
								<p> Structured practice can breathe vitality in your application and solidify your acceptance. We help to direct your application to demonstrate passion, a vibrant personality, an ability to contribute on campus, and growth from past mistakes. </p>
								<ul class="actions">
									<li><a href="#" class="button special">Detail</a></li>
								</ul>
							</section>

						</div>
					</div>
<div class="row">
  <div class="12u 12u(narrower)"> </div>
</div>

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
					></ul>
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