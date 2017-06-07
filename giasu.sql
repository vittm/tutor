-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2017 at 01:24 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giasu`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogposts`
--

CREATE TABLE `blogposts` (
  `id` int(11) NOT NULL,
  `category` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `by` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `vote` int(10) NOT NULL,
  `viewed` int(11) NOT NULL,
  `people_vote` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `title_sym` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogposts`
--

INSERT INTO `blogposts` (`id`, `category`, `type`, `by`, `title`, `img`, `content`, `vote`, `viewed`, `people_vote`, `created_at`, `updated_at`, `title_sym`) VALUES
(5, 'hoc-thuat', '', '3', 'Chung ta khong thuoc ve nhau', '12189094_1693600710916639_2391187695877222838_n.jpg', '<p>I saw his name flash across my phone screen and my heart lurched in my chest. We hadn\'t talked in more than a month, which seemed to be about the norm. Since he told me he had fallen in love with someone else, I had assumed our communication would be reduced to silence. It turns out fate keeps putting him back in my life once a month for strange reasons.\n\nSo here he was.\n\n\"How are you?\" was the text. He had never asked me this, not once, over the past few months. Something about the question felt too heavy and invasive like some invitation back into a world that had imploded with his admission in June.\n\nI started to craft a response.\n\nRELATED JOB\nTinder  Data Analyst - Marketing in West Hollywood, CA, United States\nLearn more\n\"I was fine until July. That was when I wrapped myself in my comforter like a burrito, turned up the AC in my apartment, and watched Netflix for three days without getting off my couch. The pain was so unbearable I thought it would kill me. My anxiety was the worst it\'s ever been, but I refused to take anything for it. I didn\'t drink to numb myself. I wanted to remember what this felt like, just in case I ever thought about going back. Not that you gave me that option. There were days when I couldn\'t stop crying. Thank God for the friends who forced me out of my apartment. I broke dates. I spent entire days in bed. But worst of all I missed you. I missed our friendship. I missed your laugh. I missed the weight of your body next to mine when we fell asleep. I missed our sing alongs and our movie nights. And when I was done mourning the death of you as a lover, I mourned the death of you as my best friend. They both hurt in equal measures. And then the sadness turned to anger. But no matter how angry I am at you, I can\'t seem to hate you. I miss you. I miss you. But I notice as the days go on that I love you less and less. That I miss you less and less. I want to wish you all the love and happiness in the world. I want to tell you that I want my friend back. But I can\'t right now. I\'m not there yet. Instead, I spend each day celebrating the fact that I\'m getting better and that while I miss you, every day it\'s less and less.\"\n\nI reread my admission. All of it was true. All the pain and confusion. Because so much of me wanted to be his friend, but the rest of me didn\'t know how. I knew I\'d want too much and ultimately be disappointed when he didn\'t deliver. That had always been the nature of our relationship.\n\nSo I deleted the entire message. And in its place wrote, \"I\'m great! How are you?\" </p>', 162, 405, '', '2016-09-18 11:28:38', '2016-09-18 11:28:38', 'Chung-ta-khong-thuoc-ve-nhau'),
(6, 'cau-hoi', '', '2', 'Brad Pitt and Angelina Jolie are apparently splitting after 12 years. I\'m sad. Are you?', '12189094_1693600710916639_2391187695877222838_n.jpg', '<p>While part of me feels like I shouldn&#39;t even care because, let&#39;s be real, it&#39;s really none of our business and it doesn&#39;t impact our daily lives, I still feel a little let down. They were the ultimate couple in Hollywood holding up hope to me that celeb couples of this status could make it.&nbsp;</p>\r\n\r\n<p>Why do celebs get divorced so much? Should we really even care about this news or is our society too obsessed with celebrity couples in the first place?&nbsp;</p>\r\n', 2, 71, '', '2016-09-21 22:03:24', '2016-09-21 22:03:24', 'Brad-Pitt-and-Angelina-Jolie-are-apparently'),
(7, 'hoc-thuat', '', '2', 'TheProblemwithGroupthinkinAmerica', '10393170_905775156100030_3417407045482308851_n.jpg', '<p dir=\"ltr\">to fight for them as well, to the point that the country nearly divided over morality.</p>\r\n\r\n<h2>RELATED JOB</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h4><a href=\"https://onmogul.com/jobs/destination-imagination-territory-manager\">Destination Imagination, Inc.&nbsp;Destination Imagination Territory Manager in Cherry Hill, NJ United States</a></h4>\r\n	<a href=\"https://onmogul.com/jobs/destination-imagination-territory-manager\">Learn more</a></li>\r\n</ul>\r\n\r\n<p dir=\"ltr\">The intention of my history lesson is simply this: this world is full of wicked men and wicked women of all colors, shapes and sizes. But what&rsquo;s more? This world is also full of wonderful, kind men and women of all colors, shapes and sizes. These are the only two sides there are in this world. Not black, not white, nor yellow, pink, purple, green. None of that matters, these are the two sides and we have come to a place where that understanding no longer exists.</p>\r\n\r\n<p dir=\"ltr\">The media spoon feeds us this great race war, this group hate, and we devour it. Here is the blue side. Here is the black. Pick one. Sit down when the national anthem is played. Profile that black man as a threat, a thug, a criminal because of the color of his skin. Fight, disrespect, and don&rsquo;t care who you hurt, who you kill, whose lives you destroy. The storylines are never about the scholar who rose out of the projects to make something of himself. The headlines never are bold type font about the police officer who dedicates himself to rehabilitating the homeless population in his local community. The Sarah Grimkes are never recognized, we only care about the wicked. We are a world obsessed with the wicked, and it makes us feel empowered. It makes us want to pound our chests and run through the streets and never once do we realize that we are part of the problem.</p>\r\n\r\n<p dir=\"ltr\">With all of this group hate why wouldn&rsquo;t a black man be more skeptical of a police officer? With all this group hate why wouldn&rsquo;t a police officer go into his job with the mentality,&nbsp;if it&rsquo;s between you or I going home tonight to my family, it&rsquo;s going to be me.The tension is building in this country over a war that I&rsquo;m not sure we even know why we started. In any group of any color, nationality, and religion, there are bad people. The problem is in this country there is no separation. Whether that stems from the media or our own ignorance, I am unsure of but I do know this: group hate and groupthink solves nothing. Because here&rsquo;s what happens, all white people are placed in one group and all blacks are placed in another, and what about those of us, the majority of us, who don&rsquo;t fall in either category? In fact, Hillary Clinton posted a status after one of the last incidents, writing, &ldquo;This is just unbearable, and it needs to be intolerable. And so maybe I can, by speaking directly to white people, say, look, this is not who we are.&rdquo; Excuse me, but I am personally offended to be included in this statement when I know who exactly who I am and I am proud of that person. There are police officers and white men and women throughout this country who have no business being addressed in this group. How is this not the same as saying all blacks are criminals? How is grouping all whites and cops as malicious racists, not racism just the same? This is the problem, we think that answering racism by being racist and stereotypical back to whites and cops is going to help our cause, but it is just offensive. It is as offensive as being stereotyped for the color of dark skin and it solves nothing. We need to start penalizing the individual for their actions, understanding the situation better, and stop raging against whole groups with anger towards them for things they did not do but simply were accused for because of the color of their skin. That goes for both blacks AND whites. Don&rsquo;t you see that it doesn&rsquo;t need to be&nbsp;<em>OR</em>? If you want to be a part of the solution, ask yourself if your actions, words, and thoughts, are really just a part of the problem. Every time you label someone or feel enraged or fearful of them ask yourself why you believe one person is representative of a whole group. If you want to fight something, fight the stereotypes that have overcome our police officers, blacks, and whites in this country. This way of thinking entices all of us to treat disrespect with disrespect, to fight hate with hate. How can anyone possibly win? The honest truth is, they cannot. So next time you want to choose black or white, blue collar or black skin, remember that they are the same and that there is shame in the loss of them both. Remember that for every&nbsp;abro nipa&nbsp;there is a Sarah Grimke. Remember for every police officer or black or white man with his gun still smoking, there is another with a smiling face and hardworking hands looking to change the world for the better. And maybe those are the people we should all start standing behind.</p>\r\n', 6, 20, '', '2016-09-23 12:41:42', '2016-09-23 12:41:42', 'TheProblemwithGroupthinkinAmerica');

-- --------------------------------------------------------

--
-- Table structure for table `categoryblogs`
--

CREATE TABLE `categoryblogs` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title_sym` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categoryblogs`
--

INSERT INTO `categoryblogs` (`id`, `title`, `title_sym`, `updated_at`, `created_at`) VALUES
(1, 'Câu hỏi', 'cau-hoi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Học thuật', 'hoc-thuat', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Nghề nghiệp', 'nghe-nghiep', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Ngoại ngữ', 'ngoai-ngu', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(64) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`) VALUES
(1, 'Hà Nội'),
(2, 'Hải Phòng'),
(3, 'Bắc Giang'),
(5, 'Bắc Ninh'),
(6, 'Cao Bằng'),
(7, 'Hà Giang'),
(8, 'Hà Nam'),
(9, 'Hải Dương'),
(10, 'Hòa Bình'),
(11, 'Hưng Yên'),
(12, 'Lai Châu'),
(13, 'Lạng Sơn'),
(14, 'Lào Cai'),
(15, 'Nam Định'),
(16, 'Ninh Bình'),
(17, 'Tỉnh Phú Thọ'),
(18, 'Quảng Ninh'),
(19, 'Sơn La'),
(20, 'Thái Bình'),
(21, 'Thái Nguyên'),
(22, 'Thanh Hóa'),
(23, 'Tuyên Quang'),
(24, 'Vĩnh Phúc'),
(25, 'Yên Bái'),
(26, 'Đà Nẵng'),
(27, 'Bình Định'),
(28, 'Bình Phước'),
(29, 'Bình Thuận'),
(30, 'Đắk Lắk'),
(31, 'Gia Lai'),
(32, 'Hà Tĩnh'),
(33, 'Khánh Hòa'),
(34, 'Kon Tum'),
(35, 'Lâm Đồng'),
(36, 'Nghệ An'),
(37, 'Ninh Thuận'),
(38, 'Phú Yên'),
(39, 'Quảng Bình'),
(40, 'Quảng Nam'),
(41, 'Quảng Ngãi'),
(42, 'Quảng Trị'),
(43, 'Thừa Thiên Huế'),
(44, 'Hồ Chí Minh'),
(45, 'Cần Thơ'),
(46, 'Bạc Liêu'),
(47, 'Bến Tre'),
(48, 'Bình Dương'),
(49, 'Cà Mau'),
(50, 'Đồng Nai'),
(51, 'Đồng Tháp'),
(52, 'Kiên Giang'),
(53, 'Long An'),
(54, 'Sóc Trăng'),
(55, 'Tây Ninh'),
(56, 'Tiền Giang'),
(57, 'Trà Vinh'),
(58, 'Vĩnh Long'),
(59, 'An giang'),
(60, 'Bà Rịa - Vũng Tàu'),
(61, 'Bắc Kạn'),
(62, 'Hậu Giang'),
(63, 'Phú Thọ'),
(64, 'Điện Biên'),
(65, 'Đăk Nông'),
(67, 'Moskva'),
(68, 'New York'),
(69, 'Los Angeles'),
(70, 'Chicago'),
(71, 'Washington');

