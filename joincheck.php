<?php
  include('module/dbconnect.php');
  echo $_POST['join_id']."<br />";
  echo $_POST['join_pass']."<br />";
  echo $_POST['join_name']."<br />";
  echo $_POST['join_identify']."<br />";
  echo $_POST['join_email']."<br />";
  //$sql1 = "INSERT INTO test(member_id,member_password) VALUES ('".$_POST['join_id']."','".$_POST['join_pass']."')";
  $sql = "INSERT INTO member(member_id,member_password,member_name,member_identification,member_email) VALUES('". $_POST['join_id']."','".$_POST['join_pass']."','".$_POST['join_name']."','".$_POST['join_identify']."','".$_POST['join_email']."')";
  mysqli_query($conn,$sql);

  mysqli_close();




 ?>
