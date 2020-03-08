<?php
session_start();
include('../_includes/connect.php');


if($_SESSION['captcha'] == $_POST['captcha']){
	
  $email = mysqli_real_escape_string($link, $_REQUEST['email']);
  $passwordAddress = mysqli_real_escape_string($link, $_REQUEST['password']);
  $first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
  $last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
  $phone_name = mysqli_real_escape_string($link, $_REQUEST['phone_name']);
  // Attempt insert query execution
  $sql = "INSERT INTO customer(customer_email, customer_password, customer_first_name,customer_last_name,customer_phone)
  VALUES ('$email','$passwordAddress','$first_name', '$last_name','$phone_name')";
  


  if(mysqli_query($link, $sql)){
    echo "Records added successfully. ";
	header("refresh:3; url=index.php");

  } else{
    echo "<strong><u><font color='red'>Sorry the user is already register " ;
    header("refresh:3; url=index.php");
    die;
  }
  
  
}




// Close connection
mysqli_close($link);
?>
