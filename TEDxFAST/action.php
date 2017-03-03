<?php
include('db_connect.php');
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


$result = "INSERT INTO contact(email,subject,message) VALUES ('$email','$subject','$message')";

mysqli_query($connection,$result);

if($result)
 echo "<script type='text/javascript'>alert('Submit Answer!')</script>";
      else
        echo "<script type='text/javascript'>alert('failed!')</script>";
    
echo '<script type="text/javascript">
           window.location = "http://127.0.0.1/TEDxFAST/TEDxFAST/contact.html"
      </script>';
?>