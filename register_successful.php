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
		<title>Sign Up - DreamOverseas</title>
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
				<section id="main" class="container 75%">
					<header>
					  <h2>Congratulations!</h2>
					  <p>You have been successfully registered!
                      <br>You will be automatically redirected to <a href="index.php">mainpage</a> in <span id="jumpTo">5</span> seconds.</p>
                      <!--<script> window.setInterval("location='index.html'",5000); </script>-->
					</header>
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

			<script type="text/javascript">
	        function countDown(secs, surl) {
	            var jumpTo = document.getElementById('jumpTo');
	            jumpTo.innerHTML = secs;
	            if (secs-- > 0) {
	                setTimeout("countDown(" + secs + ",'" + surl + "')", 1000);
	            }
	            else {
	                location.href = surl;
	            }
	        }    
    		</script>

			<script type="text/javascript">countDown(5, 'signin.php');</script>

	</body>
=======
<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Sign Up - DreamOverseas</title>
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
							<li><a href="index.html">Home</a></li>
							<li><a href="aboutus.html">About Us</a></li>
							<li><a href="#" class="button">Sign Up</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container 75%">
					<header>
					  <h2>Congratulations!</h2>
					  <p>You have been successfully registered!
                      <br>You will be automatically redirected to <a href="index.html">mainpage</a> in <span id="jumpTo">5</span> seconds.</p>
                      <!--<script> window.setInterval("location='index.html'",5000); </script>-->
					</header>
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

			<script type="text/javascript">
	        function countDown(secs, surl) {
	            var jumpTo = document.getElementById('jumpTo');
	            jumpTo.innerHTML = secs;
	            if (secs-- > 0) {
	                setTimeout("countDown(" + secs + ",'" + surl + "')", 1000);
	            }
	            else {
	                location.href = surl;
	            }
	        }    
    		</script>

			<script type="text/javascript">countDown(5, 'index.html');</script>

	</body>
</html>