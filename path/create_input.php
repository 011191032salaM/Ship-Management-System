
<html>
    <head>
		<title>Cabin Booking</title>
		<Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
		
   </head>

<body style="background-color:lightgreen;">
<h1 style="text-align:center;">Create Record</h1>


<form class="ui form"style="max-width: 500px;margin: 0 auto; "method=get action=create_result.php>
 <div class="field">
    <label>Location_ID</label>
    
    <input  type="text" name="LOCATION_ID">
  </div>

  <div class="field">
    <label>Path_ID</label>
    <input  type="text" name="PATH_ID">
  </div>
   <div class="field">
    <label>Path_WAY</label>
    <input type=text name="PATH_WAY">
   </div>

   
  
  <button class="ui primary button" type="submit">ADD PATH</button>
</form>

</body>
</html>