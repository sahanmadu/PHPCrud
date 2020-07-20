<?php

include 'Conn.php';

$hosid=$_GET['hospitalID'];

$qry2= "DELETE FROM hospital WHERE hospitalID= $hosid ";

mysqli_query($con,$qry2);

header('location:display.php');



?>
