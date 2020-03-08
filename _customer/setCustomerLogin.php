<!DOCTYPE html>
<html>
<head>
<!-----------CSS-------->
  <link rel="stylesheet" href="../_css/styles.css"/>
</head>
<!---BODY--->
<body>
  <nav id="menuAfterLogin">
    <ul type = "circle">
    </nav>
    <div class="lpadrao">
      <?php
      // start a session
      session_start();
      include('../_includes/connect.php');

      $email =$_POST['loginemail'];
      $senha=$_POST['loginpassword'];
	//qyery
      $query = mysqli_query($link,"SELECT * FROM customer WHERE customer_email='$email' and customer_password = '$senha'");

      $row = mysqli_num_rows($query);

      if($row>0){
        session_start();
        $_SESSION['customer_email']= $_POST['loginemail'];
        $_SESSION['customer_password']=$_POST['loginpassword'];
        header('location:welcomeClient.php');
      }else {
        echo"<strong><u><font color='red'>Your password or your email its wrong, Please Try again!";
        header("refresh:3; url=index.php");

      }
      ?>
    </body>
    </html>
