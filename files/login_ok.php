<meta charset="utf-8" />
<?php
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


	session_start(); // 세션
	$id = $_POST['user_id']; // 아이디
	$pw = $_POST['passwd']; // 패스워드

	$query = "select * from user where user_id='$user_id' and passwd='$passwd'";
	$result = mysqli_query($connect, $query);
	$row = mysqli_fetch_array($result);



	if($id==$row['user_id'] && $pw==$row['passwd']){ // id와 pw가 맞다면 login

	   $_SESSION['id']=$row['id'];
	   echo "<script>location.href='main_page.php';</script>";

	}else{ // id 또는 pw가 다르다면 login 폼으로

	   echo "<script>window.alert('invalid username or password');</script>"; // 잘못된 아이디 또는 비빌번호 입니다
	   echo "<script>location.href='login.php';</script>";

	}

	

  ?>
