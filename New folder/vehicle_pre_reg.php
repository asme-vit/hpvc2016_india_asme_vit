<?php
session_start();
if($_SESSION["email"] == "")
{
	header("location:login.php?err=em");
}
$email = $_SESSION["email"];
?>
<?php

        include("connection.php");
                $team_nm=$_POST['teamnm'];
                $q1=$_POST['q1'];
				$q2=$_POST['q2'];	
				$q3=$_POST['q3'];	
				$q4=$_POST['q4'];
				
                    $sql="Select * from vehicle_pre where team_name='$team_nm'";
                    $res=mysqli_query($con,$sql);
                    $row=mysqli_fetch_array($res);
                    $count_e=mysqli_num_rows($res);

                    if($count_e==0)
					{
                        $sql="INSERT INTO vehicle_pre values('$team_nm','$q1','$q2','$q3','$q4','$email')";
                        $res=mysqli_query($con,$sql);
						header("location:vehicle.php");
					}
                	else
					{
						$sql="UPDATE vehicle_pre SET q1='".$q1."',q2='".$q2."',q3='".$q3."',q4='".$q4."',email='".$email."' WHERE team_name='".$team_nm."'";
                        $res=mysqli_query($con,$sql);
						header("location:vehicle.php");
					}
?>