-- --------------------------------------------------------

--
-- Table structure for table `cmtprofiles`
--

CREATE TABLE `cmtprofiles` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_cmt` int(11) NOT NULL,
  `avatar_cmt_user` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `time` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `class` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmtprofiles`
--

INSERT INTO `cmtprofiles` (`id`, `id_user`, `id_cmt`, `avatar_cmt_user`, `time`, `class`, `content`) VALUES
(1, 2, 2, 'lqn.jpg', '16/08/2016', 'Khóa học commuini', 'Thầy dạy dễ hiểu với lại rất vui vẻ');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_comment` int(11) NOT NULL,
  `vote` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `id_post`, `id_user`, `content`, `id_comment`, `vote`, `created_at`, `updated_at`) VALUES
(1, 5, 2, 'part 1', 0, 6, '2016-09-24 14:20:11', '2016-09-24 14:20:11'),
(2, 5, 2, 'part 2', 0, 0, '2016-09-24 14:21:47', '2016-09-24 14:21:47'),
(3, 5, 2, 'part 1-2', 1, 1, '2016-09-24 15:43:02', '0000-00-00 00:00:00'),
(4, 5, 2, 'part 1-3', 3, 0, '2016-09-24 15:43:36', '0000-00-00 00:00:00'),
(5, 5, 2, 'part 2-1', 2, 0, '2016-09-24 15:51:30', '0000-00-00 00:00:00'),
(6, 1, 3, 'rốt cuộc cũng ra =)))', 1, 0, '2016-09-26 14:30:09', '0000-00-00 00:00:00'),
(8, 6, 3, '123123', 0, 0, '2016-09-27 11:24:28', '2016-09-27 11:24:28'),
(9, 6, 3, 'ádasd', 8, 0, '2016-09-27 11:41:19', '0000-00-00 00:00:00'),
(10, 6, 3, '213123', 8, 0, '2016-09-27 11:45:29', '0000-00-00 00:00:00'),
(11, 6, 3, '234234', 8, 0, '2016-09-27 11:46:08', '0000-00-00 00:00:00'),
(12, 6, 3, '234234123', 8, 0, '2016-09-27 11:46:29', '0000-00-00 00:00:00'),
(13, 5, 3, '34535', 3, 1, '2016-09-27 13:21:00', '0000-00-00 00:00:00'),
(14, 5, 3, '45345', 4, 0, '2016-09-27 13:21:08', '0000-00-00 00:00:00'),
(15, 5, 3, '345345345', 3, 0, '2016-09-27 13:21:13', '0000-00-00 00:00:00'),
(16, 5, 3, '3453453ưqeq', 15, 0, '2016-09-27 13:21:24', '0000-00-00 00:00:00'),
(17, 5, 3, 'qưeqwe', 5, 0, '2016-09-27 13:21:33', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cousers`
--

