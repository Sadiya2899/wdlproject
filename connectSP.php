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
$names=$_POST['names'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$location=$_POST['location'];
$pass=$_POST['password2'];

$q=" select * from signupSP where username='$uname' && phone='$phone' && email='$email' && password='$pass' ";

$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

if($num==1){
	echo" duplicate data";
}
else{
	$qy=" insert into signupSP(username,email,contact,password,names,location) values('$uname','$email','$phone','$pass','$names','$location')";
	
	mysqli_query($con,$qy);
	header("location:loginSP.php");

}

/*
if(isset($_GET['names']))
    {
        $name=$_GET['names'];
        $c=mysqli_connect("localhost","root","");
        mysqli_select_db("signupdb");
        $ins=mysqli_query("INSERT INTO `option` 
                          (name)
                          VALUES ('$name')",$c) or die(mysql_error());
        
    }
*/

}
?>