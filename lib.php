<?
error_reporting(1);
ini_set("display_errors",1);


$host = 'localhost';
$user = 'root';
$pw = '1540';
$dbName = 'sonemary';

$mysqli = new mysqli($host, $user, $pw, $dbName);
mysqli_query($mysqli,'SET NAMES utf8');
