<html>
	<head>
		<title>Cabin Booking</title>
		<Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
		
	</head>

	<body style="background-color:black;">
	<h1 style="text-align:center;"style="background-color:whilte;">Cabin Booking</h1>

	
  

	<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM cabin" )
		or die("Can not execute query");

	echo "<table class='ui unstackable celled collapsing orange table' style='margin: 0 auto'> \n";
	echo "<thead><tr><th>SHIP_ID</th> <th>CABIN_TYPE</th> <th>PRICE</th> <th>CABIN_ID</th> <th>DETAILS</th> <th>Delete</th> <th>Update</th> </tr></thead><tbody>\n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $SHIP_ID </td>";
		echo "<td> $CABIN_TYPE </td>";
		echo "<td> $PRICE </td>";
		echo "<td> $CABIN_ID </td>";
		echo "<td> $DETAILS </td>";
		echo "<td> <a href = 'delete.php?CABIN_ID=$CABIN_ID'> 	<button class='ui red button'>Delete
</button></a> </td>";
		echo "<td> <a href = 'update_input.php?ship_id=$SHIP_ID & cabin_type=$CABIN_TYPE & price=$PRICE &cabin_id=$CABIN_ID & details=$DETAILS'> <button class=' ui green button'>Update
</button></a>  </td>";
		
		echo "</tr> \n";
	}

	echo "</tbody></table> \n";

	echo "<p ><br><a href=create_input.php>  <button class='ui inverted secondary button'>Add a Cabin</button></a></p>";
	echo "<p > <br><a href=../index.php><button class='ui inverted secondary button'> HOME</button></a></p>";
	
?>

</body>
</html>








