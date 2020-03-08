<?php
session_start();
include('../_includes/connect.php');
if(!isset($_SESSION["barber_email"]) || !isset ($_SESSION["barber_password"])){
	header("location: ./index.php");


}

$email=($_SESSION["barber_email"]);



$sql = "SELECT * from barber where barber_email='$email' and verify='Y'";
$records = mysqli_query($link, $sql);
if ($records->num_rows > 0) {
	while($row = mysqli_fetch_array($records)){   //Creates a loop to loop through results

		header("refresh:1; url=welcomeBarber.php");

		echo"</form></tr>";
	}}else {
		echo"</br>";
		echo "<strong><u><font color='red'>Sorry your account is pending, Please wait to be approve!</u></strong>";

		header("refresh:5; url=index.php");
	}
	?>
