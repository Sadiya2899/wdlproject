<?php session_start();
include('connectSP.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
</head>

<body>

<div class="logo">
<img src="logonew.png" width="200" height="100"></div>

<form method="post" action="connectSP.php">
<fieldset>

<!--<legend align="center">--><h1 style='color:white; align:center;'> SIGN UP </h1>
<div align="center">
<b>Username</b><br>
<input type="text" name="username" placeholder="Username" autocomplete="off"><br><br>
<!--<b>
Last Name</b></center><br>

<input type="text" name="lname" placeholder="Lastname" autocomplete="off"><br><br>--><b>
Telephone</b><br>
<input type="tel" name="phone"  maxlength="10" autocomplete="off"><br><br><b>
E-mail</b><br>
<input type="email" name="email" autocomplete="off"><br><br><b>
Password</b><br>
<input type="password" name="password1" placeholder="Password" maxlength="6" autocomplete="off"><br><br><b>
Confirm password</b><br>
<input type="password" name="password2" placeholder="Password" maxlength="6" autocomplete="off"><br><br><br>
</div>
</fieldset>
<div class="button">
<!--<a href="doorstep.html" class="btn" onclick="showmessage()"><b>--><button type="submit" name="reg_user">SUBMIT</button></div>

<!--<button type="button" class="btn" onclick="doorstep.html" value="SUBMIT">SUBMIT</button>
-->
</form>
