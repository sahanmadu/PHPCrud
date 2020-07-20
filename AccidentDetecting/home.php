<?php


include 'Conn.php';

if(isset($_POST['done'])){
	$hosname=$_POST['hname'];
	$hosaddress=$_POST['haddress'];
	$hosemail=$_POST['hemail'];
	$hosrooms=$_POST['hrooms'];
	$hosteleno=$_POST['htele'];

	$qry="select * from hospital where hospitalName ='$hosname'";
	$result=mysqli_query($con,$qry);

	$i=mysqli_num_rows($result);


if($i==1){

	echo "Username already taken";
}
else{

	$qry1="INSERT INTO hospital(hospitalName, Haddress, hemail,noofrooms,teleno) VALUES ('$hosname','$hosaddress','$hosemail','$hosrooms','$hosteleno')";
		mysqli_query($con,$qry1);

	
      echo '<script>alert("Data inserted successfully!")</script>';


	}

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
	body, html {
  height: 100%;
}
.bg {
 
  background-image: url("ho1.jpg");


  height: 100%;

  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.container{
	opacity: 0.8;
	width:570px;
}

#btn3{
	float: right;
}

#a12{
	text-decoration: none;
}

</style>
</head>
<body >
<div class="bg">
	<button type="submit" class="btn btn-dark" name="" id ="btn3"><a href="display.php" id="a12">Edit Hospital Detials</a></button>
<div class="container">
	<br><br>
	<h1 class="text-center text-primary">Enter the hospital details</h1>
	
	<div class="col-lg-8-m-auto d-block">

		<form class="bg-light" action="" method="POST" onsubmit="return validationM()">
			
			<div class="form-group">
				<label>Hospital Name</label>
				<input type="text" name="hname" id="hospitaname" class="form-control" autocomplete="off">
				<span id="hname1" class="text-danger font-weight-bold"></span>
				
			</div>
			<div class="form-group">
				<label>Address</label>
				<input type="text" name="haddress" id="hospitaladdress" class="form-control" autocomplete="off">
				<span id="haddress1" class="text-danger font-weight-bold"></span>
				
			</div>
				<div class="form-group">
				<label>Email</label>
				<input type="text" name="hemail" id="hospitalemail" class="form-control" autocomplete="off">
				<span id="hemail1" class="text-danger font-weight-bold"></span>
				
			</div>
				<div class="form-group">
				<label>No of Rooms</label>
				<input type="text" name="hrooms" id="noofrooms" class="form-control" autocomplete="off">
				<span id="hroom" class="text-danger font-weight-bold"></span>
				
			</div>
				<div class="form-group">
				<label>Telephone NO</label>
				<input type="text" name="htele" id="teleno" class="form-control" autocomplete="off">
				<span id="hno" class="text-danger font-weight-bold" ></span>
				
			</div>
			<button type="submit" class="btn btn-success" name="done">ADD</button>
		</form>
		
	</div>
</div>
</div>


<script src="backjs.js">
	
</script>



</body>
</html>



