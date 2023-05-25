<?php
	$conn = mysqli_connect('localhost','root','','practise') or die("Connection Failed:" .mysqli_connect_error());
	$sql = "select poster_img from events where e_id = 23";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$image_data = $row['poster_img'];
	
?>
<style>
    img{
        max-width: 100%;
        max-height: 100%;
    }
    .picture
    {
        width:500px;
        height: 800px;
    }
</style>
<div class="picture">
<img src="<?=$image_data?>">
</div>