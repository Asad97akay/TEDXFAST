<?php
include('db_connect.php');
$theme=$_POST['theme'];

$result = "INSERT INTO theme(Theme) VALUES ('$theme')";

mysqli_query($connection,$result);
 if( $result ) 
        echo "<script type='text/javascript'>alert('Submit Answer!')</script>";
      else
        echo "<script type='text/javascript'>alert('failed!')</script>";
    
echo '<script type="text/javascript">
           window.location = "http://127.0.0.1/TEDxFAST/TEDxFAST/faqs.html"
      </script>';

?>