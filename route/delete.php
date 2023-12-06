<html>
<head><Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"></head>
<body style="background-color:lightseagreen;">
<?php

	$ID = $_GET["ID"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM route WHERE ID=$ID" )

		or die("Can not execute query");



	echo "Record deleted<br>";



	echo "<p><a href=read.php>READ ALL Route</a>";

?>
</body>
</html>