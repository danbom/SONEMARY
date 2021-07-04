<?
include "lib.php";

$user_id=$_POST[user_id];
$user_id=mysqli_real_escape_string($connect, $user_id);

$query="delete from review where user_id='$user_id'";
mysqli_query($connect,$query);
?>
<script>
location.href='score.php';
</script>
