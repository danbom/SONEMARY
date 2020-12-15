-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 20-12-15 19:45
-- 서버 버전: 10.4.17-MariaDB
-- PHP 버전: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `sonemary`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(3) NOT NULL COMMENT '영화 번호',
  `title` varchar(50) DEFAULT NULL COMMENT '제목',
  `date` date DEFAULT NULL COMMENT '개봉일',
  `genre` varchar(30) DEFAULT NULL COMMENT '장르',
  `director` varchar(20) DEFAULT NULL COMMENT '감독',
  `cast` varchar(50) DEFAULT NULL COMMENT '캐스팅',
  `poster` varchar(50) DEFAULT NULL COMMENT '포스터 이미지 경로',
  `page` varchar(30) DEFAULT NULL COMMENT '상세 페이지 경로',
  `badge` enum('Story','Music','Visual','Acting','Message','Emotion','Creativity','Popularity') DEFAULT NULL COMMENT '뱃지'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `date`, `genre`, `director`, `cast`, `poster`, `page`, `badge`) VALUES
(1, 'The Sound of Music', '1978-02-04', 'Romance, Drama, Musical', 'Robert Wise', 'Julie Andrews, Christopher Plummer', 'image/poster_TheSoundofMusic.png', NULL, NULL),
(2, 'Titanic', '1998-02-20', 'Romance, Drama', 'James Cameron', 'Leonardo DiCaprio, Kate Winslet', 'image/poster_Titanic.png', NULL, NULL),
(3, 'E.T. - The Extra Terrestrial', '1984-06-23', 'Family, Fantasy', 'Steven Spielberg', 'Henry Thomas, Robert MacNaughton', 'image/poster_et.png', NULL, NULL),
(4, 'Spider-Man: Homecoming', '2017-07-05', 'Action, Adventure, Fantasy', 'Jon Watts', 'Tom Holland, Robert Downey Jr.', 'image/poster_SpiderMan.png', NULL, NULL),
(5, 'Avatar', '2009-12-17', 'Action, Adventure, SF', 'James Cameron', 'Sam Worthington, Zoe Saldana', 'image/poster_Avatar.png', NULL, NULL),
(6, 'Frozen II', '2019-11-21', 'Animation, Adventure, Comedy', 'Chris Buck', 'Kristen Bell, Idina Menzel', 'image/poster_Frozen.png', NULL, NULL),
(7, 'Minions', '2015-07-29', 'Animation, Comedy, Family', 'Pierre Coffin', 'Sandra Bullock, Jon Hamm', 'image/poster_Minions.png', NULL, NULL),
(8, 'Interstellar', '2014-11-06', 'SF', 'Christopher Nolan', 'Matthew McConaughey, Anne Hathaway', 'image/poster_Interstellar.png', NULL, NULL),
(9, 'Tenet', '2020-08-26', 'Action, SF', 'Christopher Nolan', 'John David Washington', 'image/poster_Tenet.png', NULL, NULL),
(10, 'Aladdin', '2019-05-23', 'Adventure, Fantasy, Family', 'Guy Ritchie', 'Mena Massoud, Will Smith', 'image/poster_Aladdin.png', NULL, NULL),
(11, 'Avengers: Endgame', '2019-04-24', 'Action, SF', 'Anthony Russo', 'Robert Downey Jr., Chris Evans', 'image/poster_Avengers.png', NULL, NULL);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
