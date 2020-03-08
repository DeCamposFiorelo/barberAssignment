<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/styles.css"/>

</head>
<body>
  <nav id="menuAfterLogin">
    <ul type = "circle">
    </nav>
    <div class="barberdetails">
      <?php
      // START A SESSION
      session_start();
      include('../_includes/connect.php');

      $emailbarber =$_POST['loginbarberemail'];
      $senhabarber=$_POST['loginbarberpassword'];
	//query
      $query = mysqli_query($link,"SELECT * FROM barber WHERE barber_email='$emailbarber' and barber_password = '$senhabarber'");

      $row = mysqli_num_rows($query);

      if($row>0){
        session_start();
        $_SESSION['barber_email']= $_POST['loginbarberemail'];
        $_SESSION['barber_password']=$_POST['loginbarberpassword'];
        header('location:verifyBarberPending.php');
      }else {
        echo"<strong><u><font color='red'>Your password or your email its wrong, Please Try again!";
        header("refresh:3; url=index.php");

      }
      ?>
    </body>
    </html>
