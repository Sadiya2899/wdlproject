<?php
session_start();
unset($_SESSION['fname']);
unset($_SESSION['pass']);

header('location:doorstep.html');




?>