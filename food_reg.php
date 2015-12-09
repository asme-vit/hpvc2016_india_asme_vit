<?php
session_start();
if($_SESSION["email"] == "")
{
	header("location:login.php?err=em");
}
?>
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
                $email=$_SESSION["email"];
                $food=$_POST['food'];
                $acc=$_POST['acc'];
                $no=$_POST['no'];
                $amount_food=273;
				$amount_acc=300;
				$amount_food_total = $no * $amount_food;
				$amount_acc_total = $no * $amount_acc;
				$amount = $amount_food_total + $amount_acc_total;
				

                    $sql="Select * from yes_payment where email='$email'";
                    $res=mysqli_query($con,$sql);
                    $row=mysqli_fetch_array($res);
                    $count_e=mysqli_num_rows($res);
					
					$sql = "Select max(reference_no) from food";
					$res = mysqli_query($con,$sql);
					$row = mysqli_fetch_row($res);
					$refno = $row[0] + 1;
					
					
                    if($count_e==0){
						header("Location: main.php?err=em");
					}
					else
					{
                        $sql="INSERT INTO food values('$email','$food','$acc','$no','$amount_food_total','$amount_acc_total','$amount','$refno')";
                        $res=mysqli_query($con,$sql);
					
                            //Payment gateway redirection
							
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