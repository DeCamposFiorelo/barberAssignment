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
	<div class="bookingdetails">
		<table>
			<tr>
				<th> Booking number</th>
				<th>Barber email</th>
				<th>Booking date</th>
				<th>Booking time</th>
				<th> Approved</th>
				<th> Booking Status</th>
				<th> Delete</th>
			</tr>
			<?php
			$email=($_SESSION["customer_email"]);
			//query
			$sql = "SELECT barber_email,booking_date,booking_time,customer_email,approved,id_booking ,status_booking FROM booking where customer_email=('$email') ";
			$records = mysqli_query($link, $sql);
			if ($records->num_rows > 0) {
			while($row = mysqli_fetch_array($records)){   //Creates a loop to loop through results

				echo "<tr><form action=updateCheckBooking.php method=post>";
				echo"<td><input type= text name=id value='".$row['id_booking']."'></td>";
				echo"<td>".$row['barber_email']."</td>";
				echo"<td>".$row['booking_date']."</td>";
				echo"<td>".$row['booking_time']."</td>";
				echo"<td>".$row['approved']."</td>";
				echo"<td>".$row['status_booking']."</td>";
				echo"<td><input type=submit class=button value=Delete>";
				echo"</form></tr>";
			}
			}else {

				echo "<strong><u><font color='red'>You don't have any appointment in the moment!</u></strong>";

				header("refresh:5; url=welcomeClient.php");
			}
			?>
		</body>
		</html>
