<?php

$conn = mysqli_connect("localhost", "root", "ming0", "sonemary");


$sql = array();
$count = "SELECT COUNT(DISTINCT(movie_id)) FROM review";
for($i = 0; $i < $count; $i++){
    $sql[$i] = "SELECT ROUND(AVG(rank_1), 1) as avg1, ROUND(AVG(rank_2), 1) as avg2,
              ROUND(AVG(rank_3), 1) as avg3, ROUND(AVG(rank_4), 1) as avg4,
              ROUND(AVG(rank_5), 1) as avg5, ROUND(AVG(rank_6), 1) as avg6
              FROM review WHERE movie_id=$i";
}

$result = array();
$row = array();
$data = array(array(), array());
for($i = 0; $i < $count; $i++){
    $result[$i] = mysqli_query($conn, $sql[$i]);
    $row[$i] = mysqli_fetch_array($result[$i]);

    foreach ($result[$i] as $row[$i]) {
        $data[$i][] = $row[$i];
    }
}

// $result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_array($result);

// $data = array();
// foreach ($result as $row) {
// 	$data[] = $row;
// }

mysqli_close($conn);

echo json_encode($data);

?>
