<?php
session_start();
$conn = mysqli_connect("localhost","root","branson113","mydb") or die("mysql connect error");
?>
<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
  <title>
    글 작성하기
  </title>
</head>
<body>
<form action="postsave.php" method="get">
  <p>작성자 <input type="text" name="id"></p>
  <p>제목 <input type="text" name="title"></p>
  <p>내용<textarea class='content'name="content" rows="8" cols="80"></textarea>
  <p>비밀번호 <input type="password" name="pwd"></p>
  <p><input type="submit" value="작성"/></p>
</form>
</body>
</html>
