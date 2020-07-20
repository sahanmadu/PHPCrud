

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
		background-image: url("images/wood.jpg");
		background-size: cover;
	
	}
</style>
</head>
<body>
<div class="container">
	<div class="col-lg-12">
	<br><br>
		<h2 class="text-warning text-center">HOSPITAL DATA</h2>
		<br>
		<table class="table table-striped table-hover table-bordered">
			<tr class="bg-dark text-white text-center">
				<th>HOSPITAL ID</th>
				<th>HOSPITAL NAME</th>
				<th>ADDRESS</th>
				<th>EMAIL</th>
				<th>NO OF ROOMS</th>
				<th>TELEPHONE NUMBER</th>
				<th>DELETE DETAILS</th>
				<th>UPDATE DETAILS</th>
			</tr>
			<?php
					include 'Conn.php';

						$qry="SELECT * FROM hospital";
					    $query=mysqli_query($con,$qry);

						while($res=mysqli_fetch_array($query)){

			?>

			<tr class="text-center">
				<td><?php echo $res['hospitalID']; ?></td>
				<td><?php echo $res['hospitalName']; ?></td>
				<td><?php echo $res['Haddress']; ?></td>
				<td><?php echo $res['hemail']; ?></td>
				<td><?php echo $res['noofrooms']; ?></td>
				<td><?php echo $res['teleno']; ?></td>
				 <td> <button class="btn-danger btn"> <a href="delete.php?hospitalID=<?php echo $res['hospitalID']; ?>" class="text-white"> Delete </a>  </button> </td>
				<td><button class="btn-success btn"><a href="update1.php?hospitalID=<?php echo $res['hospitalID']; ?>" class="text-white"> UPDATE</a> </button></td>
			</tr>

			<?php
				}
			?>
		</table>
</div>
</div>

</body>
</html>