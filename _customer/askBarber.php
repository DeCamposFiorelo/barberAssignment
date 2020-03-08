<?php

session_start();
include('../_includes/connect.php');

//make sure the client is login in to  access this page
if(!isset($_SESSION["customer_email"]) || !isset ($_SESSION["customer_password"])){
	header("location: ./index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<!-- CSS LINK--->
	<link rel="stylesheet" href="../_css/styles.css"/>
	<title>Welcome Customer</title>
</head>
<body>
	<!--- This section is the  MENU(BACK TO WELCOME PAGE)-------------------------------->
	<nav id="menuAfterLogin">
		<ul type = "circle">
			<li><a href="welcomeClient.php"> Back to welcome Page </a></li>
		</ul>
	</nav>
	<!--- This section is the  MENU-------------------------------->
	<div class="barberdetails">;
		<fieldset><legend>Search for an Appoiment</legend>
			<br/>
			<p>&bull;<a href="serachEmail.php"> Find an available barber by email </a></p>
			<p>&bull;<a href="serachLocation.php"> Find an  available barber by Location</a></p>
			<p>&bull;<a href="serachAll.php"> Search all available barbers </a></p>

			<br/>
		</fieldset>
	</div>
</body>
</html>
