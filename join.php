<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="joincheck.php" method="post">
      <div class="ID">
        <input type="text" name="join_id" value="" placeholder="id" required>
      </div>
      <div class="PASS">
        <input type="password" name="join_pass" value="" placeholder="pass" required1>
      </div>
      <div class="NAME">
        <input type="text" name="join_name" value="" placeholder="name" required>
      </div>
      <div class="Identify">
        <input type="text" name="join_identify" value="" placeholder="idenfity" required>
      </div>
      <div class="email">
        <input type="email" name="join_email" value="" placeholder="email" required>
      </div>
      <button type="submit" name="button">회원가입하기</button>
    </form>
  </body>
</html>
