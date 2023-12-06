<html>
<head><Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"></head>
<body style="background-color:lightseagreen">
<h1>Create Record</h1>


<form class="ui form"style="max-width: 500px;margin: 0 auto; "method=get action=create_result.php>
 <div class="field">
    <label>ID</label>
    
    <input  type=text name="ID">
  </div>

  <div class="field">
    <label>Location_ID</label>
    <input type=text name="LOCATION_ID">
  </div>
   <div class="field">
    <label>Location</label>
    <input type=text name="LOCATION">
   </div>

  
  
  <button class="ui primary button" type="submit">Create Location</button>
</form>
</body>
</html>