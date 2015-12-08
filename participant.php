<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Participant Registration form | HPVC-2015</title>
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
    <h3 style="color:black;text-shadow:none;">Registration form</h3>
</div>

<!-- Registration form - START -->
<div class="container">
    <div class="row">
	<div class="col-lg-4">
	 <div class="well well-sm"><strong><span style="color:red;" class="glyphicon glyphicon-asterisk"></span>&nbsp; Required Field</strong></div> </div>
	 </div>
		<div class="row">
            <div class="col-lg-4">
			  <form  class="form-horizontal" role="form" action="reg.php" method="post">
                <div class="form-group">
				<label for="InputName">Enter Full Name</label>
					<div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="name1" id="InputName" placeholder="Enter Name" required>
                        <span class="input-group-addon" style="color:red;"><span class="glyphicon glyphicon-asterisk"></span></span>
					</div>
				</div>
				<div class="form-group">
                    <label for="InputName">Enter College Name</label>
                    <div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="col1" id="InputName" placeholder="Enter College Name" required>
                        <span class="input-group-addon" style="color:red;"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
				<label for="InputName">Enter Team Name </label>
					<div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="team1" id="InputName" placeholder="Team Name" required>
                        <span class="input-group-addon" style="color:red;"><span class="glyphicon glyphicon-asterisk"></span></span>
					</div>
				</div>
				<div class="form-group">
                    <label for="InputName">Enter College Regno</label>
                    <div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="colr1" id="InputName" placeholder="College Regno" required>
                        <span class="input-group-addon" style="color:red;"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
			</div>
			<div class="col-lg-4">
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group col-sm-12">
                        <input type="email" class="form-control" id="InputEmailFirst" name="email1" placeholder="Email" required>
                        <span class="input-group-addon" style="color:red;"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				<div class="form-group">
                    <label for="InputMessage">Enter Phone no.</label>
                    <div class="input-group col-sm-12">
                        <span class="input-group-addon ">+91</span>
                        <input type="text" name="phone1" id="InputMessage" placeholder="MobileNo" class="form-control" required></textarea>
                        <span class="input-group-addon" style="color:red;"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
			</div><div class="page-header" style="visibility:hidden">asdf<br><br></div>
			
			 <div class="col-lg-4">
                <div class="form-group">
				<label for="InputName">Enter Full Name</label>
					<div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="name2" id="InputName" placeholder="Enter Name" >
					</div>
				</div>
				<div class="form-group">
                    <label for="InputName">Enter College Name</label>
                    <div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="col2" id="InputName" placeholder="Enter College Name" >
                        
                    </div>
                </div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
				<label for="InputName">Enter Team Name </label>
					<div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="team2" id="InputName" placeholder="Team Name" >
                        
					</div>
				</div>
				<div class="form-group">
                    <label for="InputName">Enter College Regno</label>
                    <div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="colr2" id="InputName" placeholder="College Regno" >
                        
                    </div>
                </div>
			</div>
			<div class="col-lg-4">
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group col-sm-12">
                        <input type="email" class="form-control" id="InputEmailFirst" name="email2" placeholder="Email" >
                        
                    </div>
                </div>
				<div class="form-group">
                    <label for="InputMessage">Enter Phone no.</label>
                    <div class="input-group col-sm-12">
                        <span class="input-group-addon ">+91</span>
                        <input type="text" name="phone2" id="InputMessage" placeholder="MobileNo" class="form-control"></textarea>
                        
                    </div>
                </div>
			</div><div class="page-header" style="visibility:hidden">asdf<br><br></div>
			
			 <div class="col-lg-4">
                <div class="form-group">
				<label for="InputName">Enter Full Name</label>
					<div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="name3" id="InputName" placeholder="Enter Name" >
                        
					</div>
				</div>
				<div class="form-group">
                    <label for="InputName">Enter College Name</label>
                    <div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="col3" id="InputName" placeholder="Enter College Name" >
                        
                    </div>
                </div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
				<label for="InputName">Enter Team Name </label>
					<div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="team3" id="InputName" placeholder="Team Name" >
                        
					</div>
				</div>
				<div class="form-group">
                    <label for="InputName">Enter College Regno</label>
                    <div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="colr3" id="InputName" placeholder="College Regno" >
                        
                    </div>
                </div>
			</div>
			<div class="col-lg-4">
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group col-sm-12">
                        <input type="email" class="form-control" id="InputEmailFirst" name="email3" placeholder="Email" >
                        
                    </div>
                </div>
				<div class="form-group">
                    <label for="InputMessage">Enter Phone no.</label>
                    <div class="input-group col-sm-12">
                        <span class="input-group-addon ">+91</span>
                        <input type="text" name="phone3" id="InputMessage" placeholder="MobileNo" class="form-control"></textarea>
                        
                    </div>
                </div>
			</div><div class="page-header" style="visibility:hidden">asdf<br><br></div>
			
			 <div class="col-lg-4">
                <div class="form-group">
				<label for="InputName">Enter Full Name</label>
					<div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="name4" id="InputName" placeholder="Enter Name" >
                        
					</div>
				</div>
				<div class="form-group">
                    <label for="InputName">Enter College Name</label>
                    <div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="col4" id="InputName" placeholder="Enter College Name" >
                        
                    </div>
                </div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
				<label for="InputName">Enter Team Name </label>
					<div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="team4" id="InputName" placeholder="Team Name" >
                        
					</div>
				</div>
				<div class="form-group">
                    <label for="InputName">Enter College Regno</label>
                    <div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="colr4" id="InputName" placeholder="College Regno" >
                        
                    </div>
                </div>
			</div>
			<div class="col-lg-4">
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group col-sm-12">
                        <input type="email" class="form-control" id="InputEmailFirst" name="email4" placeholder="Email" >
                        
                    </div>
                </div>
				<div class="form-group">
                    <label for="InputMessage">Enter Phone no.</label>
                    <div class="input-group col-sm-12">
                        <span class="input-group-addon ">+91</span>
                        <input type="text" name="phone4" id="InputMessage" placeholder="MobileNo" class="form-control"></textarea>
                        
                    </div>
                </div>
			</div><div class="page-header" style="visibility:hidden">asdf<br><br></div>
			
			 <div class="col-lg-4">
                <div class="form-group">
				<label for="InputName">Enter Full Name</label>
					<div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="name5" id="InputName" placeholder="Enter Name" >
                        
					</div>
				</div>
				<div class="form-group">
                    <label for="InputName">Enter College Name</label>
                    <div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="col5" id="InputName" placeholder="Enter College Name" >
                        
                    </div>
                </div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
				<label for="InputName">Enter Team Name </label>
					<div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="team5" id="InputName" placeholder="Team Name" >
                        
					</div>
				</div>
				<div class="form-group">
                    <label for="InputName">Enter College Regno</label>
                    <div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="colr5" id="InputName" placeholder="College Regno" >
                        
                    </div>
                </div>
			</div>
			<div class="col-lg-4">
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group col-sm-12">
                        <input type="email" class="form-control" id="InputEmailFirst" name="email5" placeholder="Email" >
                        
                    </div>
                </div>
				<div class="form-group">
                    <label for="InputMessage">Enter Phone no.</label>
                    <div class="input-group col-sm-12">
                        <span class="input-group-addon ">+91</span>
                        <input type="text" name="phone5" id="InputMessage" placeholder="MobileNo" class="form-control"></textarea>
                        
                    </div>
                </div>
			</div><div class="page-header" style="visibility:hidden">asdf<br><br></div>
			
			 <div class="col-lg-4">
                <div class="form-group">
				<label for="InputName">Enter Full Name</label>
					<div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="name6" id="InputName" placeholder="Enter Name" >
                        
					</div>
				</div>
				<div class="form-group">
                    <label for="InputName">Enter College Name</label>
                    <div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="col6" id="InputName" placeholder="Enter College Name" >
                        
                    </div>
                </div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
				<label for="InputName">Enter Team Name </label>
					<div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="team6" id="InputName" placeholder="Team Name" >
                        
					</div>
				</div>
				<div class="form-group">
                    <label for="InputName">Enter College Regno</label>
                    <div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="colr6" id="InputName" placeholder="College Regno" >
                        
                    </div>
                </div>
			</div>
			<div class="col-lg-4">
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group col-sm-12">
                        <input type="email" class="form-control" id="InputEmailFirst" name="email6" placeholder="Email" >
                        
                    </div>
                </div>
				<div class="form-group">
                    <label for="InputMessage">Enter Phone no.</label>
                    <div class="input-group col-sm-12">
                        <span class="input-group-addon ">+91</span>
                        <input type="text" name="phone6" id="InputMessage" placeholder="MobileNo" class="form-control"></textarea>
                        
                    </div>
                </div>
			</div><div class="page-header" style="visibility:hidden">asdf<br><br></div>
			
			 <div class="col-lg-4">
                <div class="form-group">
				<label for="InputName">Enter Full Name</label>
					<div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="name7" id="InputName" placeholder="Enter Name" >
                        
					</div>
				</div>
				<div class="form-group">
                    <label for="InputName">Enter College Name</label>
                    <div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="col7" id="InputName" placeholder="Enter College Name" >
                        
                    </div>
                </div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
				<label for="InputName">Enter Team Name </label>
					<div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="team7" id="InputName" placeholder="Team Name" >
                        
					</div>
				</div>
				<div class="form-group">
                    <label for="InputName">Enter College Regno</label>
                    <div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="colr7" id="InputName" placeholder="College Regno" >
                        
                    </div>
                </div>
			</div>
			<div class="col-lg-4">
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group col-sm-12">
                        <input type="email" class="form-control" id="InputEmailFirst" name="email7" placeholder="Email" >
                        
                    </div>
                </div>
				<div class="form-group">
                    <label for="InputMessage">Enter Phone no.</label>
                    <div class="input-group col-sm-12">
                        <span class="input-group-addon ">+91</span>
                        <input type="text" name="phone7" id="InputMessage" placeholder="MobileNo" class="form-control"></textarea>
                        
                    </div>
                </div>
			</div><div class="page-header" style="visibility:hidden">asdf<br><br></div>
			
			 <div class="col-lg-4">
                <div class="form-group">
				<label for="InputName">Enter Full Name</label>
					<div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="name8" id="InputName" placeholder="Enter Name" >
                        
					</div>
				</div>
				<div class="form-group">
                    <label for="InputName">Enter College Name</label>
                    <div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="col8" id="InputName" placeholder="Enter College Name" >
                        
                    </div>
                </div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
				<label for="InputName">Enter Team Name </label>
					<div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="team8" id="InputName" placeholder="Team Name" >
                        
					</div>
				</div>
				<div class="form-group">
                    <label for="InputName">Enter College Regno</label>
                    <div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="colr8" id="InputName" placeholder="College Regno" >
                        
                    </div>
                </div>
			</div>
			<div class="col-lg-4">
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group col-sm-12">
                        <input type="email" class="form-control" id="InputEmailFirst" name="email8" placeholder="Email" >
                        
                    </div>
                </div>
				<div class="form-group">
                    <label for="InputMessage">Enter Phone no.</label>
                    <div class="input-group col-sm-12">
                        <span class="input-group-addon ">+91</span>
                        <input type="text" name="phone8" id="InputMessage" placeholder="MobileNo" class="form-control"></textarea>
                        
                    </div>
                </div>
			</div><div class="page-header" style="visibility:hidden">asdf<br><br></div>
			
			 <div class="col-lg-4">
                <div class="form-group">
				<label for="InputName">Enter Full Name</label>
					<div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="name9" id="InputName" placeholder="Enter Name" >
                        
					</div>
				</div>
				<div class="form-group">
                    <label for="InputName">Enter College Name</label>
                    <div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="col9" id="InputName" placeholder="Enter College Name" >
                        
                    </div>
                </div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
				<label for="InputName">Enter Team Name </label>
					<div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="team9" id="InputName" placeholder="Team Name" >
                        
					</div>
				</div>
				<div class="form-group">
                    <label for="InputName">Enter College Regno</label>
                    <div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="colr9" id="InputName" placeholder="College Regno" >
                        
                    </div>
                </div>
			</div>
			<div class="col-lg-4">
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group col-sm-12">
                        <input type="email" class="form-control" id="InputEmailFirst" name="email9" placeholder="Email" >
                        
                    </div>
                </div>
				<div class="form-group">
                    <label for="InputMessage">Enter Phone no.</label>
                    <div class="input-group col-sm-12">
                        <span class="input-group-addon ">+91</span>
                        <input type="text" name="phone9" id="InputMessage" placeholder="MobileNo" class="form-control"></textarea>
                        
                    </div>
                </div>
			</div><div class="page-header" style="visibility:hidden">asdf<br><br></div>
			
			 <div class="col-lg-4">
                <div class="form-group">
				<label for="InputName">Enter Full Name</label>
					<div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="name10" id="InputName" placeholder="Enter Name" >
                        
					</div>
				</div>
				<div class="form-group">
                    <label for="InputName">Enter College Name</label>
                    <div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="col10" id="InputName" placeholder="Enter College Name" >
                        
                    </div>
                </div>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
				<label for="InputName">Enter Team Name </label>
					<div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="team10" id="InputName" placeholder="Team Name" >
                        
					</div>
				</div>
				<div class="form-group">
                    <label for="InputName">Enter College Regno</label>
                    <div class="input-group col-sm-12">
                        <input type="text" class="form-control" name="colr10" id="InputName" placeholder="College Regno" >
                        
                    </div>
                </div>
			</div>
			<div class="col-lg-4">
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group col-sm-12">
                        <input type="email" class="form-control" id="InputEmailFirst" name="email10" placeholder="Email" >
                        
                    </div>
                </div>
				<div class="form-group">
                    <label for="InputMessage">Enter Phone no.</label>
                    <div class="input-group col-sm-12">
                        <span class="input-group-addon ">+91</span>
                        <input type="text" name="phone10" id="InputMessage" placeholder="MobileNo" class="form-control"></textarea>
                        
                    </div>
                </div>
			</div><div class="page-header" style="visibility:hidden">asdf<br><br></div>
			
		
		<div class="col-lg-3">	</div>
		<div class="col-lg-6">	
			<div class="g-recaptcha" data-sitekey="6LeMcg8TAAAAAMfnSdEUJnVOnnkgl0OKxF4SfNqz"></div><br>
				<input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info  btn-block pull-right">
		</div>	
			
	</div> 
    </form>
        <div class="page-header" style="visibility:hidden">asdf</div>
</div>
<!-- Registration form - END -->

</div>

</body>
</html>