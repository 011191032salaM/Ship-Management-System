<html>
<head></head>
<body>
<?php

	$id = $_GET["ID"];

	$location_id = $_GET["LOCATION_ID"];

	$location = $_GET["LOCATION"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO location VALUES ( '$id', '$location_id' ,'$location')" )

		or die("Can not execute query");



	echo "Record inserted:<br> Id= $id <br> Location_Id = $location_id <br> Location = $location ";



	echo "<p><a href=read.php><button class='ui inverted secondary button'>READ ALL LOCATIONS</button></a>";

?>
</body>
</html>