<?php
$user="root";
$pass="";
$db="hpvc";
$con=mysqli_connect("localhost",$user,$pass) or die("Cannot connect to host");
mysqli_select_db($con,$db) or die("Cannot select db");
?>