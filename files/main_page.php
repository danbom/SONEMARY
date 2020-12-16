<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Sonemary main page" />
    <meta name="keywords" content="HTML5, CSS3, JavaScript" />
    <title>Main Page</title>
    <link rel="stylesheet" href="styles.css" />
  </head>

  <body>
    <div id="app">
      <header id="main-header">
        <div id="logo">
          <a href="main_page.php"><img src="image/SONEMARY.png" /></a>
        </div>
        <div id="username">
          <a href="my_page.html">
            Welcome, USER
            <img src="image/profile-user.png"/>
          </a>
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
    </div>

    <!--<div class="main_preview">
        <img class="slide-image" src="image/movie_spiderman_1.png" style="width: 400px; height:auto;"/>
        <img class="slide-image" src="image/movie_spiderman_2.png" style="width: 400px; height:auto;"/>
        <img class="slide-image" src="image/movie_spiderman_3.png" style="width: 400px; height:auto;"/>
        <img class="slide-image" src="image/movie_spiderman_4.png" style="width: 400px; height:auto;"/>
    </div>-->

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

    <br>
    <div class="main_preview">
      <div class="preview_box" style="display: flex; background-color: black; width: 100%;">
        <div class="left_box" style="float:left; width:50%; background-color: black;">
          <img class="slide-image" src="image/movie_spiderman_1.png" style="object-position: 5px;
        margin-top: 5%;
        margin-bottom: 5%;
        padding: 5%;
        padding-left: 20%;
        width: 90%;
        height:auto;"/>
        <img class="slide-image" src="image/movie_spiderman_2.png" style="object-position: 5px;
        margin-top: 5%;
        margin-bottom: 5%;
        padding: 5%;
        padding-left: 20%;
        width: 90%;
        height:auto;"/>
        <img class="slide-image" src="image/movie_spiderman_3.png" style="object-position: 5px;
        margin-top: 5%;
        margin-bottom: 5%;
        padding: 5%;
        padding-left: 20%;
        width: 90%;
        height:auto;"/>
        </div>
        <div class="right_box" style="float:left; width:50%; background-color: black; color: white;
        padding-top: 4%; padding-left : 5%; padding-right : 7%;"><a href="<?=$result[3]['page']?>">
          <h1 id="rightbox-text" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 35px;">Spider-Man: Homecoming
            <br></h1>
            <h2 id="rightbox-text" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 20px;"><br>Marvel Heroes' Generation Change!
            "Do you take tests to be Avengers?"
            </h2>
          <br><br><h3 id="rightbox-text" style="font-size: 13px;">Peter Parker" (Tom Holland) was selected by Tony Stark (Robert Downey Jr.) during the "Civil War." Tony Stark, who presented him with a new suit, advises him not to do anything dangerous. But Peter Parker, united in bluffing and justice, is trying to confront the powerful enemy, the Vulture, that threatens the world.</h3>
        </div>
      </a>
      </div>

  </div>

    <article class="main-article" style="padding-bottom: 15%;">
      <article class="Action Movies" style="display: grid;">
        <header class="section1-header" style="margin-top:5%;">
          <a href="genre.html">
            <h2 class="section1-header">All Movies</h2>
          </a>

        </header>
        <div class="section1-header-btn" style="margin-left: auto; padding : 2%;">
          <a href="genre.html" id="ami"> View more </a>
        </div>

        <!-- 영화 목록 1 -->
        <div class="section6">
          <section class="section6-contents">
            <div class="section6-img">
              <a href="<?=$result[0]['page']?>">
                <img src="<?=$result[0]['poster']?>"/>
              </a>
            </div>
            <div class="section6-info">
              <h4 class="info-title"> <?php print_r($result[0]['title']);?> </h4>
              <div class="section6-score">
                <p> Acting </p>
                <p class="score-color" style="color: #6c63ff;"> 7.5 </p>
              </div>


            </div>
          </section>

          <section class="section6-contents">
            <div class="section6-img">
              <a href="<?=$result[1]['page']?>">
                <img src="<?=$result[1]['poster']?>"/>
              </a>
            </div>
            <div class="section6-info">
              <h4 class="info-title"> <?php print_r($result[1]['title']);?> </h4>
              <div class="section6-score">
                <p> Acting </p>
                <p class="score-color"> 8.0 </p>
              </div>
            </div>
          </section>

          <section class="section6-contents">
            <div class="section6-img">
              <a href="<?=$result[2]['page']?>">
                <img src="<?=$result[2]['poster']?>"/>
              </a>
            </div>
            <div class="section6-info">
              <h4 class="info-title"> <?php print_r($result[2]['title']);?> </h4>
              <div class="section6-score">
                <p> Acting </p>
                <p class="score-color"> 7.5 </p>
              </div>

            </div>
          </section>

          <section class="section6-contents">
            <div class="section6-img">
              <a href="<?=$result[3]['page']?>">
                <img src="<?=$result[3]['poster']?>"/>
              </a>
            </div>
            <div class="section6-info">
              <h4 class="info-title"> <?php print_r($result[3]['title']);?> </h4>
              <div class="section6-score">
                <p> Acting </p>
                <p class="score-color"> 8.0 </p>
              </div>
            </div>
          </section>

          <section class="section6-contents">
            <div class="section6-img">
              <a href="<?=$result[4]['page']?>">
                <img src="<?=$result[4]['poster']?>"/>
              </a>
            </div>
            <div class="section6-info">
              <h4 class="info-title"> <?php print_r($result[4]['title']);?> </h4>
              <div class="section6-score">
                <p> Acting </p>
                <p class="score-color"> 7.5 </p>
              </div>

            </div>
          </section>

          <section class="section6-contents">
            <div class="section6-img">
              <a href="<?=$result[5]['page']?>">
                <img src="<?=$result[5]['poster']?>"/>
              </a>
            </div>
            <div class="section6-info">
              <h4 class="info-title"> <?php print_r($result[5]['title']);?> </h4>
              <div class="section6-score">
                <p> Acting </p>
                <p class="score-color"> 7.5 </p>
              </div>


            </div>
          </section>

          <section class="section6-contents">
            <div class="section6-img">
              <a href="<?=$result[6]['page']?>">
                <img src="<?=$result[6]['poster']?>"/>
              </a>
            </div>
            <div class="section6-info">
              <h4 class="info-title"> <?php print_r($result[6]['title']);?> </h4>
              <div class="section6-score">
                <p> Acting </p>
                <p class="score-color"> 7.5 </p>
              </div>

            </div>
          </section>

          <section class="section6-contents">
            <div class="section6-img">
              <a href="<?=$result[7]['page']?>">
                <img src="<?=$result[7]['poster']?>"/>
              </a>
            </div>
            <div class="section6-info">
              <h4 class="info-title"> <?php print_r($result[7]['title']);?> </h4>
              <div class="section6-score">
                <p> Acting </p>
                <p class="score-color"> 7.5 </p>
              </div>

            </div>
          </section>

          <section class="section6-contents">
            <div class="section6-img">
              <a href="<?=$result[8]['page']?>">
                <img src="<?=$result[8]['poster']?>"/>
              </a>
            </div>
            <div class="section6-info">
              <h4 class="info-title"> <?php print_r($result[8]['title']);?> </h4>
              <div class="section6-score">
                <p> Acting </p>
                <p class="score-color"> 7.5 </p>
              </div>

            </div>
          </section>

          <section class="section6-contents">
            <div class="section6-img">
              <a href="<?=$result[9]['page']?>">
                <img src="<?=$result[9]['poster']?>"/>
              </a>
            </div>
            <div class="section6-info">
              <h4 class="info-title"> <?php print_r($result[9]['title']);?> </h4>
              <div class="section6-score">
                <p> Acting </p>
                <p class="score-color"> 7.5 </p>
              </div>

            </div>
          </section>

          <section class="section6-contents">
            <div class="section6-img">
              <a href="<?=$result[10]['page']?>">
                <img src="<?=$result[10]['poster']?>"/>
              </a>
            </div>
            <div class="section6-info">
              <h4 class="info-title"> <?php print_r($result[10]['title']);?> </h4>
              <div class="section6-score">
                <p> Acting </p>
                <p class="score-color"> 7.5 </p>
              </div>

            </div>
          </section>
        </div>
      </article>

      <article class="New Movies" style="display: grid; float:left;">
        <header class="section1-header"  style="margin-top:5%;">
          <a href="new.html"><h2 class="section1-header">New Movies</h2></a>

        </header>
        <div class="section1-header-btn" style="margin-left: auto; padding : 2%;">
          <a href="new.html" id="ami"> View more </a>
        </div>

        <!-- 영화 목록 1 한번더 -->
        <div class="section6">
          <section class="section6-contents">
            <div class="section6-img">
              <a href="<?=$result[8]['page']?>">
                <img src="<?=$result[8]['poster']?>"/>
              </a>
            </div>
            <div class="section6-info">
              <h4 class="info-title"> <?php print_r($result[8]['title']);?> </h4>
              <div class="section6-score">
                <p> Acting </p>
                <p class="score-color" style="color: #6c63ff;"> 7.5 </p>
              </div>
            </div>
          </section>
          <section class="section6-contents">
            <div class="section6-img">
              <a href="<?=$result[5]['page']?>">
                <img src="<?=$result[5]['poster']?>"/>
              </a>
            </div>
            <div class="section6-info">
              <h4 class="info-title"> <?php print_r($result[5]['title']);?> </h4>
              <div class="section6-score">
                <p> Acting </p>
                <p class="score-color" style="color: #6c63ff;"> 7.5 </p>
              </div>
            </div>
          </section>
          <section class="section6-contents">
            <div class="section6-img">
              <a href="<?=$result[9]['page']?>">
                <img src="<?=$result[9]['poster']?>"/>
              </a>
            </div>
            <div class="section6-info">
              <h4 class="info-title"> <?php print_r($result[9]['title']);?> </h4>
              <div class="section6-score">
                <p> Acting </p>
                <p class="score-color" style="color: #6c63ff;"> 7.5 </p>
              </div>
            </div>
          </section>
          <section class="section6-contents">
            <div class="section6-img">
              <a href="<?=$result[10]['page']?>">
                <img src="<?=$result[10]['poster']?>"/>
              </a>
            </div>
            <div class="section6-info">
              <h4 class="info-title"> <?php print_r($result[10]['title']);?> </h4>
              <div class="section6-score">
                <p> Acting </p>
                <p class="score-color" style="color: #6c63ff;"> 7.5 </p>
              </div>
            </div>
          </section>

        </div>
      </article>

      <article class="New Movies">
        <header class="section1-header"  style="margin-top:5%;">
          <h2>New Movies</h2>
        </header>
        <br><br>
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

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script type="text/javascript" src="main_script.js"></script>
    <script type="text/javascript" src="hexChart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  </body>
</html>
