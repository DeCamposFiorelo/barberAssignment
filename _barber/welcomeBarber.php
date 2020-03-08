<?php
session_start();
include('../_includes/connect.php');

if(!isset($_SESSION["barber_email"]) || !isset ($_SESSION["barber_password"])){
	header("location: ./index.php");
}
?>


<!DOCTYPE html>
<html>
<head>
<!-- SHOW THE USER EMAIL WHEN HE IS LOGIN-->
	<?php
	$email=($_SESSION["barber_email"]);

	echo"<a><center>Your e-mail is: $email</a></center>";

	?>
<!------------------------------------------->
<!-- CSS LINK-->
	<link rel="stylesheet" href="../_css/styles.css"/>

	<title>Welcome Barber</title>
</head>
<!---BODY---->
<body id="WelcomeAdm">
	<h1><center> <font color=" #273747"><u>Welcome Barber</h1></center></font></u>

	<nav id="MenuWelcomeAdm">
		<ul type = "circle">

			<br/>
			<li><a href="setAvailability.php"> Set your Availability </a></li>
			<li><a href="confirmBooking.php"> Approved Booking </a></li>
			<li><a href="appoinmentStatus.php"> Appointment Status </a></li>
			<li><a href="showAllBooking.php"> Check all your bookings </a></li>
			<li><a href= "../_includes/logout.php">Logout</a></li>


		</nav>
	</br>
</br>
</br>
</br>



</body>
</HTML>
