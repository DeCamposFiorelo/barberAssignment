<?php
session_start();
include('../_includes/connect.php');


if(!isset($_SESSION["barber_email"]) || !isset ($_SESSION["barber_password"])){
	header("location: ./index.php");
}

$email=($_SESSION["barber_email"]) ;




// Attempt insert query execution
$sql = "SELECT verify,barber_email FROM barber where verify=y and barber_email=$email ";
$result = $link->query($sql);
if ($result> 0) {
	echo "YOU ARE ALLOWED TO GET IN";
	header('location:welcomeBarber.php');

} else{
	echo "YOU ARE NOT ALLOWED";
}



// Close connection
mysqli_close($link);
?>
