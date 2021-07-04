

<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<title>Sonemary</title>
    <link rel="stylesheet" href="styles.css">

    <script language = "javascript">

function div_OnOff(v,id1,id2,id3,id4,id5,id6,id7,id8,id9){
 // 라디오 버튼 value 값 조건 비교
 if(v == "1"){
  document.getElementById(id1).style.display = "block"; // 보여줌
  document.getElementById(id2).style.display = "none";
  document.getElementById(id3).style.display = "none";
  document.getElementById(id4).style.display = "none";
  document.getElementById(id5).style.display = "none";
  document.getElementById(id6).style.display = "none";
  document.getElementById(id7).style.display = "none";
  document.getElementById(id8).style.display = "none";
  document.getElementById(id9).style.display = "none";
 }
 if(v == "2"){
  document.getElementById(id2).style.display = "block"; // 보여줌
  document.getElementById(id1).style.display = "none";
  document.getElementById(id3).style.display = "none";
  document.getElementById(id4).style.display = "none";
  document.getElementById(id5).style.display = "none";
  document.getElementById(id6).style.display = "none";
  document.getElementById(id7).style.display = "none";
  document.getElementById(id8).style.display = "none";
  document.getElementById(id9).style.display = "none";
 }
 if(v == "3"){
  document.getElementById(id3).style.display = "block"; // 보여줌
  document.getElementById(id1).style.display = "none";
  document.getElementById(id2).style.display = "none";
  document.getElementById(id4).style.display = "none";
  document.getElementById(id5).style.display = "none";
  document.getElementById(id6).style.display = "none";
  document.getElementById(id7).style.display = "none";
  document.getElementById(id8).style.display = "none";
  document.getElementById(id9).style.display = "none";
 }
 if(v == "4"){
  document.getElementById(id4).style.display = "block"; // 보여줌
  document.getElementById(id1).style.display = "none";
  document.getElementById(id2).style.display = "none";
  document.getElementById(id3).style.display = "none";
  document.getElementById(id5).style.display = "none";
  document.getElementById(id6).style.display = "none";
  document.getElementById(id7).style.display = "none";
  document.getElementById(id8).style.display = "none";
  document.getElementById(id9).style.display = "none";
 }
 if(v == "5"){
  document.getElementById(id5).style.display = "block"; // 보여줌
  document.getElementById(id1).style.display = "none";
  document.getElementById(id2).style.display = "none";
  document.getElementById(id4).style.display = "none";
  document.getElementById(id3).style.display = "none";
  document.getElementById(id6).style.display = "none";
  document.getElementById(id7).style.display = "none";
  document.getElementById(id8).style.display = "none";
  document.getElementById(id9).style.display = "none";
 }
 if(v == "6"){
  document.getElementById(id6).style.display = "block"; // 보여줌
  document.getElementById(id1).style.display = "none";
  document.getElementById(id2).style.display = "none";
  document.getElementById(id4).style.display = "none";
  document.getElementById(id5).style.display = "none";
  document.getElementById(id3).style.display = "none";
  document.getElementById(id7).style.display = "none";
  document.getElementById(id8).style.display = "none";
  document.getElementById(id9).style.display = "none";
 }
 if(v == "7"){
  document.getElementById(id7).style.display = "block"; // 보여줌
  document.getElementById(id1).style.display = "none";
  document.getElementById(id2).style.display = "none";
  document.getElementById(id4).style.display = "none";
  document.getElementById(id5).style.display = "none";
  document.getElementById(id6).style.display = "none";
  document.getElementById(id3).style.display = "none";
  document.getElementById(id8).style.display = "none";
  document.getElementById(id9).style.display = "none";
 }
 if(v == "8"){
  document.getElementById(id8).style.display = "block"; // 보여줌
  document.getElementById(id1).style.display = "none";
  document.getElementById(id2).style.display = "none";
  document.getElementById(id4).style.display = "none";
  document.getElementById(id5).style.display = "none";
  document.getElementById(id6).style.display = "none";
  document.getElementById(id7).style.display = "none";
  document.getElementById(id3).style.display = "none";
  document.getElementById(id9).style.display = "none";
 }
 if(v == "9"){
  document.getElementById(id9).style.display = "block"; // 보여줌
  document.getElementById(id1).style.display = "none";
  document.getElementById(id2).style.display = "none";
  document.getElementById(id4).style.display = "none";
  document.getElementById(id5).style.display = "none";
  document.getElementById(id6).style.display = "none";
  document.getElementById(id7).style.display = "none";
  document.getElementById(id8).style.display = "none";
  document.getElementById(id3).style.display = "none";
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

		<article class="main-article">

				<header class="section1-header">
					<h2>Genre</h2>
                </header>
                <br>
                <div class="checkbox_box" style="width:100%; border:1px solid darkgray; border-radius: 2em; padding: 2%; ">

<input type="radio" style="padding-left: 17px;" name="genre" value="1" onclick="div_OnOff(this.value,'con1','con2','con3','con4','con5','con6','con7','con8','con9');" > Action &nbsp;&nbsp;&nbsp;
<input type="radio" style="padding-left: 17px;" name="genre" value="2" onclick="div_OnOff(this.value,'con1','con2','con3','con4','con5','con6','con7','con8','con9');"> Comedy &nbsp;&nbsp;&nbsp;
<input type="radio" style="padding-left: 17px;" name="genre" value="3" onclick="div_OnOff(this.value,'con1','con2','con3','con4','con5','con6','con7','con8','con9');"> SF &nbsp;&nbsp;&nbsp;
<input type="radio" style="padding-left: 17px;" name="genre" value="4" onclick="div_OnOff(this.value,'con1','con2','con3','con4','con5','con6','con7','con8','con9');"> Romance &nbsp;&nbsp;&nbsp;
<input type="radio" style="padding-left: 17px;" name="genre" value="5" onclick="div_OnOff(this.value,'con1','con2','con3','con4','con5','con6','con7','con8','con9');"> Musical &nbsp;&nbsp;&nbsp;
<input type="radio" style="padding-left: 17px;" name="genre" value="6" onclick="div_OnOff(this.value,'con1','con2','con3','con4','con5','con6','con7','con8','con9');"> Animation &nbsp;&nbsp;&nbsp;
<input type="radio" style="padding-left: 17px;" name="genre" value="7" onclick="div_OnOff(this.value,'con1','con2','con3','con4','con5','con6','con7','con8','con9');"> Family &nbsp;&nbsp;&nbsp;
<input type="radio" style="padding-left: 17px;" name="genre" value="8" onclick="div_OnOff(this.value,'con1','con2','con3','con4','con5','con6','con7','con8','con9');"> Adventure &nbsp;&nbsp;&nbsp;
<input type="radio" style="padding-left: 17px;" name="genre" value="9" onclick="div_OnOff(this.value,'con1','con2','con3','con4','con5','con6','con7','con8','con9');"> Fantasy &nbsp;&nbsp;&nbsp;




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
                <article class="main-article">
				<!-- 영화 목록 2 -->

                <div class="section7" id="con1" style="display:none">

					<div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[10]['page']?>">
								<img src="<?=$result[10]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info">
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

                    </div>


                    <div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[9]['page']?>">
								<img src="<?=$result[9]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[9]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[9]['genre']." | ".$result[9]['date']);?> <br />
										<?php print_r($result[9]['runtime']." | ".$result[9]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>

                    <div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[5]['page']?>">
								<img src="<?=$result[5]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[5]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[5]['genre']." | ".$result[9]['date']);?> <br />
										<?php print_r($result[5]['runtime']." | ".$result[9]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>



                </div>

                <div class="section7" id="con2" style="display:none">

					<div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[7]['page']?>">
								<img src="<?=$result[7]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[7]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[7]['genre']." | ".$result[7]['date']);?> <br />
										<?php print_r($result[7]['runtime']." | ".$result[7]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>

                    <div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[6]['page']?>">
								<img src="<?=$result[6]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[6]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[6]['genre']." | ".$result[6]['date']);?> <br />
										<?php print_r($result[6]['runtime']." | ".$result[6]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>


                </div>

                <div class="section7" id="con3" style="display:none">

					<div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[5]['page']?>">
								<img src="<?=$result[5]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[5]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[5]['genre']." | ".$result[5]['date']);?> <br />
										<?php print_r($result[5]['runtime']." | ".$result[5]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>

                    <div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[4]['page']?>">
								<img src="<?=$result[4]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[4]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[4]['genre']." | ".$result[4]['date']);?> <br />
										<?php print_r($result[4]['runtime']." | ".$result[4]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>

                    <div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[9]['page']?>">
								<img src="<?=$result[9]['poster']?>"/>
							</a>
						</div>

                        <div class="section7-info">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[9]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[9]['genre']." | ".$result[9]['date']);?> <br />
										<?php print_r($result[9]['runtime']." | ".$result[9]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>

                    <div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[8]['page']?>">
								<img src="<?=$result[8]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[8]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[8]['genre']." | ".$result[8]['date']);?> <br />
										<?php print_r($result[8]['runtime']." | ".$result[8]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>


                </div>

                <div class="section7" id="con2" style="display:none">

					<div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[7]['page']?>">
								<img src="<?=$result[7]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[7]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[7]['genre']." | ".$result[7]['date']);?> <br />
										<?php print_r($result[7]['runtime']." | ".$result[7]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>

                    <div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[6]['page']?>">
								<img src="<?=$result[6]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[6]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[6]['genre']." | ".$result[6]['date']);?> <br />
										<?php print_r($result[6]['runtime']." | ".$result[6]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>


                </div>

                <div class="section7" id="con4" style="display:none">

					<div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[2]['page']?>">
								<img src="<?=$result[2]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[2]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[2]['genre']." | ".$result[2]['date']);?> <br />
										<?php print_r($result[2]['runtime']." | ".$result[2]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>

                    <div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[1]['page']?>">
								<img src="<?=$result[1]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[1]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[1]['genre']." | ".$result[1]['date']);?> <br />
										<?php print_r($result[1]['runtime']." | ".$result[1]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>



                </div>

                <div class="section7" id="con5" style="display:none">

					<div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[1]['page']?>">
								<img src="<?=$result[1]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[1]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[1]['genre']." | ".$result[1]['date']);?> <br />
										<?php print_r($result[1]['runtime']." | ".$result[1]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>

                    <div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[6]['page']?>">
								<img src="<?=$result[6]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[6]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[6]['genre']." | ".$result[6]['date']);?> <br />
										<?php print_r($result[6]['runtime']." | ".$result[6]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>

                    <div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[10]['page']?>">
								<img src="<?=$result[10]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info">
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

                    </div>


                </div>

                <div class="section7" id="con6" style="display:none">

					<div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[2]['page']?>">
								<img src="<?=$result[2]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[2]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[2]['genre']." | ".$result[2]['date']);?> <br />
										<?php print_r($result[2]['runtime']." | ".$result[2]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>

                    <div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[6]['page']?>">
								<img src="<?=$result[6]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[6]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[6]['genre']." | ".$result[6]['date']);?> <br />
										<?php print_r($result[6]['runtime']." | ".$result[6]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>

                    <div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[7]['page']?>">
								<img src="<?=$result[7]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[7]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[7]['genre']." | ".$result[7]['date']);?> <br />
										<?php print_r($result[7]['runtime']." | ".$result[7]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>


                </div>

                <div class="section7" id="con7" style="display:none">

                    <div class="section7-contents" >
						<div class="section7-img">
							<a href="<?=$result[10]['page']?>">
								<img src="<?=$result[10]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info" >
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

                    </div>

					<div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[7]['page']?>">
								<img src="<?=$result[7]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[7]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[7]['genre']." | ".$result[7]['date']);?> <br />
										<?php print_r($result[7]['runtime']." | ".$result[7]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>

                    <div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[3]['page']?>">
								<img src="<?=$result[3]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info" >
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[3]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[3]['genre']." | ".$result[3]['date']);?> <br />
										<?php print_r($result[3]['runtime']." | ".$result[3]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>

                    <div class="section7-contents" >
						<div class="section7-img">
							<a href="<?=$result[1]['page']?>">
								<img src="<?=$result[1]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info" >
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[1]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[1]['genre']." | ".$result[1]['date']);?> <br />
										<?php print_r($result[1]['runtime']." | ".$result[1]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>


                </div>

                <div class="section7" id="con8" style="display:none">

                    <div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[10]['page']?>">
								<img src="<?=$result[10]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info" >
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

                    </div>

					<div class="section7-contents" >
						<div class="section7-img">
							<a href="<?=$result[7]['page']?>">
								<img src="<?=$result[7]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[7]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[7]['genre']." | ".$result[7]['date']);?> <br />
										<?php print_r($result[7]['runtime']." | ".$result[7]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>

                    <div class="section7-contents" >
						<div class="section7-img">
							<a href="<?=$result[4]['page']?>">
								<img src="<?=$result[4]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info">
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[4]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[4]['genre']." | ".$result[4]['date']);?> <br />
										<?php print_r($result[4]['runtime']." | ".$result[4]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>

                    <div class="section7-contents" >
						<div class="section7-img">
							<a href="<?=$result[5]['page']?>">
								<img src="<?=$result[5]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info" >
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[5]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[5]['genre']." | ".$result[5]['date']);?> <br />
										<?php print_r($result[5]['runtime']." | ".$result[5]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>


                </div>

                <div class="section7" id="con9" style="display:none">

                    <div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[10]['page']?>">
								<img src="<?=$result[10]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info" >
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

                    </div>

					<div class="section7-contents" >
						<div class="section7-img">
							<a href="<?=$result[6]['page']?>">
								<img src="<?=$result[6]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info" >
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[6]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[6]['genre']." | ".$result[6]['date']);?> <br />
										<?php print_r($result[6]['runtime']." | ".$result[6]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>

                    <div class="section7-contents">
						<div class="section7-img">
							<a href="<?=$result[4]['page']?>">
								<img src="<?=$result[4]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info" >
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[4]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[4]['genre']." | ".$result[4]['date']);?> <br />
										<?php print_r($result[4]['runtime']." | ".$result[4]['R']);?></p>
								</div>
								<div class="info-badge">
									<img src="image/badge_highcritic.png" />
							</div>
						</div>

                    </div>

                    <div class="section7-contents" >
						<div class="section7-img">
							<a href="<?=$result[3]['page']?>">
								<img src="<?=$result[3]['poster']?>"/>
							</a>
						</div>

						<div class="section7-info" >
								<div class="title" style="font-size: 18px; font-weight: bold;">
									<?php print_r($result[3]['title']);?>
								</div>
								<div class="info-details">
									<p><?php print_r($result[3]['genre']." | ".$result[3]['date']);?> <br />
										<?php print_r($result[3]['runtime']." | ".$result[3]['R']);?></p>
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
