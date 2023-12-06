<html>
<head><Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"></head>
<body style="background-color:lightseagreen">

<?php

$ship_id = $_GET["ship_id"];

$cabin_type = $_GET["cabin_type"];

$price = $_GET["price"];

$cabin_id = $_GET["cabin_id"];

$details = $_GET["details"];


?>



<h1 style="text-align:center;"> Update Record</h1>

<form class="ui form"style="max-width: 500px;margin: 0 auto; "method=get action=update_result.php>
  <div class="field">
    
    <input type=hidden name=ship_id value='<?php echo $ship_id; ?>'>
  </div>

  <div class="field">
    <label>Cabin_type</label>
    <input type="text" name=cabin_type value='<?php echo $cabin_type; ?>'>
  </div>
   <div class="field">
    <label>Price</label>
    <input type="text" name=price value='<?php echo $price; ?>'>
   </div>

   <div class="field">
    
    <input type=hidden name=cabin_id value='<?php echo $cabin_id; ?>'>
  </div>

   <div class="field">
    <label>Details</label>
    <input type="text" name=details value='<?php echo $details; ?>'>
   </div>

  
  <button class="ui primary button" type="submit">UPDATE</button>
</form>
</body>
</html>





