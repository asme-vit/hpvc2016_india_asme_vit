<!DOCTYPE html>
<!--
<?php
if(isset($_GET['err'])){
    if ($_GET['err']=="em") {
        echo '<script>
            alert("Your email address alredy exists!!");
        </script>';
    }
}
?>
-->
<html>
<head>
    <meta charset="utf-8" />
    <title>VEHICLE REGISTRATION | HPVC-2016</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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

<div class="container">

<div class="page-header" style="">
    <h2 style="color:black;text-shadow:none;">Vehicle Registration Form</h3>
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<span style="color:red;text-shadow:none;">*vehicle reg fee:6000rs &nbsp &nbsp &nbsp</span>
	<span style="color:red;text-shadow:none;">*captian reg fee:1000rs &nbsp &nbsp &nbsp</span>
	<span style="color:red;text-shadow:none;">*Total reg fee:7000rs</span>
	
</div>

<!-- Registration form - START -->
<div class="container">
    <div class="row">
        <form role="form" action="check.php" method="post">
		<div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span style="color:red;" class="glyphicon glyphicon-asterisk"></span>&nbsp;Required Field</strong></div>
                
				<div class="form-group">
                    <label for="InputName">Enter Full Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="fullnm" id="InputName" placeholder="Enter Name" required>
                        <span class="input-group-addon" style="color:red;"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>                
				<div class="form-group">
                    <label for="InputMessage">Enter Phone no.</label>
                    <div class="input-group">
                        <span class="input-group-addon">+91</span>
                        <input type="text" name="phone" id="InputMessage" placeholder="Enter Mobile No" class="form-control"required></textarea>
                        <span class="input-group-addon" style="color:red;"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailFirst" name="email" placeholder="Enter Email" required>
                        <span class="input-group-addon" style="color:red;"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputName">Enter Team Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="teamnm" id="InputName" placeholder="Enter Name" required>
                        <span class="input-group-addon" style="color:red;"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				<div class="form-group">
                    <label for="InputName">Enter College Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="colnm" id="InputName" placeholder="Enter Name" required>
                        <span class="input-group-addon" style="color:red;"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>				

                <div class="form-group">
                    <label for="InputEmail">Enter College Registration Number</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="regno" name="regno" placeholder="Registration Number" required>
                        <span class="input-group-addon" style="color:red;"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Enter ASME ID</label>
                    <input type="text" class="form-control" id="asme" name="asmeid" value="asme id">
                </div>
					
					<div class="col-lg-3"></div>
					<div class="col-lg-6">
                <div class="g-recaptcha" data-sitekey="6LeMcg8TAAAAAMfnSdEUJnVOnnkgl0OKxF4SfNqz"></div><br>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right btn-block">
            </div>
			</div>
        </form>
        
</div>
<!-- Registration form - END -->

</div>
<p><br>
</p>

</body>
</html>