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
   p{
	   margin-left: 10px;
   }
			</style>

<?php

  
    $serial = $_GET["SERIAL"];

	$ship_id = $_GET["SHIP_ID"];

	$date = $_GET["DATE"];
	
	$departs = $_GET["DEPARTS"];

	

	
	$arrives = $_GET["ARRIVES"];
	
	$departure_time= $_GET["DEPARTURE_TIME"];

	

	$arrival_time = $_GET["ARRIVAL_TIME"];
	



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO schedule VALUES ( '$serial', '$ship_id','$date','$departs','$arrives','$departure_time','$arrival_time')" )

		or die("Can not execute query");

		echo "<div class='ui success message'>
		<i class='close icon'></i>
		<div class='header'>
		  Insertion successful.
		</div>
	  </div>";



	echo "Record inserted: <br>  Serial = $serial   <br>  Ship_Id = $ship_id <br>  Date = $date  <br>  Departs = $departs   <br> Arrives = $arrives  <br>  Departure_time = $departure_time <br>  Arrival_time = $arrival_time ";



	echo "<p><a href=read.php><button class='bttn' style = 'width:180px'>READ ALL Schedule</button></a>";

	

?>

</body>
</html>