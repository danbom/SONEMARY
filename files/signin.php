<?php
require_once("db.php");
session_start();
header('Content-Type: text/html; charset=utf-8');
error_reporting(1);
ini_set("display_errors",1);


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

//mysqli_query($connect,'SET NAMES utf8');

$user_id = $_POST['user_id'];
$password=$_POST['password'];
$critic=$_POST['critic'];

$sql = "INSERT INTO user (user_id,password,critic) VALUES ($user_id, $password, $critic)";
mysqli_query($connect, $sql);
//$sql = "INSERT INTO user (user_id,password,critic) VALUES ('".$user_id."','".$password."','".$critic."')";


?>


<meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<script>location.href='login.php';</script>;
<meta http-equiv="refresh" content="0 url=/">
