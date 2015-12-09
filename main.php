<!DOCTYPE html>
<?php
session_start();
?>
<?php
if(isset($_GET['err'])){
    if ($_GET['err']=="em") {
        echo '<script>
            alert("your email is nither in vehicle nor in participant registration!");
        </script>';
    }
}
?>
<html>
<head>
    <meta charset="utf-8" />
    <title>STAGE2 REGISTRATION | HPVC-2016</title>
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
	<button type="button" class="btn btn-info btn-block btn-lg"> your previous registrations</button>
	<br>
	<?php
		
	?>
	</div>

<!-- <div class="btn-group btn-group-justified">
  <div class="btn-group">
    <button type="button" class="btn btn-primary">vehicle registration</button>
  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-primary">member registration</button>
  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-primary">food and accomodation</button>
  </div>
</div>
<br>
<br>
-->
<div class="container">
  <a href="#" role="button" class="btn btn-primary btn-lg btn-block">vehicle registration</a>
  <a href="#" role="button" class="btn btn-primary btn-lg btn-block">member registration</a>
  <a href="#" role="button" class="btn btn-primary btn-lg btn-block">food and accomodation</a>
</div>
</body>
</html>