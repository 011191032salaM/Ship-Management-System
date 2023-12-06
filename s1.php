<html>
<body>
<?php
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



$sql = "SELECT MAX(o.INCOME) 'Maximum Income'
FROM management m
JOIN OWNER o USING(SHIP_ID)";
$result = $conn->query($sql);


//display data on web page
while($row = mysqli_fetch_array($result)){
    echo " Maximum Income: ". $row['Maximum Income'];
    
                             
    echo "<br>";
      
}
  

  
//close the connection
  
$conn->close();
?>
</body>
</html>