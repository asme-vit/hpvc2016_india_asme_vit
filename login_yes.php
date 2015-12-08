
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
$sql = "SELECT * FROM signup";
$result = mysqli_query($conn, $sql);
$f = 0;
    while($row = mysqli_fetch_row($result)) 
	{    
		if($row[1] == $_POST["uname"] && $row[2] == $_POST["pass"])
		{
		global $f;
		//echo $row[0];
		$f=1;
		break;
		}
	}
 

if($f==1)
{
		// Start the session
		session_start();
		$_SESSION["user"] ="$_POST[uname]";
		header("location:index.html");
}

else
{
		header("location:login.html");
}
mysqli_close($conn);
?>