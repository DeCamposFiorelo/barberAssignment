<?php
session_start();
include('../_includes/connect.php');
//make sure the client is login in to  access this page
if(!isset($_SESSION["customer_email"]) || !isset ($_SESSION["customer_password"])){
	header("location: ./index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<!-- CSS LINK--->
	<link rel="stylesheet" href="../_css/styles.css"/>
	<!-- Style for the table--->
	<style>
	table, th, td {
		border: 1px solid black;

	}
</style>
</head>
<!-------BODY----------->
<body>
<!--- This section is the  MENU(BACK TO WELCOME PAGE)-------------------------------->
	<nav id="menuAfterLogin">
		<ul type = "circle">
			<li><a href="welcomeClient.php"> Back to welcome Page </a></li>
		</ul>
	</nav>
<!------TABLE---------->
	<div class="lpadrao">
		<table><tr>
			<th>Barber email</th>
			<th>Booking date</th>
			<th>Booking time</th>
			<th>Location area</th>
			<th>Address</th>
		</tr>

		<?php

		$searcharea = mysqli_real_escape_string($link, $_REQUEST['searcharea']);
				//query
		$sql = "SELECT booking.barber_email,booking.booking_date,booking.booking_time,booking.customer_email,booking.id_booking,barber.barber_area_location,barber.barber_location FROM barber
		JOIN booking on barber.barber_email=booking.barber_email where booking.customer_email IS NULL  AND barber.barber_area_location=('$searcharea') ";
		$records = mysqli_query($link, $sql);
		if ($records->num_rows > 0) {
			while($row = mysqli_fetch_array($records)){   //Creates a loop to loop through results

				echo "<tr><form action=updateBookingBarber.php method=post>";
				echo"<td>".$row['barber_email']."</td>";
				echo"<td>".$row['booking_date']."</td>";
				echo"<td>".$row['booking_time']."</td>";
				echo"<input type= hidden name=customeremail value='".$row['customer_email']."'>";
				echo"<td>".$row['barber_area_location']."</td>";
				echo"<td>".$row['barber_location']."</td>";
				echo"<input type= hidden name=id value='".$row['id_booking']."'>";


				echo"<td><input type=submit  class=button value=Booking>";


				echo"</form></tr>";


			}
		}else {// if the barber is not available or not register it will show that message
			echo"</br>";
			echo "<strong><u><font color='red'>Sorry, but there is not available barber  in that address or he is not register, Please try again!</u></strong>";

			header("refresh:5; url=askBarber.php");

		}


		?>
	</body>
	</html>
