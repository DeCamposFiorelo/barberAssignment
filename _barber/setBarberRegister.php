<?php
session_start();
include('../_includes/connect.php');



if($_SESSION['captcha'] == $_POST['captcha']){
  // barber information
  $registerbarberemail = mysqli_real_escape_string($link, $_REQUEST['registerbarberemail']);
  $registerbarberpassword = mysqli_real_escape_string($link, $_REQUEST['registerbarberpassword']);
  $registerbarbername = mysqli_real_escape_string($link, $_REQUEST['registerbarbername']);
  $registerbarbersurname = mysqli_real_escape_string($link, $_REQUEST['registerbarbersurname']);
  $registerbarberphone = mysqli_real_escape_string($link, $_REQUEST['registerbarberphone']);
  $registerbarberarea = mysqli_real_escape_string($link, $_REQUEST['registerbarberarea']);
  $registerbarberaddress = mysqli_real_escape_string($link, $_REQUEST['registerbarberaddress']);

  // Attempt insert query execution
  $sql = "INSERT INTO barber(barber_email, barber_password, barber_first_name,barber_last_name	,barber_phone,barber_area_location,barber_location)
  VALUES ('$registerbarberemail','$registerbarberpassword','$registerbarbername', '$registerbarbersurname','$registerbarberphone ','$registerbarberarea','$registerbarberaddress')";
  if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    echo "Please wait for your account to be approve.";
    header("refresh:5; url=index.php");
  } else{
    echo "<strong><u><font color='red'>Sorry the user is already register ! " ;
    header("refresh:3; url=index.php");
    die;
  }
  
}




// Close connection
mysqli_close($link);
?>
