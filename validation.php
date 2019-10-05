<?php
session_start();

if(isset($_POST['reg_user'])){
$con=mysqli_connect('localhost','root');
if($con){
	
	echo "Successfully connected";
	
}
else{
	echo" no connection";
}

mysqli_select_db($con,'signupdb');

$fname=$_POST['fname'];
/*$lname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];*/

$pass=$_POST['password'];

$q=" select * from signup where FNAME='$fname' && PASSWORD='$pass' ";

$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

if($num==1){
	$_SESSION['fname']=$fname;
	header("location:homeuser.php");
}
else{
	
	header("location:login.php");

}
}



?>