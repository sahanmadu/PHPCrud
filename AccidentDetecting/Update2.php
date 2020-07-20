
<?php

include 'Conn.php';

if(isset($_POST['upd'])){
    $id=$_GET['id'];
    $name=$_POST['name'];
    $locations=$_POST['location'];
    $rdate=$_POST['dates'];
  

    $qry3="UPDATE comments SET id=$id,name='$name',location='$locations',rdate='$rdate' WHERE id=$id";
    $result=mysqli_query($con,$qry3);

    header('location:Accdisplay.php');

}
?>


<!DOCTYPE html>

<html>

<head>

	<title></title>

<style> 

body 
{
  background-image: url("images/1920x1080-contact-us.jpg");
  
 
}

ul
{
    list-style-type: none;
    margin:0;
    padding:0;
    overflow:hidden;
    background-color: #0a2e47;
}

li
{
    float:left;
}

li a
{
   display:block;
   color:white;
   text-align:center;
   padding:20px 50px;
   text-decoration:none;
   
}

li a:hover:not(.active)
{
    background-color:green;
}


p
{
font-family:Arial,Helvetica; 
font-size:70px; 
font-weight:italic;
color:red
}


input[type=text], select {
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
	
input[type=password], select {
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;

	}
input[type=submit] {
    width: 80%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: red;
}

input[type=reset] {
    width: 100%;
    background-color: #ea0909;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=reset]:hover {
    background-color: #ea0909;
}
table {
    border-radius: 5px;
    background-color: crystal;
    padding: 20px;
}

</style>

</head>

<body>

<ul>
    <li><a class = "color" href="">Update</a></li>
</ul>

<form method="POST" action="">

<center>

<table>
<p>Update Information</p>
<br><br>
<tr>
<td><h1>Name :</h1></td>
<td><input type = "text" name ="name" placeholder="Update Name" style = "width :100%;" required></td>
</tr>

<tr>
<td><h1>Location :</h1></td>
<td ><input type = "text" name = "location" placeholder="Update Location" style = "width : 100%;"  required></td>
</tr>

<tr>
<td><h1>Reserved Date:</h1></td>
<td ><input type = "text" name = "dates" placeholder="Update Date" style = "width : 100%;"  required></td>
</tr>



<tr>
<td align= "left" > <input type="submit" value="Update" name="upd" ></td>
</tr>
</table>

</form>


</body>

</html>