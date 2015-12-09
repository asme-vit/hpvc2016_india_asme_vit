<?php
//	if($_SERVER["REQUEST_METHOD"] !== "POST"){
//		header("Location: http://hpvcindia.in");
//	}

	include("connection.php");
	$refno=$_POST['Refno'];
    $tid=$_POST['tpsltranid'];
   $brefno = $_POST['bankrefno'];
    $txndate=$_POST['txndate'];
   $status = $_POST['status'];
	 $login=substr($refno,4,4);
	 //$amount=7000;
?>

<html>
<head>
    <meta charset="utf-8" />
    <title>PAYMENT RECEIPT | HPVC-2016</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
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
<div class="container">

				<div class="row sidebar-page" style="margin-top:140px;">
                                        
                    <!-- Page Content -->
					<div class="page-content">
                    <center>
                        <h3>

                        	<?php
                            

                        	if($status=="0300"){
								
								if($login<=2000) //vehicle
								{
								$sql65="SELECT * from vehicle WHERE reference_no=".$login;
                                $res=mysqli_query($con,$sql65);
                                $numb=mysqli_num_rows($res);
								$row=mysqli_fetch_array($res);
								
                                $team_nm=$row['team_name'];
                                $name=$row['name'];
                                $col_nm=$row['college_name'];
                                $phone=$row['phone'];
                                $email=$row['email'];
								$amount=$row['amount'];
								}
								else if($login<=3000)  //participant
								{
								$sql65="SELECT * from participant WHERE reference_no=".$login;
                                $res=mysqli_query($con,$sql65);
                                $numb=mysqli_num_rows($res);
								$row=mysqli_fetch_array($res);
								
                                $team_nm=$row['team_name'];
                                $name=$row['name'];
                                $col_nm=$row['college_name'];
                                $phone=$row['phone'];
                                $email=$row['email'];
								$amount=$row['amount'];
								}
								else if($login>3000)  //food
								{
								$sql65="SELECT * from food WHERE reference_no=".$login;
                                $res=mysqli_query($con,$sql65);
                                $numb=mysqli_num_rows($res);
								$row=mysqli_fetch_array($res);
								
                                $team_nm="";
                                $name=$row['email'];
                                $col_nm="";
                                $phone="";
                                $email=$row['email'];
								$amount=$row['amount'];
								}
								
                                if($numb==0){
                                     header("Location: http://hpvcindia.in");
                                }
								else
								{
    				            $sql="INSERT into yes_payment values('".$refno."','".$email."', '".$tid."', '".$brefno."', '".$status."','".$amount."', '".$txndate."', '".$login."');";
    				            $res=mysqli_query($con,$sql);
								}
    				            if(!$res){
    				            	echo mysqli_error($con);
    				            }


								
                                echo '<div id="printbody">';
                                
                                echo '<img src="img/vit.png" style="width:150px; padding-right:60px"><img src="img/asme1.png" style="width:150px;padding-left:60px;">';
                                echo'<center><br><br><br>Congratulations <span style="color:#f16261;">'.$name.'</span>, your payment is Succesfull.<br>we have mailed you your transection details!';
                                 echo' <table>
                                <tr>';
								
                                echo'<br><tr><td>Team Name  </td><td>: <span style="color:#f16261;">'.$team_nm.'</span></td></tr>';
                                echo '<br><tr><td>Reference No </td><td>: <span style="color:#f16261;">'.$refno.'</span></td></tr>';
                                echo'<br><tr><td>Transaction ID  </td><td>: <span style="color:#f16261;">'.$tid.'</span></td></tr>';
                                echo'<br><tr><td>Amount  </td><td>: <span style="color:#f16261;">'.$amount.'</span></td></tr>';
								echo'<br><tr><td>email  </td><td>: <span style="color:#f16261;">'.$email.'</span></td></tr>';
                                //echo'<br><tr><td>Bank Reference Number  </td><td>: <span style="color:#f16261;">'.$brefno.'</span></td></tr>';
                                echo'<br><tr><td>Transaction date  </td><td>: <span style="color:#f16261;">'.$txndate.'</span></td></tr></table>';
                                echo ' </center></div><br>';
                                echo '<br><button class="btn btn-info drop_but" id="btnPrint">Print Receipt</button>';
                               
							   
                                //email Invoice
                                
                                $to = $email; 
                				$from = "no-reply@hpvcindia.in"; 
                				$subject = "HPVC2015-Registration"; 
                				$message = "<p>Congatulations your payment is Succesfull.</p><p>Find the attachment for Invoice</p>";

                                require("fpdf/fpdf.php");

                				$pdf = new FPDF();
                				
                				$pdf->AddPage();
                				$pdf->SetFont("Arial","B",11);
                				//$pdf->Image('img/header.jpg',10,null,190,0);
                				$pdf->Ln();
                				$pdf->Ln();
                				$pdf->Ln();
                				$pdf->Cell(40,10, "Congratulations",0,0,"");
                				$pdf->SetTextColor(241,98,97);
                				$pdf->Cell(0,10, $name ,0,1,"");
                				$pdf->SetTextColor(241,98,97);
                				$pdf->SetFont("Arial","B",14);
                				$pdf->Cell(0,10, "Your Payment is Succesfull.",0,1,"");
                				$pdf->SetFont("Arial","B",11);
                				$pdf->SetTextColor(0,0,0);
                				$pdf->Cell(50,10, "Team Name:",0,0,"");
                				$pdf->SetTextColor(241,98,97);
                				$pdf->Cell(0,10, $team_nm,0,1,"");
                				$pdf->SetTextColor(0,0,0);
                				$pdf->Cell(50,10, "Reference No:",0,0,"");
                				$pdf->SetTextColor(241,98,97);
                				$pdf->Cell(0,10, $refno ,0,1,"");
                				$pdf->SetTextColor(0,0,0);
                				$pdf->Cell(50,10, "Transaction ID:",0,0,"");
                				$pdf->SetTextColor(241,98,97);
                				$pdf->Cell(0,10, $tid,0,1,"");
                				$pdf->SetTextColor(0,0,0);
                				$pdf->Cell(50,10, "Amount:",0,0,"");
                				$pdf->SetTextColor(241,98,97);
                				$pdf->Cell(0,10, $amount,0,1,"");

                				$pdf->SetTextColor(0,0,0);
                				$pdf->Cell(50,10, "Transaction date :",0,0,"");
                				$pdf->SetTextColor(241,98,97);
                				$pdf->Cell(0,10, $txndate,0,1,"");
                				$pdf->SetTextColor(241,98,97);
                				$pdf->Cell(50,10,"Amount once paid is not Refundable.",0,1,"");
                				
                				
                				$separator = md5(time());
                				
                				$eol = PHP_EOL;
                				
                				$filename = "HPVC2015_Invoice.pdf";
                				
                				$pdfdoc = $pdf->Output("", "S");
                				$attachment = chunk_split(base64_encode($pdfdoc));
                				
                				
                				$headers  = "From: ".$from.$eol;
                				$headers .= "MIME-Version: 1.0".$eol; 
                				$headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"".$eol.$eol; 
                				$headers .= "Content-Transfer-Encoding: 7bit".$eol;
                				$headers .= "This is a MIME encoded message.".$eol.$eol;
                				
                				$headers .= "--".$separator.$eol;
                				$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
                				$headers .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
                				$headers .= $message.$eol.$eol;
                				
                				$headers .= "--".$separator.$eol;
                				$headers .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
                				$headers .= "Content-Transfer-Encoding: base64".$eol;
                				$headers .= "Content-Disposition: attachment".$eol.$eol;
                				$headers .= $attachment.$eol.$eol;
                				$headers .= "--".$separator."--";
                				
             //   				mail($to, $subject, "", $headers);

                            }
                       		else if($status=="0399")
							{
								
                       		   echo'Payment Failed!<br>Please try again after some time or choose a different payment method'; 

                       		}

                       		else
							{
                       		   echo'Payment Failed!<br>Please try again after some time or choose a different payment method';
                       		}
                            ?>
                        </h3>
                    </center>
                    	

					</div>
                    <!-- End Page Content-->
                    
                    
				</div>






</div>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <script type="text/javascript">
        $("#btnPrint").live("click", function () {
            var divContents = $("#printbody").html();
            var printWindow = window.open('', '', '');
            printWindow.document.write('<html><head><title>HPVC2016</title>');
            printWindow.document.write('</head><body style="padding-top:50px;"><center>');
            printWindow.document.write(divContents);
            printWindow.document.write('</center></body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>
</body>
</html>