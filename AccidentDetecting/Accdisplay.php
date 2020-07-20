
<!DOCTYPE html>
<html>
<head>
	<title>display</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
	body{
		
	
	}
</style>
</head>
<body>
<div class="container">
	<div class="col-lg-12">
	<br><br>
		<h2 class="text-warning text-center">Users Comments</h2>
		<br>
		<table class="table table-striped table-hover " border="0">
			<tr class=" text-dark text-center">
				<th>Name</th>
				<th>Date</th>
				<th>Comment</th>
				
			</tr>

			<?php

				include 'Conn.php';

						$qry="SELECT * FROM comments";
					    $query=mysqli_query($con,$qry);

						while($res=mysqli_fetch_array($query)){


			?>

			<tr class="text-center">
				
				<td><?php echo $res['name']; ?></td>
				<td><?php echo $res['rdate']; ?></td>
				<td><?php echo $res['comme']; ?></td>
				 <td> <button class="btn-danger btn"> <a href="Accdelete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
				<td><button class="btn-success btn"><a href="update2.php?id=<?php echo $res['id']; ?>" class="text-white"> UPDATE</a> </button></td>
			
			</tr>

			<?php
				}
			?>
		</table>
</div>
</div>

</body>
</html>