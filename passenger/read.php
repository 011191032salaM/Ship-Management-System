<html>
<head>
	<title>Passenger</title>
		<Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body>

<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM passenger" )
		or die("Can not execute query");

	echo "<table class='ui unstackable celled collapsing orange table' style='margin: 0 auto'> \n";
	echo "<thead><th>PASSENGER_ID</th> <th>NAME</th> <th>CONTRACT</th> <th>ADDRESS</th> <th>CABIN_ID</th> <th>Delete</th> <th>Update</th> </thead><tbody>\n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $PASSENGER_ID </td>";
		echo "<td> $NAME </td>";
		echo "<td> $CONTRACT </td>";
		echo "<td> $ADDRESS </td>";
		echo "<td> $CABIN_ID</td>";
		echo "<td> <a href = 'delete.php?PASSENGER_ID=$PASSENGER_ID'> <button class='ui red button'>Delete
</button> </a> </td>";
		echo "<td> <a href = 'update_input.php?passenger_id=$PASSENGER_ID&name=$NAME&contract=$CONTRACT&address=$ADDRESS&cabin_id=$CABIN_ID'> <button class='ui green button'>Update
</button> </a> </td>";
		
		
		echo "</tr> \n";
	}

	echo "</tbody></table> \n";

	echo "<p><a href=create_input.php><button class='ui inverted secondary button';>Add a Passenger</button></a>";
	echo "<p > <br><a href=../index.php><button class='ui inverted secondary button'> HOME</button></a></p>";
?>
</body>
</html>








