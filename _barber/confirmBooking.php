<?php 
session_start();
include('../_includes/connect.php');
if(!isset($_SESSION["barber_email"]) || !isset ($_SESSION["barber_password"])){
  header("location: ./index.php");

}?>

<!DOCTYPE html>
<html>
<head>
<!--- CSS LINK---->
  <link rel="stylesheet" href="../_css/styles.css"/>
 <!--- STYLE FOR THE TABLE--->
  <style>
  table, th, td {
    border: 1px solid black;

  }
</style>
<title>Welcome Barber</title>
</head>
<!---BODY------------------>
<body>
  <nav id="menuAfterLogin">
    <ul type = "circle">
      <li><a href="welcomeBarber.php"> Back to welcome Page </a></li>
    </ul>
  </nav>
  <div class="bookingdetails">
    <fieldset><legend>Booking Approve</legend>
      <table>
        <tr>
          <th>Booking number</th>
          <th>Barber email</th>
          <th>Client email</th>
          <th>Booking date</th>
          <th>Booking time</th>
          <th> Approved (Y,N)</th>
          <th> Approve</th>

        </tr></fieldset>

      </div>
      <?php

      $email=($_SESSION["barber_email"]);
	  //QUERY
      $sql = "SELECT barber_email,customer_email,booking_date,booking_time,approved,id_booking FROM booking where customer_email>'' and barber_email=('$email') order by id_booking desc  ";
      $records = mysqli_query($link, $sql);
      if ($records->num_rows > 0) {
        while($row = mysqli_fetch_array($records)){   //Creates a loop to loop through results

          echo "<tr><form action=updateApproved.php method=post>";
          echo"<td><input type=text name=id value='".$row['id_booking']."'></td>";
          echo"<td>".$row['barber_email']."</td>";
          echo"<td>".$row['customer_email']."</td>";
          echo"<td>".$row['booking_date']."</td>";
          echo"<td>".$row['booking_time']."</td>";
          echo"<td><input type=text name=approved required=required placeholder='Please insert Y or N 'value='".$row['approved']."'></td>";
          echo"<td><input class=button type=submit>";
          echo"</form></tr>";
        }
      }else {
        echo"</br>";
        echo "<strong><u><font color='red'>There is not Booking to be Approved!</u></strong>";

        header("refresh:5; url=welcomeBarber.php");
      }
      ?>
    </body>
    </html>
