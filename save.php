<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
	
	$conn = mysqli_connect('localhost','root','','practise') or die("Connection Failed:" .mysqli_connect_error());
	
	if(isset($_POST['Ename']) && isset($_POST['tno'])   && isset($_POST['Eduration'])  && isset($_POST['Eventpics']) && isset($_POST['commission'])&& isset($_POST['eventtime']) && isset($_POST['eaddress']) && isset($_POST['Orgname']) && isset($_POST['OrgPhoto']) &&isset($_POST['tktprice'])&& isset($_POST['orgemail']) && isset($_POST['Poster'])){
		echo " entered second if";
		$Ename = $_POST['Ename'];
		$guest = $_POST['guest'];
		$tno = $_POST['tno'];
		$eventtime = $_POST['eventtime'];
		$Eduration = $_POST['Eduration'];
		$tktprice = $_POST['tktprice'];
		$Orgname = $_POST['Orgname'];
		$Orgphoto = $_POST['OrgPhoto'];
		$orgemail = $_POST['orgemail'];
		$poster = $_POST['Poster'];
		$Eventpics = $_POST['Eventpics'];
		$commission = $_POST['commission'];
		$eaddress = $_POST['eaddress'];	
		$picArray = explode("@",$Eventpics);
		$sql = "INSERT INTO events (e_Name,e_guest,available_tkts,e_time,e_duration,tkt_price,org_name,org_photo,org_email,poster_img,image1,image2,image3,image4,e_address,comm_percent) VALUES ('$Ename','$guest','$tno','$eventtime','$Eduration','$tktprice','$Orgname','$Orgphoto','$orgemail','$poster','$picArray[0]','$picArray[1]','$picArray[2]','$picArray[3]','$eaddress','$commission')";
		$query = mysqli_query($conn,$sql);
		if($query){
			echo "Entry Successful";
		}
		else{
			echo 'Error Occured';
		}
	}
}
else{
	echo "notentered";
}
?>
