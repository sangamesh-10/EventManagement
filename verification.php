<?php
	session_start();	
	$con = mysqli_connect('localhost','root','','practise');
	if (!$con) {
	  die("Connection failed: " . mysqli_connect_error());
	}

		$mail= mysqli_real_escape_string($con,$_POST['mail']);
		$password = mysqli_real_escape_string($con,$_POST['password']);
		$adrc = mysqli_real_escape_string($con,$_POST['captcha']);
		$mblc = mysqli_real_escape_string($con,$_POST['captcha2']);
		$nikc = mysqli_real_escape_string($con,$_POST['captcha3']);
		if ($mail != "" && $password != ""){
	
			$sql_query = "select email,password,aadhar,phone,nick  from users where email='".$mail."' and password='".$password."'";
			$result = mysqli_query($con,$sql_query);
			
			$row = mysqli_fetch_array($result);
	
			$adr=$row['aadhar'];
			$mbl=substr($row['phone'],6);
			$nik=$row['nick'];
			if(str_contains($adr,$adrc) && strcmp($mbl,$mblc) && strcmp($nik,$nikc)){
				header('Location:Home.php');
				exit;
			}
			else{
				echo "invalid details";
				header('Location:login.html');
				
			}
			
		}
		else{
			echo "invalid email and password";
		}
	
	
?>