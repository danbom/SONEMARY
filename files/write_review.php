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


$rank_avg=($rank1+$rank2+$rank3+$rank4+$rank5+$rank6)/6;

$query = "INSERT INTO review (rank1,rank2,rank3,rank4,rank5,rank6,review,regdate)
  VALUES('$rank1','$rank2','$rank3','$rank4','$rank5','$rank6','$review','$regdate')";

mysqli_query($connect,$query);


$query="insert into review(rank1,rank2,rank3,rank4,rank5,rank6,review,regdate)
  values('$rank1','$rank2','$rank3','$rank4','$rank5','$rank6','$review','$regdate')";

// 이서영

// 아바타 영화의 평가기준별 평점 6항목 가져오기
$conn = mysqli_connect("localhost", "root", "1234", "test");
$sql = "SELECT AVG(rank1) as avg1, AVG(rank2) as avg2, 
              AVG(rank3) as avg3, AVG(rank4) as avg4, 
              AVG(rank5) as avg5, AVG(rank6) as abg6 
              FROM review WHERE movie_id=5";
$result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_array($result);  

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);


 ?>
 <!-- <script>
 location.href='detail_page.html';
 </script> -->
