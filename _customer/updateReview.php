<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../_css/styles.css">

</head>
<body id="WelcomeAdm" >
	<?php
	session_start();
	include('../_includes/connect.php');

	if(!isset($_SESSION["customer_email"]) || !isset ($_SESSION["customer_password"])){
		header("location: ./index.php");
	}


	$sql = "UPDATE booking SET review ='$_POST[review]' WHERE id_booking='$_POST[id]'";
	if (mysqli_query($link, $sql)){

		header("refresh:2; url=review.php");
		echo"Thanks for leave a review!";
	}else{
		echo"Not UPDATE";}
		?>
	</body>
	</html>
