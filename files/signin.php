<?php
header("Content-Type: text/html; charset=UTF-8");

include "lib.php";

$user_id = $_POST['user_id'];
$password=$_POST['password'];
$critic=$_POST['critic'];


$sql = "INSERT INTO user (user_id,password,critic) VALUES ('".$user_id."','".$password."','".$critic."')";


?>

<meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<script>location.href='login.php';</script>;
<meta http-equiv="refresh" content="0 url=/">
