<?php
$id = $_POST['requestid'];
include 'connect.php';
$query = "update MyRequest set Status = 'confirmed' where ReqId ='$id'";
$res = mysqli_query($connect,$query);
header("refresh:0 ;url=./index.php"); 
?>