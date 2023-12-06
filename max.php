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



$sql = "SELECT CABIN_ID,CABIN_TYPE,MAX(PRICE) as MAX_PRICE
FROM cabin";
$result = $conn->query($sql);


//display data on web page
while($row = mysqli_fetch_array($result)){
    echo " CABIN_TYPE: ". $row['CABIN_TYPE'],
    " -----MAX_PRICE: ". $row['MAX_PRICE'];
                             
    echo "<br>";
      
}
  

  
//close the connection
  
$conn->close();
?>
</body>
</html>