

<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<title>Sonemary</title>
    <link rel="stylesheet" href="styles.css">

    <script language = "javascript">

function div_OnOff(v,id1,id2,id3){
 // 라디오 버튼 value 값 조건 비교
 if(v == "1"){
  document.getElementById(id1).style.display = "block"; // 보여줌
  document.getElementById(id2).style.display = "none";
  document.getElementById(id3).style.display = "none";
 }
 if(v == "2"){
  document.getElementById(id2).style.display = "block"; // 보여줌
  document.getElementById(id1).style.display = "none";
  document.getElementById(id3).style.display = "none";
 }
 if(v == "3"){
  document.getElementById(id3).style.display = "block"; // 보여줌
  document.getElementById(id1).style.display = "none";
  document.getElementById(id2).style.display = "none";
 }


}


</script>

</head>

<body>







	<div id="app">

		<header id="main-header">
			<div id="logo">
				<a href="main_page.php"><img src="image/SONEMARY.png"></a>
			</div>
			<div id="username">
				<?php
				session_start();
				if(!isset($_SESSION['user_id'])) {
					echo "<a href=login.html>LOGIN</a>";
				}
				else {
					echo "<a href=my_page.html>MY</a>";
					echo " | ";
					echo "<a href=logout.php>LOGOUT</a>";
				}
				 ?>
      </div>
				<nav>
					<ul id="menu-list">
						<li><a href="genre.php" id="ami"> Genre </a></li>
						<li><a href="top10.php" id="ami"> Top10 </a></li>
						<li><a href="new.php" id="ami"> New </a></li>
					</ul>
				</nav>

				<form id="search" onClick="location.href='search_page.php'">
					<input type="text" id="searchKey" name="searchKey" placeholder="search...">
	        <button type="submit" id="searchBtn"><img src="image/loupe.png"></button>
				</form>
		</header>

		<article class="main-article" style="padding-bottom: 15%;">

				<header class="section1-header">
					<h2>Genre</h2>
                </header>
                <br>
                <div class="checkbox_box" style="width:100%; border:1px solid darkgray; border-radius: 2em; padding: 2%; ">

<input type="radio" style="padding-left: 17px;" name="genre" value="1" onclick="div_OnOff(this.value,'con1','con2','con3');" > Drama &nbsp;&nbsp;&nbsp;
<input type="radio" style="padding-left: 17px;" name="genre" value="2" onclick="div_OnOff(this.value,'con1','con2','con3');"> Comedy &nbsp;&nbsp;&nbsp;
<input type="radio" style="padding-left: 17px;" name="genre" value="3" onclick="div_OnOff(this.value,'con1','con2','con3');"> SF &nbsp;&nbsp;&nbsp;
<input type="radio" style="padding-left: 17px;" name="genre" value="4" onclick="div_OnOff(this.value,'con1','con2','con3');"> Romance &nbsp;&nbsp;&nbsp;
<input type="radio" style="padding-left: 17px;" name="genre" value="5" onclick="div_OnOff(this.value,'con1','con2');"> Musical &nbsp;&nbsp;&nbsp;
<input type="radio" style="padding-left: 17px;" name="genre" value="6" onclick="div_OnOff(this.value,'con1','con2');"> Animation &nbsp;&nbsp;&nbsp;
<input type="radio" style="padding-left: 17px;" name="genre" value="7" onclick="div_OnOff(this.value,'con1','con2');"> Family &nbsp;&nbsp;&nbsp;
<input type="radio" style="padding-left: 17px;" name="genre" value="8" onclick="div_OnOff(this.value,'con1','con2');"> Adventure &nbsp;&nbsp;&nbsp;
<input type="radio" style="padding-left: 17px;" name="genre" value="9" onclick="div_OnOff(this.value,'con1','con2');"> Fantasy &nbsp;&nbsp;&nbsp;




                    </div>
                </div>


                <?php
    include "lib.php";
    $con=mysqli_connect("localhost","root","ming0","sonemary");
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
                <br><br>
                <article class="main-article" style="padding-bottom: 15%;">
				<!-- 영화 목록 2 -->

                <div class="section7" id="con1" style="display:none">

					<div class="section7-contents" style="padding-bottom:10%">
						<div class="section7-img">
							<a href="<?=$result[10]['page']?>">
								<img src="<?=$result[10]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info" style="padding-bottom:10%">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[10]['title']);?>
								</div>
								<div class="info-details">
									<p style="padding-bottom:10% margin-bottom:10%"><?php print_r($result[10]['genre']." | ".$result[10]['date']);?> <br />
										<?php print_r($result[10]['runtime']." | ".$result[10]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

					</div>
                </div>

                <div class="section7" id="con2" style="display:none">

					<div class="section7-contents" style="padding-bottom:10%">
						<div class="section7-img">
							<a href="<?=$result[10]['page']?>">
								<img src="<?=$result[10]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info" style="padding-bottom:10%">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[10]['title']);?>
								</div>
								<div class="info-details">
									<p style="padding-bottom:10% margin-bottom:10%"><?php print_r($result[10]['genre']." | ".$result[10]['date']);?> <br />
										<?php print_r($result[10]['runtime']." | ".$result[10]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>

                    <div class="section7-contents" style="padding-bottom:10%">
						<div class="section7-img">
							<a href="<?=$result[10]['page']?>">
								<img src="<?=$result[10]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info" style="padding-bottom:10%">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[10]['title']);?>
								</div>
								<div class="info-details">
									<p style="padding-bottom:10% margin-bottom:10%"><?php print_r($result[10]['genre']." | ".$result[10]['date']);?> <br />
										<?php print_r($result[10]['runtime']." | ".$result[10]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>


                </div>

                <div class="section7" id="con3" style="display:none">

					<div class="section7-contents" style="padding-bottom:10%">
						<div class="section7-img">
							<a href="<?=$result[10]['page']?>">
								<img src="<?=$result[10]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info" style="padding-bottom:10%">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[10]['title']);?>
								</div>
								<div class="info-details">
									<p style="padding-bottom:10% margin-bottom:10%"><?php print_r($result[10]['genre']." | ".$result[10]['date']);?> <br />
										<?php print_r($result[10]['runtime']." | ".$result[10]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>

                    <div class="section7-contents" style="padding-bottom:10%">
						<div class="section7-img">
							<a href="<?=$result[10]['page']?>">
								<img src="<?=$result[10]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info" style="padding-bottom:10%">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[10]['title']);?>
								</div>
								<div class="info-details">
									<p style="padding-bottom:10% margin-bottom:10%"><?php print_r($result[10]['genre']." | ".$result[10]['date']);?> <br />
										<?php print_r($result[10]['runtime']." | ".$result[10]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>

                    <div class="section7-contents" style="padding-bottom:10%">
						<div class="section7-img">
							<a href="<?=$result[10]['page']?>">
								<img src="<?=$result[10]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info" style="padding-bottom:10%">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[10]['title']);?>
								</div>
								<div class="info-details">
									<p style="padding-bottom:10% margin-bottom:10%"><?php print_r($result[10]['genre']." | ".$result[10]['date']);?> <br />
										<?php print_r($result[10]['runtime']." | ".$result[10]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
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
      CONTECT<br><br>
      DEVELPED BY<br><br>
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
