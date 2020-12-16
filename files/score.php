<?php

$conn = mysqli_connect("localhost", "root", "1234", "test");

$sql = "SELECT ROUND(AVG(rank_1), 1) as avg1, ROUND(AVG(rank_2), 1) as avg2, 
              ROUND(AVG(rank_3), 1) as avg3, ROUND(AVG(rank_4), 1) as avg4, 
              ROUND(AVG(rank_5), 1) as avg5, ROUND(AVG(rank_6), 1) as avg6 
              FROM review WHERE movie_id=5";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);  

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

echo $data;
print_r($data);

mysqli_close($conn);

echo json_encode($data);

?>