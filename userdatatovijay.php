<<<<<<< HEAD
<?php 
	

	$con=mysqli_connect('localhost','root');

	mysqli_select_db($con,'signupdb');

	$query="select * from sp ";
	$result1=mysqli_query($con,$query);
	$row=mysqli_fetch_assoc($result1);

	$fname = $_SESSION['fname'];

	/*$pass=$_POST['password2'];
	*/
	$q="select TEL, EMAIL from signup where FNAME='$fname'";

	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	$person=mysqli_fetch_assoc($result);

	$phone = $person['TEL'];
	$email = $person['EMAIL'];
	$spname=$row['spname'];

	
		$qy=" insert into userdatatovijay(name,phone,email,SPNAME) values('$fname','$phone','$email','$spname')";
		mysqli_query($con,$qy);
		// header("location:abc.php");

	
?>
=======
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
/*$lname=$_POST['lname'];*/
$phone=$_POST['phone'];
$email=$_POST['email'];

/*$pass=$_POST['password2'];
*/
$q=" select * from signup where FNAME='$fname'  && TEL='$phone' && EMAIL='$email'  ";

$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

if($num==1){
	echo" duplicate data";
}
else{
	$qy=" insert into userdatatovijay(name,contact,email) values('$fname','$phone','$email')";
	mysqli_query($con,$qy);
	header("location:signup.php");

}
}
>>>>>>> b9ce094fac334b80a9f278f9e8ae627bf3501aeb
