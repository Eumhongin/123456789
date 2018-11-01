<?php
  include('module/dbconnect.php');
  include('module/CNT.php');

  $id = $_POST['login_id'];
  $pass = $_POST['login_pass'];


  $sql = "SELECT * FROM member WHERE member_id ='".$id."'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_BOTH);
  if($pass == $row['member_password']){
    $CNT_name = $row['member_name'];
    $CNT_identification = $row['member_identification'];
    echo "<script> alert('".$row['member_name']."님 환영합니다!'); location.href = 'mypage.php'; </script>";
  }
  else {
    echo "<script>alert('로그인 정보가 일치하지 않습니다!'); location.href = 'login.html';</script>";
  }
 ?>
