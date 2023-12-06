

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

	$ship_id = $_GET["ship_id"];

	$staff_id = $_GET["staff_id"];

	$name = $_GET["name"];
	$contract= $_GET["contract"];

	$nid= $_GET["nid"];
	$job_type = $_GET["job_type"];

	$address = $_GET["address"];
	$salary = $_GET["salary"];
	


?>



<h1>Update Record</h1>

<div>

<form method=get action=update_result.php>



	<input type=hidden name=ship_idvalue='<?php echo $ship_id; ?>'> <br>
	<input type=hidden name=staff_id value='<?php echo $staff_id; ?>'> <br>


   <p>
   name: <input type=text name=name value='<?php echo $name; ?>'>

	<p>

	contract: <input type=text name=contract value='<?php echo $contract; ?>'>

	<p>
	nid: <input type=text name=nid value='<?php echo $nid; ?>'>

<p>

job_type: <input type=text name=job_type value='<?php echo $job_type; ?>'>

<p>
address: <input type=text name=address value='<?php echo $address; ?>'>

<p>

salary: <input type=text name=salary value='<?php echo $salary; ?>'>

<p>


	<input type=submit value=Update class="bttn">

</form>
</div>

</body>
</html>