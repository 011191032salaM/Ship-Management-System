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



$sql = "SELECT m.SHIP_ID,m.SHIP_NAME,m.CONTRACT,s.DEPARTS,s.DATE,s.DEPARTURE_TIME
FROM management m
JOIN schedule s USING(SHIP_ID)
WHERE s.SHIP_ID=ANY(SELECT SHIP_ID FROM schedule WHERE s.SHIP_ID=SHIP_ID)
";
$result = $conn->query($sql);


//display data on web page
while($row = mysqli_fetch_array($result)){
    echo " SHIP_NAME : ". $row['SHIP_NAME'],
    " -----DEPARTS : ". $row['DEPARTS'] ,
    " -----CONTRACT : ". $row['CONTRACT'] ,
    " -----DEPARTURE_TIME : ". $row['DEPARTURE_TIME'];                         ;
    echo "<br>";
      
}
  

  
//close the connection
  
$conn->close();
?>
</body>
</html>