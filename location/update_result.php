<html>
<head><Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"/></head>
<body style="background-color:greenyellow;">
<?php

$id = $_GET["id"];

$location_id = $_GET["location_id"];

$location = $_GET["location"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE location SET LOCATION='$location' WHERE location_id = $location_id";

	



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> Location = $location";



	echo "<p><a href=read.php><button class='ui inverted secondary button'>READ ALL RECORS</button></a>";

?>
</body>
</html>