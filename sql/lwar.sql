-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2017 at 10:41 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lwar`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `user_id` int(11) NOT NULL,
  `postID` int(11) unsigned NOT NULL,
  `postTitle` varchar(255) DEFAULT NULL,
  `postDesc` text,
  `postCont` text,
  `postDate` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`user_id`, `postID`, `postTitle`, `postDesc`, `postCont`, `postDate`) VALUES
(1, 1, 'My motherland', 'The Bangladesh Liberation War was an armed conflict pitting East Pakistan and India against West Pakistan. The war resulted in the secession of East Pakistan, which became the independent nation of Bangladesh.\r\n\r\nThe war broke out on 26 March 1971 as army units directed by West Pakistan launched a military operation in East Pakistan against Bengali civilians, students, intelligentsia, and armed personnel who were demanding separation of the East from West Pakistan. Bengali military, paramilitary, and civilians formed the Mukti Bahini (“Liberation Army”) and used guerrilla warfare tactics to fight against the West Pakistan army. India provided economic, military and diplomatic support to the Mukti Bahini rebels, leading Pakistan to launch Operation Chengiz Khan, a pre-emptive attack on the western border of India which started the Indo-Pakistani War of 1971.\r\n\r\nOn 16 December 1971, the allied forces of the Indian army and the Mukti Bahini defeated the West Pakistani forces deployed in the East. The resulting surrender was the largest in number of prisoners of war since World War II.\r\n\r\nThe Bangladesh Liberation War is a significant part of the history of the country, and lasted from the 26th of March 1971 until the 16th of December 1971. War broke out during this time between East and West Pakistan. West Pakistan became Pakistan by the end of the war, and East Pakistan is known today as Bangladesh.Unfortunately, independence came with a price and sacrifice, and a story of heroism and courage.R.J. Rummel cites estimates ranging from one to three million people killed. Other estimates place the death toll lower, at 300,000. Bangladesh government figures state that   three million people were killed ,  200,000 womenwere raped  and displaced millions of others.\r\n\r\nThe war effectively came to an end after the Eastern Command of the Pakistan Military signed the Instrument of Surrender on December 16, 1971 following which East Pakistan seceded as the independent state of Bangladesh. Around 97,368 West Pakistanis who were in East Pakistan at the time of its independence, including some 79,700 Pakistan Army soldiers and paramilitary personneland 12,500 civilians were taken as prisoners of war by India.Bangladesh became an independent nation, the world’s third most populous Muslim state. Mujibur Rahman was released from a West Pakistani prison, returned to Dhaka on 10 January 1972 and to become first President of Bangladesh and later its Prime Minister.', 'The Bangladesh Liberation War was an armed conflict pitting East Pakistan and India against West Pakistan. The war resulted in the secession of East Pakistan, which became the independent nation of Bangladesh.\r\n\r\nThe war broke out on 26 March 1971 as army units directed by West Pakistan launched a military operation in East Pakistan against Bengali civilians, students, intelligentsia, and armed personnel who were demanding separation of the East from West Pakistan. Bengali military, paramilitary, and civilians formed the Mukti Bahini (“Liberation Army”) and used guerrilla warfare tactics to fight against the West Pakistan army. India provided economic, military and diplomatic support to the Mukti Bahini rebels, leading Pakistan to launch Operation Chengiz Khan, a pre-emptive attack on the western border of India which started the Indo-Pakistani War of 1971.\r\n\r\nOn 16 December 1971, the allied forces of the Indian army and the Mukti Bahini defeated the West Pakistani forces deployed in the East. The resulting surrender was the largest in number of prisoners of war since World War II.\r\n\r\nThe Bangladesh Liberation War is a significant part of the history of the country, and lasted from the 26th of March 1971 until the 16th of December 1971. War broke out during this time between East and West Pakistan. West Pakistan became Pakistan by the end of the war, and East Pakistan is known today as Bangladesh.Unfortunately, independence came with a price and sacrifice, and a story of heroism and courage.R.J. Rummel cites estimates ranging from one to three million people killed. Other estimates place the death toll lower, at 300,000. Bangladesh government figures state that   three million people were killed ,  200,000 womenwere raped  and displaced millions of others.\r\n\r\nThe war effectively came to an end after the Eastern Command of the Pakistan Military signed the Instrument of Surrender on December 16, 1971 following which East Pakistan seceded as the independent state of Bangladesh. Around 97,368 West Pakistanis who were in East Pakistan at the time of its independence, including some 79,700 Pakistan Army soldiers and paramilitary personneland 12,500 civilians were taken as prisoners of war by India.Bangladesh became an independent nation, the world’s third most populous Muslim state. Mujibur Rahman was released from a West Pakistani prison, returned to Dhaka on 10 January 1972 and to become first President of Bangladesh and later its Prime Minister.', NULL),
(1, 3, 'The violence of 1971', 'The name of our country is the People''s Republic of Bangladesh. It is one the most beautiful country in the world. Our country was a part of Pakistan before 1971. Then we freed our country and achieved victory after nine month''s liberation war. 30 million people sacrificed their lives in the liberation war in 1971. Our independence day is 26th March and Victory day is 16th December. The national language of our country is Bangla. It is also a matter of great pride for us that we are the only nation who sacrificed their lives for the sake of their mother tongue in  21st February of 1952. In order to show respect to them, UNESCO has declared 21st February as International Mother Language Day. The name of the capital of Bangladesh is Dhaka. It is the busiest and populated city of our country. The total population is 16 core. The total area of our country is 1,47,570 square km. Our country is a river oriented country. The main rivers of our country are Padma, Jamuna, Meghna. But due to pollution and river pollution, all of these rivers have shrunk. People of all religion live peacefully in this country but most of them are Muslim. The famous places for tourist''s visit to our country are Sundarban, Cox''sBazar, St Martin, Kuakata. Sundarban is the largest Mangrove forest in the world.Cox''s Bazar has the longest sea beach. The main occasion that people celebrate is Eid Ul Fitar, Eid Ul Ajha, Pahela Baishakh etc. Bangladesh is a developing country. The economics of this country is mainly based on agriculture. The main crops that this country produce are rice, jute, tea, fruit etc. The country also earns a large amount of foreign remittance by exporting RMG and Manpower.  The main food that the inhabitant of this country eat are rice and fish. Hilsha is the national fish and Doyel is the national bird of our country. The national beast of the country is Royal Bengal Tiger.The national bird of our country is Doyel and national flower is Shapla. Hadudu is the national game of our country but Cricket is the most popular game. People of this country knows how to live happily and peacefully within poverty and national hazards.', 'The name of our country is the People''s Republic of Bangladesh. It is one the most beautiful country in the world. Our country was a part of Pakistan before 1971. Then we freed our country and achieved victory after nine month''s liberation war. 30 million people sacrificed their lives in the liberation war in 1971. Our independence day is 26th March and Victory day is 16th December. The national language of our country is Bangla. It is also a matter of great pride for us that we are the only nation who sacrificed their lives for the sake of their mother tongue in  21st February of 1952. In order to show respect to them, UNESCO has declared 21st February as International Mother Language Day. The name of the capital of Bangladesh is Dhaka. It is the busiest and populated city of our country. The total population is 16 core. The total area of our country is 1,47,570 square km. Our country is a river oriented country. The main rivers of our country are Padma, Jamuna, Meghna. But due to pollution and river pollution, all of these rivers have shrunk. People of all religion live peacefully in this country but most of them are Muslim. The famous places for tourist''s visit to our country are Sundarban, Cox''sBazar, St Martin, Kuakata. Sundarban is the largest Mangrove forest in the world.Cox''s Bazar has the longest sea beach. The main occasion that people celebrate is Eid Ul Fitar, Eid Ul Ajha, Pahela Baishakh etc. Bangladesh is a developing country. The economics of this country is mainly based on agriculture. The main crops that this country produce are rice, jute, tea, fruit etc. The country also earns a large amount of foreign remittance by exporting RMG and Manpower.  The main food that the inhabitant of this country eat are rice and fish. Hilsha is the national fish and Doyel is the national bird of our country. The national beast of the country is Royal Bengal Tiger.The national bird of our country is Doyel and national flower is Shapla. Hadudu is the national game of our country but Cricket is the most popular game. People of this country knows how to live happily and peacefully within poverty and national hazards.', '0000-00-00 00:00:00'),
(12, 4, 'My Country Bangladesh', 'The name of our country is the People''s Republic of Bangladesh. It is one the most beautiful country in the world. Our country was a part of Pakistan before 1971. Then we freed our country and achieved victory after nine month''s liberation war. 30 million people sacrificed their lives in the liberation war in 1971. Our independence day is 26th March and Victory day is 16th December. The national language of our country is Bangla. It is also a matter of great pride for us that we are the only nation who sacrificed their lives for the sake of their mother tongue in  21st February of 1952. In order to show respect to them, UNESCO has declared 21st February as International Mother Language Day. The name of the capital of Bangladesh is Dhaka. It is the busiest and populated city of our country. The total population is 16 core. The total area of our country is 1,47,570 square km. Our country is a river oriented country. The main rivers of our country are Padma, Jamuna, Meghna. But due to pollution and river pollution, all of these rivers have shrunk. People of all religion live peacefully in this country but most of them are Muslim. The famous places for tourist''s visit to our country are Sundarban, Cox''sBazar, St Martin, Kuakata. Sundarban is the largest Mangrove forest in the world.Cox''s Bazar has the longest sea beach. The main occasion that people celebrate is Eid Ul Fitar, Eid Ul Ajha, Pahela Baishakh etc. Bangladesh is a developing country. The economics of this country is mainly based on agriculture. The main crops that this country produce are rice, jute, tea, fruit etc. The country also earns a large amount of foreign remittance by exporting RMG and Manpower.  The main food that the inhabitant of this country eat are rice and fish. Hilsha is the national fish and Doyel is the national bird of our country. The national beast of the country is Royal Bengal Tiger.The national bird of our country is Doyel and national flower is Shapla. Hadudu is the national game of our country but Cricket is the most popular game. People of this country knows how to live happily and peacefully within poverty and national hazards.', 'The name of our country is the People''s Republic of Bangladesh. It is one the most beautiful country in the world. Our country was a part of Pakistan before 1971. Then we freed our country and achieved victory after nine month''s liberation war. 30 million people sacrificed their lives in the liberation war in 1971. Our independence day is 26th March and Victory day is 16th December. The national language of our country is Bangla. It is also a matter of great pride for us that we are the only nation who sacrificed their lives for the sake of their mother tongue in  21st February of 1952. In order to show respect to them, UNESCO has declared 21st February as International Mother Language Day. The name of the capital of Bangladesh is Dhaka. It is the busiest and populated city of our country. The total population is 16 core. The total area of our country is 1,47,570 square km. Our country is a river oriented country. The main rivers of our country are Padma, Jamuna, Meghna. But due to pollution and river pollution, all of these rivers have shrunk. People of all religion live peacefully in this country but most of them are Muslim. The famous places for tourist''s visit to our country are Sundarban, Cox''sBazar, St Martin, Kuakata. Sundarban is the largest Mangrove forest in the world.Cox''s Bazar has the longest sea beach. The main occasion that people celebrate is Eid Ul Fitar, Eid Ul Ajha, Pahela Baishakh etc. Bangladesh is a developing country. The economics of this country is mainly based on agriculture. The main crops that this country produce are rice, jute, tea, fruit etc. The country also earns a large amount of foreign remittance by exporting RMG and Manpower.  The main food that the inhabitant of this country eat are rice and fish. Hilsha is the national fish and Doyel is the national bird of our country. The national beast of the country is Royal Bengal Tiger.The national bird of our country is Doyel and national flower is Shapla. Hadudu is the national game of our country but Cricket is the most popular game. People of this country knows how to live happily and peacefully within poverty and national hazards.', '2023-08-17 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `username`) VALUES
(1, 'Sofia Neherin', 'sofia@gmail.com', '123', 'sofia'),
(9, 'humayra alam', 'nuha@gmail.com', '1', 'nuha'),
(10, 'rrrr', 'rrrrr', '1', 'ee'),
(11, 'fgfhgjgj', 'sooo', 'jhjhj', 'fgghj'),
(12, 'Shariqa Trina', 'shariqa@gmail.com', 'asd', 'Shariqa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`postID`), ADD UNIQUE KEY `postID` (`postID`), ADD KEY `fk_blog_user` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `postID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
ADD CONSTRAINT `fk_blog_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
