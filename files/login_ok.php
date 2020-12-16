<meta charset="utf-8" />
<?php
	header('Content-Type: text/html; charset=utf-8');
    error_reporting(1);
    ini_set("display_errors",1);


    $host = 'localhost';
    $user = 'root';
    $pw = 'ming0';
    $dbName = 'sonemary';

    $connect =mysqli_connect($host, $user, $pw, $dbName);

    if(mysqli_connect_error()){
      echo "mysql 접속 중 오류 발생";
      echo mysqli_connect_error();
    }
		if(isset($_POST['user_id'])&&isset($_POST['password'])){//post방식으로 데이터가 보내졌는지?
			 $uid=$_POST['user_id'];//post방식으로 보낸 데이터를 username이라는 변수에 넣는다.
			 $upw=$_POST['password'];//post방식으로 보낸 데이터를 userpw라는 변수에 넣는다.

			 //sql문을 sql변수에 저장해놓는다.
			 $sql="SELECT * FROM user where user_id='$uid'&&password='$upw'";
			 if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){//쿼리문을 실행해서 결과가 있으면 로그인 성공
				 echo "</br>".$result['created'];
				 alert "</br>You are loggined";
							?>
							<script>location.href='main_page.php';</script>
			 <?}
			 else{//쿼리문의 결과가 없으면 로그인 fail을 출력한다.
				 alert "login failed";
			 }
		 }?>
				<script>location.href='main_page.php';</script>
				<?
	?>
