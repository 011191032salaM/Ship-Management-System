<html>
	<head>
		<title>Cabin Booking</title>
		<Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
		
	</head>

	<body style="background-color:lightseagreen;">
<?php

      $CABIN_ID= $_GET["CABIN_ID"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	


		mysqli_query( $connect, "DELETE FROM cabin WHERE CABIN_ID =$CABIN_ID" )

	
			or die("Can not execute query");
	



	echo "Record deleted<br>";



	echo "<p><a href=read.php><button class='ui red button'>READ ALL CABINS
	</button></a>";

?>
</body>
</html>