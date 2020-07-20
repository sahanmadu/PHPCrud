<!DOCTYPE html>
<html>
<head>
	<title>
		Login page
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
					
					<li><a href="privacypolicy.php">Privacy Policy</a></li>
					<li><a href="contactus.php">Contact</a></li>
					
				</ul>
			</div>
		</div>

	
	<div class="wrap">
		<h2> Login Here </h2>
		<form method="POST" action="loginback.php">
			
			<input type="text" id="uname1" placeholder="Username" required name="uname1">
			<input type="password" id="pass1" placeholder="Password" required name="pass1">
		
			<input type="submit" value="Submit">

		</form>
	</div>

</body>
</html>