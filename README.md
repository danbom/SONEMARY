## :clapper: SONEMARY
### SONEMARY : 2020년도 오픈소프트웨어플랫폼 프로젝트
A New Movie Review Site that has changed its serialized evaluation method
, unlike existing sites that always evaluate movies with 5 stars.</br></br>
:link: SONEMARY Link (링크)


------

### CONTENTS

1. Introduction about SONEMARY
2. DB design and structure
3. FrontEnd
4. Page Control
5. About US

------



## 1. Introduction about SONEMARY

:link: SONEMARY Link (링크)</br></br>

### 1. Short description of SONEMARY.

:+1: 6 Evaluation Item</br>
:star: 10 Full score</br>
:crown: 8+ Recommended badge</br>

### 2. Originality of SONEMARY.

#### 1. six Diverse evaluation items

:books: Story/Screenplay</br>
:musical_note: Sound & Music</br>
:art: Visual Design</br>
:busts_in_silhouette: Acting</br>
:heartpulse: Emotional Impact</br>
:speech_balloon: Message Effectiveness</br>


#### 2. eight Diverse badge

   If the movie has more than 10 reviews and has a rating of 7 or more on a specific evaluation item, the Evaluation Badge will be awarded. Other than that, there are high critic score badges, many reviews badges.


#### 3. Visualized generic user score and critic score

   The average score of Critics for each evaluation item and the average score of General users can be Separated.
Within one hexagon, you can compare the scores of professionals with those of ordinary users. 


------
##  2. DB design and structure
```
CREATE TABLE `movies` (
  `movie_id` int(3) NOT NULL COMMENT '영화 번호',
  `title` varchar(50) DEFAULT NULL COMMENT '제목',
  `date` date DEFAULT NULL COMMENT '개봉일',
  `genre` varchar(30) DEFAULT NULL COMMENT '장르',
  `director` varchar(20) DEFAULT NULL COMMENT '감독',
  `cast` varchar(50) DEFAULT NULL COMMENT '캐스팅',
  `poster` varchar(50) DEFAULT NULL COMMENT '포스터 이미지 경로',
  `page` varchar(30) DEFAULT NULL COMMENT '상세 페이지 경로',
  `badge` enum('Story','Music','Visual','Acting','Message','Emotion','Creativity','Popularity') DEFAULT NULL COMMENT '뱃지',
  `runtime` varchar(10) DEFAULT NULL,
  `R` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```
```
CREATE TABLE `review` (
  `index` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `critic` varchar(10) NOT NULL,
  `rank_1` int(11) NOT NULL,
  `rank_2` int(11) NOT NULL,
  `rank_3` int(11) NOT NULL,
  `rank_4` int(11) NOT NULL,
  `rank_5` int(11) NOT NULL,
  `rank_6` int(11) NOT NULL,
  `review` text NOT NULL,
  `regdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

------

## 5. About US

### 1. Roles

- Eunyoung (danbom)
  - 이화여자대학교 컴퓨터공학과 1871017
- Sunwoo (mallang7)
  - 이화여자대학교 컴퓨터공학과 1871006
- MinA ()
  - 이화여자대학교 컴퓨터공학과 1971005
- Seoyoung (dltjdud808)
  - 이화여자대학교 컴퓨터공학과 1971033

### 2. Branches
![image](https://user-images.githubusercontent.com/52441697/102416265-d58dfd80-403c-11eb-803d-1ec7ef49adbb.png)
![image](https://user-images.githubusercontent.com/52441697/102416265-d58dfd80-403c-11eb-803d-1ec7ef49adbb.png)
