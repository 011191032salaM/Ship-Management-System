

<html>
	<head>
		<title>A Ship Management Site!</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
		<style>

.bttn {
  border-radius: 4px;
  background-color: #5ca1e1;
  border: none;
  color: #fff;
  text-align: center;
  font-size: 15px;
  padding: 10px;
  width: 120px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 12px;
  box-shadow: 0 5px 5px -8px rgba(0, 0, 0,.7);
}

.bttn{
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 1.5s;
}

.bttn:after {
  content: '»';
  position: absolute;
  opacity: 0;  
  top: 10px;
  right: -15px;
  transition: 0.5s;
}

.bttn:hover{
  padding-right: 24px;
  padding-left:8px;
}

.bttn:hover:after {
  opacity: 2;
  right: 10px;
}
			</style>
<?php

$serial = $_GET["serial"];

$ship_id = $_GET["ship_id"];

$date= $_GET["date"];
$departs = $_GET["departs"];

$arrives = $_GET["arrives"];

$departure_time = $_GET["departure_time"];
$arrival_time = $_GET["arrival_time"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE schedule SET SERIAL='$serial', SHIP_ID='$ship_id', DATE='$date', DEPARTS='$departs', ARRIVES='$arrives', DEPARTURE_TIME='$departure_time', ARRIVAL_TIME='$arrival_time' WHERE serial = $serial";

	



	mysqli_query( $connect, $query )

		or die("Can not execute query");

		echo "<div class='ui success message'>
		<i class='close icon'></i>
		<div class='header'>
		  Update successful.
		</div>
	
	  </div>";

	echo "<p>Record updated:<br> date = $date <br> depart= $departs <br> arrives = $arrives <br> departure_time = $departure_time<br> arrival_time= $arrival_time";



	echo "<p><a href=read.php><button class='bttn'>READ all schedule</button></a>";

?>
</body>
</html>