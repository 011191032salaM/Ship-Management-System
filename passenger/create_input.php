<html>
<head><title>Passenger</title>
		<Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"></head>
<body style="background-color: lightseagreen;">
<h1 style="text-align: center;">Create Record</h1>

<form class="ui form"style="max-width: 500px;margin: 0 auto; "method=get action=create_result.php>
 <div class="field">
    <label>Passenger_ID</label>
    
    <input type="text" name="PASSENGER_ID">
  </div>

  <div class="field">
    <label>Name</label>
    <input type="text" name="NAME">
  </div>
   <div class="field">
    <label>Contract</label>
    <input type="text"  name="CONTRACT">
   </div>

    <div class="field">
    <label>Address</label>
    <input type="text" name="ADDRESS">
   </div>

   <div class="field">
     <label>Cabin_ID</label>
    <input type="text" name="CABIN_ID">
  </div>

  <button class="ui primary button" type="submit">ADD Passenger</button>

</form>
</body>
</html>