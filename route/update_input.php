<html>
<head><Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"></head>
<body style="background-color:lightseagreen;">
<?php

$id = $_GET["id"];

$ship_id = $_GET["ship_id"];

$departs = $_GET["departs"];

$arrives = $_GET["arrives"];

$via = $_GET["via"];


?>



<h1>Update Record</h1>

<form class="ui form"style="max-width: 500px;margin: 0 auto; "method=get action=update_result.php>
 <div class="field">
   <input type=hidden name="id" value ='<?php echo $id; ?>'>
  </div>

  <div class="field">  

    <input type=hidden name="ship_id" value='<?php echo $ship_id; ?>'>
  </div>
   <div class="field">
    <label>Departs</label>
    <input type="text" name="departs" value='<?php echo $departs; ?>'>
   </div>

   <div class="field">
     <label>Arrives</label>
    <input type="text"  name="arrives" value='<?php echo $arrives; ?>'>
  </div>

   <div class="field">
    <label>Via</label>
    <input type="text"name="via"  value='<?php echo $via; ?>'>
   </div>

  
  <button class="ui primary button" type="submit">UPDATE</button>

</form>

</body>
</body>






