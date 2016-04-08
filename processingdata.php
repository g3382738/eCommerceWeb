<?php
$UserEmail = $_POST['Email'];
require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 1;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'zzzzzz@gmail.com';                 // SMTP username
$mail->Password = 'zzzzzz';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to


$mail->setFrom('tgou1992@gmail.com', 'DreamOverseas');
$mail->addAddress($UserEmail, 'DreamOverseas User');     // Add a recipient

//$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Thanks for your registration';
$mail->Body    = 'Thanks for your registration in Dreamoverseas, we are very excited to have you as one of our clients.';

if(!$mail->send()) {

} else {

}
?>

<?php
require 'stripe-php/init.php';
if ($_POST) {
  \Stripe\Stripe::setApiKey("sk_test_oN5HnBZQcnYdZPE9EggOlu2p");

// Get the credit card details submitted by the form
$token = $_POST['stripeToken'];

// Create the charge on Stripe's servers - this will charge the user's card
try {
  $charge = \Stripe\Charge::create(array(
    "amount" => 1000, // amount in cents, again
    "currency" => "usd",
    "source" => $token,
    "description" => "Example charge"
    ));
} catch(\Stripe\Error\Card $e) {
    die("<script>alert('Banking Information error, please check the information again.');location.href='".$_SERVER["HTTP_REFERER"]."';</script>");
}
}
?>

<?php
    session_start();
    $_SESSION['Username']=$_POST['Username'];
?>

<?php
    $servername = 'localhost:3306';
    $username = 'dreamoverseas';
    $passwordu = '123456gt';
// Create connection
    $conn = new mysqli($servername, $username, $passwordu);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if(! get_magic_quotes_gpc() )
    {
    $Username = addslashes ($_POST['Username']);
    $Email = addslashes ($_POST['Email']);
	$Address = addslashes ($_POST['Address']);
	$City = addslashes ($_POST['City']);
	$State = addslashes ($_POST['State']);
	$ZIP = addslashes ($_POST['ZIP']);
	$Comments = addslashes ($_POST['Comments']);
	$Password = addslashes ($_POST['Password']);
    }
    else
    {
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
	$Address = $_POST['Address'];
	$City = $_POST['City'];
	$State = $_POST['State'];
	$ZIP = $_POST['ZIP'];
	$Comments = $_POST['Comments'];
	$Password = $_POST['Password'];
    }

    $sql = "INSERT INTO dreamoverseas ".
        "(Username,Email,Address,City,State,ZIP,Comments,Password) ".
          "VALUES ".
        "('$Username','$Email','$Address','$City','$State','$ZIP','$Comments','$Password')";
	mysqli_select_db($conn, 'dreamoverseas');
    $retval = mysqli_query( $conn, $sql );
	if(! $retval )
    {
        die("<script>alert('This username or Email has already been used or is invalid. Please input another one.');location.href='".$_SERVER["HTTP_REFERER"]."';</script>");
    }
	
    Header("Location: register_successful.php");
    mysqli_close($conn);
?>
