<?php
header("Content-Type: text/html; charset=UTF-8");

include "lib.php";

$user_id = $_POST['user_id'];
$password=$_POST['password'];
$critic=$_POST['critic'];

$sql="insert into user (user_id,password,critic)";
$sql=$sql. "values ('$user_id','$password','$critic')";
if($mysqli->query($sql)){
  echo 'success inserting';
 }else{
  echo 'fail to insert sql';
 }
echo "<script>location.href='login_page.html';</script>";
?>

/*
header("Content-Type: text/html; charset=UTF-8");

$conn = new mysqli('localhost','root','1540','sonemary');
mysqli_query($conn,'SET NAMES utf8');

$user_id = $_POST['user_id'];
$password=$_POST['password'];
$critic=$_POST['critic'];

$sql="insert into user (user_id,password,critic) values ('$user_id','$password','$critic')";
$res=$conn->query($sql);
echo "<script>location.href='/login_page.html';</script>";
?>*/
