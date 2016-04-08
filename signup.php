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
							<li><a href="index.php">Home</a></li>
							<li><a href="aboutus.php">About Us</a></li>
							<li><a href="signin.php" class="button">Sign In</a></li>
							<li><a href="#" class="button">Sign Up</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container 75%">
					<header>
					  <h2>Sign Up</h2>
					  <p>Sign up now to experience our professional services.</p>
					</header>
				  <div class="box">
						<font size="6em" color="black">Personal Information</font>
						<br><br>
						<form id="payment-form" method="post" action="processingdata.php">
							<div class="row uniform 50%">
								<div class="6u 12u(mobilep)">
									<input name="Username" type="text" required id="Username" placeholder="Username" onblur="UserValid(this.value)" pattern="[a-zA-Z]{0,30}" />
                                  <span id="checkid" class="error_strings"></span>
								</div>
								<div class="6u 12u(mobilep)">
									<input name="Email" type="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="Email" placeholder="E-mail" onblur="EmailValid(this.value)" />
                                  <span id="checkemail" class="error_strings"></span>
								</div>
							</div>
                            
                            <div class="row uniform 50%">
								<div class="6u 12u(mobilep)">
									<input name="Password" type="password" id="Password" placeholder="Enter your password" value="" />
                                  <span id="myform_Password_errorloc" class="error_strings"></span>
								</div>
								<div class="6u 12u(mobilep)">
									<input name="CPassword" type="password" id="CPassword" placeholder="Reconfirm your password" value="" />
                                  <span id="myform_CPassword_errorloc" class="error_strings"></span>
								</div>
							</div>

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

						
						<br>
						<font size="6em" color="black">Banking Information</font>
						<br><br>
						
							<div class="row uniform 50%">
							  <div class="12u 12u(mobilep)">
								  <input name="CardId" type="text" required id="CardId" class="card-number" placeholder="Please input your card number" pattern="[0-9]{16}" />
                                <span class="payment-errors"></span>
								</div>
							</div>
							<div class="row uniform 50%">
								<div class="12u 12u(mobilep)">
								  <input name="CName" type="text" id="CName" required pattern="^[A-Z]+\s+[A-Z]{1,40}$" placeholder="Please enter the holder's name(Uppercase)" data-stripe="name" value="" />
                                  <span id="eCName" class="error_strings"></span>
								</div>
							</div>
                            
                            <div class="row uniform 50%">
							  <div class="4u 12u(mobilep)">
							    <input name="CVC" type="text" id="CVC" required pattern="[0-9]{3}" placeholder="CVC number" class="card-cvc" />
                                <span id="eCVC" class="error_strings"></span>
							  </div>
								<div class="4u 12u(mobilep)">
								  <input name="emonth" type="text" id="emonth" required pattern="[0-9]{1,2}" placeholder="Expiration Month" class="card-expiry-month" onblur="JudgeMonth(this)" />
                                    <span id="eemonth" class="error_strings"></span>
								</div>
								<div class="4u 12u(mobilep)">
								  <input name="eyear" type="text" id="eyear" required pattern="[0-9]{4}" placeholder="Expiration Year" class="card-expiry-year" onblur="JudgeYear(this)" />
                                  <span id="eeyear" class="error_strings"></span>
								</div>
							</div>
							<div class="row uniform">
								<div class="12u">
									<font color="red"><center>* You will be charged $10 for our basic services.</center></font>
									<ul class="actions align-center">
									  <li><input type="submit" id="add" class="submit-button" value="Sign Up Now" /></li>
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
			<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
    		<script language="JavaScript" src="assets/js/gen_validatorv4.js" type="text/javascript"></script>
    		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
            
            <script type="text/javascript">
				function JudgeMonth(obj)
				{
					if(parseInt(obj.value)==obj.value && parseInt(obj.value)>=1 && parseInt(obj.value)<=12)
						document.getElementById("eemonth").innerHTML=""
       				else
           				document.getElementById("eemonth").innerHTML="Enter a valid Month.";
				}
				
				function JudgeYear(obj)
				{
					if(parseInt(obj.value)==obj.value && parseInt(obj.value)>=2016 && parseInt(obj.value)<=2100)
						document.getElementById("eeyear").innerHTML=""
       				else
           				document.getElementById("eeyear").innerHTML="Enter a valid Year.";
				}
				
			</script>
            
    	<script type="text/javascript">
            // this identifies your website in the createToken call below
            Stripe.setPublishableKey('pk_test_hHUVXUUIpPMju1R9Sw2nGMiH');
            function stripeResponseHandler(status, response) {
                if (response.error) {
                    // re-enable the submit button
                    $('.submit-button').removeAttr("disabled");
                    // show the errors on the form
                    $(".payment-errors").html(response.error.message);
                } else {
                    var form$ = $("#payment-form");
                    // token contains id, last4, and card type
                    var token = response['id'];
                    // insert the token into the form so it gets submitted to the server
                    form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
                    // and submit
                    form$.get(0).submit();
                }
            }
            $(document).ready(function() {
                $("#payment-form").submit(function(event) {
                    // disable the submit button to prevent repeated clicks
                    $('.submit-button').attr("disabled", "disabled");
                    // createToken returns immediately - the supplied callback submits the form if there are no errors
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                    return false; // submit from callback
                });
            });
        </script>

			<script language="JavaScript" type="text/javascript">
			//You should create the validator only after the definition of the HTML form
			  var frmvalidator  = new Validator("payment-form");
				frmvalidator.EnableOnPageErrorDisplay();
				frmvalidator.EnableMsgsTogether();
				
				//frmvalidator.addValidation("CardId","maxlen=16",	"Please enter a valid card number.");
				//frmvalidator.addValidation("CardId","minlen=16",	"Please enter a valid card number.");
				 
				frmvalidator.addValidation("Password","req","Please enter your Password.");
				frmvalidator.addValidation("Password","maxlen=30",	"Max length for Password is 20.");
				frmvalidator.addValidation("Password","minlen=6",	"Min length for Password is 6.");
				frmvalidator.addValidation("Password","neelmnt=Username","Password is the same as Username!");

				frmvalidator.addValidation("CPassword","eqelmnt=Password","Not same as password.");

			</script>
            
            
			<script> 
				function UserValid(str)
				{
				var xmlhttp;
				if (str.length==0)
				  { 
				  document.getElementById("checkid").innerHTML="Please input your Username.";
				  return;
				  }
				var regExp = /^[\u4e00-\u9fa5_a-zA-Z]+$/;
				if (!regExp.test(str))
				{
					document.getElementById("checkid").innerHTML="Enter a valid Username.";
					return;
				}

				if (window.XMLHttpRequest)
				  {// code for IE7+, Firefox, Chrome, Opera, Safari
				  xmlhttp=new XMLHttpRequest();
				  }
				else
				  {// code for IE6, IE5
				  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				  }
				xmlhttp.onreadystatechange=function()
				  {
				  if (xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						if (xmlhttp.responseText==1){
							document.getElementById("checkid").innerHTML="This username has been used.";
						}
						else {
							document.getElementById("checkid").innerHTML="<font color='green'>You can use this username!</font>";
						}
					}
				  }
				xmlhttp.open("GET","uservalid.php?q="+str, true);
				xmlhttp.send();
				}
				
				function EmailValid(str)
				{
				var xmlhttp;
				if (str.length==0)
				  { 
				  document.getElementById("checkemail").innerHTML="Please input your E-mail.";
				  return;
				  }
				var regExp = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;
				if (!regExp.test(str))
				{
					document.getElementById("checkemail").innerHTML="Enter a valid Email address.";
					return;
				}
				 
				if (window.XMLHttpRequest)
				  {// code for IE7+, Firefox, Chrome, Opera, Safari
				  xmlhttp=new XMLHttpRequest();
				  }
				else
				  {// code for IE6, IE5
				  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				  }
				xmlhttp.onreadystatechange=function()
				  {
				  if (xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						if (xmlhttp.responseText==1){
							document.getElementById("checkemail").innerHTML="This email has been used.";
						}
						else {
							document.getElementById("checkemail").innerHTML="<font color='green'>You can use this email!</font>";
						}
					}
				  }
				xmlhttp.open("GET","emailvalid.php?q="+str,true);
				xmlhttp.send();
				}
            </script>


	</body>
</html>