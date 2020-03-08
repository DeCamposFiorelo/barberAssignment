
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



// barber information
$registeradmemail = mysqli_real_escape_string($link, $_REQUEST['admemail']);
$registeradmpassword = mysqli_real_escape_string($link, $_REQUEST['apassword']);
$registeradmname = mysqli_real_escape_string($link, $_REQUEST['afirstname']);
$registeradmsurname = mysqli_real_escape_string($link, $_REQUEST['asurname']);
$registeradmphone = mysqli_real_escape_string($link, $_REQUEST['aphone']);

 
// Attempt insert query execution
$sql = "INSERT INTO administrator(admin_email, admin_password,	first_name,last_name,admin_phone) 
VALUES ('$registeradmemail','$registeradmpassword','$registeradmname', '$registeradmsurname','$registeradmphone')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
	header("refresh:1; url=welcomeAdm.php");
} else{
    echo "Sorry, you can not register this Administator because this account is already exist!";
		header("refresh:4; url=welcomeAdm.php");
}



 
// Close connection
mysqli_close($link);
?>
</body>
</html>