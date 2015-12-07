<?php

$refno="refno";
    $tid="tid";
    $brefno="bref";
    $txndate="txd";
    $status ="0300";
    $amount="200";
    $login=1003;
    $cap_nm="test";
    $team_nm="test1";
    
                                $length = 6;
                                $randomString = substr(str_shuffle(md5(time())),0,$length);
                                $tkn=$login.$randomString;
                                



                                //email Invoice
                                
                                $to = "yeshwanth.syr@gmail.com"; 
                				$from = "no-reply@hpvcindia.in"; 
                				$subject = "HPVC2015-Registration"; 
                				$message = "<p>Congatulations your payment is Succesfull.</p><p>Find the attachment for Invoice</p><p>Your Unique Token for uploading report is :<b>".$tkn."</b></p><p>Token will expire immediately after uploading report</p>";

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
                				$pdf->Cell(0,10, $cap_nm ,0,1,"");
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
                				
                				mail($to, $subject, "", $headers);

?>