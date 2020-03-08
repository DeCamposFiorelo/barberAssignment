<?php
session_start();
include('../_includes/connect.php');
//make sure the client is login in to  access this page
if(!isset($_SESSION["customer_email"]) || !isset ($_SESSION["customer_password"])){
	header("location: ./index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- CSS LINK--->
	<link rel="stylesheet" href="../_css/styles.css"/>
</head>
<!--body-->
<body>
<!--- This section is the  MENU(BACK TO WELCOME PAGE)-------------------------------->
	<nav id="menuAfterLogin">
		<ul type = "circle">
			<li><a href="welcomeClient.php"> Back to welcome Page </a></li>
		</ul>
	</nav>
<!---------------------search by location---------------------------------------->
	<div class="barberdetails">;
		<form action="bookingBarberLocation.php" method="post">
			<fieldset id = "usuario"><legend> Search for a Barber by Location</legend><br/>

				<p> Location:  <select name="bcounty" id="bloc"><option selected>Dublin</option>
				</select><label for="barea">Area: </label>
				<select name="searcharea" required="required" id="barea">
					<p><option>D1</option>
						<option>D2</option>
						<option>D3</option>
						<option>D4</option>
						<option>D5</option>
						<option>D6</option>
						<option>D7</option>
						<option>D8</option>
						<option>D9</option>
						<option>D10</option>
						<option>D11</option>
						<option>D12</option>
						<option>D13</option>
						<option>D14</option>
						<option>D15</option>
						<option>D16</option>
						<option>D17</option>
						<option>D18</option>
						<option>D19</option>
						<option>D20</option>
						<option>D21</option>
						<option>D22</option>
						<option>D23</option>
						<option>D24</option>
					</select></p>

					<p><input type="submit"  class="button" value="Submit"/></p>
			</fieldset>
		</form>
	</div>



			</body>
			</html>
