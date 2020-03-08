<?php
session_start();
include('../_includes/connect.php');

if(!isset($_SESSION["admin_email"]) || !isset ($_SESSION["admin_password"])){
	header("location: index.php");
}
?>

<!DOCTYPE html>
<html >
<head>
	<link rel="stylesheet" href="../_css/styles.css"/>

	<title>Welcome Adm</title>
</head>
<body id="WelcomeAdm">
	<h1><center> Welcome Administrator</h1></center>
	<nav id="MenuWelcomeAdm">
		<ul type = "circle">
			<li><a href="viewCustomerDetails.php"> View / Delete Customer Details </a></li>
			<li><a href="viewBarberDetails.php"> View / Delete Barber Details </a></li>
			<li><a href="viewBookingDetails.php"> View / Delete boooking Details</a></li>
			<li><a href="verifyProvider.php"> Verify a Provider </a></li>
			<li><a href="createAdm.php"> Create another Administrator </a></li>
			<li><a href= "../_includes/logout.php">Logout</a></li>
		</nav>
	</body>

</html>