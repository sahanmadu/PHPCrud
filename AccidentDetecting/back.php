<?php
session_start();

header('location:index.php');

$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"accident_detecting");


$firstname = $_POST['first'];
$lastname = $_POST['last'];
$email =$_POST['email'];
$username = $_POST['uname'];
$pwd = $_POST['pwd'];


$qry="select * from hospital where username='$username' ";

$result=mysqli_query($con,$qry);

$i=mysqli_num_rows($result);



if($i==1){

	echo "Username already taken";
}
else{
	$qry1="insert into users(first_name,last_name,email,username,passwords) values('$firstname','$lastname','$email','$username','$pwd')";
	mysqli_query($con,$qry1);

	echo "done";

?>




