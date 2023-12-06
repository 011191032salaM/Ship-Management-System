  
<html>
    <head>
		<title>Cabin Booking</title>
		<Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
		
   </head>

<body style="background-color:whitesmoke;">
  <?php

      $PATH_ID= $_GET["PATH_ID"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	


		mysqli_query( $connect, "DELETE FROM path WHERE PATH_ID =$PATH_ID" )

	
			or die("Can not execute query");
	



	echo "Record deleted<br>";



	echo "<p><a href=read.php><button class='ui red button'>READ ALL PATHS
</button> </a>";

?>
</body>
</html>