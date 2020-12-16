<?php
session_start();
$id=$_POST['user_id'];
$pw=$_POST['password'];

$con=mysqli_connect("localhost","root","ming0","sonemary");
$check="SELECT * from user WHERE user_id='$id'";
$result=$con->query($check);
if ($result->num_rows==1){
  $row=$result->fetch_array(MYSQLI_ASSOC);
  if($row['password']==$pw){
    $_SESSION['user_id']=$id;
    if(isset($_SESSION['user_id'])) {
      ?><script type="text/javascript">
      alert('login success');
      location.href='main_page.php'
    </script><?php
    }
    else {
      ?><script type="text/javascript">
        alert('error');
        location.href='login.html'
      </script><?php
    }
  }
  else {
    ?><script type="text/javascript">
      alert('wrong id or pw');
      location.href='login.html'
    </script><?php
  }

}
else {
  ?><script type="text/javascript">
    alert('wrong id or pw');
    location.href='login.html'
  </script><?php
}
 ?>
