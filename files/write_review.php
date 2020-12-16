<?php
include "lib.php";

$host = 'localhost';
$user = 'root';
$pw = 'ming0';
$dbName = 'sonemary';

$connect =mysqli_connect($host, $user, $pw, $dbName);
print_r($connect);

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
$review=mysqli_real_escape_string($mysqli,$review);

$regdate=date("Y-m-d H:i:s");
// $badge=$_POST[''];

$sql = "INSERT INTO user (user_id, password, critic)"." VALUES ('".$rank1."','".$rank2."','".$rank3."','".$rank4."','".$rank5."','".$rank6."','".$review."','".$regdate."')";
mysqli_query($connect, $sql);

 ?>
