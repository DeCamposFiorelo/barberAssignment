<?php 
session_start();
include('../_includes/connect.php');

if(!isset($_SESSION["customer_email"]) || !isset ($_SESSION["customer_password"])){
	header("location: ./index.php");
}


$email=($_SESSION["customer_email"]);
//QUERY
$sql = "UPDATE booking SET customer_email ='$email' WHERE id_booking='$_POST[id]'";


if (mysqli_query($link, $sql)){

	header("refresh:2; url=welcomeClient.php");
	echo"<strong><u><font color='red'>Your booking was made, Please wait for the Barber Approved";
}else{
	echo"Not UPDATE";}
	?>
