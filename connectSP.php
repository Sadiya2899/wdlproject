<?php

if(isset($_POST['reg_user'])){
$con=mysqli_connect('localhost','root');
if($con){
	
	echo "Successfully connected";
	
}
else{
	echo" no connection";
}

mysqli_select_db($con,'signupdb');

$uname=$_POST['username'];

$phone=$_POST['contact'];
$email=$_POST['email'];

$pass=$_POST['password2'];

$q=" select * from signupSP where username='$uname' && contact='$phone' && email='$email' && password='$pass' ";

$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

if($num==1){
	echo" duplicate data";
}
else{
	$qy=" insert into signupSP(username,email,contact,password) values('$uname','$email','$phone','$pass')";
	mysqli_query($con,$qy);
	header("location:loginSP.php");

}
}



?>