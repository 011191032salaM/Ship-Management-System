<html>
<head><Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"></head>
<body style="background-color:purple;">

<?php

	$ship_id = $_GET["SHIP_ID"];

	$cabin_type = $_GET["CABIN_TYPE"];
	
	$price = $_GET["PRICE"];

	$cabin_id = $_GET["CABIN_ID"];

	$details = $_GET["DETAILS"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO cabin VALUES ( '$ship_id', '$cabin_type', '$price', '$cabin_id', '$details' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> Ship_Id= $ship_id <br> Cabin_type = $cabin_type <br> Price = $price <br> Cabin_Id = $cabin_id <br> Details = $details ";



	echo "<p><a href=read.php><button class='ui purple button'>Read All Cabins
</button></a>";

?>
</body>
</html>