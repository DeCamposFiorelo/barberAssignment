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

	$id = mysqli_real_escape_string($link, $_REQUEST['id']);

	$sql = "DELETE FROM booking where id_booking = '$id'";
	if (mysqli_query($link, $sql)){

		header("refresh:3; url=viewBookingDetails.php");
		echo"Thanks,The Appoiment was Cancel!";
	}else{
		echo"Not UPDATE";}
		?>
	</body>
	</html>
