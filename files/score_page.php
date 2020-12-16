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

      <article class="main-article">

         <header class="section1-header">
            <h1>Write your Review</h1>
         </header>

         <article class="sectoin1-contents">
            <div class="section1-info" style="float: left;">
               <div class="info-title" style="font-weight: bold">
                  Spider-Man: Homecoming
               </div>
               <div class="info-details">
                  Action, Adventure, SF | USA | 2017.07.05 <br>2 h 13 m | R12
               </div>
               <section class="visualize-gallery">
                  <img class="slide-image" src="image/score_user.png">
                  <img class="slide-image" src="image/score_critic.png">
                  <img class="slide-image" src="image/score_comparison.png">

                  <a class="slide-btn prev" style="top: 100%;" onclick="plusDivs(-1)">❮</a>
                  <a class="slide-btn next" style="top: 100%;" onclick="plusDivs(1)">❯</a>
               </section>
            </div>
            <div class="section1-img" style="float: right;">
                  <img src="image/movie_spiderman_0.png">
            </div>
         </article>


      <article class="review">
        <header class="section1-header" style="margin: 80px 0px;">
               <h2>Review</h2>
          <div class="section1-header-btn">
                  <a href="./review_page.php">Write your Review</a>
               </div>
            </header>


<?
$query="SELECT * FROM review order by regdate desc";
$result=mysqli_query($connect,$query);

while($data=mysqli_fetch_array($result)){
?>
<section class="section2-contents">
      <div class="section2-img profile">
         <img src="image/profile-user.png">
      </div>
      <div class="section2-info">
         <div class="info-main"><?=$data[user_id]?><?=substr($data[regdate],0,10)?></div>
         <div class="info-sub"><?=$data[review]?></div>
         <div>
            <ul class="info-scores">
               <li>Story <p><?=$data[rank1]?></p> </li>
               <li>Acting <p><?=$data[rank2]?></p> </li>
               <li>Music <p><?=$data[rank3]?></p> </li>
               <li>Emotion <p><?=$data[rank4]?></p> </li>
               <li>Visual <p><?=$data[rank5]?></p> </li>
               <li>Message <p><?=$data[rank6]?></p> </li>
            </ul>
         </div>
      </div>
</section>




<?
}

?>
