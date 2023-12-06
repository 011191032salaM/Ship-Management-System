<html>
<head>
	<Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>

<body style="background-color:green">

<?php

$ship_id = $_GET["ship_id"];

$cabin_type = $_GET["cabin_type"];

$price = $_GET["price"];

$cabin_id = $_GET["cabin_id"];

$details = $_GET["details"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE cabin SET cabin_type='$cabin_type', price='$price', cabin_id='$cabin_id', details='$details' WHERE ship_id = $ship_id";

	



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> Cabin_type = $cabin_type <br> Price = $price <br> Details = $details ";



	echo "<p><a href=read.php><button class='ui green button'>Read All record
</button></a>";

?>
</body>
</html>