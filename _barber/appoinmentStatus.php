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
</head>
<!---BODY------------------>
<body>
	<nav id="menuAfterLogin">
		<ul type = "circle">
			<li><a href="welcomeBarber.php"> Back to welcome Page </a></li>
		</ul>
	</nav>
	<div class="bookingdetails">
		<fieldset><legend>Appoiment Status</legend>
			<table>

				<th> Booking number</th>
				<th>Barber email</th>
				<th>Client email</th>
				<th>Booking date</th>
				<th>Booking time</th>
				<th> Approved</th>
				<th> Booking Status</th>
				<th>Submit</th>

			</tr>
		</fieldset>
	</div>
	<!-- PHP CODE---->
	<?php
	$email=($_SESSION["barber_email"]);
	//QUERY
	$sql = "SELECT barber_email,customer_email,booking_date,booking_time,approved,id_booking ,status_booking FROM booking where barber_email=('$email') and customer_email>'' and approved = 'Y'";
	$records = mysqli_query($link, $sql);
	if ($records->num_rows > 0) {
		while($row = mysqli_fetch_array($records)){   //Creates a loop to loop through results
			echo "<tr><form action=updateAppoimentStatus.php method=post>";
			echo"<td><input type=text name=id value='".$row['id_booking']."'></td>";
			echo"<td>".$row['customer_email']."</td>";
			echo"<td>".$row['barber_email']."</td>";
			echo"<td>".$row['booking_date']."</td>";
			echo"<td>".$row['booking_time']."</td>";
			echo"<td>".$row['approved']."</td>";
			echo"<td><input type=text name=stbooking class=insert  required=required placeholder='DONE or INCOMPLETE 'value='".$row['status_booking']."'></td>";

			echo"<td><input class=button type=submit>";
			echo"</form>";
		}}else {
			echo"</br>";
			echo "<strong><u><font color='red'>You don't have any appointment to set the Status !</u></strong>";

			header("refresh:5; url=welcomeBarber.php");
		}
		?>
	</body>
	</html>
