<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="hpvciks8_2015";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO signup VALUES ('$_POST[uname]', '$_POST[email]','$_POST[pass]')";

if (mysqli_query($conn, $sql)) 
		{		
		header("location:index.html");
		}
else {
	header("location:signup.html");
	}
mysqli_close($conn);
?>