
<!DOCTYPE html>
<html>
<head>
	<title>contact</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="col-lg-12">
	<br><br>
		<h2 class="text-warning text-center">CONTACT US</h2>
		<br>
		<table class="table table-striped table-hover table-bordered">
			<tr class="bg-dark text-white text-center">
				<th>USER ID</th>
				<th>FIRST NAME</th>
				<th>LAST NAME</th>
				<th>EMAIL</th>
				<th>PHONE NUMBER</th>
				<th>MESSAGES</th>
				
			</tr>
			<?php

				include 'Conn.php';

						$qry="SELECT * FROM contactus";
					    $query=mysqli_query($con,$qry);

						while($res=mysqli_fetch_array($query)){


			?>
			<tr class="text-center">
				<td><?php echo $res['id']; ?></td>
				<td><?php echo $res['fname']; ?></td>
				<td><?php echo $res['lname']; ?></td>
				<td><?php echo $res['email']; ?></td>
				<td><?php echo $res['pno']; ?></td>
				<td><?php echo $res['msg']; ?></td>
				
			</tr>
			<?php
				}
			?>

			</table>
</div>
</div>
</body>
</html>