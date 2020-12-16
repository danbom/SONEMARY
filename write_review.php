<?php
include "lib.php";

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

$query="insert into review(rank1,rank2,rank3,rank4,rank5,rank6,review,regdate)
  values('$rank1','$rank2','$rank3','$rank4','$rank5','$rank6','$review','$regdate')";

 ?>
