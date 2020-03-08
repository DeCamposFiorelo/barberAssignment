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
	<link rel="stylesheet" href="../_css/styles.css"/>

	<title>Welcome Barber</title>
</head>
<body>
	<nav id="menuAfterLogin">
		<ul type = "circle">
			<li><a href="welcomeBarber.php"> Back to welcome Page </a></li>
		</ul>
	</nav>
	<div class="barberdetails";>
		<fieldset><legend>Set your Availability </legend>
			<form method="post" action="updateSetAvailability.php"/>

			<p><label for="bbdate">Insert Date</label></p>
			<input type="date" name="insertdata" id="bbdate" required="required" placeholder=" YYYY-MM-DD"/>

			<p><label for="bbtime">Insert time</label></p>
			<input type="time" name="inserttime" id="bbtime" required="required" placeholder="HH:MM:SS"/>

		</br></br>	<input type="submit" class="button" value="Submit"><br/>

	</fieldset>
</div>


</body>
</html>
