<?php
echo "entry";
if($_SERVER['REQUEST_METHOD']=='POST' || isset($_POST['submit'])){
	echo "entered if1";
	$conn = mysqli_connect('localhost','root','','practise') or die("Connection Failed:" .mysqli_connect_error());
	if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['nic']) && isset($_POST['aadhar']) && isset($_POST['phno']) && isset($_POST['password'])){
		echo "entered if2";
		$email = $_POST['email'];
		$name = $_POST['name'];
		$nick = $_POST['nic'];
		$aadhar = $_POST['aadhar'];
		$phone = $_POST['phno'];
		$password = $_POST['password'];
		$sql = "INSERT INTO users VALUES ('$email','$name','$nick','$aadhar','$phone','$password')";
		$query = mysqli_query($conn, $sql);
		if($query){
			echo "success";
		}
		else{
			echo "unsuccess";
		}
	}
}
?>
