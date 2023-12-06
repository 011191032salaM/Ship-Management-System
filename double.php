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



$sql = "SELECT c.DETAILS,c.PRICE
FROM cabin c 
JOIN passenger p USING(CABIN_ID)
WHERE c.CABIN_TYPE ='double'";
$result = $conn->query($sql);


//display data on web page
while($row = mysqli_fetch_array($result)){
    echo " PRICE: ". $row['PRICE'],
    " DETAILS: ". $row['DETAILS'];
                             
    echo "<br>";
      
}
  

  
//close the connection
  
$conn->close();
?>
</body>
</html>