<html>
<head><Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"></head>
<body style="background-color:lightseagreen">

<?php

$passenger_id = $_GET["passenger_id"];

$name = $_GET["name"];

$contract = $_GET["contract"];

$address= $_GET["address"];

$cabin_id = $_GET["cabin_id"];



?>



<h1 style="text-align:center;">Update Record</h1>

<form class="ui form"style="max-width: 500px;margin: 0 auto; "method=get action=update_result.php>
  <div class="field">
    
    <input type=hidden name=passenger_id value='<?php echo $passenger_id; ?>'>
  </div>

  <div class="field">
    <label>Name</label>
    <input type="text" name=name value='<?php echo $name; ?>'>
  </div>
   <div class="field">
    <label>Contract</label>
    <input type="text" name=contract value='<?php echo $contract; ?>'>
   </div>

   <div class="field">
     <label>Address</label>
    <input type="text" name=address value='<?php echo $address; ?>'>
  </div>

   <div class="field">
    <label>Cabin_ID</label>
    <input type="text" name=cabin_id value='<?php echo $cabin_id; ?>'>
   </div>

  
  <button class="ui primary button" type="submit">UPDATE</button>
</form>
</body>
</html>






