
<?php
        include_once 'adminProcess.php';
        ?>

<!DOCTYPE html>
<html>
<head>
	<title> Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="admin.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


	<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2&display=swap" rel="stylesheet">
</head>
<body>
	<div id="left">
		<div id="logo">
			<img src="images/logo2.png">
		</div>

		<br> <br> <br> <br> 
		
		<button type="button" class="btn btn-outline-secondary btn-sm btn-block"><a href="index.php">Log Out</a></button> <br> </center>
	
  <br> <br> <br>
    <br> <br> <br>
      <br> <br> <br>
        <br> <br> <br>



<?php

include 'Conn.php';

if(isset($_POST['update'])){
    $id=$_GET['edit'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $Email=$_POST['email'];
  

    $qry="UPDATE users SET uid=$id,fname='$fname',lname='$lname',email='$Email' WHERE uid=$id";
    $result=mysqli_query($con,$qry);

    header('location:admin.php');

}
?>


        <?php
        $fname = '';
        $lname = '';
        $email = '';

        ?>


  <div class="row justify-content-center" >

  <form action="" method="POST">
    <div class="form-group">
    
    
    <input type="text" name="fname" class="form-control" 
          placeholder="Enter first name">
    </div>

     <div class="form-group">
    
    <input type="text" name="lname" class="form-control" 
          placeholder="Enter last name">
    </div>

    <div class="form-group">
    
    <input type="text" name="email" class="form-control" 
              placeholder="Enter email address">
    </div>

    <div class="form-group"><center>
    <button type="submit" class="btn btn-primary" name="update" >Update</button> </center>
  </div>
  </form>
</div>


	</div>


	<div id="container">
		<div id="header">
			
		</div>
		<div id="wrapper">
			<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Product Details</h5>
        <p class="card-text"></p>
        <a href="product.php" class="btn btn-primary">Click here to go</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Hospital Detials</h5>
        <p class="card-text"></p>
        <a href="home.php" class="btn btn-primary">Click here to go</a>
      </div>
    </div>
  </div>

 <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Product Holder Comments</h5>
        <p class="card-text"></p>
        <a href="Accdisplay.php" class="btn btn-primary">Click here to go </a>
      </div>
    </div>
  </div>

   <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Policy Details</h5>
        <p class="card-text"></p>
        <a href="privacypolicy.php" class="btn btn-primary">Click here to go </a>
      </div>
    </div>
  </div>

</div>
		

<br> <br>

<div class="card text-center">
  <div class="card-header">
    User Details
  </div>
  <div class="card-body">
    <h5 class="card-title"> </h5>

    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
       <th scope="col">Action</th>

    </tr>
  </thead>

    


  <?php

    if(isset($_SESSION['message'])): ?>

      <div class="alert alert-danger"> 

        <?php
          echo $_SESSION['message'];
          unset($_SESSION['message']);
        ?>
        
      </div>
    <?php endif ?>






<?php
          include 'Conn.php';

            $qry="SELECT * FROM users";
              $query=mysqli_query($con,$qry);

            while($res=mysqli_fetch_array($query)){

      ?>
      <tr class="text-center">
        
        <td><?php echo $res['uid']; ?></td>
        <td><?php echo $res['fname']; ?></td>
        <td><?php echo $res['lname']; ?></td>
        <td><?php echo $res['email']; ?></td>

       
        
       
        <td>
          <a href="admin.php?edit=<?php echo $res['uid']; ?> " 
         class="btn btn-primary">Edit</a>

         <a href="adminProcess.php?delete=<?php echo $res['uid']; ?> " 
         class="btn btn-danger">Delete</a>
          
        </td>
       

      
      </tr>

      <?php
        }
      ?>

</table>
    
  </div>





  <div class="card-footer text-muted">
    
  </div>
</div>

	</div>

</body>
</html>