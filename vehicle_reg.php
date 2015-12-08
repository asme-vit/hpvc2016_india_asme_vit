<?php
//    if(!isset($_POST['g-recaptcha-response'])){
//        header("Location: http://hpvcindia.in/form.php");
//    }
//    else{
        include("connection.php");
        //echo "hello";
 //       if($_SERVER["REQUEST_METHOD"] === "POST"){

 //           $recaptcha_secret = "6LeMcg8TAAAAAM5xiagb-ltLLvMgQHcTp7FxICaI";
 //           $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
 //           $response = json_decode($response, true);

 //       if($response["success"] === true){
                $email=$_POST['email'];
                $name=$_POST['fullnm'];
                $col_nm=$_POST['colnm'];
                $team_nm=$_POST['teamnm'];
                $regno=$_POST['regno'];
                $phone=$_POST['phone'];
				$asme_id=$_POST['asmeid'];
				 $amount=7000;
				

                    $sql="Select * from vehicle where email='$email'";
                    $res=mysqli_query($con,$sql);
                    $row=mysqli_fetch_array($res);
                    $count_e=mysqli_num_rows($res);
					
					$sql = "Select max(reference_no) from vehicle";
					$res = mysqli_query($con,$sql);
					$row = mysqli_fetch_row($res);
					$refno = $row[0] + 1;
					
                    if($count_e==0){
                        $sql="INSERT INTO vehicle values('$email','$name','$phone','$team_nm','$col_nm','$regno','$asme_id','$refno','$amount')";
                        $res=mysqli_query($con,$sql);
					
                            //Payment gateway redirection
                            $amount=7000;
                            $tran= "HPVC".$refno;
                            echo $tran;

         /*                  echo '<form id="payment" method="POST" action="https://academics.vit.ac.in/online_application2/onlinepayment/Online_pay_request1.asp">';
                            echo'<input type="hidden" name="id_trans" value="'.$tran.'">
                            <input type="hidden" name="id_name" value="'.$name.'">
                            <input type="hidden" name="id_event" value="11">
                            <input type="hidden" name="amt_event" value="'.$amount.'">
                            <input type="hidden" name="id_merchant" value="1010">
                            <input type="hidden" name="id_password" value="hpV6!1uLqw9">';
                            echo '</form>'; 
		*/ 
					}
                	else
					{
						$sql="UPDATE vehicle SET team_name='".$team_nm."',college_name='".$col_nm."',asme_id='".$asme_id."',reference_no='".$refno."',college_regno='".$regno."',name='".$name."',phone='".$phone."' WHERE email='".$email."'";
                        $res=mysqli_query($con,$sql);
						
						//Payment gateway redirection
						
                            $amount=7000;
                            $tran= "HPVC".$refno;
                            echo $tran;

         /*                  echo '<form id="payment" method="POST" action="https://academics.vit.ac.in/online_application2/onlinepayment/Online_pay_request1.asp">';
                            echo'<input type="hidden" name="id_trans" value="'.$tran.'">
                            <input type="hidden" name="id_name" value="'.$name.'">
                            <input type="hidden" name="id_event" value="11">
                            <input type="hidden" name="amt_event" value="'.$amount.'">
                            <input type="hidden" name="id_merchant" value="1010">
                            <input type="hidden" name="id_password" value="hpV6!1uLqw9">';
                            echo '</form>'; 
		*/ 
					}
            

 //   }

?>
<html>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
    
    $(document).ready(function(){
         $("#payment").submit();
    });
</script>
</html>