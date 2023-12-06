<html>
<head>
	<title>Route Management</title>
		<Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body style="background-color:silver;">
<h1 style="text-align:center;">Create Record</h1>

<form class="ui form"style="max-width: 500px;margin: 0 auto; "method=get action=create_result.php>
 <div class="field">
    <label>ID</label>
    
    <input type="text" name="ID">
  </div>

  <div class="field">
    <label>Ship_ID</label>
    <input type="text"name="SHIP_ID">
  </div>
   <div class="field">
    <label>Departs</label>
    <input type="text" name="DEPARTS">
   </div>

   <div class="field">
     <label>Arrives</label>
    <input type="text"  name="ARRIVES">
  </div>

   <div class="field">
    <label>Via</label>
    <input type="text"name="VIA">
   </div>

  
  <button class="ui primary button" type="submit">ADD Route</button>

</form>
</body>
</html>