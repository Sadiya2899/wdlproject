<?php session_start();
?>
<!DOCTYPE html>
<html>

  <head>
  	<link rel="stylesheet" type="text/css" href="style3.css">
  	</head>

  <body>
  	
     <div class="topright"> 
      <p>Welcome <?php echo $_SESSION['username']; ?></p>
      <a href="logout.php">LOGOUT</a>
   
 	</div>
 </body>