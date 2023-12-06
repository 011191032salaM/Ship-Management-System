
<html>
	<head>
		<title>A Ship Management Site!</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
 <style>

.bttn {
  border-radius: 4px;
  background-color: #5ca1e1;
  border: none;
  color: #fff;
  text-align: center;
  font-size: 15px;
  padding: 10px;
  width: 120px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 12px;
  box-shadow: 0 5px 5px -8px rgba(0, 0, 0,.7);
}

.bttn{
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 1.5s;
}

.bttn:after {
  content: '»';
  position: absolute;
  opacity: 0;  
  top: 10px;
  right: -15px;
  transition: 0.5s;
}

.bttn:hover{
  padding-right: 24px;
  padding-left:8px;
}

.bttn:hover:after {
  opacity: 2;
  right: 10px;
}
p{
	   text-align:center;
   }
   input[type=text] {
	width: 230px;
  border: none;
  border-bottom: 2px solid #4d75b3;
  height: 30px;
  border-radius: 4px;
 margin:20px;
 height: 40px;
}
input[type=submit]{

  width: 180px;
}

div{
	 border-radius: 5px;
    background-color: #f2f2f2;
    max-width: 1100px;
     margin: 0 auto;
     overflow: auto;
     padding : 0 40px;
	
}
h1{
	text-align:center;
	color:#4d75b3;
}
		</style>

<?php

	$serial = $_GET["serial"];

	$ship_id = $_GET["ship_id"];

	$date= $_GET["date"];
	$departs = $_GET["departs"];

	$arrives = $_GET["arrives"];

	$departure_time = $_GET["departure_time"];
	$arrival_time = $_GET["arrival_time"];

?>



<h1>Update Record</h1>


<div>
<form method=get action=update_result.php>



	<input type=hidden name=serial value='<?php echo $serial; ?>'> <br>
	<input type=hidden name=ship_id value='<?php echo $ship_id; ?>'> <br>

  <P>

	date: <input type=text name=date value='<?php echo $date; ?>'>

	<p>

	departs: <input type=text name=departs value='<?php echo $departs; ?>'>
	<p>
	arrives: <input type=text name=arrives value='<?php echo $arrives; ?>'>

	<p>

	departure_time: <input type=text name=departure_time value='<?php echo $departure_time; ?>'>

	<p>
	arrival_time: <input type=text name=arrival_time value='<?php echo $arrival_time; ?>'>

	<p>

	<input type=submit value=Update class="bttn">

</form>
</div>

</body>
</html>