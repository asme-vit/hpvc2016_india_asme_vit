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
                $fullnm=$_POST['fullnm'];
				$gender=$_POST['gen'];	
				$age=$_POST['age'];	
				$degree=$_POST['degree'];
				$branch = $_POST['branch'];
				$year=$_POST['year'];
				
/*                    $sql="Select * from survey where email='$email'";
                    $res=mysqli_query($con,$sql);
                    $row=mysqli_fetch_array($res);
                    $count_e=mysqli_num_rows($res);

                    if($count_e==0)
					{
*/
                        $sql="INSERT INTO survey values('$team_nm','$fullnm','$gender','$age','$degree','$email','$branch','$year')";
                        $res=mysqli_query($con,$sql);
						header("location:main.php?err=survey");
/*					}
                	else
					{
						$sql="UPDATE vehicle_pre SET q1='".$q1."',q2='".$q2."',q3='".$q3."',q4='".$q4."',email='".$email."' WHERE team_name='".$team_nm."'";
                        $res=mysqli_query($con,$sql);
						header("location:main.php");
					}
*/
?>