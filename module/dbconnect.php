<?php
  $conn = mysqli_connect("localhost","root","um0723","video");
  if($conn->connect_error){
    die("Connection failed : ".$conn->connect_error);
  }
  else{
    echo "<script>console.log('Success!!');</script>";
  }
 ?>
