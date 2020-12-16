<?
header('Content-Type: text/html; charset=utf-8');
error_reporting(1);
ini_set("display_errors",1);


$host = 'localhost';
$user = 'root';
$pw = 'min01038082726!';
$dbName = 'sonemary';

$connect =mysqli_connect($host, $user, $pw, $dbName);

if(mysqli_connect_error()){
  echo "mysql 접속 중 오류 발생";
  echo mysqli_connect_error();
}

mysqli_query($conn,'SET NAMES utf8');



?>