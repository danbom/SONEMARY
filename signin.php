<?php
header("Content-Type: text/html; charset=UTF-8");

include "lib.php";

$user_id = $_POST['user_id'];
$password=$_POST['password'];
$critic=$_POST['critic'];


$sql = "INSERT INTO user (user_id,password,critic) VALUES ('".$user_id."','".$password."','".$critic."')";


?>

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "
// " . $conn->error;
// }
//
// $conn->close();


// $sql="insert into user(user_id,password,critic)";
// $sql=$sql. "values ('$user_id','$password','$critic')";

// if($sqli->query($sql)){
//   echo 'success inserting';
//  }else{
//   echo 'fail to insert sql';
//  }

<meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<script>location.href='login.php';</script>;
<meta http-equiv="refresh" content="0 url=/">
