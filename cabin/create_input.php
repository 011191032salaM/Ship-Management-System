<html>
<head>
	<title>Cabin Booking</title>
		<Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>

<body style="background-color:lightseagreen;">

<h1>Create Record</h1>

<form class="ui form"style="max-width: 500px;margin: 0 auto; "method=get action=create_result.php>
 <div class="field">
    <label>Ship_ID</label>
    
    <input type="text" name="SHIP_ID">
  </div>

  <div class="field">
    <label>Cabin_type</label>
    <input type="text" name="CABIN_TYPE">
  </div>
   <div class="field">
    <label>Price</label>
    <input type="text"  name="PRICE">
   </div>

   <div class="field">
     <label>Cabin_ID</label>
    <input type="text" name="CABIN_ID">
  </div>

   <div class="field">
    <label>Details</label>
    <input type="text" name="DETAILS">
   </div>

  
  <button class="ui primary button" type="submit">Create Cabin</button>
</form>






</body>
</html>
