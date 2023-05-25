<?php

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
	echo "entered if1";
	$conn = mysqli_connect('localhost','root','','practise') or die("Connection Failed:" .mysqli_connect_error());
	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['tktno']) ){
		echo "entered if";
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$tktno = $_POST['tktno'];
		$eventid = $_POST['eventid'];
		echo $eventid;
		$sql = "INSERT INTO customers (eventId,name,email,phone,tktno) VALUES ('$eventid','$name','$email','$phone','$tktno')";
		$query = mysqli_query($conn,$sql);
		if($query){
			header("location: Home.php");
			exit;
		}
		else{
			echo 'Error Occured';
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>hello falthu</h1>
</body>
</html>