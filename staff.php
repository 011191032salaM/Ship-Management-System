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



$sql = "SELECT s.NAME,s.CONTRACT,m.SHIP_NAME,s.JOB_TYPE
FROM staff s 
JOIN management m USING(SHIP_ID)
WHERE m.SHIP_NAME=ANY(SELECT m.SHIP_NAME FROM management
                     WHERE m.SHIP_NAME=m.SHIP_NAME)";
$result = $conn->query($sql);


//display data on web page
while($row = mysqli_fetch_array($result)){
    echo " NAME: ". $row['NAME'],
    " CONTRACT: ". $row['CONTRACT'],
    " SHIP_NAME: ". $row['SHIP_NAME'],
    " JOB_TYPE: ". $row['JOB_TYPE'];
                             
    echo "<br>";
      
}
  

  
//close the connection
  
$conn->close();
?>
</body>
</html>