
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../_css/styles.css">

</head>
<body id="WelcomeAdm" >

	<?php
	session_start();
	include('../_includes/connect.php');

	if(!isset($_SESSION["admin_email"]) || !isset ($_SESSION["admin_password"])){
		header("location: index.php");
	}

	$email = mysqli_real_escape_string($link, $_REQUEST['email']);

	$sql = "DELETE FROM customer where customer_email = '$email'";
	if (mysqli_query($link, $sql)){

		header("refresh:3; url=viewCustomerDetails.php");
		echo"Thanks, The account was Delete!";
	}else{
		echo"Sorry it is not possible to delete the customer account in the moment because he has already an Appoinment, Please Delete the Booking first!";}
	header("refresh:3; url=viewCustomerDetails.php");
		?>
	</body>
	</html>
