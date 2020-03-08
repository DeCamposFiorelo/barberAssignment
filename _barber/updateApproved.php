<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../_css/styles.css">

</head>
<body id="WelcomeAdm" >
	<?php
	session_start();
	include('../_includes/connect.php');
	if(!isset($_SESSION["barber_email"]) || !isset ($_SESSION["barber_password"])){
		header("location: ./index.php");
	}


	$sql = "UPDATE booking SET approved ='$_POST[approved]' WHERE id_booking='$_POST[id]'";
	if (mysqli_query($link, $sql)){
		echo"The booking approve was UPDATE!";
		header("refresh:2; url=confirmBooking.php");
	}else{
		echo"Not UPDATE";}
		?>
	</body>
	</html>
