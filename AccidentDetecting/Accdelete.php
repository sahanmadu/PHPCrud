<?php

include 'Conn.php';

$hosid=$_GET['id'];

$qry3= "DELETE FROM comments WHERE id= $hosid ";

mysqli_query($con,$qry3);

header('location:Accdisplay.php');



?>