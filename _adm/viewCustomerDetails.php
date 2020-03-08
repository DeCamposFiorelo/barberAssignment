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
</head>
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
	<div class="lpadrao">
		<fieldset><legend>Customer Details / Delete Account</legend>
			<table>
				<tr>
					<th>Customer email</th>
					<th>Customer First Name</th>
					<th>Customer Last Name</th>
					<th>Customer Phone</th>
					<th>Delete </th>
				</tr>
			</fieldset>
		</div>



		<?php
		$sql = "SELECT * FROM `customer`  ";
		$records = mysqli_query($link, $sql);

		while($row = mysqli_fetch_array($records)){   //Creates a loop to loop through results

			echo "<tr><form action=deleteCustomer.php method=post>";
			echo"<td><input type= text name=email value='".$row['customer_email']."'></td>";
			echo"<td>".$row['customer_first_name']."</td>";
			echo"<td>".$row['customer_last_name']."</td>";
			echo"<td>".$row['customer_phone']."</td>";
			echo"<td><input type=submit class=button name=delete value=Delete>";
			echo"</form></tr>";

		}

		?>
	</body>
	</html>
