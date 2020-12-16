<?php
session_start();
$res=session_destroy();
if ($res) {
  header('Location: main_page.php');
}
 ?>
