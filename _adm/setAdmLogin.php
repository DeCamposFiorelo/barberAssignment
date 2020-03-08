<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/styles.css"/>

</head>
<body>
  <nav id="menuAfterLogin">
    <ul type = "circle">
    </nav>
    <div class="lpadrao">
      <?php
      // START SESSION
      session_start();
      include('../_includes/connect.php');

      $emailadm =$_POST['loginadmemail'];
      $senhaadm=$_POST['loginadmpassword'];
	//QUERY
      $query = mysqli_query($link,"SELECT * FROM administrator WHERE admin_email='$emailadm' and admin_password = '$senhaadm'");

      $row = mysqli_num_rows($query);

      if($row>0){
        session_start();
        $_SESSION['admin_email']= $_POST['loginadmemail'];
        $_SESSION['admin_password']=$_POST['loginadmpassword'];
        header('location:welcomeAdm.php');
      }else {
        echo"<strong><u><font color='red'>Your password or your email its wrong, Please Try again!";
        header("refresh:3; url=index.php");

      }
      ?>
	  </div>
	 </body>
</html>