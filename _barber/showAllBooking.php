<?php
session_start();
include('../_includes/connect.php');
if(!isset($_SESSION["barber_email"]) || !isset ($_SESSION["barber_password"])){
	header("location: ./index.php");
}?>

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
			<li><a href="welcomeBarber.php"> Back to welcome Page </a></li>
		</ul>
	</nav>
	<div class="barberdetails">
		<fieldset><legend>All your booking</legend>
			<table>
				<tr>
					<th> Booking number</th>
					<th>Booking date</th>
					<th>Booking time</th>
					<th>Customer email</th>
					<th> Approved</th>
					<th> Booking Status</th>
					<th> Review from Customer</th>

				</tr>
			</fieldset>
		</div>



		<?php
		$email=($_SESSION["barber_email"]);



		$sql = "SELECT barber_email,booking_date,booking_time,customer_email,approved,id_booking ,status_booking,review FROM booking where barber_email=('$email') ";
		$records = mysqli_query($link, $sql);
		if ($records->num_rows > 0) {
			while($row = mysqli_fetch_array($records)){   //Creates a loop to loop through results
				echo"<td>".$row['id_booking']."</td>";
				echo"<td>".$row['booking_date']."</td>";
				echo"<td>".$row['booking_time']."</td>";
				echo"<td>".$row['customer_email']."</td>";
				echo"<td>".$row['approved']."</td>";
				echo"<td>".$row['status_booking']."</td>";
				echo"<td>".$row['review']."</td>";


				echo"</form></tr>";
			}}else {
				echo"</br>";
				echo "<strong><u><font color='red'>You don't have any booking yet !</u></strong>";

				header("refresh:5; url=welcomeBarber.php");
			}
			?>
		</body>
		</html>
