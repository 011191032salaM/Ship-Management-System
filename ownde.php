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



$sql = "SELECT r.SHIP_ID,m.SHIP_NAME,m.OWNER
FROM route r
JOIN management m USING(SHIP_ID)
WHERE r.SHIP_ID  = ANY (SELECT r.SHIP_ID
                     FROM management 
                     WHERE m.SHIP_NAME =m.SHIP_NAME)
                     GROUP BY r.SHIP_ID";
$result = $conn->query($sql);


//display data on web page
while($row = mysqli_fetch_array($result)){
    echo " OWNER: ". $row['OWNER'],
    " SHIP_NAME: ". $row['SHIP_NAME'];
                             
    echo "<br>";
      
}
  

  
//close the connection
  
$conn->close();
?>
</body>
</html>