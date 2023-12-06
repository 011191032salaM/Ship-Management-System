
<html>
	<head>
		<title>A Ship Management Site!</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>



	<style>

 body{
	 background-color: #f2f2f2;
	 font-size: 15px;
 }

#customer {

  border-collapse: collapse;
  width: 70%;
}

#customer td, #customer th {
  border: 1px solid #ddd;
  padding: 8px;
}

       #customer tr:nth-child(even){background-color:#f2f2f2;}
	   #customer tr:hover {background-color: #ddd;}
	   #customer th {
       padding-top: 15px;
       padding-bottom: 15px;
       text-align: left;
       background-color:#4d75b3;
       color: white;
}
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


	
	<h1 style="color:#4d75b3;text-align:center;"> Department Records</h1>


<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM department" )
		or die("Can not execute query");

	echo "<table id='customer' class='ui unstackable celled collapsing table' style='margin: 0 auto;'> \n";
	echo " <thead> <tr> <th>ID</th> <th>HIRE_DATE</th> <th>JOB_TYPE</th>  <th>Delete</th> <th>Update</th> </tr> </thead> <tbody> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $ID </td>";
		echo "<td> $HIRE_DATE </td>";
		echo "<td> $JOB_TYPE </td>";
		
		echo "<td> <a href = 'delete.php?id=$ID'><button class='bttn' style='background-color:#940c45;'> Delete </button> </a> </td>";
		echo "<td> <a href = 'update_input.php?id=$ID & hire_date=$HIRE_DATE & job_type=$JOB_TYPE '> <button class='bttn'> Update</button></a> </td>";
		echo "</tr> \n";
	}

	echo " </tbody> </table> \n";

	echo "<p style='text-align:center'> <br><a href=create_input.php><button class='bttn ' style = 'width:180px'> Create New Person</button></a></p>";
  echo "<p style='text-align:center'> <br><a href=../index.php><button class='bttn ' style = 'width:180px'> HOME</button></a></p>";
?>

</body>
</html>







