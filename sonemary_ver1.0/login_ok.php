<meta charset="utf-8" />
<?php
	include "lib.php";

	session_start(); // 세션
	$id = $_POST['user_id']; // 아이디
	$pw = $_POST['password']; // 패스워드

	$query = "select * from user where user_id='$user_id' and password='$password'";
	$result = mysqli_query($con, $query);
	$row = mysqli_fetch_array($result);



	if($id==$row['user_id'] && $pw==$row['password']){ // id와 pw가 맞다면 login

	   $_SESSION['id']=$row['id'];
	   echo "<script>location.href='main_page.html';</script>";

	}else{ // id 또는 pw가 다르다면 login 폼으로

	   echo "<script>window.alert('invalid username or password');</script>"; // 잘못된 아이디 또는 비빌번호 입니다
	   echo "<script>location.href='login.php';</script>";

	}

	// session_start();
	// $id=$_POST['loginId'];
	// $id=$_POST['loginPw'];
	//
	// $check="SELECT * FROM user WHERE user_id='$loginId'";
	// $result=$mysqli->query($check);
	// if($result->num_row==1){
	// 	$row=$result->fetch_array(MYSQLI_ASSOC);
	// 	if()
	// }

//   if($_POST["user_id"] == "" || $_POST["password"] == ""){
// 		echo '<script> alert("아이디나 패스워드 입력하세요"); history.back(); </script>';
// 	}else{
//
//
// 	$user_pw= $_POST['password'];
// 	$sql = "select * from member where id='".$_POST['user_id']."'";
// 	$member = $sql->fetch_array();
// 	// $hash_pw = $member['password']; //$hash_pw에 POSt로 받아온 아이디열의 비밀번호를 저장합니다.
//
// 	if(password_verify($user_pw, $password)) //만약 password변수와 hash_pw변수가 같다면 세션값을 저장하고 알림창을 띄운후 main.php파일로 넘어갑니다.
// 	{
// 		$_SESSION['user_id'] = $member["id"];
// 		$_SESSION['password'] = $member["pw"];
//
// 		echo "<script>alert('로그인되었습니다.'); location.href='main_page.html';</script>";
// 	}else{ // 비밀번호가 같지 않다면 알림창을 띄우고 전 페이지로 돌아갑니다
// 		echo "<script>alert('아이디 혹은 비밀번호를 확인하세요.'); history.back();</script>";
// 	}
// }

  ?>
