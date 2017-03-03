<?php
include('db_connect.php');
$name=$_POST['name'];
$email=$_POST['email'];
$city=$_POST['city'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$message=$_POST['message'];
$radio=$_POST['radio'];



$result = "INSERT INTO tellus(name,email,city,contact,address,message,association) VALUES ('$name','$email','$city','$contact','$address','$message','$radio')";

mysqli_query($connection,$result);
 if( $result ) 
        echo "<script type='text/javascript'>alert('Submit Answer!')</script>";
      else
        echo "<script type='text/javascript'>alert('failed!')</script>";
    
echo '<script type="text/javascript">
           window.location = "http://127.0.0.1/TEDxFAST/TEDxFAST/index.html"
      </script>';

?>