<?php
include('db_connect.php');
$name=$_POST['name'];
$email=$_POST['email'];
$city=$_POST['city'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$message=$_POST['message'];


$result = "INSERT INTO faq(name,email,city,address,contact,message) VALUES ('$name','$email','$city','$address','$contact','$message')";

mysqli_query($connection,$result);
 if( $result ) 
        echo "<script type='text/javascript'>alert('Submit Answer!')</script>";
      else
        echo "<script type='text/javascript'>alert('failed!')</script>";
    
echo '<script type="text/javascript">
           window.location = "http://127.0.0.1/TEDxFAST/TEDxFAST/faqs.html"
      </script>';

?>