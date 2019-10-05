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

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];

$pass=$_POST['password2'];

$q=" select * from signup where FNAME='$fname' && LNAME='$lname' && TEL='$phone' && EMAIL='$email' && PASSWORD='$pass' ";

$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

if($num==1){
	echo" duplicate data";
}
else{
	$qy=" insert into signup(FNAME,LNAME,TEL,EMAIL,PASSWORD) values('$fname','$lname','$phone','$email','$pass')";
	mysqli_query($con,$qy);
	header("location:login.php");

}
}



?>