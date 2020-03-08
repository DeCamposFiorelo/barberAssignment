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


	<div class="barberdetails">
		<fieldset><legend>Barber Details / Delete Account</legend>
			<table>
				<tr>
					<th>Barber email</th>
					<th>Barber First Name</th>
					<th>Barber Last Name</th>
					<th>Barber Phone</th>
					<th>Barber Area Location</th>
					<th>Barber Address</th>
					<th>Barber Verified</th>
					<th>Delete</th>
				</tr>
			</fieldset>
		</div>

		<?php
		$sql = "SELECT * FROM `barber`  ";
		$records = mysqli_query($link, $sql);

		while($row = mysqli_fetch_array($records)){   //Creates a loop to loop through results

			echo "<tr><form action=deleteBarber.php method=post>";
			echo"<td><input type= text name=email value='".$row['barber_email']."'></td>";
			echo"<td>".$row['barber_first_name']."</td>";
			echo"<td>".$row['barber_last_name']."</td>";
			echo"<td>".$row['barber_phone']."</td>";
			echo"<td>".$row['barber_area_location']."</td>";
			echo"<td>".$row['barber_location']."</td>";
			echo"<td>".$row['verify']."</td>";

			echo"<td><input type=submit class=button name=delete value=Delete>";


			echo"</form></tr>";


		}


		?>
	</body>
	</html>
