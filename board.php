<?php
session_start();
$conn = mysqli_connect("localhost","root","branson113","mydb") or die("mysql connect error");
$query="select * from board;";
$result=mysqli_query($conn,$query)or die("query error");
$num=1;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>게시판</h2>
    <table width= "600"  cellpadding="10">
      <tr align="center">
      <tr>
      <td align="center">번호</td>
      <td align="center">제목</td>
      <td align="center">작성자</td>
      <td align="center">날짜</td>
      <td align="center">조회수</td>
      </tr>
      </thead>
      <td width = "80"><?php echo $total?></td>
      <td width = "500"><a href = "view.php?num=<?php echo $rows['num']?>">
      <?php echo $rows['title']?></td>
      <td width = "100"><?php echo $rows['id']?></td>
      <td width = "200"><?php echo $rows['date']?></td>
      <td width = "100"><?php echo $rows['hit']?></td>
      </tr>
      </tbody>
      <input type="button" name="write" value="write" onclick="location.href='newpost.php'">
</body>
</html>
