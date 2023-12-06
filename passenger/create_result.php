<html>
<head></head>
<body style="background-color:lightgray;"> 

<?php

	$passenger_id = $_GET["PASSENGER_ID"];

	$name = $_GET["NAME"];
	
	$contract = $_GET["CONTRACT"];

	$address= $_GET["ADDRESS"];

	$cabin_id = $_GET["CABIN_ID"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO passenger VALUES ( '$passenger_id', '$name', '$contract', '$address', '$cabin_id' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> Passenger_Id= $passenger_id<br> Name = $name <br> Contract =$contract <br> Address = $address <br> Cabin_Id = $cabin_id ";



	echo "<p><a href=read.php><button class='ui primary button'>READ ALL PASSENGER
</button></a>";

?>
</body>
</html>