<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="logcheck.php" method="post">
      <input type="text" name="login_id" value="" placeholder="ID" required>
      <input type="password" name="login_pass" value="" placeholder="password" required>
      <button type="submit" name="button">로그인하기</button>
      <a href="join.html">회원가입하기</a>
    </form>

  </body>
</html>
