<meta charset="utf-8" />
<?php
	include "lib.php";

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
						<li><a href=""> Genre </a></li>
						<li><a href=""> Top10 </a></li>
						<li><a href=""> New </a></li>
					</ul>
				</nav>
				<form action="" method="">
					<div id="search">
						<input type="text" id="searchKey" name="searchKey" placeholder="search...">
	          <img src="image/loupe.png">
	        </div>
				</form>
			</header>

				<section class="login-section">
					<header>
						<h1>Log In</h1>
					</header>
					<form action="login_ok.php" method="post">
						<div class="login-input">
							<input type="text" id="loginId" name="user_id" placeholder="ID">
	          </div>
							<div class="login-input">
								<input type="password" id="loginPw" name="password" placeholder="Password">
	          </div>
						<div class="login-button">
							<button type="submit">Log In</button>
						</div>
						<div class="signin-button">
							<a href="signin_page.html" class="signin">Create new account</a>
						</div>
					</form>
				</section>
		</div>

	</body>

	</html>
