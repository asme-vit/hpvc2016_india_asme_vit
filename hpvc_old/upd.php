<?php 
if($_SERVER["REQUEST_METHOD"] !== "POST"){
		header("Location: http://hpvcindia.in");
 }

	include("connection.php");
	$message = '';
	$dir_upload = 'upload/';
	$max_size = 5242880;
	$tkn=$_POST['tkn'];
	$id=substr($_POST['tkn'],0,4);
	$file = $_FILES['rpt'];

	if($file['type'] == "application/pdf"){
		if ($file['size'] <= $max_size && $file['size'] > 0) {
			$sql="SELECT * from registration WHERE sl=".$id." AND tokn='".$tkn."'";
			$res = mysqli_query($con,$sql);
			$count = mysqli_num_rows($res);
			if($count==0){
				header("Location: http://hpvcindia.in/upload.php?err=in");
			}
			else{
				$row=mysqli_fetch_array($res);
				if($row['tkn_us']!=0){
					header("Location: http://hpvcindia.in/upload.php?err=ex");
				}
				else{
					
						$new_name = $id. '-' . $file['name'];
						$copied = copy($file['tmp_name'], $dir_upload . $new_name);

						if ($copied){
							$sql="UPDATE registration SET tkn_us=1,file='".$new_name."' WHERE sl='".$id."'";
	                        $res=mysqli_query($con,$sql);
	                        if($res)
								header("Location: http://hpvcindia.in/upload.php?msg=ok");
							else
								header("Location: http://hpvcindia.in/upload.php?msg=er");
						}
						else
							header("Location: http://hpvcindia.in/upload.php?msg=er");

				}
			}
		}
		else {
			header("Location: http://hpvcindia.in/upload.php?err=max");
		}
	}
	else{
		header("Location: http://hpvcindia.in/upload.php?err=pdf");
	}
	// $file = $_FILES['rpt'];

	// if ($file['size'] <= $max_size && $file['size'] > 0) {
	// 	$new_name = time() . '-' . $file['name'];
	// 	$copied = copy($file['tmp_name'], $dir_upload . $new_name);

	// 	if ($copied) {
	// 		$message = 'Ok!';
	// 	} else {
	// 		$message = 'Erro!';
	// 	}
	// } else {
	// 	$message = 'Max file size 2mb!';
	// }

	// echo json_encode(array("message" => $message));

	//  define ("filesplace","./");

	//  if (is_uploaded_file($_FILES['classnotes']['tmp_name'])) {

	//  if ($_FILES['classnotes']['type'] != "application/pdf") {
	//  echo "<p>Class notes must be uploaded in PDF format.</p>";
	//  } else {
	//  $name = $_POST['name'];
	//  $result = move_uploaded_file($_FILES['classnotes']['tmp_name'], filesplace."/$name.pdf");
	//  if ($result == 1) echo "<p>Upload done .</p>";
	//  else echo "<p>Sorry, Error happened while uploading . </p>";
	// } #endIF
	//  } #endIF


?>