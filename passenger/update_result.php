<html>
<head><Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"></head>
<body style="background-color:lightgray;"> 

<?php

$passenger_id = $_GET["passenger_id"];

$name = $_GET["name"];

$contract = $_GET["contract"];

$address= $_GET["address"];

$cabin_id = $_GET["cabin_id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE passenger SET NAME='$name', CONTRACT='$contract', ADDRESS='$address', CABIN_ID='$cabin_id' WHERE passenger_id = $passenger_id";

	



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> Name = $name <br> Contract = $contract <br> Address = $address <br> Cabin_Id = $cabin_id ";



	echo "<p><a href=read.php><button class='ui primary button'>Read All Records
</button></a>";

?>
</body>
</html>