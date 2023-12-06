<?php
include_once('con.php');
$query="select * from cabin";
$result=$conn->query($query);
?>
<!DOCTYPE html>
<html>
   <title>cabin</title>
<body>
	    <table align="center" border="1px" style="width: 800; line-height: 40px;">
	    	<tr>
	    		<th colspan="10"><h2> cabin</h2></th>
	    	</tr>
	    	<tr>
	    		<th> Ship_Id </th>
	    		<th> Cabin_type</th>
                <th> Price</th>
                <th> Cabin_Id </th>
                <th> details </th>
               
            </tr>
          <?php
          while($row=$result->fetch_assoc())
          {
          ?>   
                 <tr>
                 	<td><?php echo $row['Ship_Id']; ?></td>
                 	<td><?php echo $row['Cabin_type']; ?></td>
                 	<td><?php echo $row['Price']; ?></td>
                 	<td><?php echo $row['Cabin_Id']; ?></td>
                 	<td><?php echo $row['details']; ?></td>
                 	 
                 </tr>
            <?php
             }
            ?>


         </table>
</body>

</html>