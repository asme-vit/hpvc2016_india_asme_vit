<?php
    if(!isset($_POST['g-recaptcha-response'])){
        header("Location: http://hpvcindia.in/form.php");
    }
    else{
        include("connection.php");
        //echo "hello";
        if($_SERVER["REQUEST_METHOD"] === "POST"){

            $recaptcha_secret = "6LeMcg8TAAAAAM5xiagb-ltLLvMgQHcTp7FxICaI";
            $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
            $response = json_decode($response, true);

            if($response["success"] === true){
                $email=$_POST['email'];
                $reemail=$_POST['reemail'];
                $col_nm=$_POST['colnm'];
                $team_nm=$_POST['teamnm'];
                $cap_nm=$_POST['capnm'];
                $phone=$_POST['phone'];
                if($email!==$reemail){
                    header("Location: http:hpvcindia.in/form.php?err=em");
                }
                else{
                    $sql="Select * from temp where email='$email'";
                    $res=mysqli_query($con,$sql);
                    $row=mysqli_fetch_array($res);
                    $count_e=mysqli_num_rows($res);
                    if($count_e==0){
                        $sql="INSERT INTO temp values('null','$team_nm','$col_nm','$cap_nm','$phone','$email')";
                        $res=mysqli_query($con,$sql);
                        if($res){
                            $invID1=mysqli_insert_id($con);
                            //Payment gateway redirection

                            $name=$cap_nm;
                            $amount=2000;
                            $invID1=str_pad($invID1, 4, '0', STR_PAD_LEFT);
                            $invID1=str_pad($invID1, 5, 'C', STR_PAD_LEFT);
                            $invID1=str_pad($invID1, 6, 'V', STR_PAD_LEFT);
                            $invID1=str_pad($invID1, 7, 'P', STR_PAD_LEFT);
                            $invID1=str_pad($invID1, 8, 'H', STR_PAD_LEFT);
                            $tran=$invID1;
                            //echo $tran;

                            echo '<form id="payment" method="POST" action="https://academics.vit.ac.in/online_application2/onlinepayment/Online_pay_request1.asp">';
                            echo'<input type="hidden" name="id_trans" value="'.$tran.'">
                            <input type="hidden" name="id_name" value="'.$name.'">
                            <input type="hidden" name="id_event" value="11">
                            <input type="hidden" name="amt_event" value="'.$amount.'">
                            <input type="hidden" name="id_merchant" value="1010">
                            <input type="hidden" name="id_password" value="hpV6!1uLqw9">';
                            echo '</form>'; 
                
                
                        }
                        else{
                            echo mysqli_error($con);
                        }

                    }
                    else{
                        
                        $contig=$row['sl'];
                        $sql="UPDATE temp SET team_nm='".$team_nm."',col_nm='".$col_nm."',team_cap='".$cap_nm."',phone='".$phone."' WHERE sl='".$contig."'";
                        $res=mysqli_query($con,$sql);
                        if($res){
                            //Payment gateway redirection

                            $name=$cap_nm;
                            $amount=2000;
                            $invID1=$contig;
                            $invID1=str_pad($invID1, 4, '0', STR_PAD_LEFT);
                            $invID1=str_pad($invID1, 5, 'C', STR_PAD_LEFT);
                            $invID1=str_pad($invID1, 6, 'V', STR_PAD_LEFT);
                            $invID1=str_pad($invID1, 7, 'P', STR_PAD_LEFT);
                            $invID1=str_pad($invID1, 8, 'H', STR_PAD_LEFT);
                            $tran=$invID1;
                            //echo $tran;

                            echo '<form id="payment" method="POST" action="https://academics.vit.ac.in/online_application2/onlinepayment/Online_pay_request1.asp">';
                            echo'<input type="hidden" name="id_trans" value="'.$tran.'">
                            <input type="hidden" name="id_name" value="'.$name.'">
                            <input type="hidden" name="id_event" value="11">
                            <input type="hidden" name="amt_event" value="'.$amount.'">
                            <input type="hidden" name="id_merchant" value="1010">
                            <input type="hidden" name="id_password" value="hpV6!1uLqw9">';
                            echo '</form>'; 
                

                            
                        }
                        else{
                            echo mysqli_error($con);
                        }
                    }
                }
            }

            else{
                 header("Location: http://hpvcindia.in/form.php");
            }
        }
    }
?>

<html>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
    
    $(document).ready(function(){
         $("#payment").submit();
    });
</script>
</html>