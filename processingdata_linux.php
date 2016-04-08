<?php
$UserEmail = $_POST['Email'];
require 'PHPMailer-master/PHPMailerAutoload.php';
 
$results_messages = array();
 
$mail = new PHPMailer(true);
$mail->CharSet = 'utf-8';
ini_set('default_charset', 'UTF-8');
 
class phpmailerAppException extends phpmailerException {}
 
try {
$to = $UserEmail;
if(!PHPMailer::validateAddress($to)) {
  throw new phpmailerAppException("Email address " . $to . " is invalid -- aborting!");
}
$mail->isMail();
$mail->addReplyTo("no-reply@dreamoverseas.com", "Dreamoverseas");
$mail->setFrom("no-reply@dreamoverseas.com", "Dreamoverseas");
$mail->addAddress($UserEmail, "Customer");
$mail->Subject  = "Welcome to DreamOverseas!";
$body = <<<'EOT'
Welcome our valuable! You have been successfully registered! We are happy to have you as one of our family!
EOT;
$mail->msgHTML($body, dirname(__FILE__), true); //Create message bodies and embed images
 
try {
  $mail->send();
  $results_messages[] = "Message has been sent using MAIL";
}
catch (phpmailerException $e) {
  throw new phpmailerAppException('Unable to send to: ' . $to. ': '.$e->getMessage());
}
}
catch (phpmailerAppException $e) {
  $results_messages[] = $e->errorMessage();
}
 
if (count($results_messages) > 0) {
  echo "<h2>Run results</h2>\n";
  echo "<ul>\n";
foreach ($results_messages as $result) {
  echo "<li>$result</li>\n";
}
echo "</ul>\n";
}
?>

<?php
    session_start();
    $_SESSION['Username']=$row['Username'];
?>

<?php
    $servername = 'localhost';
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
    
    Header("Location: register_successful.html");
    mysqli_close($conn);
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
