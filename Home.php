<?php
$conn = mysqli_connect('localhost', 'root', '', 'practise') or die("Connection Failed:" . mysqli_connect_error());
$sql = "select poster_img from events;";
$result = mysqli_query($conn, $sql);
$images = $result->fetch_all();
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HOME</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<link href="style.css" rel="stylesheet">
	<style>
		body {
			background-color: #ffcccc;
		}

		div.gallery {
			margin: 5px;
			border: 1px solid #ccc;
			float: left;
			width: 180px;
		}

		div.gallery:hover {
			border: 1px solid #777;
		}

		div.gallery img {
			width: 100%;
			height: auto;
		}

		div.desc {
			padding: 15px;
			text-align: center;
		}

		.navbar {
			background-color: #222;
			/* dark background color */
			color: #fff;
			/* light text color */
		}

		.navbar button {
			background-color: #fff;
			/* light button color */
			color: #222;
			/* dark text color */
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			cursor: pointer;
		}

		.navbar button:hover {
			background-color: #ddd;
			/* light button hover color */
			color: #222;
			/* dark text hover color */
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
				<a href="signup.html"><button> Add Event </button></a>
			</div>
		</div>
	</nav>
	<div id="demo" class="carousel slide" data-bs-ride="carousel" left="10%" right="10%" style="border: 5px solid;margin: auto;width: 50%;padding: 10px;height:700px;display:flex;">

		<!-- Indicators/dots -->
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
			<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
			<button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
		</div>

		<!-- The slideshow/carousel -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="uploads/event1.png" alt="Event1" class="d-block w-100" style="width: 50%;height: 700px;;">
			</div>
			<div class="carousel-item">
				<img src="uploads/event4.png" alt="Event2" class="d-block w-100" style="width: 50%;height: 700px;;">
			</div>
			<div class="carousel-item">
				<img src="uploads/event5.png" alt="Event3" class="d-block w-100" style="width: 50%;height: 700px;;">
			</div>
		</div>

		<!-- Left and right controls/icons -->
		<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
			<span class="carousel-control-next-icon"></span>
		</button>
	</div>

	<?php echo '<div  style="border: solid black 5px;display: flex;flex-wrap: wrap;background-color:azure;flex-direction:row;width:auto;heigth:auto;margin: 10px;">';
	foreach ($images as $image) {
		echo '<div class="gallery">';
		echo '<a href="eventpage.php?image=' . $image[0] . '" >';
		echo '<img src="' . $image[0] . '" >';
		echo '</a>';
		echo '</div>';
	}
	echo '</div>';
	?>


</body>

</html>