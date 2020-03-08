<?php
session_start();
include('../_includes/connect.php');
//make sure the client is login in to  access this page
if(!isset($_SESSION["customer_email"]) || !isset ($_SESSION["customer_password"])){
	header("location: ./index.php");
}
?>

<!DOCTYPE html>
<html>
<?php
$email=($_SESSION["customer_email"]);

echo"<a><center>Your E-mail is: $email</a></center>";
?>
<link rel="stylesheet" href="../_css/styles.css"/>

<title>Welcome Customer</title>
</head>
	<body id="WelcomeAdm">
		<h1><center> <font color=" #273747"><u>Welcome Customer</h1></center></font></u>

		<nav id="MenuWelcomeAdm">
			<ul type = "circle">

				<br/>
				<li><a href="askBarber.php"> Find an available barber </a></li></br>
				<li><a href="checkBooking.php"> Check your Booking </a></li></br>
				<li><a href="complain.php"> Problem with a service? Leave your complaint </a></li></br>
				<li><a href="review.php"> Leave your  Review </a></li></br>
				<li><a href= "../_includes/logout.php">Logout</a></li>

				<br/>
			</fieldset>
		</div>
	</body>
	</html>
