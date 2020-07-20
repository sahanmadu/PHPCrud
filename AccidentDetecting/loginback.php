<?php
session_start();


$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"accident_detecting");
	


$username=$_POST['uname1'];
$pass=$_POST['pass1'];

$qry1="select * from users where username = '$username' and password= '$pass'  ";
$qry2="select * from admin where username = '$username' and password= '$pass'  ";

$result=mysqli_query($con,$qry1);

$result1=mysqli_query($con,$qry2);

$num=mysqli_num_rows($result);

$num1=mysqli_num_rows($result1);



if($num == 1){

	$_SESSION['username'] = $username;

      header('location:product.php');
}


else{
		$message = "inccorect username or password";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('login.php');
    </SCRIPT>";
     
}

if($num1 == 1){

	$_SESSION['username'] = $username;

      header('location:admin.php');
}


?>