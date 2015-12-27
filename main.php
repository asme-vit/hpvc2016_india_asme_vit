<!DOCTYPE html>
<?php
session_start();
if($_SESSION["email"] == "")
{
	header("location:login.php?err=em");
}
?>
<?php
if(isset($_GET['err'])){
    if ($_GET['err']=="em") {
        echo '<script>
            alert("your email is nither in vehicle nor in participant registration!");
        </script>';
    }
}
if(isset($_GET['err'])){
    if ($_GET['err']=="survey") {
        echo '<script>
            alert("ThankYou for your Time!");
        </script>';
    }
}
?>
<html>
<head>
    <title>Registration | HPVC INDIA 2016</title>
		<meta charset="utf-8" />
		<meta name="language" content="en-us"/>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="description" content="Human Powered Vehicle Challenge(HPVC)-India 2016-The American Society of Mechanical Engineers(ASME)-VIT,vellore WEBSITE. DEVELOPED BY MUKUL DEV(DEVMUKUL44@GMAIL.COM),HIANSHU GUPTA(HIMANSHU199565@GMAIL.COM). " />
		<meta name="keywords" content="HPVC 2016,ASME 2016,HPVC,ASME,Human Powered Vehicle Challenge,HPVC VIT,VIT VELLORE,MUKUL DEV,HIMANSHU GUPTA,DEVMUKUL44@GMAIL.COM,MUKUL.DEV@OUTLOOK.COM,HIMANSHU199565@GMAIL.COM,MUKUL DEV VIT,MUKUL DEV VIT VELLORE,DEVMUKUL44,HIMANSHU GUPTA VIT, Web Designing" />
		<meta name="distribution" content="Global" />
		<meta name="robots" content="index, follow" />
		<meta name="revisit-after" content="1 days"/>
		<meta name="publisher" content="ASME INDIA, VIT VELLORE, MUKUL DEV , HIMANSHU GUPTA" />
		<meta name="copyright" content="ASME INDIA 2016"/>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
	posiion:relative;
}
th, td {
    padding: 5px;
    text-align: left;
}
</style>
<script>
function func()
{
	alert("Coming Soon...");
}
function func1()
{
	alert("Starts 21st Dec, 2015");
}
</script>
</head>
<body>

<!-- Navigation -->

<nav class="navbar navbar-inverse" role="banner" style="height:75px;">

        <div class="container" style="width:90%">
            <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.html" style="padding-top:10px;"><img src="img/asme_logo.png" width="90" height="50" style="margin-top:0px;" alt="logo"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="transparent" style="padding-top: 15px;">
            <div class="collapse navbar-collapse" id="main-navbar-collapse" style="margin-right: 0px;">
                <ul class="nav navbar-nav navbar-left" style="margin-left: 250px;font-size:large;">
                    <li ><a href="http://hpvcindia.in#top">Home</a></li>
                    <li><a href="http://hpvcindia.in#about">About</a></li>
                    <!--<li><a href="#services">Sponsors</a></li>-->
                    <li><a href="http://hpvcindia.in#rules">Rules</a></li>
                    <li><a href="http://hpvcindia.in#update">Updates</a></li>
                    <li><a href="http://hpvcindia.in#schedule">Schedule</a></li>
                    <li><a href="http://hpvcindia.in#host"> Host</a></li>
                    <li><a href="http://hpvcindia.in/FAQ.html">FAQ</a></li>
                    <li><a href="http://hpvcindia.in#contact">Contact Us</a></li>

                </ul>
            </div>
            </div><!-- /.navbar-collapse-->

        </div>
    </nav>
	<div class="container" align="right">
	<span style="color:red;">HELLO </span>
	<span><?php echo $_SESSION["email"];?>
	<a href="logout_php.php" role="button" class="btn btn-primary btn-xs">Logout</a>
	</span>
	</div>
	<div class="container">
	<button type="button" class="btn btn-info btn-block btn-lg"> Your Previous Registrations</button>
	<br>
	<?php
	include("connection.php");
	$email = $_SESSION["email"];
		$sql ="Select * from yes_payment where email='$email'";
		$result = mysqli_query($con, $sql);
		
		if (mysqli_num_rows($result) > 0) {
			echo "<table style='width:100%'>
			<tr>
			<th>Reference no.</th>
			<th>Email</th>
			<th>TSPL Transaction ID</th>
			<th>Bank Reference No.</th>
			<th>Amount</th>
			<th>Transaction Date</th>
			</tr>";
		while($row = mysqli_fetch_row($result)) 
		{
			echo "<tr>";
        echo "<td> " . $row[0]. " <td> " . $row[1]. "<td> " . $row[2]. "<td> " .$row[3] . "<td> " .$row[5]. "<td> " .$row[6];
			echo "</tr>";
		}
		echo "</table>";
		} 
		else 
		{
		echo "<center>no transactions yet!</center><br><br><br>";
		}

				
	?>
	<br><br>
	</div>

<!-- <div class="btn-group btn-group-justified">
  <div class="btn-group">
    <button type="button" class="btn btn-primary">Vehicle Registration</button>
  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-primary">Member Registration</button>
  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-primary">Food and Accomodation</button>
  </div>
</div>
<br>
<br>
-->
<div class="container">
  <a href="vehicle_pre.php" role="button" class="btn btn-primary btn-lg btn-block">Vehicle registration</a>
  <a href="participant.php" role="button" class="btn btn-primary btn-lg btn-block">Member registration</a>
<!--  <a href="food.php">
-->
  <button type="button" class="btn btn-primary btn-lg btn-block" onclick="func();">Food and Accomodation</button>
<!--
</a>
-->
	<a href="survey.php" role="button" class="btn btn-primary btn-lg btn-block">Survey</a>
</div>
</body>
</html>