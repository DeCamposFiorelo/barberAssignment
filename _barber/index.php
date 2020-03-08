
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/styles.css"/>

  <title>Barber</title>
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



  <!--------------------------------------------------------------------->
  <!--This section is for Barber Choose to Login or Register-->

  <div class="barbpadrao">
    <fieldset><legend>Barber/Hairdresser Login</legend>
      <form method="post" action="setBarberLogin.php"/>

      <p><label for="bbemail">Email:</label></p>
      <input type="email" name="loginbarberemail"required="required" id="bbemail" placeholder="mail@exemplo.com.br"/><br/>

      <p><label for="bbpass">Password:</label></p>
      <input type="password" name="loginbarberpassword" required="required" id="bbpass" minLength="8" maxlength="12" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder=" 8 to 12 characters"/>
      <input type="submit" value="Login"><br/>
    </fieldset>

    <fieldset><legend>Register</legend>
      <br/>
      <p>&bull;<a href="registerBarber.php"> Barber/Hairdresser Register </a></p>
      <br/>
    </fieldset>
  </div>
  <!--------------------------------------------------------------------->

</body>
</html>
