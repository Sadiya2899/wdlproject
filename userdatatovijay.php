
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

