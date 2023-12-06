<html>
    <head>
		<title>Cabin Booking</title>
		<Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
		
   </head>

<body style="background-color:lightgreen;">
<?php

$location_id= $_GET["location_id"];

$path_id = $_GET["path_id"];

$path_way = $_GET["path_way"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE path SET  PATH_WAY='$path_way' WHERE path_id = $path_id";

	



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p >Record updated:<br> Path_Way = $path_way";



	echo "<p><a href=read.php><button class='ui primary button'>READ Records
</button> </a>";

?>
</body>
</html>