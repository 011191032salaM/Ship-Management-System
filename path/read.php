<html>
    <head>
		<title>Cabin Booking</title>
		<Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
		
   </head>

<body style="background-color:black">

<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM  path " )
		or die("Can not execute query");

	echo "<table class='ui unstackable celled collapsing orange table' style='margin: 0 auto'> \n";
	echo "<thead><th>LOCATION_ID</th> <th>PATH_ID</th> <th>PATH_WAY</th>  <th>Delete</th> <th>Update</th></thead><tbody> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $LOCATION_ID </td>";
		echo "<td> $PATH_ID </td>";
		echo "<td> $PATH_WAY </td>";
		echo "<td> <a href = 'delete.php? PATH_ID=$PATH_ID'><button class='ui red button'>Delete
</button> </a> </td>";
		echo "<td> <a href = 'update_input.php?location_id=$LOCATION_ID&path_id=$PATH_ID&path_way=$PATH_WAY'> <button class='ui green button'>Update
</button> </a> </td>";
		
		
		echo "</tr> \n";
	}

	echo "</tbody></table> \n";

	echo "<p><a href=create_input.php> <button class='ui inverted secondary button'>Add New PATH</button></a>";
	echo "<p > <br><a href=../index.php><button class='ui inverted secondary button'> HOME</button></a></p>";
?>

</body>
</html>









