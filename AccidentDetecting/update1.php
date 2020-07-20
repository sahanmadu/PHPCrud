<?php

include 'Conn.php';

if(isset($_POST['sub'])){
	$id=$_GET['hospitalID'];
	$hosname=$_POST['hname'];
	$hosaddress=$_POST['haddress'];
	$hosemail=$_POST['hemail'];
	$hosrooms=$_POST['hrooms'];
	$hosteleno=$_POST['htele'];

	$qry="UPDATE hospital SET hospitalID=$id,hospitalName='$hosname',Haddress='$hosaddress',hemail='$hosemail',noofrooms='$hosrooms',teleno=$hosteleno WHERE hospitalID=$id";
	$result=mysqli_query($con,$qry);

	header('location:display.php');

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>hospital details</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
	h1{
		text-align: center;
			font-family: arial;
			font-weight: bold;
			color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
	}

body{
	background: rgb(0,36,36);
background: linear-gradient(90deg, rgba(0,36,36,1) 0%, rgba(39,129,160,1) 24%, rgba(0,254,255,1) 100%);
}
form{
	width: 600px;
	height: 500px;
	margin-left: 270px;

}
</style>
</head>
<body>
<div class="bg">
<div class="container">
	<br><br>
	<h1 class="text-center text-primary">update details</h1>
	<div class="col-lg-8-m-auto d-block">

		<form class="bg-light" action="" method="POST" onsubmit="return validationM()">
			
			<div class="form-group">
				<label>Hospital Name</label>
				<input type="text" name="hname" id="hospitaname" class="form-control" autocomplete="off" >
				<span id="hname1" class="text-danger font-weight-bold"></span>
				
			</div>
			<div class="form-group">
				<label>Address</label>
				<input type="text" name="haddress" id="hospitaladdress" class="form-control" autocomplete="off" >
				<span id="haddress1" class="text-danger font-weight-bold"></span>
				
			</div>
				<div class="form-group">
				<label>Email</label>
				<input type="text" name="hemail" id="hospitalemail" class="form-control" autocomplete="off" >
				<span id="hemail1" class="text-danger font-weight-bold"></span>
				
			</div>
			<div class="form-group">
				<label>No of Rooms</label>
				<input type="text" name="hrooms" id="noofrooms" class="form-control" autocomplete="off" >
				<span id="hroom" class="text-danger font-weight-bold"></span>
				
			</div>
			<div class="form-group">
				<label>Telephone NO</label>
				<input type="text" name="htele" id="teleno" class="form-control" autocomplete="off" >
				<span id="hno" class="text-danger font-weight-bold" ></span>
				
			</div>
			<button type="submit" class="btn btn-success" name="sub">UPDATE</button>
		</form>
		
		</div>
	</div>
</div>

<script src="backjs.js">
	
</script>

</body>
</html>