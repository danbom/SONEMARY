<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="description" content="Sonemary search page" />
<meta name="keywords" content="HTML5, CSS3, JavaScript" />
<title>Search Page</title>
<link rel="stylesheet" href="styles.css" />
</head>

<body onload="init();">
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
      <form id="search">
				<input type="text" id="searchKey" name="searchKey" placeholder="search...">
				<button type="submit" id="searchBtn"><img src="image/loupe.png"></button>
			</form>
		</header>

		<article class="main-article">
		<div class="search-list-section">
			<header class="search-key">
				Results for <h1 id="key"><?php $home=file_get_contents("search_page2.php"); ?>🤷‍♀️?</h1>
			</header>

			<section >
				<ul class="search-list" id="list"></ul>


				<?php
				$con=mysqli_connect("localhost","root","","sonemary");
				mysqli_set_charset($con,"utf8");
				$res = mysqli_query($con, "select * from movies");
				$result = array();
				while($row = mysqli_fetch_array($res)) {
				 array_push($result, array('movie_id'=>$row[0],'title'=>$row[1],'date'=>$row[2],
				 'genre'=>$row[3],'director'=>$row[4],'cast'=>$row[5],'poster'=>$row[6],
				 'page'=>$row[7],'badge'=>$row[8]));
				}
				$movies = json_encode(array($result),JSON_UNESCAPED_UNICODE);
				echo $movies;
				mysqli_close($con);

				?>
				<script src="keysearch2.js">
					const movies_j = <?php echo json_encode(array("result"=>$result),JSON_UNESCAPED_UNICODE); ?>;
				</script>

				<!-- <script src="keysearch2.js">
				</script> -->

			</section>
		</article>
	</div>
</body>
</html>
