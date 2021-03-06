-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 20-12-17 00:59
-- 서버 버전: 10.4.14-MariaDB
-- PHP 버전: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `test`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `review`
--

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

--
-- 테이블의 덤프 데이터 `review`
--

INSERT INTO `review` (`index`, `movie_id`, `user_id`, `critic`, `rank_1`, `rank_2`, `rank_3`, `rank_4`, `rank_5`, `rank_6`, `review`, `regdate`) VALUES
(1, 1, 'admin', 'critic', 8, 10, 7, 7, 8, 6, 'There\'s something magical about conversations that morph into songs, especially considering that the typical dancing that accompanies such skits is refreshingly truant.', '2020-12-14 08:15:39'),
(2, 5, 'admin', 'critic', 8, 7, 10, 7, 7, 7, 'The level of detail and creativity surrounding the look of director James Cameron\'s new world is simply astonishing.', '2020-12-14 14:26:17'),
(3, 5, 'admin', 'critic', 6, 6, 8, 6, 7, 7, 'Overall, Avatar was really about the jaw-dropping visual effects--that\'s the great thing about it.', '2020-12-15 07:29:46'),
(4, 5, 'admin', 'general', 9, 6, 9, 7, 5, 4, 'Avatar tells a familiar story but its a story that works so well inside of this movie. The visuals and 3d are still one of the best to date and i totally get why it made so much money.', '2020-12-14 00:08:09'),
(5, 5, 'admin', 'general', 6, 7, 10, 6, 6, 6, 'This is a \'Must see\' movie, innovative, and extraordinary. I think it will be regarded by most cinema goers as another milestone in the history of the art. The level of realism achieved is remarkable, and although the film is relatively long in real time, it retains it\'s excitement and holds the audience\'s attention to the end.', '2020-12-15 15:17:49'),
(6, 8, 'admin', 'critic', 9, 9, 8, 5, 6, 6, 'With all the rampant think pieces questioning the probability of every science fiction film that comes out, it\'s comforting to across a movie that doesn\'t really claim to have any of the answers.', '2020-12-12 10:30:53'),
(7, 8, 'admin', 'general', 7, 9, 9, 6, 6, 7, 'This is not only a tremendously exciting space adventure... It\'s also a rich and thoughtful meditation on time and space and gravity.', '2020-12-13 12:13:36'),
(8, 10, 'admin', 'critic', 6, 7, 6, 5, 4, 3, 'Aladdin wasn\'t perfect, but nothing will ever live up to the classic \'92 version. Still, if you have a kiddo, or if you\'re still a big kid at heart, we certainly recommend it.', '2020-12-13 09:59:05'),
(9, 10, 'admin', 'general', 5, 6, 6, 4, 6, 3, 'Everything about Aladdin is big, and yet feels small at the same time. Its lavish production design and costuming also has the effect of looking more like a stage production than an epic movie.', '0000-00-00 00:00:00'),
(10, 11, 'admin', 'critic', 3, 4, 7, 6, 5, 4, 'It\'s that the movie itself is overblown and half-baked, and without the audience, it\'s something of a glorified in-joke.', '0000-00-00 00:00:00'),
(11, 11, 'admin', 'general', 7, 6, 8, 7, 8, 6, 'The only complaint about Avengers: Endgame is that it raises the bar so high that there may well never be a superhero movie to match it.', '2020-12-14 12:38:28'),
(12, 4, 'admin', 'critic', 6, 6, 8, 7, 5, 4, 'This is a charming, funny, coming-of-age story about a 15-year-old, Peter Parker, who has more power than he can handle and at the same time is frustrated that he can\'t show it off.', '2020-12-13 10:19:25'),
(13, 4, 'admin', 'general', 6, 5, 7, 7, 4, 5, 'Just one more forgettable, indistinguishable entry into the rapidly-growing collection of Marvel\'s superhero extravaganzas.', '2020-12-15 20:50:19'),
(14, 4, 'admin', 'critic', 7, 5, 6, 7, 6, 3, 'It makes such a difference when a villain is given more than the standard arbitrary screen time. Whilst not perfect and Keaton could have benefited from more screen time, but he makes every scene count.', '2020-12-16 12:26:00'),
(15, 1, 'admin', 'general', 6, 9, 5, 5, 7, 5, '.', '2020-12-12 15:35:28'),
(16, 1, 'admin', 'critic', 6, 8, 6, 6, 6, 6, '.', '2020-12-14 03:18:51'),
(17, 2, 'admin', 'critic', 6, 7, 7, 8, 8, 5, '.', '2020-12-14 13:09:15'),
(18, 2, 'admin', 'general', 7, 5, 7, 6, 9, 6, '.', '2020-12-15 23:54:41'),
(19, 3, 'admin', 'critic', 8, 6, 7, 5, 6, 7, '.', '2020-12-14 04:07:14'),
(20, 3, 'admin', 'general', 7, 6, 7, 6, 7, 5, '.', '2020-12-14 13:34:14'),
(21, 4, 'admin', 'critic', 5, 4, 8, 6, 3, 3, '.', '2020-12-13 07:12:38'),
(22, 4, 'admin', 'general', 7, 7, 8, 6, 3, 2, '.', '2020-12-17 16:51:29'),
(23, 6, 'admin', 'critic', 8, 8, 10, 7, 8, 5, '.', '2020-12-17 08:11:07'),
(24, 6, 'admin', 'general', 7, 8, 9, 7, 8, 6, '.', '2020-12-15 23:40:21'),
(25, 7, 'admin', 'critic', 6, 6, 7, 4, 4, 5, '.', '2020-12-17 08:16:48'),
(27, 7, 'admin', 'general', 7, 5, 6, 5, 6, 4, '.', '2020-12-15 08:13:29'),
(28, 8, 'admin', 'critic', 8, 9, 10, 6, 7, 5, '.', '2020-12-09 08:44:26'),
(29, 8, 'admin', 'general', 8, 7, 8, 7, 6, 7, '.', '2020-12-15 13:38:16'),
(30, 9, 'admin', 'critic', 7, 6, 7, 6, 5, 6, '.', '2020-12-17 08:00:53'),
(31, 9, 'admin', 'general', 7, 5, 6, 6, 5, 5, '.', '2020-12-13 04:29:54');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `review`
--
ALTER TABLE `review`
  ADD UNIQUE KEY `index` (`index`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `review`
--
ALTER TABLE `review`
  MODIFY `index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
