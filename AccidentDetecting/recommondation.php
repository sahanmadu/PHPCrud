
<?php


include 'Conn.php';

if(isset($_POST['bbs'])){
    $name=$_POST['mname'];
    $location=$_POST['loca'];
    $reserveddate=$_POST['rdata'];
    $comment1=$_POST['comment'];


    

    $qry1="INSERT INTO comments(name,location,rdate,comme) VALUES ('$name','$location','$reserveddate','$comment1')";
        mysqli_query($con,$qry1);

    
      echo '<script>alert("Data inserted successfully!")</script>';


}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

<style>

body  {
  background-image: url("images/white.jpg");
  
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

.color
{
	background-color:darkred;
}

.h1
{

 background-color:brown; 

}

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
	
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;

	}
input[type=submit] {
    width: 280%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

input[type=reset] {
    width: 280%;
    background-color: #ea0909;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=reset]:hover {
    background-color: darkred;
}
table {
    border-radius: 5px;
    background-color: #becfcd;
    padding: 20px;
}


</style>




</head>

<body>



<ul>
	<li><a class = "color" href="">Add your comment here</a></li>
	<li style="float:right"><a href = "Product.php">Product</a></li>
</ul>

<img src="">

<form id="form1" method="POST" action="">
        <div>
        <center>
            <table>

            <h1 class="c2">Signup</h1>
        
            <tr>
         <td>Name :</td>
         <td><input type ="text"name ="mname" placeholder="Enter Your Name" required /></td>   
        </tr>

        <tr>
         <td>Location :</td>
         <td><input type ="text"name ="loca" placeholder="Enter Your Location" required /></td>   
        </tr>

        <tr>
         <td>Reserved Date :</td>
         <td><input type ="text"name ="rdata" placeholder="Enter Your Reserved Date" required /></td>   
        </tr>

        <tr>
        <td>Comments : </td>
        <td><input type ="text" name ="comment" placeholder="your feedback" required />
           </td>   

           </tr>  
          
           <tr>
            <td><input type="submit"value="Sign Up" name="bbs" /></td>
                </tr>    
        
                 <tr>
                 <td><input type="reset"value="Reset" /></td>
                 </tr>
            
                 </table>

        </center>
        </div>
    </form>


</body>
</html>