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
      <li><a href ="index.php">Customer</a></li>
      <li><a href="../_barber/index.php">Barber</a></li>
      <li><a href="../_adm/index.php">administrator</a></li>
    </ul>
  </nav>
  <!--This section is for customer insert the information for Register-->

  <div class="lpadrao">
    <form action="setCustomerRegister.php" method="post">
      <fieldset id = "usuario"><legend>Costumer Personal information</legend>
        <p>
          <label for="emailAddress">Email Address:</label>
          <input type="text" name="email" id="emailAddress" required="required" placeholder="mail@exemplo.com.br">
        </p>
        <p>
          <label for="passwordAddress">Password:</label>
          <input type="password" name="password" required="required"  id="passwordAddress"  placeholder="password" 8 until 12 characters" minLength="8" maxlength="12" pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$" title="It must
          include at least one uppercase alpha character, one special character and one number, and at least 8 until 12 characters">
        </p>
        <p>
          <label for="firstName">First Name:</label>
          <input type="text" required="required" name="first_name"  id="firstName" placeholder="First Name">
        </p>
        <p>
          <label for="lastName">Last Name:</label>
          <input type="text" required="required" name="last_name" required id="lastName"  placeholder=" Last name">
        </p>
        <p>
          <label for="phoneName">Phone:</label>
          <input type="text" required="required" name="phone_name" required id="phoneName"  placeholder="0830000000">
        </p>
        <img src="captcha.php" alt="Código captcha"><br>
        <label>Insert the code</label>
        <input type="text" name="captcha" required><br><br>
        <input type="submit" name="submit" value="Submit">
      </fieldset>
    </form>
  </div>


</body>
</html>
