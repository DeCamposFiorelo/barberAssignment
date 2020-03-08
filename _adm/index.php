
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/styles.css"/>

  <title>Adm</title>
</head>
<body>
  <!--- This section is MENU-------------------------------->
  <nav id="menu">
    <ul type = "circle">
      <li><a href ="../index.html">Home</a></li>
      <li><a href ="../_customer/index.php">Customer</a></li>
      <li><a href="../_barber/index.php">Barber</a></li>
      <li><a href="index.php">administrator</a></li>
    </ul>
  </nav>



  <!--------------------------------------------------------------------->
  <!--This section is for Barber Choose to Login or Register-->

  <div class="admpadrao">
    <fieldset><legend>Administrator</legend>
      <form method="post" action="setAdmLogin.php"/>

      <p><label for="bbemail">Email:</label></p>
      <input type="email" name="loginadmemail" required ="required" id="ademail" placeholder="mail@exemplo.com.br"/><br/>

      <p><label for="bbpass">Password:</label></p>
      <input type="password" name="loginadmpassword" required ="required" id="adpass"   placeholder=" 8 to 12 characters"/>
      <input type="submit" value="Login"><br/>
    </fieldset>
    <br>
    <br>
  </div>
  <!--------------------------------------------------------------------->

</body>
</html>
