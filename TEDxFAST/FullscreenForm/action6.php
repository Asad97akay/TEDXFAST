<?php
include('db_connect.php');
$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];


$result = "INSERT INTO sponsor(company,name,number,reason,budget) VALUES ('$q1','$q2','$q3','$q4','$q5')";

mysqli_query($connection,$result);
 if( $result ) 
 echo "<script type='text/javascript'>alert('Submit Answer!')</script>";
      else
        echo "<script type='text/javascript'>alert('failed!')</script>";
    
echo '<script type="text/javascript">
           window.location = "http://127.0.0.1/TEDxFAST/TEDxFAST/faqs.html"
      </script>';

?>