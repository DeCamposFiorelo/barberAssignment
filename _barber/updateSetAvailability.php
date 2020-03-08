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

	$email=($_SESSION["barber_email"]) ;


	$bookingdate = mysqli_real_escape_string($link, $_REQUEST['insertdata']);
	$bookingtime= mysqli_real_escape_string($link, $_REQUEST['inserttime']);


	// Attempt insert query execution
	$sql = "INSERT INTO booking(barber_email, booking_date,booking_time)
	VALUES ('$email','$bookingdate','$bookingtime')";
	if(mysqli_query($link, $sql)){
		echo "Records added successfully.";
		header("refresh:3; url=setAvailability.php");

	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}




	// Close connection
	mysqli_close($link);
	?>
</body>
</html>