CREATE TABLE `cousers` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `name_couser` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `picture_couser` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `information` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `study` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `who` text NOT NULL,
  `type` text NOT NULL,
  `program` text NOT NULL,
  `timetype1` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `price` text NOT NULL,
  `opentime` text NOT NULL,
  `closetime` text NOT NULL,
  `timeplan` varchar(255) NOT NULL,
  `typeCouser` varchar(255) NOT NULL,
  `typeclass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cousers`
--

INSERT INTO `cousers` (`id`, `id_user`, `name_couser`, `picture_couser`, `information`, `study`, `who`, `type`, `program`, `timetype1`, `created_at`, `updated_at`, `price`, `opentime`, `closetime`, `timeplan`, `typeCouser`, `typeclass`) VALUES
(2, '2', '123123', '17-37-3520170607Layer3.png', '2313', '3123', '2312', '1231', '123123', '[\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"1\",\"0\",\"0\",\"0\",\"0\",\"1\",\"0\",\"0\",\"0\",\"0\",\"1\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\"]', '2017-06-05', '2017-06-05', '300000', '', '', '', '1', 0),
(3, '2', '123123', 'couser.jpg', '2313', '3123', '2312', '1231', '123123', '[\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"1\",\"0\",\"1\",\"0\",\"1\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\"]', '2017-06-05', '2017-06-05', '300000', '', '', '', '0', 1),
(4, '2', '123123', 'couser.jpg', '2313', '3123', '2312', '1231', '123123', '[\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"1\",\"0\",\"1\",\"0\",\"1\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\"]', '2017-06-05', '2017-06-05', '300000', '', '', '', '0', 0),
(5, '3', '123123', '18-16-0020170607accountantcopy.png', '2313', '3123', '2312', '1231', '123123', '[\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"1\",\"0\",\"0\",\"1\",\"0\",\"0\",\"1\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\"]', '2017-06-05', '2017-06-05', '300000', '', '', '', '1', 0),
(6, '3', 'siêu nhân gao', '18-18-5420170607accountantcopy.png', '123123', '1231', '23123', '123', '123', '[\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"1\",\"0\",\"0\",\"0\",\"0\",\"0\",\"0\",\"1\",\"0\",\"0\",\"1\",\"0\",\"0\",\"1\",\"0\",\"0\",\"0\",\"0\",\"1\",\"0\",\"0\",\"0\",\"0\",\"0\",\"1\"]', '2017-06-07', '2017-06-07', '3', '', '', '', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedbackhomes`
--

CREATE TABLE `feedbackhomes` (
  `id` int(11) NOT NULL,
  `subject` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rating` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cmt` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `images` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbackhomes`
--

INSERT INTO `feedbackhomes` (`id`, `subject`, `name`, `rating`, `cmt`, `user`, `images`, `created_at`, `updated_at`) VALUES
(2, 'Toán', 'Lê Hải Nam', '3.4', 'Vui lòng dánh theo hướng dẫn: Toán, Văn, Anh. Các môn học cách biệt bằng dấu phẩy', 'Lê Hữu Luân', '12189094_1693600710916639_2391187695877222838_n.jpg', '2016-09-09 16:41:36', '2016-09-09 16:41:36'),
(5, 'Toán, Văn, Anh', 'Đoan Doãn Quân Anh', '4', 'Hiện vẫn chưa rõ về độ xác thực của thông tin này, tuy nhiên với quang cảnh mua bán tấp nập tại cửa hàng Zara ngày 8/9 vừa qua thì con số 5,5 tỉ VNĐ doanh thu không hề là quá khó tin. Giả sử mỗi khách hàng mua hết trung bình 1 đến 2 triệu VNĐ thì nhẩm tính trong ngày khai trương hôm qua, Zara Việt Nam đã đón khoảng hơn 2.700 đến 5.500 lượt khách', 'Thiết Lâm Anh', '071560ae00be5094091a10e458f867e7.jpg', '2016-09-09 17:23:05', '2016-09-09 17:23:05'),
(7, 'Toán, Văn, Anh', 'Lý Lâm Huy', '5', 'Hiện vẫn chưa rõ về độ xác thực của thông tin này, tuy nhiên với quang cảnh mua bán tấp nập tại cửa hàng Zara ngày 8/9 vừa qua thì con số 5,5 tỉ VNĐ doanh thu không hề là quá khó tin. Giả sử mỗi khách hàng mua hết trung bình 1 đến 2 triệu VNĐ thì nhẩm tính trong ngày khai trương hôm qua, Zara Việt Nam đã đón khoảng hơn 2.700 đến 5.500 lượt khách', 'Thiết Lâm Anh', '12805904_1357669444259322_328062833020822169_n.jpg', '2016-09-09 17:23:40', '2016-09-09 17:23:40');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `start` int(11) NOT NULL,
  `content_feed` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ratings` int(11) NOT NULL,
  `id_feed` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `id_user`, `start`, `content_feed`, `ratings`, `id_feed`, `updated_at`, `created_at`) VALUES
(1, 2, 1, 'Thầy Nam làm việc rất tận tâm, luôn dạy nhưng điều dễ hiểu', 4, 0, 0, 0),
(2, 2, 4, ' Nội dung đánh giá', 0, 0, 2016, 2016),
(3, 2, 3, '12312', 0, 0, 2016, 2016),
(4, 2, 48, ' Nội dung đánh giá', 0, 0, 2017, 2017),
(5, 2, 49, 'ádád', 0, 0, 2017, 2017);

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`id`, `user_id`, `follower_id`, `created_at`, `updated_at`) VALUES
(6, 10, 2, '2017-06-07', '2017-06-07'),
(10, 2, 3, '2017-06-07', '2017-06-07'),
(11, 10, 3, '2017-06-07', '2017-06-07'),
(12, 8, 3, '2017-06-07', '2017-06-07'),
(26, 7, 3, '2017-06-07', '2017-06-07'),
(27, 3, 2, '2017-06-07', '2017-06-07'),
(28, 8, 2, '2017-06-07', '2017-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `learns`
--

CREATE TABLE `learns` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `working` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `working_uni` text CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `diploma` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `graduation` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `medal` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `learns`
--

INSERT INTO `learns` (`id`, `id_user`, `working`, `working_uni`, `diploma`, `graduation`, `medal`) VALUES
(10, 2, '[[\"\\u0110\\u1ea1i h\\u1ecdc\",\"C\\u1eed Nh\\u00e2n\"]]', '[[\"Dai hoc\",\"Cu Nhan\"]]', '[[\"\\u0110\\u1ea1i h\\u1ecdc\",\"C\\u1eed Nh\\u00e2n\"]]', '[[\"dai hoc cong nghe\",\"\\u0110\\u1ea1i h\\u1ecdc\"]]', '[[\"Kh\\u00f4ng c\\u00f3\",\"Kh\\u00f4ng c\\u00f3\"]]');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_to_mess` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `grade` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `begin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `time` text NOT NULL,
  `target` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `watch` int(11) NOT NULL,
  `sender` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `type_mail` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `id_user`, `id_to_mess`, `name`, `phone`, `subject`, `grade`, `begin`, `location`, `time`, `target`, `content`, `watch`, `sender`, `type_mail`, `updated_at`, `created_at`) VALUES
(34, 2, 0, 'Vi', 0, 'Anh, Toán', '', '', '', '9/1/2016 12:00 AM', '', 'Hệ thống xin chúc mừng bạn. Bạn đã được Gia sư 3đồng ý với lời mời giảng dạy, bạn có thể liên hệ với gia sư để biết thêm chi tiết!. Cảm ơn bạn', 1, 'Hệ Thống', 1, '2016-08-21 16:51:58', '2016-08-21 16:51:58'),
(37, 5, 0, 'Trần Thị Mộng Vi', 0, 'Anh, Toán', 'THCS', 'Tuần sau', '{\"value_1\":\"H\\u1ecdc t\\u1ea1i n\\u01a1i c\\u1ee7a gia s\\u01b0\",\"value_2\":\"\"}', '8/19/2016 12:00 AM', '[[\" \",\"C\\u1ea3i thi\\u1ec7n \\u0111i\\u1ec3m s\\u1ed1\",\"Chu\\u1ea9n b\\u1ecb cho b\\u00e0i test\"]]', 'hi', 1, 'Trần Thị Mộng Vi', 0, '2016-08-21 17:32:56', '2016-08-21 17:32:56'),
(38, 36, 0, 'Trần Thị Mộng Vi', 0, 'Anh, Toán', '', '', '', '8/17/2016 12:00 AM', '', 'Hệ thống xin chúc mừng bạn. Bạn đã được Gia sư 3đồng ý với lời mời giảng dạy, bạn có thể liên hệ với gia sư để biết thêm chi tiết!. Cảm ơn bạn', 0, 'Hệ Thống', 1, '2016-08-22 14:41:50', '2016-08-22 14:41:50'),
(41, 5, 0, 'Trần Thị Mộng Vi', 0, '', '', '', '', '', '', 'Hệ thống xin chúc mừng bạn. Bạn đã được Gia sư 3đồng ý với lời mời giảng dạy, bạn có thể liên hệ với gia sư để biết thêm chi tiết!. Cảm ơn bạn', 0, 'Hệ Thống', 1, '2016-08-30 01:23:10', '2016-08-30 01:23:10'),
(43, 36, 0, 'Trần Thị Mộng Vi', 0, 'Anh, Toán', '', '', '', '8/17/2016 12:00 AM', '', 'Hệ thống xin chúc mừng bạn. Bạn đã được Gia sư 3đồng ý với lời mời giảng dạy, bạn có thể liên hệ với gia sư để biết thêm chi tiết!. Cảm ơn bạn', 0, 'Hệ Thống', 1, '2016-08-30 01:23:29', '2016-08-30 01:23:29'),
(45, 44, 0, 'Kan Bi', 0, '1231', '', '', '', '8/9/2016 12:00 AM', '', 'Hệ thống xin chúc mừng bạn. Bạn đã được Gia sư 2đồng ý với lời mời giảng dạy, bạn có thể liên hệ với gia sư để biết thêm chi tiết!. Cảm ơn bạn', 0, 'Hệ Thống', 1, '2016-08-30 01:54:43', '2016-08-30 01:54:43'),
(46, 31, 0, 'Trần Thị Mộng Vi', 0, 'Anh, Toán', '', '', '', '9/1/2016 12:00 AM', '', 'Hệ thống xin chúc mừng bạn. Bạn đã được Gia sư 3đồng ý với lời mời giảng dạy, bạn có thể liên hệ với gia sư để biết thêm chi tiết!. Cảm ơn bạn', 0, 'Hệ Thống', 1, '2016-08-30 14:24:54', '2016-08-30 14:24:54'),
(47, 44, 0, 'Kan Bi', 0, '1231', '', '', '', '8/9/2016 12:00 AM', '', 'Hệ thống xin chúc mừng bạn. Bạn đã được Gia sư 2đồng ý với lời mời giảng dạy, bạn có thể liên hệ với gia sư để biết thêm chi tiết!. Cảm ơn bạn', 0, 'Hệ Thống', 1, '2016-08-30 14:38:37', '2016-08-30 14:38:37'),
(49, 48, 0, 'Lê Hải Nam', 0, '', '', '', '', '', '', 'Hệ thống xin chúc mừng bạn. Bạn đã được Gia sư 3đồng ý với lời mời giảng dạy, bạn có thể liên hệ với gia sư để biết thêm chi tiết!. Cảm ơn bạn', 0, 'Hệ Thống', 1, '2016-08-30 16:03:34', '2016-08-30 16:03:34'),
(50, 2, 0, 'Kan Bi', 0, '', '', '', '', '', '', '<p>\r\n	zsczxcx</p>\r\n', 1, 'Kan Bi', 0, '2016-09-04 06:11:13', '2016-09-04 06:11:13'),
(51, 2, 0, 'Kan Bi', 0, '', '', '', '', '', '', 'Hệ thống xin chúc mừng bạn. Bạn đã được Gia sư 2đồng ý với lời mời giảng dạy, bạn có thể liên hệ với gia sư để biết thêm chi tiết!. Cảm ơn bạn', 1, 'Hệ Thống', 1, '2016-09-04 06:11:24', '2016-09-04 06:11:24'),
(52, 2, 3, 'Lê Hải Nam', 0, 'toan', 'THPT', 'Tuần sau', '{\"value_1\":\"H\\u1ecdc t\\u1ea1i n\\u01a1i c\\u1ee7a gia s\\u01b0\",\"value_2\":\"\"}', '9/23/2016 12:00 AM', '[[\"N\\u00e2ng cao k\\u1ef9 n\\u0103ng\",\"H\\u1ecdc k\\u1ef9 n\\u0103ng m\\u1edbi\",\"Chu\\u1ea9n b\\u1ecb cho b\\u00e0i test\"]]', 'không có', 1, 'Lê Hải Nam', 0, '2016-09-04 20:53:08', '2016-09-04 20:53:08'),
(58, 2, 0, 'Kan Bi', 167644053, '', '', '', '', '', '', '<p>\r\n	hello</p>\r\n', 1, 'Kan Bi', 0, '2016-09-04 21:13:04', '2016-09-04 21:13:04'),
(59, 6, 3, 'Lê Hải Nam', 0, '', 'Tiểu Học', 'Vài ngày sau', '{\"value_1\":\"kh\\u00f4ng c\\u00f3\",\"value_2\":\"\"}', '', '[\" \"]', '', 0, 'Lê Hải Nam', 0, '2016-09-05 12:52:47', '2016-09-05 12:52:47'),
(60, 2, 0, 'Kan Bi', 0, '', '', '', '', '', '', '<p>\r\n	hi</p>\r\n', 1, 'Kan Bi', 0, '2016-09-06 13:59:30', '2016-09-06 13:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `grade` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `begin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `time` text NOT NULL,
  `target` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `avatar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` varchar(255) NOT NULL,
  `sender` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` text NOT NULL,
  `timeHouse` varchar(255) NOT NULL,
  `timeWeek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `id_user`, `name`, `subject`, `grade`, `begin`, `location`, `time`, `target`, `content`, `avatar`, `price`, `sender`, `updated_at`, `created_at`, `timeHouse`, `timeWeek`) VALUES
