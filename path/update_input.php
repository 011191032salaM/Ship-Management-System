<html>
    <head>
		<title>Cabin Booking</title>
		<Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
		
   </head>

<body style="background-color:lightseagreen;">

<?php

$location_id= $_GET["location_id"];

$path_id = $_GET["path_id"];

$path_way = $_GET["path_way"];



?>



<h1 style="text-align: center;">Update Record</h1>


<form class="ui form"style="max-width: 500px;margin: 0 auto; "method=get action=update_result.php>
  <div class="field">
    
    <input type=hidden name=location_id value='<?php echo $location_id; ?>'>
  </div>

  <div class="field">
    
    <input  type=hidden name=path_id value='<?php echo $path_id; ?>'>
  </div>
   <div class="field">
    <label>Path_Way</label>
    <input type=text name=path_way value='<?php echo $path_way; ?>'>
   </div>

   

  
  <button class="ui primary button" type="submit">UPDATE</button>
</form>
</body>
</html>






