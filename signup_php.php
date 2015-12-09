<?php
session_start();
?>

<?php
include("connection.php");

$sql = "INSERT INTO signup values('$_POST[uname]','$_POST[email]','$_POST[pass]')";

//echo '<div id="signup">';
//var_dump($_POST["uname"]);

if (mysqli_query($con, $sql)) 
		{

		// Start the session
		session_start();

		$_SESSION["name"] ="$_POST[uname]";
		$_SESSION["email"] ="$_POST[email]";
		header("location:main.php");
		}
else {
	header("location:signup.php?err=em");
	
	}

mysqli_close($con);
?>
