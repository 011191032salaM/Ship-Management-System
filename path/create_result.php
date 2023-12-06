
<html>
    <head>
		<title>Cabin Booking</title>
		<Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
		
   </head>

<body style="background-color:dimgrey;">
<?php

	$location_id= $_GET["LOCATION_ID"];

	$path_id = $_GET["PATH_ID"];

	$path_way = $_GET["PATH_WAY"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO path VALUES ( '$location_id', '$path_id' ,'$path_way')" )

		or die("Can not execute query");



	echo "Record inserted:<br> Location_Id= $location_id <br>  Path_Id = $path_id <br> Path_Way = $path_way ";



	echo "<p><a href=read.php><button class='ui inverted secondary button'>READ PATH</button></a>";

?>
</body>
</html>