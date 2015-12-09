<!DOCTYPE html>
<?php
session_start();
if($_SESSION["email"] == "")
{
	header("location:login.php?err=em");
}
?>
<html>
<head>
    <meta charset="utf-8" />
    <title>Food and Accomodation| HPVC-2016</title>
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
                    <li ><a href="main.php">MyHome</a></li>
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

<div class="page-header" style="">
    <h3 style="color:black;text-shadow:none;">Food and Accomodation Form</h3>
</div>

<!-- Registration form - START -->
<div class="container">
    <div class="row">
        <form role="form" action="food_reg.php" method="post">
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span style="color:red;" class="glyphicon glyphicon-asterisk"></span>&nbsp;You should either register the vehicle or participants to get the accomodation!</strong></div>
                <div class="form-group">
                    <label for="InputName"><span style="color:red;" class="glyphicon glyphicon-asterisk"></span> Choose type of accomdation : </label>
                    <div class="input-group">
                        <input type="radio" name="acc" value="Dorm" checked> <label for="InputName">&nbsp;&nbsp;&nbsp;Dormatory</label><br>
						<input type="radio" name="acc" value="2NONAC"> <label for="InputName">&nbsp;&nbsp;&nbsp;2-BED NON-AC</label>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="acc" value="2AC">  <label for="InputName">&nbsp;&nbsp;&nbsp;2-BED AC</label><br>
						<input type="radio" name="acc" value="4NONAC"> <label for="InputName">&nbsp;&nbsp;&nbsp;4-BED NON-AC</label>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="acc" value="4AC"> <label for="InputName">&nbsp;&nbsp;&nbsp;4-BED AC</label><br>
						<input type="radio" name="acc" value="6NONAC"> <label for="InputName">&nbsp;&nbsp;&nbsp;6-BED NON-AC</label>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="acc" value="6AC"> <label for="InputName">&nbsp;&nbsp;&nbsp;6-BED AC</label><br>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputName"><span style="color:red;" class="glyphicon glyphicon-asterisk"></span> Food: </label>
                    <div class="input-group">
					<input type="radio" name="food" value="VEG" checked> <label for="InputName">&nbsp;&nbsp;&nbsp;VEG</label><br>
					<input type="radio" name="food" value="NVEG"> <label for="InputName">&nbsp;&nbsp;&nbsp;NON-VEG</label><br>
					<input type="radio" name="food" value="SPL"> <label for="InputName">&nbsp;&nbsp;&nbsp;SPECIAL</label><br>
					</div>
                </div>
				<div class="form-group">
                    <label for="InputEmail">No. of people you are taking accomodation for</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="InputEmailSecond" name="no" placeholder="No. of People" required>
                        <span class="input-group-addon" style="color:red;"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="g-recaptcha" data-sitekey="6LeMcg8TAAAAAMfnSdEUJnVOnnkgl0OKxF4SfNqz"></div><br>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
        
</div>
<!-- Registration form - END -->

</div>

</body>
</html>