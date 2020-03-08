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
</head>
<!--body-->
<body>
<!--- This section is the  MENU(BACK TO WELCOME PAGE)-------------------------------->
	<nav id="menuAfterLogin">
		<ul type = "circle">
			<li><a href="welcomeClient.php"> Back to welcome Page </a></li>
		</ul>
	</nav>
<!----------------------------------------------------------------------------------->
	<div class="barberdetails">
		<form action="BookingBarber.php" method="post">
			<fieldset id = "usuario"><legend> Insert a barber Email</legend><br/>
				<p>Email: <input type="email" name="searchemail" required="required" id="bemail" placeholder="mail@exemplo.com.br"/></p>
				<p><input type="submit" class="button "value="Submit"/></p>
			</fieldset>
	</div>



		</body>
		</html>
