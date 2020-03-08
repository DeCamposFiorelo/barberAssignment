
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/styles.css"/>

  <title>Customer</title>
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

  <!--------------------------------------------------------->

  <!--This section is for Client Choose to Login or Register-->


  <div class="lpadrao">
    <fieldset><legend>Costumer Login</legend>
      <form method="post" action="setCustomerLogin.php" />




      <p><label for="lemail">Email:</label></p>
      <input type="email" name="loginemail" required="required" id="lemail" placeholder="mail@exemplo.com.br"/><br/>

      <p><label for="lpass">Password:</label></p>
      <input type="password" name="loginpassword" required="required" id="lpass" minLength="8" maxlength="12" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder=" 8 to 12 characters"/>
      <input type="submit" name="submitCostumer" value="Login"><br/>
    </fieldset>

    <fieldset><legend>Register</legend>
      <br/>
      <p>&bull;<a href="registerClient.php"> Costumer Register </a></p>
      <br/>
    </fieldset>
  </div>

  <!--------------------------------------------------------------------->

</body>
</html>
