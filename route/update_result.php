
<html>
<head><Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"></head>
<body style="background-color:lightseagreen;">
<?php

     $id = $_GET["id"];

	$ship_id = $_GET["ship_id"];

	$departs = $_GET["departs"];
	
	$arrives = $_GET["arrives"];
	
	$via = $_GET["via"];






	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	="UPDATE route SET  departs='$departs',  arrives='$arrives', via='$via' WHERE id = $id";

	



	mysqli_query( $connect, $query )

		or die("Can not execute query ");



	echo "<p>Record updated: <br> Departs = $departs<br> Arrives = $arrives <br> Via = $via ";



	echo "<p><a href=read.php><button class='ui green button'>Read All record
</button></a>";

?>
</body>
</html>