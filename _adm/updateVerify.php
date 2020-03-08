
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

	$verify = mysqli_real_escape_string($link, $_REQUEST['verify']);
	$barberemail = mysqli_real_escape_string($link, $_REQUEST['barberemail']);

	$sql = "UPDATE barber SET verify ='$_POST[verify]' WHERE barber_email='$_POST[barberemail]'";
	if (mysqli_query($link, $sql)){

		header("refresh:2; url=verifyProvider.php");
		echo"Thanks , now the Provider is Verified";
	}else{
		echo"Not UPDATE";}
		?>
	</body>
	</html>
