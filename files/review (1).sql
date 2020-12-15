-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 20-12-15 20:01
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
  `movie_id` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL,
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

INSERT INTO `review` (`movie_id`, `user_id`, `rank_1`, `rank_2`, `rank_3`, `rank_4`, `rank_5`, `rank_6`, `review`, `regdate`) VALUES
(1, 'admin', 8, 10, 7, 7, 8, 6, 'There\'s something magical about conversations that morph into songs, especially considering that the typical dancing that accompanies such skits is refreshingly truant.', '2020-12-14 08:15:39'),
(6, 'admin', 8, 7, 10, 7, 7, 7, 'The level of detail and creativity surrounding the look of director James Cameron\'s new world is simply astonishing.', '2020-12-14 14:26:17'),
(5, 'admin', 6, 6, 8, 6, 7, 7, 'Overall, Avatar was really about the jaw-dropping visual effects--that\'s the great thing about it.', '2020-12-15 07:29:46'),
(5, 'admin', 9, 6, 9, 7, 5, 4, 'Avatar tells a familiar story but its a story that works so well inside of this movie. The visuals and 3d are still one of the best to date and i totally get why it made so much money.', '2020-12-14 00:08:09'),
(5, 'admin', 6, 7, 10, 6, 6, 6, 'This is a \'Must see\' movie, innovative, and extraordinary. I think it will be regarded by most cinema goers as another milestone in the history of the art. The level of realism achieved is remarkable, and although the film is relatively long in real time, it retains it\'s excitement and holds the audience\'s attention to the end.', '2020-12-15 15:17:49'),
(8, 'admin', 9, 9, 8, 5, 6, 6, 'With all the rampant think pieces questioning the probability of every science fiction film that comes out, it\'s comforting to across a movie that doesn\'t really claim to have any of the answers.', '2020-12-12 10:30:53'),
(8, 'admin', 7, 9, 9, 6, 6, 7, 'This is not only a tremendously exciting space adventure... It\'s also a rich and thoughtful meditation on time and space and gravity.', '2020-12-13 12:13:36'),
(10, 'admin', 6, 7, 6, 5, 4, 3, 'Aladdin wasn\'t perfect, but nothing will ever live up to the classic \'92 version. Still, if you have a kiddo, or if you\'re still a big kid at heart, we certainly recommend it.', '2020-12-13 09:59:05'),
(10, 'admin', 5, 6, 6, 4, 6, 3, 'Everything about Aladdin is big, and yet feels small at the same time. Its lavish production design and costuming also has the effect of looking more like a stage production than an epic movie.', '0000-00-00 00:00:00'),
(11, 'admin', 3, 4, 7, 6, 5, 4, 'It\'s that the movie itself is overblown and half-baked, and without the audience, it\'s something of a glorified in-joke.', '0000-00-00 00:00:00'),
(11, 'admin', 7, 6, 8, 7, 8, 6, 'The only complaint about Avengers: Endgame is that it raises the bar so high that there may well never be a superhero movie to match it.', '2020-12-14 12:38:28'),
(4, 'admin', 6, 6, 8, 7, 5, 4, 'This is a charming, funny, coming-of-age story about a 15-year-old, Peter Parker, who has more power than he can handle and at the same time is frustrated that he can\'t show it off.', '2020-12-13 10:19:25'),
(4, 'admin', 6, 5, 7, 7, 4, 5, 'Just one more forgettable, indistinguishable entry into the rapidly-growing collection of Marvel\'s superhero extravaganzas.', '2020-12-15 20:50:19'),
(4, 'admin', 7, 5, 6, 7, 6, 3, 'It makes such a difference when a villain is given more than the standard arbitrary screen time. Whilst not perfect and Keaton could have benefited from more screen time, but he makes every scene count.', '2020-12-16 12:26:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
