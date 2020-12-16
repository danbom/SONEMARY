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


$review=$_POST['comment'];
// $review=mysqli_real_escape_string($conn,$review)

$regdate=date("Y-m-d H:i:s");
// $badge=$_POST[''];

$rank_avg=($rank1+$rank2+$rank3+$rank4+$rank5+$rank6)/6;

$query = "INSERT INTO review (rank1,rank2,rank3,rank4,rank5,rank6,review,regdate)
  VALUES('$rank1','$rank2','$rank3','$rank4','$rank5','$rank6','$review','$regdate')";

mysqli_query($connect,$query);

 ?>
 <!-- <script>
 location.href='detail_page.html';
 </script> -->
