 <html>
<head>
	<title>Passenger</title>
		<Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body style="background-color:lightblue;">
 <?php

      $PASSENGER_ID= $_GET["PASSENGER_ID"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	


		mysqli_query( $connect, "DELETE FROM passenger WHERE PASSENGER_ID =$PASSENGER_ID" )

	
			or die("Can not execute query");
	



	echo "Record deleted<br>";



	echo "<p><a href=read.php><button class='ui green button';>READ PASSENGER</button></a>";

?>
</body>
</html>