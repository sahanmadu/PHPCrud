


<?php


include 'Conn.php';

if(isset($_POST['subs'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$usern=$_POST['uname'];
	$pass=$_POST['pass'];

	

	$qry1="INSERT INTO users(fname,lname, email,username,password) VALUES ('$fname','$lname','$email','$usern','$pass')";
		mysqli_query($con,$qry1);

	
      echo '<script>alert("Data inserted successfully!")</script>';


}
?>


<!DOCTYPE html>
<html>
<head>
	<title>
		sign up
	</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">

	<link rel="stylesheet" type="text/css" href="header.css">
	
</head>
<body>
	<div class="nav">
			<div class="logo">
				<img src="images/logo4.png">
			</div>
			<div class="menu">
				<ul>
					<li><a href="index.php">Home</a></li>
					
					
					<li><a href="#">Contact</a></li>
					
				</ul>
			</div>
		</div>
	<div class="wrap">

		<h2> Sign up Here </h2>
		<form method="POST" action="">
			<input type="text" placeholder="First Name" required name="fname">
			<input type="text" placeholder="Last Name" required name="lname">

			<input type="text" placeholder="Email" required name="email">
			<input type="text" placeholder="Username" required name="uname">
			<input type="password" placeholder="Password" required name="pass">
			<input type="submit" value="Submit" name="subs">


		</form>
	</div>
</body>
</html>