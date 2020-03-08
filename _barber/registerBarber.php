<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../_css/styles.css"/>
  <title>Register Client</title>
</head>
<body>
  <!--- This section is MENU-------------------------------->
  <nav id="menu">
    <ul type = "circle">
      <li><a href ="../index.html">Home</a></li>
      <li><a href ="../_customer/index.php">Customer</a></li>
      <li><a href="index.php">Barber</a></li>
      <li><a href="../_adm/index.php">administrator</a></li>
    </ul>
  </nav>

  <div class="barbpadrao">
    <form action="setBarberRegister.php" method="post">
      <fieldset id = "usuario"><legend>Barber/Hairdresser information</legend>
        <p><label for="bemail">Email:</label></p>
        <input type="email" name="registerbarberemail" required="required" id="bemail" placeholder="mail@exemplo.com.br"/>

        <p><label for="bpass">Password: </label></p>
        <input type="password" name="registerbarberpassword" required="required" id="bpass" minLength="8" maxlength="12" pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$" title="It must
        include at least one uppercase alpha character, one special character and one number, and at least 8 until 12 characters" placeholder=" 8 until 12 characters"/>

        <p><label for="bname">First Name: </label></p>
        <input type="text" name="registerbarbername" required="required" id="btext" size"20" maxlength="30" placeholder="First Name"/>

        <p><label for="blast">Surname</label></p>
        <input type="text" name="registerbarbersurname"required="required"  id="blast" size "20" maxlength="30" placeholder="Surname"/>

        <p><label for="bphone">Phone</label></p>
        <input type="text" name="registerbarberphone" required="required" id="bphone" size"20" maxlength="10" placeholder="0830000000"/>
      </fieldset>
      <!----------------------------------------------------------------------->

      <!-- This section is for Location register-------------------------------->

      <fieldset><legend>Location</legend>
        <p><label for="bloc">county: </label>
          <select name="bcounty" id="bloc">
            <option selected>Dublin</option>
          </select></p>

          <!--Barber to choose the area(location)-->
          <p><label for="barea">Area: </label>
            <select name="registerbarberarea" required="required" id="barea">
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

              <label for="baddress">address: </label>
              <input type="text" name="registerbarberaddress" required="required"	 id="baddress" size"20" maxlength="30" placeholder="Address"/></br>

            </br>
            <img src="captcha.php" alt="Código captcha"><br>
            <label>Insert the code</label>
            <input type="text" name="captcha" required><br><br>
            <p><input type="submit" value="Submit"/></p>
          </fieldset>
        </div>

      </body>
      </html>
