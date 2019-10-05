<?php 
session_start();
include('connect1.php');
 ?>
<!DOCTYPE html>
<head>
</head>
<body>
<form action="connect1.php" method="post">
  First name:<input type="text" name="fname"><br>
  Last name: <input type="text" name="lname"><br>
  <!--E-mail: <input type="email" name="email" ><br>
  <input type="submit" value="Submit">-->
  <button type="submit" name="reg_user">SUBMIT</button>
</form>
</body>