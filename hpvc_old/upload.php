<!DOCTYPE html>
<?php
if(isset($_GET['err'])){
    if ($_GET['err']=="ex") {
        echo '<script>
            alert("Your have alradey uploaded your report!");
        </script>';
    }
    if ($_GET['err']=="in") {
        echo '<script>
            alert("Invalid Token!");
        </script>';
    }
    if ($_GET['err']=="max") {
        echo '<script>
            alert("PDF must not exceed 5MB!");
        </script>';
    }
    if ($_GET['err']=="pdf") {
        echo '<script>
            alert("Only PDF file is allowed!");
        </script>';
    }
}
if(isset($_GET['msg'])){
    if ($_GET['msg']=="ok") {
        echo '<script>
            alert("Your report is successfully uploaded.");
        </script>';
    }
    if ($_GET['msg']=="er") {
        echo '<script>
            alert("Something went wrong! Please try again.");
        </script>';
    }
}
?>
<html>
<head>
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
     <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8" />
    <title>Report upload | HPVC-2015</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <style type="text/css">
    .info{
      margin: 15px;
      font-family: inherit;
    }
    .txt{
      font-size : 18px;
      font-weight: 6px;
      margin-top: 8px;
      margin-bottom: 8px; 
    }

    </style>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>
    <script type="text/javascript">
        $(":file").filestyle({buttonName: "btn-primary"});
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

<div class="container">

<div class="page-header" style="margin-top:60px;">
    <h3>Report upload form</h3>
</div>

<!-- Registration form - START -->
<div class="container">
    <div class="row">

        <form role="form" action="upd.php" method="post" enctype="multipart/form-data">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="InputName">Enter Unique code</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="tkn" id="InputName" placeholder="Enter Unique code" style="border-radius: 5px;" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputName">Choose file to upload</label>
                    <div class="input-group">
                        <input type="file" class="filestyle" name="rpt" data-buttonName="btn-primary" required>
                    </div>
                </div>
                
                <input type="submit" name="submit" id="submit" value="Upload" class="btn btn-primary pull-right">
            </div>
        </form>
         <div class="info col-lg-6">
            <span class="txt">Note:<br>1.Unique code once used cannot be used again.<br>
                2.Proposals once uploaded cannot be edited or resubmitted.<br>
                3.Only PDF file types allowed.<br>
                4.Maximum file size of 5MB.<br>
                5.Proposal should contain maximum of 4 pages.<br>
                6.Deadline for upload is 27th November 2015.</span>
        </div>
        
</div>
<!-- Registration form - END -->

</div>

</body>
</html>