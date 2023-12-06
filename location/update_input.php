
<html>
<head><Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"/></head>
<body style="background-color:lightseagreen;">
<?php

$id = $_GET["id"];

$location_id = $_GET["location_id"];

$location = $_GET["location"];



?>



<h1>Update Record</h1>

<form class="ui form"style="max-width: 500px;margin: 0 auto; "method=get action=update_result.php>
  <div class="field">
    
    <input type=hidden name=id value='<?php echo $id; ?>'>
  </div>

  <div class="field">
    <input type=hidden name=location_id value='<?php echo $location_id; ?>'>
  </div>
   <div class="field">
    <label>Location</label>
    <input type="text" name=location value='<?php echo $location; ?>'>
   </div>
  
  <button class="ui primary button" type="submit">UPDATE</button>

</form>
</body>
</html>






