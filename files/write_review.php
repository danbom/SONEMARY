<?php
include "lib.php";

$host = 'localhost';
$user = 'root';
$pw = 'ming0';
$dbName = 'sonemary';

$connect =mysqli_connect($host, $user, $pw, $dbName);

if(mysqli_connect_error()){
  echo "mysql 접속 중 오류 발생";
  echo mysqli_connect_error();
}

// $movie_id=$_POST[''];
// $user_id=$_POST[''];
$rank1=$_POST['story'];
$rank2=$_POST['music'];
$rank3=$_POST['design'];
$rank4=$_POST['acting'];
$rank5=$_POST['impact'];
$rank6=$_POST['message'];
$rank_avg=($rank1+$rank2+$rank3+$rank4+$rank5+$rank6)/6;

$review=$_POST['comment'];

$regdate=date("Y-m-d H:i:s");
// $badge=$_POST[''];

$sql = "INSERT INTO review (movie_id, user_id, rank_1, rank_2, rank_3, rank_4, rank_5, rank_6, review, regdate)
"." VALUES ('".$movie_id."','".$user_id."','".$rank1."','".$rank2."','".$rank3."','".$rank4."','".$rank5."','".$rank6."','".$review."','".$regdate."')";
mysqli_query($connect, $sql);

 ?>

 <meta charset="utf-8" />
 <script type="text/javascript">alert('리뷰가 작성되었습니다.');</script>
 <script>location.href='score_page.php';</script>;
 <meta http-equiv="refresh" content="0 url=/">
