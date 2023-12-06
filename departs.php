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



$sql = "SELECT m.SHIP_NAME,s.DEPARTS,s.DATE
FROM schedule s 
JOIN management m USING(SHIP_ID)";
$result = $conn->query($sql);


//display data on web page
while($row = mysqli_fetch_array($result)){
    echo " SHIP_NAME: ". $row['SHIP_NAME'],
    " DEPARTS: ". $row['DEPARTS'],
    " DATE: ". $row['DATE'];
                             
    echo "<br>";
      
}
  

  
//close the connection
  
$conn->close();
?>
</body>
</html>