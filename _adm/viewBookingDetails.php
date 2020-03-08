<?php 
session_start();
include('../_includes/connect.php');

if(!isset($_SESSION["admin_email"]) || !isset ($_SESSION["admin_password"])){
	header("location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../_css/styles.css"/>
	<style>
	table, th, td {
		border: 1px solid black;

	}
</style>

</head>
<body>
	<nav id="menuAfterLogin">
		<ul type = "circle">
			<li><a href="welcomeAdm.php"> Back to welcome Page </a></li>
		</ul>
	</nav>
	<div class="bookingdetails">
		<fieldset><legend>Booking Details /Cancel</legend>
			<table>
				<tr>


					<th>booking Number</th>
					<th>Barber Email</th>
					<th>Customer Email</th>
					<th>Booking Date</th>
					<th>Booking time</th>
					<th>Booking Approved</th>
					<th>Booking Status</th>
					<th>Complaint about the Server</th>
					<th>Review</th>
					<th>Cancel</th>

				</tr>
			</fieldset>
		</div>


		<?php


		$sql = "SELECT * FROM `booking` order by approved desc ";
		$records = mysqli_query($link, $sql);

		while($row = mysqli_fetch_array($records)){   //Creates a loop to loop through results

			echo "<tr><form action=deleteBooking.php method=post>";
			echo"<td><input type= text name=id value='".$row['id_booking']."'></td>";
			echo"<td>".$row['barber_email']."</td>";
			echo"<td>".$row['customer_email']."</td>";
			echo"<td>".$row['booking_date']."</td>";
			echo"<td>".$row['booking_time']."</td>";
			echo"<td>".$row['approved']."</td>";
			echo"<td>".$row['status_booking']."</td>";
			echo"<td>".$row['complaint']."</td>";
			echo"<td>".$row['review']."</td>";


			echo"<td><input type=submit class=button name=delete value= Cancel>";


			echo"</form></tr>";


		}


		?>
	</body>
	</html>
