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
				Results for <h1 id="key">🤷‍♀️?</h1>
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
				mysqli_close($con);

				?>
				<script language="JavaScript">
					var movies = <?php echo json_encode(array($result),JSON_UNESCAPED_UNICODE); ?>;
					var movies = movies[0];
					const list = document.getElementById('list');
					const key = document.getElementById('key');

					function setList(group) {
					  clearList();
					  for (const movie of group) {
					    var item = document.createElement('li');
					    item.classList.add('list-group-item');

					    var img = document.createElement('img');
					    img.src = movie.poster;
					    img.className="section6-img";

					    var title = document.createElement('h4');
					    title.innerHTML = movie.title;

					    var link = document.createElement('a');
					    link.setAttribute('href', movie.page);

					    link.appendChild(img);
					    link.appendChild(title);
					    item.appendChild(link);
					    list.appendChild(item);
					  }
					  if (group.length === 0){
					    setNoResults();
					  }
					}

					function clearList() {
					  while (list.firstChild) {
					    list.removeChild(list.firstChild);
					  }
					}

					function setNoResults() {
					  const item = document.createElement('li');
					  item.classList.add('list-group-item');
					  const text = document.createTextNode('No results found');
					  item.appendChild(text);
					  list.appendChild(item);
					}

					function printKey(key) {
					  var str = document.getElementById("key");
					  str.removeChild(str.firstChild);
					  str.appendChild(document.createTextNode(key));
					}

					function computeRelevancy(title, searchTerm) {
					  let value = title.trim().toLowerCase();
					  if (value === searchTerm) {
					    return 2;
					  } else if (value.startsWith(searchTerm)) {
					    return 1;
					  } else if (value.includes(searchTerm)) {
					    return 0;
					  } else {
					    return -1;
					  }
					}

					const searchInput = document.getElementById('search');
					searchInput.addEventListener('submit', (event) => {
					  event.preventDefault();
					  let value = document.getElementById('searchKey').value;
					  printKey(value);

					  if (value && value.trim().length > 0) {
					    value = value.trim().toLowerCase();
							setList(movies.filter(movie => {
					      return movie.title.toLowerCase().includes(value);
					    }).sort((movie1, movie2) => {
					      return computeRelevancy(movie2.title, value) - computeRelevancy(movie1.title, value);
					    }));
					  } else {
					    clearList();
					  }
					});

					function init() {
					  document.getElementById('searchKey').focus();
					}

				</script>


			</section>
		</article>
	</div>
</body>
</html>
