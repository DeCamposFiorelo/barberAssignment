<?php 
session_start();
include('../_includes/connect.php');
if(!isset($_SESSION["barber_email"]) || !isset ($_SESSION["barber_password"])){
	header("location: ./index.php");
}


$sql = "UPDATE booking SET status_booking ='$_POST[stbooking]' WHERE id_booking='$_POST[id]'";
if (mysqli_query($link, $sql))
header("refresh:1; url=appoinmentStatus.php");
else
echo"Not UPDATE";
?>
