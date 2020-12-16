<?php
session_start();
if(!isset($_SESSION['user_id'])) {
  echo "<a href=login.html>login</a>";
}
else {
  echo "<a href=logout.php>logout</a>";
}
 ?>
