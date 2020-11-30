<?php
$conn = mysqli_connect("localhost","root","branson113","mydb") or die("mysql connect error");
$query= "select * from board where title= '{$_GET['title']}';";
$result= mysqli_query($conn, $query) or die("query error");
$count=mysqli_num_rows($result);
$id = $_GET[name];                      //작성자
$pwd = $_GET[pwd];                        //비번
$title = $_GET[title];                  //제목
$content = $_GET[content];              //내용
$date = date('Y-m-d H:i:s');           //날짜

if ($count==1) {
  echo "중복된 글 제목입니다.";
  echo "<a href=newpost.php>back</a>";
}
else if ($count==0)
{
  echo "글 저장중입니다.";
  $savequery= "insert into board (num,title, content, id, pwd, date, hit) values (null, '$title', '$content', '$id','$pwd','$date',0)";
  $saveresult=mysqli_query($conn, $savequery) or die("Query Error!"); 

  echo "<a href=board.php>board</a>";
}
else {}
 ?>
