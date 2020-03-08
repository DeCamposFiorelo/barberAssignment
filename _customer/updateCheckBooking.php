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
	$id = mysqli_real_escape_string($link, $_REQUEST['id']);

	$sql = "UPDATE booking SET customer_email=NULL WHERE id_booking=$id";
	if (mysqli_query($link, $sql)){

		header("refresh:3; url=welcomeClient.php");
		echo"Your booking was delete !";
	}else{
		echo"Not UPDATE";}
		mysqli_close($link);
		?>
	</body>
	</html>
