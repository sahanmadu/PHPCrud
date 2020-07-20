<?php

session_start();



include 'Conn.php';





if(isset($_GET['delete']))
{
	$userid = $_GET['delete'];
	$qry= "DELETE FROM users WHERE uid= $userid ";
	mysqli_query($con,$qry);

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";

	header('location:admin.php');



}





    




?>
