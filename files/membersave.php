<?php

include "lib.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Sonemary</title>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
<div id="app">

<header id="main-header">
	<div id="logo">
		<a href="main_page.html"><img src="image/SONEMARY.png"></a>
	</div>
	<div id="username">
		<a href="my_page.html">Welcome, USER <img src="image/profile-user.png"></a>
</div>
		<nav>
			<ul id="menu-list">
				<li><a href="genre.html" id="ami"> Genre </a></li>
				<li><a href="top10.html" id="ami"> Top10 </a></li>
				<li><a href="new.html" id="ami"> New </a></li>
			</ul>
		</nav>
		<form id="search" onClick="location.href='search_page.html'">
			<input type="text" id="searchKey" name="searchKey" placeholder="search...">
	<button type="submit" id="searchBtn"><img src="image/loupe.png"></button>
		</form>
</header>

			<section class="login-section">
				<header>
					<h1>Sign In</h1>
				</header>
				<form action="signin.php" method="post">
					<div class="login-input">
						<input type="text" id="signId" name="user_id" placeholder="ID">
          </div>
						<div class="login-input">
							<input type="password" id="signPw" name="password" placeholder="Password">
          </div>
					<div class="login-input">
						<input type="radio" name="critic" value="critic"> critic
						<input type="radio" name="critic" value="general"> general
					</div>
					<div class="login-button">
						<button type="submit">Sign In</button>
					</div>
				</form>
			</section>
	</div>

</body>

</html>