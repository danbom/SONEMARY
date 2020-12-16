

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
						<li><a href="top10.php" id="ami"> Top10 </a></li>
						<li><a href="new.php" id="ami"> New </a></li>
					</ul>
				</nav>
				<form id="search" onClick="location.href='search_page.php'">
					<input type="text" id="searchKey" name="searchKey" placeholder="search...">
	        <button type="submit" id="searchBtn"><img src="image/loupe.png"></button>
				</form>
		</header>
		<?php
    include "lib.php";
    $con=mysqli_connect("localhost","root","","sonemary");
    mysqli_set_charset($con,"utf8");
    $res = mysqli_query($con, "select * from movies");
    $result = array();
    while($row = mysqli_fetch_array($res)) {
     array_push($result, array('movie_id'=>$row[0],'title'=>$row[1],'date'=>$row[2],
     'genre'=>$row[3],'director'=>$row[4],'cast'=>$row[5],'poster'=>$row[6],
     'page'=>$row[7],'badge'=>$row[8],'runtime'=>$row[9],'R'=>$row[10]));
    }
    mysqli_close($con);
    ?>

		<article class="main-article" style="padding-bottom: 15%;">

				<header class="section1-header">
					<h2>New</h2>
                </header>
                <br>

				<!-- 영화 목록 2 -->
				<div class="section7">
					<div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[8]['page']?>">
								<img src="<?=$result[8]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info" style="border: 1px dotted red;">
							<div style="border: 1px dotted red;">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[8]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[8]['genre']." | ".$result[8]['date']);?> <br />
									<?php print_r($result[8]['runtime']." | ".$result[8]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_impact.png" />
								</div>
							</div>
							<div class="info-review" style="border: 1px dotted red;">
								<a href="review_page.html"> Write your Review </a>
							</div>
						</div>

						<div class="section7-score">
							<div class="graph">
								<canvas id="myChart" style="width:200px; height:200px;"></canvas>
							</div>
						</div>

					</div>

					<div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[5]['page']?>">
								<img src="<?=$result[5]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info" style="border: 1px dotted red;">
							<div style="border: 1px dotted red;">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[5]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[5]['genre']." | ".$result[5]['date']);?> <br />
										<?php print_r($result[5]['runtime']." | ".$result[5]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_manyreview.png" />
								</div>
							</div>
							<div class="info-review">
								<a href="review_page.html"> Write your Review </a>
							</div>
						</div>

						<div class="section7-score">
							<div class="graph">
								<canvas class="myChart1" style="width:200px; height:200px;"></canvas>
							</div>
						</div>
					</div>

					<div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[9]['page']?>">
								<img src="<?=$result[9]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info" style="border: 1px dotted red;">
							<div style="border: 1px dotted red;">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[9]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[9]['genre']." | ".$result[9]['date']);?> <br />
										<?php print_r($result[9]['runtime']." | ".$result[9]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_acting.png" />
								</div>
							</div>
							<div class="info-review">
								<a href="review_page.html"> Write your Review </a>
							</div>
						</div>

						<div class="section7-score">
							<div class="graph">
								<canvas class="myChart1" style="width:200px; height:200px;"></canvas>
							</div>
						</div>
					</div>

					<div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[10]['page']?>">
								<img src="<?=$result[10]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info" style="border: 1px dotted red;">
							<div style="border: 1px dotted red;">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[10]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[10]['genre']." | ".$result[10]['date']);?> <br />
										<?php print_r($result[10]['runtime']." | ".$result[10]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
								</div>
							</div>
							<div class="info-review">
								<a href="review_page.html"> Write your Review </a>
							</div>
						</div>

						<div class="section7-score">
							<div class="graph">
								<canvas id="myChart3" style="width:200px; height:200px;"></canvas>
							</div>
						</div>
					</div>
				</div>


			</article>
    </article>

    <br>
    <div class="footer">
      <div class="footer_box" style="display: flex; background-color: black; color: white; width: 100%; text-align: left; vertical-align: middle; padding-top:5%; padding-bottom:5%; padding-left:5%">
        <div class="left_box" style="float:left; width:50%; background-color: black; color: white;">
          <h3>SONEMARY<br></h3>
          <h4>2020 Open Software Platform Team8</h4>
        </div>
        <div class="center_box" style="float:left; width:50%; background-color: black; color: white;">
          SITE<br><br>
          <h4 id="site-define">Main<br></h4>
          <h4 id="site-define">Genre<br></h4>
          <h4 id="site-define">Top10<br></h4>
          <h4 id="site-define">New<br></h4>
          <h4 id="site-define">My<br></h4>
        </div>
        <div class="right_box" style="float:left; width:50%; background-color: black; color: white;">
      CONTACT<br><br>
      DEVELOPED BY<br><br>
      <h4 id="site-define">
        Eunyoung (danbom)<br>
        Sunwoo (mallang7)<br>
        MinA (Ming)<br>
        Seoyoung (dltjdud808)
      </h4>
      </div>
      </div>
  </div>
	</div>
</body>
</html>
