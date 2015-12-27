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
				$name1=$_POST['name1'];
				$col1=$_POST['col1'];
				$team1=$_POST['team1'];
				$colr1=$_POST['colr1'];
				$email1=$_POST['email1'];
				$phone1=$_POST['phone1'];
				
				$name2=$_POST['name2'];
				$col2=$_POST['col2'];
				$team2=$_POST['team2'];
				$colr2=$_POST['colr2'];
				$email2=$_POST['email2'];
				$phone2=$_POST['phone2'];
				
				$name3=$_POST['name3'];
				$col3=$_POST['col3'];
				$team3=$_POST['team3'];
				$colr3=$_POST['colr3'];
				$email3=$_POST['email3'];
				$phone3=$_POST['phone3'];
				
				$name4=$_POST['name4'];
				$col4=$_POST['col4'];
				$team4=$_POST['team4'];
				$colr4=$_POST['colr4'];
				$email4=$_POST['email4'];
				$phone4=$_POST['phone4'];
				
				$name5=$_POST['name5'];
				$col5=$_POST['col5'];
				$team5=$_POST['team5'];
				$colr5=$_POST['colr5'];
				$email5=$_POST['email5'];
				$phone5=$_POST['phone5'];
				
				$name6=$_POST['name6'];
				$col6=$_POST['col6'];
				$team6=$_POST['team6'];
				$colr6=$_POST['colr6'];
				$email6=$_POST['email6'];
				$phone6=$_POST['phone6'];
				
				$name7=$_POST['name7'];
				$col7=$_POST['col7'];
				$team7=$_POST['team7'];
				$colr7=$_POST['colr7'];
				$email7=$_POST['email7'];
				$phone7=$_POST['phone7'];
				
				$name8=$_POST['name8'];
				$col8=$_POST['col8'];
				$team8=$_POST['team8'];
				$colr8=$_POST['colr8'];
				$email8=$_POST['email8'];
				$phone8=$_POST['phone8'];
				
				$name9=$_POST['name9'];
				$col9=$_POST['col9'];
				$team9=$_POST['team9'];
				$colr9=$_POST['colr9'];
				$email9=$_POST['email9'];
				$phone9=$_POST['phone9'];
				
				$name10=$_POST['name10'];
				$col10=$_POST['col10'];
				$team10=$_POST['team10'];
				$colr10=$_POST['colr10'];
				$email10=$_POST['email10'];
				$phone10=$_POST['phone10'];
				
					
					$sql = "Select max(reference_no) from participant";
					$res1 = mysqli_query($con,$sql);
					$row = mysqli_fetch_row($res1);
					$refno = $row[0] + 1;
					$name=$name1;
                     //$amount=1000;
					 $flag = 0;
                     $tran= "HPVC".$refno;
					 
						 if(!empty($name1))
						 {
							 $flag = $flag + 1;
						 }
						 if(!empty($name2))
						 {
							 $flag = $flag + 1;
						 }
						 if(!empty($name3))
						 {
							 $flag = $flag + 1;
						 }
					     if(!empty($name4))
						 {
							 $flag = $flag + 1;
						 }
						 if(!empty($name5))
						 {
							 $flag = $flag + 1;
						 }
						 if(!empty($name6))
						 {
							 $flag = $flag + 1;
						 }
						 if(!empty($name7))
						 {
							 $flag = $flag + 1;
						 }
						 if(!empty($name8))
						 {
							 $flag = $flag + 1;
						 }
						 if(!empty($name9))
						 {
							 $flag = $flag + 1;
						 }
						 if(!empty($name10))
						 {
							 $flag = $flag + 1;
						 }
					 $amount = $flag * 1000;
					 
					 if(!empty($name1)){
							$sql="INSERT INTO participant values('$refno','$name1','$col1','$team1','$colr1','$email1','$phone1','$amount')";
							$res=mysqli_query($con, $sql);
					 }
						 if(!empty($name2)){
						
							$sql="INSERT INTO participant values('$refno','$name2','$col2','$team2','$colr2','$email2','$phone2','$amount')";
							$res=mysqli_query($con,$sql);
						}
						
						if(!empty($name3)){
						 
							$sql="INSERT INTO participant values('$refno','$name3','$col3','$team3','$colr3','$email3','$phone3','$amount')";
							$res=mysqli_query($con,$sql);
						}
						
						if(!empty($name4)){
						
							$sql="INSERT INTO participant values('$refno','$name4','$col4','$team4','$colr4','$email4','$phone4','$amount')";
							$res=mysqli_query($con,$sql);
						}
						
						if(!empty($name5)){
						
							$sql="INSERT INTO participant values('$refno','$name5','$col5','$team5','$colr5','$email5','$phone5','$amount')";
							$res=mysqli_query($con,$sql);
						}
						
						if(!empty($name6)){
				
							$sql="INSERT INTO participant values('$refno','$name6','$col6','$team6','$colr6','$email6','$phone6','$amount')";
							$res=mysqli_query($con,$sql);
						}
						
						if(!empty($name7)){
				
							$sql="INSERT INTO participant values('$refno','$name7','$col7','$team7','$colr7','$email7','$phone7','$amount')";
							$res=mysqli_query($con,$sql);
						}
						
						if(!empty($name8)){
	
							$sql="INSERT INTO participant values('$refno','$name8','$col8','$team8','$colr8','$email8','$phone8','$amount')";
							$res=mysqli_query($con,$sql);
						}
						
						if(!empty($name9)){

							$sql="INSERT INTO participant values('$refno','$name9','$col9','$team9','$colr9','$email9','$phone9','$amount')";
							$res=mysqli_query($con,$sql);
						}
						
						if(!empty($name10)){
				
							$sql="INSERT INTO participant values('$refno','$name10','$col10','$team10','$colr10','$email10','$phone10','$amount')";
							$res=mysqli_query($con,$sql);
						}
						
						
							
							//Payment gateway redirection
							$name = $name1;
							$tran= "HPVC".$refno;
							
							//echo $amount;
                            echo $tran;
							

							echo '<form id="payment" method="POST" action="https://academics.vit.ac.in/online_application2/onlinepayment/Online_pay_request1.asp">';
                            echo'<input type="hidden" name="id_trans" value="'.$tran.'">
                            <input type="hidden" name="id_name" value="'.$name.'">
                            <input type="hidden" name="id_event" value="11">
                            <input type="hidden" name="amt_event" value="'.$amount.'">
                            <input type="hidden" name="id_merchant" value="1010">
                            <input type="hidden" name="id_password" value="hpV6!1uLqw9">';
                            echo '</form>'; 
		


mysqli_close($con);
?>

<html>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
    
    $(document).ready(function(){
         $("#payment").submit();
    });
</script>
</html>