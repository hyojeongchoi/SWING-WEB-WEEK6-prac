<?php
session_start();
$conn = mysqli_connect("localhost","root","branson113","mydb") or die("mysql connect error");
$query="select * from board;";
$result=mysqli_query($conn,$query)or die("query error");
$row=mysqli_fetch_array($result)
$num=1;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>BOARD</h2>
    <table width= "600"  cellpadding="10">
      <tr align="center">
      <tr>
      <td align="center">번호</td>
      <td align="center">제목</td>
      <td align="center">작성자</td>
      <td align="center">날짜</td>
      <td align="center">조회수</td>
      </tr>
      <?php
      while($row=mysqli_fetch_array($result))
      {
        echo "
        <tr>
        <td width = "80">$row['num']</td>
        <td width = "500"><a href = "view.php?num=<?php echo $row['num']?>">
        <?php echo $rows['title']?></td>
        <td width = "500"><
        <td width = "100">$row['id']</td>
        <td width = "300">$row['date']</td>
        <td width = "100">$row['hit']?></td>
        </tr>
        ";
        $num++;
      }
      ?>
      <input type="button" name="write" value="write" onclick="location.href='newpost.php'">
  </body>
  </html>
