<html>
<body>
<?php

$ship_name = $_GET["SHIP_NAME"];
//servername
$servername = "localhost";
//username
$username = "root";
//empty password
$password = "";
//database is the database name
$dbname = "ship_management";
  
// Create connection by passing these connection parameters
$conn = new mysqli($servername, $username, $password, $dbname);


//Find students department NAME usin JOIN

$name = $_GET["SHIP_NAME"];

$sql = "SELECT CONTRACT,OWNER,ROUTE FROM management WHERE SHIP_NAME LIKE '%$name%'";
$result = $conn->query($sql);


//display data on web page
while($row = mysqli_fetch_array($result)){
    echo " CONTRACT: ". $row['CONTRACT'],
    " OWNER: ". $row['OWNER'],
    " ROUTE: ". $row['ROUTE'];
   
    
    
                             
    echo "<br>";
      
}
  

  
//close the connection
  
$conn->close();
?>
</body>
</html>