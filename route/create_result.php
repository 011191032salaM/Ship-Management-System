<html>
<head><Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"></head>
<body style="background-color:lightseagreen;">

<?php

  
    $id = $_GET["ID"];

	$ship_id = $_GET["SHIP_ID"];

	$departs = $_GET["DEPARTS"];
	
	$arrives = $_GET["ARRIVES"];
	$via = $_GET["VIA"];
	
	



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO route VALUES ( '$id', '$ship_id','$departs','$arrives','$via')" )

		or die("Can not execute query");



	echo "Record inserted: <br>  Id = $id   <br>  Ship_Id = $ship_id <br> Departs = $departs  <br>  Arrives = $arrives   <br> VIA = $via ";



	echo "<p><a href=read.php><button class='ui inverted secondary button'>READ ALL ROUTE</button></a>";

?>
</body>
</html>