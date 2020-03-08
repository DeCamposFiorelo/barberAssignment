<?php
session_start();
include('../_includes/connect.php');

if(!isset($_SESSION["admin_email"]) || !isset ($_SESSION["admin_password"])){
	header("location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../_css/styles.css">

</head>
<body>
	<nav id="menuAfterLogin">
		<ul type = "circle">
			<li><a href="welcomeAdm.php"> Back to welcome Page </a></li>
		</ul>
	</nav>
	<div class="admpadrao">


	<form action="insertNewAdm.php" method="post">
		<fieldset id = "usuario"><legend>New Administrator</legend>
			<p><label for="aemail">Email:</label></p>
			<input type="email" name="admemail" required="required" id="aemail" placeholder="mail@exemplo.com.br"/>

			<p><label for="apass">Password: </label></p>
			<input type="password" name="apassword" required="required"  id="apass" minLength="8" maxlength="12" pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$" title="It must
			include at least one uppercase alpha character, one special character and one number, and at least 8 until 12 characters" placeholder=" 8 until 12 characters"/>

			<p><label for="bname">First Name: </label></p>
			<input type="text" name="afirstname" required="required"  id="btext" size"20" maxlength="30" placeholder="First Name"/>

			<p><label for="blast">Surname</label></p>
			<input type="text" name="asurname" required="required"  id="blast" size "20" maxlength="30" placeholder="Surname"/>

			<p><label for="bphone">Phone</label></p>
			<input type="text" name="aphone" required="required"  id="bphone" size"20" maxlength="10" placeholder="0830000000"/>
			<p><input type="submit" class="button" value="Submit"/></p>
		</fieldset>
	</div>
</body>
</html>