(40, 2, 'Kan Bi', 'Kinh Tế Quốc Dân', 'THCS', 'Tháng sau', 'Học tại nơi của học viên', '[[\"8\\/17\\/2016 12:00 AM\"]]', '[[\"C\\u1ea3i thi\\u1ec7n \\u0111i\\u1ec3m s\\u1ed1\",\"12313\"]]', '<p>\r\n	123123123</p>\r\n', 'lqn.jpg', '500000', 'Kan Bi', '2016-08-23', '2016-08-30', '4', '5');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `id_user`, `title`, `content`, `price`, `created_at`, `updated_at`) VALUES
(1, 2, 'Dạy thêm tiếng anh', 'tôi cần người dạy tiếng anh thêm', '3000000', '2016-08-16', '2016-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `content_teach` varchar(255) NOT NULL,
  `value_get` varchar(255) NOT NULL,
  `connect` varchar(255) NOT NULL,
  `learn` varchar(255) NOT NULL,
  `feeling` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `id_user`, `content_teach`, `value_get`, `connect`, `learn`, `feeling`, `created_at`, `updated_at`) VALUES
(1, 2, '8', '8', '8', '8', '8', '', ''),
(3, 2, '7', '9', '10', '8', '8', '', ''),
(4, 3, '7', '7', '7', '8', '7', '', ''),
(5, 7, '8', '8', '8', '8', '8', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `registercousers`
--

CREATE TABLE `registercousers` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_couser` text NOT NULL,
  `couser` varchar(255) NOT NULL,
  `planmoment` varchar(255) NOT NULL,
  `plantime` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registercousers`
--

INSERT INTO `registercousers` (`id`, `id_user`, `id_couser`, `couser`, `planmoment`, `plantime`, `price`, `created_at`, `updated_at`) VALUES
(5, 2, '', '5', '123', '123', '123123123', '2017-06-07', '2017-06-07'),
(6, 2, '', '6', '123', '12123', '123123', '2017-06-07', '2017-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `title_big` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title_small` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name_button` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url_slide` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `images_slide` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title_big`, `title_small`, `name_button`, `url_slide`, `images_slide`, `created_at`, `updated_at`) VALUES
(1, 'Xin chào bạn', 'Chúng ta không thuộc về nhau', 'Xem Thêm', '/trang-ca-nhan-2', 'bannerweb.png', '2016-09-09 11:02:39', '2016-09-09 11:02:39'),
(3, 'Xin chào bạn', 'Chúng ta không thuộc về nhau', 'Xem Thêm', '/trang-ca-nhan-3', 'cover1.png', '2016-09-09 12:14:40', '2016-09-09 12:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `texts`
--

CREATE TABLE `texts` (
  `id` int(11) NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `texts`
--

INSERT INTO `texts` (`id`, `text`, `created_at`, `updated_at`) VALUES
(3, 'Ultimate Behavior Prediction Platform', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'NATIVE. EFFICIENT. SCALABLE.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Native Time-series Data Modeling 1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Massive time-series data is a big headache. With its core temporal modeling capabilities, Arimo’s PBI platform naturally reads the past and present to predict what’s next.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Native Time-series Data Modeling 2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Massive time-series data is a big headache. With its core temporal modeling capabilities, Arimo’s PBI platform naturally reads the past and present to predict what’s next.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Native Time-series Data Modeling 3', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Massive time-series data is a big headache. With its core temporal modeling capabilities, Arimo’s PBI platform naturally reads the past and present to predict what’s next.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Discover more			  ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'NHẬN XÉT CỦA HỌC VIÊN VỀ CÁC GIA SƯ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'THAM GIA NGAY ĐỂ TÌM KIẾM CƠ HỘI NÀO!', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '230,075', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'THÀNH VIÊN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, '11,523', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'ĐỊA ĐIỂM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, '59,076', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'BÀI VIẾT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '322,330', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'CÔNG VIỆC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Our Partners', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_uni` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `job` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(10) NOT NULL,
  `avatar` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jobs` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time_learn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `like_blog` int(10) NOT NULL,
  `ward` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `district` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `subjects` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `info` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pay` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `money_time` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active` int(10) NOT NULL,
  `date` text NOT NULL,
  `level_user` int(11) NOT NULL,
  `expericen` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `folower` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `field` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `viewed` int(11) NOT NULL,
  `content_teach` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `method_teach` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumRatings` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `countRatings` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `cover` text NOT NULL,
  `picture` text NOT NULL,
  `video` text NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `id_uni`, `email`, `job`, `phone`, `password`, `gender`, `avatar`, `jobs`, `time_learn`, `like_blog`, `ward`, `district`, `city`, `subjects`, `info`, `pay`, `title`, `money_time`, `active`, `date`, `level_user`, `expericen`, `folower`, `field`, `status`, `viewed`, `content_teach`, `method_teach`, `sumRatings`, `countRatings`, `remember_token`, `created_at`, `updated_at`, `cover`, `picture`, `video`, `level`) VALUES
(2, 'Lê Quý Nam', '2', 'lequynam@gmail.com', '{\"job\":\"   alo   \",\"university\":\"       \"}', 2147483647, '$2y$10$iz/MvQmDi25uKZRpOw2bCuRHCAxYNSsH6PZn/bT/3YH3Mc60KYf.e', 1, '04-23-252017060549c8d33637cb126c6c0745ddf6f5f03e.jpg', 'Giáo viên ila', '[[\"8\\/17\\/2016 12:00 AM\",\"8\\/14\\/2016 1:30 AM\",\"8\\/25\\/2016 12:00 AM\",\"8\\/2\\/2016 12:00 AM\"]]', 3, 'số 211 Nguyễn Trãi phường 15', 'Quận 5', 'Hồ Chí Minh', 'Anh, Nga, Pháp, Trung', '<p>I started learning English at the age of 3 and I&#39;ve been surrounded by it for whole of my life in every possible way.</p>\r\n\r\n<p>Currently, I&rsquo;m performing scientific research and tutoring online in my free timings. To specify, I teach techniques for IELTS speaking and writing and offer courses for English communication, interview and debating skills. I&rsquo;m also offering assistance in making corrections of written transcripts [films subtitles, translations of books, curriculum, office statements, essays etc]. Apart from this, I also teach professional media editing and graphics designing softwares.</p>\r\n\r\n<div class=\"for-lecturers\" style=\"box-sizing: border-box; margin-top: 35px; color: rgb(51, 51, 51); font-family: OpenSans-Regular, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px;\">\r\n<div class=\"imfomate general\" style=\"box-sizing: border-box; padding: 0px;\">\r\n<p>Currently, I&rsquo;m performing scientific research and tutoring online in my free timings. To specify, I teach techniques for IELTS speaking and writing and offer courses for English communication, interview and debating skills. I&rsquo;m also offering assistance in making corrections of written transcripts [films subtitles, translations of books, curriculum, office statements, essays etc]. Apart from this, I also teach professional media editing and graphics designing softwares.</p>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n', 0, 'Kinh nghiệm 3 năm giảng dạy', '500000', 0, '2018-01-01', 1, 'Cử nhân, Tiến sĩ', '\"3\"', 'Sư phạm Anh', 0, 803, '{\"class_group\":{\"subject\":\" \",\"price\":\" \",\"content\":\" \",\"method\":\" \"}}', '', '8.2', '2', 'gaUNwIS667DEeJMc1hrQmI5xqDmecyDkDBWdhkOr3KrVI2RpBNr7YByqMTt7', '2016-08-14 13:14:12', '2017-06-07 03:48:36', '04-00-2420170607bannerweb.png', '[\"17-24-31==2017-06-04==-16806775_1804867546502774_3771989680977662451_n.jpg\",\"17-24-31==2017-06-04==-16830661_1804867483169447_1371076449408088748_n.jpg\",\"17-24-31==2017-06-04==-16830693_1804867486502780_2573422782936129634_n.jpg\",\"17-24-31==2017-06-04==-16830964_1804867503169445_1221483195989854047_n.jpg\",\"17-24-31==2017-06-04==-16831033_1804867539836108_4231011083318236658_n.jpg\",\"17-24-31==2017-06-04==-16831052_1804867456502783_3362415572487405662_n.jpg\",\"17-24-31==2017-06-04==-16832062_1804867509836111_3963288658726311050_n.jpg\",\"17-24-31==2017-06-04==-16832147_1804867463169449_1452755455391084880_n.jpg\",\"17-24-31==2017-06-04==-16864282_1804867569836105_6380254026330523604_n.jpg\",\"17-24-31==2017-06-04==-16864600_1804867659836096_5532593180209799403_n.jpg\"]', '[\"17776455_337022060029070_5335841247112200192_n.mp4\"]', '[\"17-29-49==2017-06-04==-a.jpg\",\"17-29-49==2017-06-04==-c.jpg\",\"17-29-49==2017-06-04==-k.jpg\"]'),
(3, 'Nguyễn Bảo Trung', '3', 'lehainam@gmail.com', '{\"job\":\"  \\u0102n b\\u00e1m  \",\"university\":\"     \"}', 98135214, '$2y$10$Nndp.OAiVjRC7IaQlU.wgu49iZPt9ZStnjZRJ9xX2PnHahchVNcBC', 1, '551457_499782466748122_460221831_n.jpg', 'Giảng viên CNTT', '[[\"8\\/16\\/2016 7:00 AM\",\"8\\/24\\/2016 12:00 AM\"]]', 5, 'Phường 3', 'Quận 1', 'Hồ Chí Minh', 'Toán,Anh, Kinh tế lượng, toán cao cấp, vĩ mô, maclenin', '<p>Trống rỗng</p>\r\n', 0, 'Xin chào các bạn', '300000', 2, '', 1, 'Học tại nơi của học viên', '', 'Cong nghe thong tin', 0, 207, '', '', '7.2', '1', 'dGLhWhN81DpLkQNAtNmB31pv4MmqORdkBjEHRkyL61ZynNGnt9U6qyAqaAw1', '2016-08-20 02:22:58', '2017-06-04 15:31:51', '', '', '', ''),
(5, 'Nguyễn Thái Hân', '5', 'nguyenthaihan@gmail.com', '', 0, '$2y$10$/Ils7hhkj9xjQUlQv8xly.V/iiJZxcTR09QBPcyHQZRC4A4tY5l2i', 0, '071560ae00be5094091a10e458f867e7.jpg', '', '[[\"9\\/14\\/2016 12:00 AM\"]]', 0, 'Trống rỗng', '', '', '\0\0Tr\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?', '<p>\r\n	Trống rỗng</p>\r\n', 0, '0000-00-00', '3000', 1, '', 1, 'không có', '', '', 0, 10, '', '', '0', '1', 'WrJZM51YdK3Wj7sOTiTwwcw7QLKbrjkpuQeuhqff2dxQohdoVpXPCntDufDR', '2016-08-21 17:30:25', '2016-09-03 06:58:04', '', '', '', ''),
(6, 'Lý Bảo Anh', '6', 'lybaoanh@gmail.com', '', 0, '$2y$10$YJasrH0w7TCMETRbDOJDZuAyov1fTb8JUcqOBuZf.63HY6oig.7ie', 0, '31a95663cd826217f2dfe70857668ec2.jpg', '', '', 0, 'Trống rỗng', '', '', '\0\0Tr\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?', 'Trống rỗng', 0, '0000-00-00', '3000', 1, '', 1, '', '', '', 0, 10, '', '', '0', '1', 'mrhlwTEH2eHRHnBszyJh5WojsKUiEq7ksVKywDtEAk4LK3WQnYAqefFXQHeT', '2016-08-30 16:04:18', '2016-08-30 16:04:33', '', '', '', ''),
(7, 'admin', '7', 'admin@gmail.com', '{\"job\":\"  Ki\\u1ebfn tr\\u00fac\\/Thi\\u1ebft k\\u1ebf n\\u1ed9i th\\u1ea5t  \",\"university\":\"     \"}', 0, '$2y$10$Nndp.OAiVjRC7IaQlU.wgu49iZPt9ZStnjZRJ9xX2PnHahchVNcBC', 0, '12805904_1357669444259322_328062833020822169_n.jpg', '3 tiếng', ' ', 0, 'Bình Thạnh', '', '', 'Trống rỗng', '<p>Trống rỗng</p>\r\n', 1, '123123', '3000', 0, '', 1, 'không có', '', '', 0, 156, '{\"class_group\":{\"subject\":\"1231\",\"price\":\"23123\",\"content\":\" 12312\",\"method\":\"3123123\"}}', '<p>- Background:</p>\r\n\r\n<p>My name is Zeeshan Abid {scientifically, its Zinc! ;-) } I am a scientist and its my passion, not profession. I took IELTS 2 years ago and got 8 band.</p>\r\n\r\n<p>I started learning English at the age of 3 and I&#39;ve been surrounded by it for whole of my life in every possible way.</p>\r\n\r\n<p>Currently, I&rsquo;m performing scientific research and tutoring online in my free timings. To specify, I teach techniques for IELTS speaking and writing and offer courses for English communication, interview and debating skills. I&rsquo;m also offering assistance in making corrections of written transcripts [films subtitles, translations of books, curriculum, office statements, essays etc]. Apart from this, I also teach professional media editing and graphics designing softwares.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>- Personality and hobby :</p>\r\n\r\n<p>Personally I&#39;m a self-motivated person who can&#39;t seem to just settle down, who lives for adventure. My friends think I&#39;m a riddle wrapped up in a mystery. :p</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>I&rsquo;m particularly engrossed in self-awareness, interpreting omens and living for the moment. Having adventures, exploring new things, playing with children and sitting with old, befriending with white and black, poor and rich and mingling with the people belonging to various nations, religions and cultures have always fascinated me. I love sharing concepts and ideas to approach the unapproachable and to imagine the unimaginable things and I&rsquo;ve been using English as a medium to help this craving passion and curiosity.</p>\r\n', '8', '1', 'D2cM7FWOTQVYdGSvtX4J6m5xNt7My6W22Z10yqaXY6QLZq7uhTfb9rf7gFQ6', '2016-09-10 10:13:30', '2016-11-30 20:16:26', '', '', '', ''),
(8, 'Bảo Anh', '8', 'baoanh@witayl.com', '', 0, '$2y$10$xCOq4ixMcmh24EIiYN9p7.s6gg8vuUvPQMP4eeWVO7PiQ5mRMXTgm', 1, '486856_152504521576279_1535443610_n.jpg', '', ' ', 0, 'Ăn bám', '', '', 'Trống rỗng', '<p>Trống rỗng</p>\r\n', 0, '0000-00-00', '500000', 1, '', 1, 'không có', '', 'Công nghệ thông tin', 0, 13, '', '', '0', '1', '', '2016-09-19 19:31:10', '2016-09-19 19:31:10', '', '', '', ''),
(9, 'Hứa Lan Anh', '9', 'lananh138@gmail.com', '', 0, '$2y$10$Z1vKO8ew.41pcDsu6QC/WuUhrijO3uMnFD4WM5jJzxE8yREUZVmSi', 0, '', '', '', 0, 'Trống rỗng', '', '', 'Trống rỗng', 'Trống rỗng', 0, '0000-00-00', '3000', 1, '', 0, '', '', '', 0, 0, '', '', '', '', 'bGqQTe2lEoXZH7lu4HZKbZiNhWpS21iuujjlxy8lxIXx4Dwn63z1Okd0bW4u', '2016-10-29 23:48:32', '2016-10-30 00:31:06', '', '', '', ''),
(10, 'Vi Trần Thị Mộng', '10', 'kanbi1995@gmail.com', '', 0, '$2y$10$Nndp.OAiVjRC7IaQlU.wgu49iZPt9ZStnjZRJ9xX2PnHahchVNcBC', 0, '13315719_275644116120298_6206204193856342374_n.jpg', '', '', 0, 'Trống rỗng', '', '', 'Trống rỗng', 'Trống rỗng', 0, '', '3000', 1, '', 1, '', '', '', 0, 9, '', '', '0', '1', 'nv0D8AVP4jK4mXPhpcJrUf4nJGlZCot4uFLa57b72kDqJFIBu3ShJrsCpXAI', '2016-11-27 14:15:01', '2017-06-03 20:31:50', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE `vouchers` (
  `id` int(11) NOT NULL,
  `voucher` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vouchers`
--

INSERT INTO `vouchers` (`id`, `voucher`, `price`, `updated_at`, `created_at`) VALUES
(1, 'DKALQA', 100000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'KASD1A', 300000, '2016-11-11 21:27:36', '2016-11-11 21:27:36');

-- --------------------------------------------------------

--
-- Table structure for table `wigets`
--

CREATE TABLE `wigets` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `value` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wigets`
--

INSERT INTO `wigets` (`id`, `name`, `value`, `updated_at`, `created_at`) VALUES
(1, 'Slider chính', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Lợi ích', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Tìm gia sư ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Đánh giá gia sư', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Tham gia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Thống kê', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Partner', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogposts`
--
ALTER TABLE `blogposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoryblogs`
--
ALTER TABLE `categoryblogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmtprofiles`
--
ALTER TABLE `cmtprofiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cousers`
--
ALTER TABLE `cousers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbackhomes`
--
ALTER TABLE `feedbackhomes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `learns`
--
ALTER TABLE `learns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registercousers`
--
ALTER TABLE `registercousers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wigets`
--
ALTER TABLE `wigets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogposts`
--
ALTER TABLE `blogposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `categoryblogs`
--
ALTER TABLE `categoryblogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `cmtprofiles`
--
ALTER TABLE `cmtprofiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `cousers`
--
ALTER TABLE `cousers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `feedbackhomes`
--
ALTER TABLE `feedbackhomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `learns`
--
ALTER TABLE `learns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `registercousers`
--
ALTER TABLE `registercousers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `wigets`
--
ALTER TABLE `wigets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
