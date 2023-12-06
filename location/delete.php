<html>
<head><Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"/></head>
<body style="background-color:lightseagreen;">

<?php

      $LOCATION_ID= $_GET["LOCATION_ID"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	


		mysqli_query( $connect, "DELETE FROM location WHERE LOCATION_ID =$LOCATION_ID" )

	
			or die("Can not execute query");
	



	echo "Record deleted<br>";



	echo "<p><a href=read.php><button class='ui 
	primary button'>READ LOCATION</button></a>";

?>
</body>
</html>