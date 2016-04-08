<?php
	session_start();
	if(isset($_SESSION['Username'])){
		$jump_url = 'memberHome.php';
    	header('Location: '.$jump_url);
	}
?>


<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Sign In - DreamOverseas</title>
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
							<li><a href="index.php">Home</a></li>
							<li><a href="aboutus.php">About Us</a></li>
							<li><a href="#" class="button">Sign In</a></li>
							<li><a href="signup.php" class="button">Sign Up</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container 50%">
					<header>
					  <h2>Sign In</h2>
					  <p>Sign in to access your account.</p>
					</header>
					<div class="box">
						<form id="myform" method="post" action="processingsignin.php">
							<div class="row uniform 50%">
								<div class="12u 12u(mobilep)">
									<input name="Username" type="text" required id="Username" required placeholder="Enter your Username" pattern="[a-zA-Z]{0,30}" />
                                    
								</div>
								<!--
								<div class="6u 12u(mobilep)">
									<input name="Email" type="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="Email" placeholder="E-mail" onblur="EmailValid(this.value)" />
                                    <span id="checkemail" class="error_strings"></span>
								</div>
							-->
							</div>
                            
                            <div class="row uniform 50%">
								<div class="12u 12u(mobilep)">
									<input name="Password" type="password" id="Password" required placeholder="Enter your password" value="" />
								</div>
								<!--
								<div class="6u 12u(mobilep)">
									<input name="CPassword" type="password" id="CPassword" placeholder="Reconfirm your password" value="" />
                                    <span id="myform_CPassword_errorloc" class="error_strings"></span>
								</div>
							-->
							</div>

<!--
                          <div class="row uniform 50%">
								<div class="12u 12u(mobilep)">
									<input name="Address" type="text" id="Address" placeholder="Input your detailed address(Apartment Number, Street)" value="" />
							  </div>
							</div>
							<div class="row uniform 50%">
								<div class="4u 12u(mobilep)">
									<input name="City" type="text" id="City" pattern="[a-zA-Z]{0,30}" placeholder="City" value="" />
								</div>
								<div class="4u 12u(mobilep)">
								  <input name="State" type="text" id="State" pattern="[a-zA-Z]{0,30}" placeholder="State" value=""/>
								</div>
                                <div class="4u 12u(mobilep)">
									<input name="ZIP" type="text" pattern="[0-9]{0,10}" id="ZIP" placeholder="ZIP code" value="" />
								</div>
							</div>
							<div class="row uniform 50%">
								<div class="12u">
									<textarea name="Comments" id="Comments" placeholder="Enter anything you want to ask or commend" rows="3"></textarea>
								</div>
							</div>
						-->
							<div class="row uniform">
								<div class="12u">
									<ul class="actions align-center">
										<li><input type="submit" id="add" value="Sign In" /></li>
									</ul>
								</div>
							</div>
						</form>

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
            <script language="JavaScript" src="assets/js/gen_validatorv4.js" type="text/javascript"></script>


	</body>
</html>