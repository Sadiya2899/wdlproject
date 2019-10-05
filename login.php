<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>LOGIN PAGE</title>

<style>
body {
 background-image:linear-gradient(rgba(255,255,255,.2), rgba(255,255,255,.2)),url("img2.jpg");
 background-color: #cccccc;
height: 100%;


background-position:center;

}
img1 {
position: absolute;
left: 0px;
top: 0px;


}
logo {
  width:240px;
  height:150px;
  border:10px solid white;
  opacity:1;
}

input[type=text] {
  width: 50%;
  padding: 5px 5px;
  margin: 8px 0;
  color:white;
   box-sizing: border-box;
  border: 2px solid white;
border-radius: 20px 20px 20px 20px;
  background-color: transparent;
}

input[type=password] {
 width: 50%;
  padding: 5px 5px;
  margin: 8px 0;
   box-sizing: border-box;
   border: 2px solid white;
border-radius: 20px 20px 20px 20px;
 
  background-color: transparent;
   color:white;
}

.button {
position: absolute;
top: 70%;
left: 50%;
transform: translate(-50%,-50%);
}
.btn {
text-decoration:none;
color: white;
padding: 10px 50px;
border: 2px solid white;
border-radius: 20px 20px 20px 20px;
}
.btn:hover {
background-color: white;
color: black;
opacity:0.5;
}
::placeholder{
color:white;
opacity:0.8;
}


form
{margin-left:480px;
 margin-right:480px;
 background-color: black;
 opacity:0.7;
}
fieldset {color:white;border:2px solid black;text-align:center;border-radius:40px;height: 600px;}
</style>
<body>

<form action="validation.php" method="post">
<fieldset>
<legend align="center"><h1><font face="Corbel" style='color:white;'> LOGIN </h1></legend>
<div align="center">
<img class="logo" src="logonew.png" ><br><br><b>
Username<b><br>
<input type="text" name="fname" placeholder="Username" autocomplete="on" required ><br><br><b>
Password<b><br>
<input type="password" name="password" placeholder="Password" maxlength="6" autocomplete="off" required><br><br>
<br><input type="checkbox" name="password" value="REMEMBER ME"><b>Remember Me<b>
</div>
</fieldset>
<div class="button">
  <button type="submit" name="reg_user">SUBMIT</button></div>
<!--<a href="doorstep.html" class="btn" onclick="showmessage()"><b>SUBMIT</b></a></div>
--></form> 