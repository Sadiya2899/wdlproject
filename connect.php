<?php

$FNAME=filter_input(INPUT_POST,'fname');
$LNAME=filter_input(INPUT_POST,'lname');
$TEL=filter_input(INPUT_POST,'phone');
$EMAIL=filter_input(INPUT_POST,'email');
$PASSWORD=filter_input(INPUT_POST,'password');
if(!empty($FNAME)){
	if(!empty($LNAME)){
		if(!empty($TEL)){
			if(!empty($EMAIL)){
				if(!empty($PASSWORD)){
						$host="localhost";
						$dbusername="root";
						$dbpassword="";
						$dbname="db";

						$conn=new mysqli ($host , $dbusername , $dbpassword , $dbname);
						if(mysqli_connect_error()){
							die('Connect error ('. mysqli_connect_errno() .') ' . mysqli_connect_error());
						}
						else{
							$sql="INSERT INTO signup (FNAME,LNAME,TEL,EMAIL,PASSWORD) values('$FNAME','$LNAME','$TEL','$EMAIL','$PASSWORD')";

						}
						if($conn->query($sql)){
							echo "NEW RECORD IS INSERTED SUCCESSFULLY";

						}
						else{
							echo "Error: ". $sql ."<br>".$conn->error;

						}
						$conn->close();

				}
				else{
					echo "Password should not be empty";
					die();
				}
			}
			else{
				echo "Email should not be empty";
				die();
			}
		}
		else{
			echo "Contact no. should not be empty";
			die();
		}
	}
	else{
		echo "Lastname should not be empty";
		die();
	}
}
else{
	echo"First name should not be empty";
	die();
}



?>