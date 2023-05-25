<?php
	$src = $_GET['image'];
	$conn = mysqli_connect('localhost','root','','practise') or die("Connection Failed:" .mysqli_connect_error());
	$sql = "select * from events where poster_img='$src'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AddEvent</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<link href="style.css" >
	<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 300px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}
.imagecontainer{
	display: flex;
	justify-content: space-between;
}
.details{
	display:flex;
	justify-content: space-around;
	border:3px solid blue;

}


</style>
	
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
		<div class="container-fluid">
		  <a class="navbar-brand" href="Home.php"><img src="uploads/image.png" alt="" width="100px" height="35px"></a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
			  <li class="nav-item">
				<a class="nav-link" href="Home.php">HOME</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="About.html">about</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="contact.html">contact</a>
			  </li>    
			</ul>
		  </div>
		  <div>
			<a  href="addevent.html">Addevevt</a>
		  </div>
		</div>
	  </nav>
	<div class="maincontainer" style="border: solid black 5px;display: flex;background-color:azure;flex-direction:row;justify-content:space-around;padding:50px">
		<div class="event">
		<img src="<?=$row['poster_img']?>" alt="" style="height :600px;width: 450px;object-fit:cover">
		</div>
	<div class="form"style="border: solid black 5px;background-color:azure;height: 600px;width: 450px;padding:50px;position:relative">
	
	<h3 style="background-color: #ff3333;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;width: 441px;position:absolute;left:0px;height:50px;text-align:center;top:0px">Book Now..</h3>
	<form action="Register.php" method="post" style="margin-top:30px;">
		<label for="user">Name : </label>
		<input type="text" name="name" id="name" required><br><br>
		<label for="email">Email : </label>
		<input type="email" name="email" id="email" required><br><br>
		<label for="phone">Phone : </label>
		<input type="text" name = "phone" id="phone" required> <br><br>
		<label for="tktno">Number of Tickets : </label>
		<input type="number" name="tktno" id="tktno" required> <br><br>
		<label for="eventid">Event id :</label>
		<input type="text" name="eventid" id="eventid"  value="<?php echo $row['e_Id'];?>"> <br><br>
		<a href="Home.php"><input type="submit" name="submit" id="submit"></a>
	</form>
	</div>
	  </div>
	<div class="imagecontainer">
	<div class="gallery">
    <img src="<?php echo $row['image1'];?>" alt="Cinque Terre" width="900" height="400">
</div>

<div class="gallery">
    <img src="<?php echo $row['image2'];?>" alt="Forest" width="900" height="400">
</div>

<div class="gallery">
    <img src="<?php echo $row['image3'];?>" alt="Northern Lights" width="900" height="400">
</div>

<div class="gallery">
    <img src="<?php echo $row['image4'];?>" alt="Mountains" width="900" height="400">
   </div>

</div>
	<div class="details">
		<div class="first">
		<h4>Event Name : </h4>
		<i><?php echo $row['e_Name'];?></i>
		<h4>Main Guest : </h4>
		<i><?php echo $row['e_guest'];?></i>
		<h4>Available Tickets : </h4>
		<i><?php echo $row['available_tkts'];?></i>
		</div>
		<div class="second">
		
		<h4>Event time : </h4>
		<b><?php echo $row['e_time'];?></b>
		<h4>Event Duration : </h4>
		<b><?php echo $row['e_duration'];?> Hrs</b>
		<h4>Ticket Price : </h4>
		<b>Rs : <?php echo $row['tkt_price'];?></b>
		<h4>Location : </h4>
		<p><?php echo $row['e_address'];?></p>
		</div>
		<div class="third" style="width:200px;height:300px;">
			<h4>Organizer : </h4>
			<div><img src="<?php echo $row['org_photo'];?>" alt="" style="width: 150px;height:200px"></div>
			<p><?php echo $row['org_name'];?></p>
			<p><?php echo $row['org_email'];?></p>
		</div>
	</div>
	
</body>
</html>	