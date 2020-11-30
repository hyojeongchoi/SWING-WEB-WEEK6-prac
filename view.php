<?php
session_start();
$conn = mysqli_connect("localhost","root","branson113","mydb") or die("mysql connect error");
$query1= "select title from board where num ='{$_GET['num']}';"; //제목
$result1= mysqli_query($conn, $query1) or die("query1 error");
$query2= "select content from board where num ='{$_GET['num']}';";//내용
$result2= mysqli_query($conn, $query2) or die("query2 error");
$query3= "select date from board where num ='{$_GET['num']}';";//날짜
$result3= mysqli_query($conn, $query3) or die("query3 error");
$query4= "select hit from board where num ='{$_GET['num']}';";//조회수
$result4= mysqli_query($conn, $query4) or die("query4 error");
$query5= "select id from board where num ='{$_GET['num']}';";//아이디,작성자
$result5= mysqli_query($conn, $query5) or die("query5 error");


//$query="select * from board where num='{$_GET['num']}';";
//$result=mysqli_query($conn,$query) or die("query error");
//$row = mysqli_fetch_array($result);
 ?>
<table>
<tr>
<td colspan="4" class="vtitle"><?php echo $result1 ?></td>
</tr>
<tr>
<td class="id">작성자 <?php echo $result5 ?></td>
<td class="hit">조회수 <?php echo $result4?></td>
</tr>
<tr>
<td colspan="4" class="content" valign="top">
<?php echo $result2 ?></td>
</tr>
</table>
