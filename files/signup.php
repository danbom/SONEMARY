<?php
$id=$_POST['user_id'];
$pw=$_POST['password'];

if ($id==NULL || $pw=NULL){
  ?><script type="text/javascript">
    alert('fill all blank');
    location.href='signup.html'
  </script><?php
}

$con=mysqli_connect("localhost","root","ming0","sonemary");
$check="SELECT * from user WHERE user_id='$id'";
$result=$con->query($check);
if ($result->num_rows==1){
  ?><script type="text/javascript">
    alert('id already exist');
    location.href='signup.html'
  </script><?php
}

$sign=mysqli_query($con, "INSERT INTO user (user_id, password)"." VALUES ('".$id."','".$pw."')");
if ($sign) {
  ?><script type="text/javascript">
    alert('signup success');
    location.href='login.html'
  </script><?php
}
 ?>
