-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 09, 2017 at 09:13 PM
-- Server version: 5.6.35-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sabu`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogposts`
--

CREATE TABLE IF NOT EXISTS `blogposts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `title_sym` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `blogposts`
--

INSERT INTO `blogposts` (`id`, `category`, `type`, `by`, `title`, `img`, `content`, `vote`, `viewed`, `people_vote`, `created_at`, `updated_at`, `title_sym`) VALUES
(5, 'hoc-thuat', '', '3', 'Chung ta khong thuoc ve nhau', '12189094_1693600710916639_2391187695877222838_n.jpg', '<p>I saw his name flash across my phone screen and my heart lurched in my chest. We hadn''t talked in more than a month, which seemed to be about the norm. Since he told me he had fallen in love with someone else, I had assumed our communication would be reduced to silence. It turns out fate keeps putting him back in my life once a month for strange reasons.\n\nSo here he was.\n\n"How are you?" was the text. He had never asked me this, not once, over the past few months. Something about the question felt too heavy and invasive like some invitation back into a world that had imploded with his admission in June.\n\nI started to craft a response.\n\nRELATED JOB\nTinder  Data Analyst - Marketing in West Hollywood, CA, United States\nLearn more\n"I was fine until July. That was when I wrapped myself in my comforter like a burrito, turned up the AC in my apartment, and watched Netflix for three days without getting off my couch. The pain was so unbearable I thought it would kill me. My anxiety was the worst it''s ever been, but I refused to take anything for it. I didn''t drink to numb myself. I wanted to remember what this felt like, just in case I ever thought about going back. Not that you gave me that option. There were days when I couldn''t stop crying. Thank God for the friends who forced me out of my apartment. I broke dates. I spent entire days in bed. But worst of all I missed you. I missed our friendship. I missed your laugh. I missed the weight of your body next to mine when we fell asleep. I missed our sing alongs and our movie nights. And when I was done mourning the death of you as a lover, I mourned the death of you as my best friend. They both hurt in equal measures. And then the sadness turned to anger. But no matter how angry I am at you, I can''t seem to hate you. I miss you. I miss you. But I notice as the days go on that I love you less and less. That I miss you less and less. I want to wish you all the love and happiness in the world. I want to tell you that I want my friend back. But I can''t right now. I''m not there yet. Instead, I spend each day celebrating the fact that I''m getting better and that while I miss you, every day it''s less and less."\n\nI reread my admission. All of it was true. All the pain and confusion. Because so much of me wanted to be his friend, but the rest of me didn''t know how. I knew I''d want too much and ultimately be disappointed when he didn''t deliver. That had always been the nature of our relationship.\n\nSo I deleted the entire message. And in its place wrote, "I''m great! How are you?" </p>', 162, 405, '', '2016-09-18 11:28:38', '2016-09-18 11:28:38', 'Chung-ta-khong-thuoc-ve-nhau'),
(6, 'cau-hoi', '', '2', 'Brad Pitt and Angelina Jolie are apparently splitting after 12 years. I''m sad. Are you?', '12189094_1693600710916639_2391187695877222838_n.jpg', '<p>While part of me feels like I shouldn&#39;t even care because, let&#39;s be real, it&#39;s really none of our business and it doesn&#39;t impact our daily lives, I still feel a little let down. They were the ultimate couple in Hollywood holding up hope to me that celeb couples of this status could make it.&nbsp;</p>\r\n\r\n<p>Why do celebs get divorced so much? Should we really even care about this news or is our society too obsessed with celebrity couples in the first place?&nbsp;</p>\r\n', 2, 71, '', '2016-09-21 22:03:24', '2016-09-21 22:03:24', 'Brad-Pitt-and-Angelina-Jolie-are-apparently'),
(7, 'hoc-thuat', '', '2', 'TheProblemwithGroupthinkinAmerica', '10393170_905775156100030_3417407045482308851_n.jpg', '<p dir="ltr">to fight for them as well, to the point that the country nearly divided over morality.</p>\n\n<h2>RELATED JOB</h2>\n\n<ul>\n	<li>\n	<h4><a href="https://onmogul.com/jobs/destination-imagination-territory-manager">Destination Imagination, Inc.&nbsp;Destination Imagination Territory Manager in Cherry Hill, NJ United States</a></h4>\n	<a href="https://onmogul.com/jobs/destination-imagination-territory-manager">Learn more</a></li>\n</ul>\n\n<p dir="ltr">The intention of my history lesson is simply this: this world is full of wicked men and wicked women of all colors, shapes and sizes. But what&rsquo;s more? This world is also full of wonderful, kind men and women of all colors, shapes and sizes. These are the only two sides there are in this world. Not black, not white, nor yellow, pink, purple, green. None of that matters, these are the two sides and we have come to a place where that understanding no longer exists.</p>\n\n<p dir="ltr">The media spoon feeds us this great race war, this group hate, and we devour it. Here is the blue side. Here is the black. Pick one. Sit down when the national anthem is played. Profile that black man as a threat, a thug, a criminal because of the color of his skin. Fight, disrespect, and don&rsquo;t care who you hurt, who you kill, whose lives you destroy. The storylines are never about the scholar who rose out of the projects to make something of himself. The headlines never are bold type font about the police officer who dedicates himself to rehabilitating the homeless population in his local community. The Sarah Grimkes are never recognized, we only care about the wicked. We are a world obsessed with the wicked, and it makes us feel empowered. It makes us want to pound our chests and run through the streets and never once do we realize that we are part of the problem.</p>\n\n<p dir="ltr">With all of this group hate why wouldn&rsquo;t a black man be more skeptical of a police officer? With all this group hate why wouldn&rsquo;t a police officer go into his job with the mentality,&nbsp;if it&rsquo;s between you or I going home tonight to my family, it&rsquo;s going to be me.The tension is building in this country over a war that I&rsquo;m not sure we even know why we started. In any group of any color, nationality, and religion, there are bad people. The problem is in this country there is no separation. Whether that stems from the media or our own ignorance, I am unsure of but I do know this: group hate and groupthink solves nothing. Because here&rsquo;s what happens, all white people are placed in one group and all blacks are placed in another, and what about those of us, the majority of us, who don&rsquo;t fall in either category? In fact, Hillary Clinton posted a status after one of the last incidents, writing, &ldquo;This is just unbearable, and it needs to be intolerable. And so maybe I can, by speaking directly to white people, say, look, this is not who we are.&rdquo; Excuse me, but I am personally offended to be included in this statement when I know who exactly who I am and I am proud of that person. There are police officers and white men and women throughout this country who have no business being addressed in this group. How is this not the same as saying all blacks are criminals? How is grouping all whites and cops as malicious racists, not racism just the same? This is the problem, we think that answering racism by being racist and stereotypical back to whites and cops is going to help our cause, but it is just offensive. It is as offensive as being stereotyped for the color of dark skin and it solves nothing. We need to start penalizing the individual for their actions, understanding the situation better, and stop raging against whole groups with anger towards them for things they did not do but simply were accused for because of the color of their skin. That goes for both blacks AND whites. Don&rsquo;t you see that it doesn&rsquo;t need to be&nbsp;<em>OR</em>? If you want to be a part of the solution, ask yourself if your actions, words, and thoughts, are really just a part of the problem. Every time you label someone or feel enraged or fearful of them ask yourself why you believe one person is representative of a whole group. If you want to fight something, fight the stereotypes that have overcome our police officers, blacks, and whites in this country. This way of thinking entices all of us to treat disrespect with disrespect, to fight hate with hate. How can anyone possibly win? The honest truth is, they cannot. So next time you want to choose black or white, blue collar or black skin, remember that they are the same and that there is shame in the loss of them both. Remember that for every&nbsp;abro nipa&nbsp;there is a Sarah Grimke. Remember for every police officer or black or white man with his gun still smoking, there is another with a smiling face and hardworking hands looking to change the world for the better. And maybe those are the people we should all start standing behind.</p>\n', 6, 20, '', '2016-09-23 12:41:42', '2016-09-23 12:41:42', 'TheProblemwithGroupthinkinAmerica');

-- --------------------------------------------------------

--
-- Table structure for table `categoryblogs`
--

CREATE TABLE IF NOT EXISTS `categoryblogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title_sym` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=72 ;

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

CREATE TABLE IF NOT EXISTS `cmtprofiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_cmt` int(11) NOT NULL,
  `avatar_cmt_user` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `time` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `class` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cmtprofiles`
--

INSERT INTO `cmtprofiles` (`id`, `id_user`, `id_cmt`, `avatar_cmt_user`, `time`, `class`, `content`) VALUES
(1, 2, 2, 'lqn.jpg', '16/08/2016', 'Khóa học commuini', 'Thầy dạy dễ hiểu với lại rất vui vẻ');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `reply` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_comment` int(11) NOT NULL,
  `vote` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `id_post`, `id_user`, `content`, `reply`, `id_comment`, `vote`, `created_at`, `updated_at`) VALUES
(18, 3, 8, 'qweqweqweqwe', '', 0, 0, '2017-06-18 08:44:33', '2017-06-18 08:44:33'),
(19, 3, 8, 'adafadasd', '', 0, 0, '2017-06-18 08:45:00', '2017-06-18 08:45:00'),
(20, 2, 3, 'Làm sao để em có thể quên đi anh  :)', 'Không, anh chỉ là thằng tester em ạ', 0, 38, '2017-06-18 11:44:32', '2017-06-18 11:44:32'),
(21, 2, 3, 'Chỉ là test thôi em à ', '24234232', 0, 24, '2017-06-18 13:10:12', '2017-06-18 13:10:12'),
(22, 7, 8, '\r\nahihihihihi kkkk', '', 0, 0, '2017-06-18 15:43:14', '2017-06-18 15:43:14'),
(23, 7, 3, 'Chi asdasdasd', 'u biet roi', 0, 1, '2017-06-18 17:27:58', '2017-06-18 17:27:58'),
(24, 3, 3, 'asdasd', 'owf um', 0, 3, '2017-06-23 07:49:32', '2017-06-23 07:49:32'),
(25, 3, 21, 'lúc nãy cái tên chị đánh ở cuối dư một dấu cách đúng không ?', '', 0, 2, '2017-07-03 12:00:11', '2017-07-03 12:00:11'),
(26, 22, 21, 'kinh nghiệm học môn toán để được điểm cao là gì vậy ạ?', '', 0, 0, '2017-07-04 10:44:24', '2017-07-04 10:44:24'),
(27, 3, 3, 'ádasd', 'đâsd', 0, 0, '2017-07-04 12:58:34', '2017-07-04 12:58:34'),
(28, 3, 21, 'đã sửa phần comment', '', 0, 0, '2017-07-04 13:41:12', '2017-07-04 13:41:12');

-- --------------------------------------------------------

--
-- Table structure for table `cousers`
--

CREATE TABLE IF NOT EXISTS `cousers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `name_couser` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `picture_couser` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `information` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `subjects` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `study` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `who` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `program` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `timetype1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `price` int(11) NOT NULL DEFAULT '0',
  `opentime` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `closetime` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `timeplan` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `typeCouser` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `typeclass` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `cousers`
--

INSERT INTO `cousers` (`id`, `id_user`, `name_couser`, `picture_couser`, `information`, `subjects`, `study`, `who`, `type`, `program`, `timetype1`, `created_at`, `updated_at`, `price`, `opentime`, `closetime`, `timeplan`, `typeCouser`, `typeclass`) VALUES
(4, 5, 'Khoá học luyện viết Văn', 'couser.jpg', '0', 'Ngữ Văn', '3123', '2312', '1231', '123123', '', '2017-06-05', '2017-06-05', 300000, '', '', '', '1', 0),
(5, 3, 'Khoá học Giao tiếp tiếng Anh', '18-16-0020170607accountantcopy.png', '0', 'Tiếng Anh', '3123', '2312', '1231', '123123', '', '2017-06-05', '2017-06-05', 115000, '', '', '', '1', 1),
(6, 3, 'Kế toán doanh nghiệp', 'couser.jpg', '1', 'Kế Toán', '1231', '23123', '123', '123', '', '2017-06-07', '2017-06-07', 1000000, '2017-07-03', '2017-07-19', '3', '2', 0),
(7, 3, 'Khóa học thiết kế Kiến Trúc', '17-44-1020170617house-layout-600x461.jpeg', '2', '', '34123', '122312', '312412312', '4123123', '', '2017-06-17', '2017-06-17', 3199000, '2017-06-15', '2017-06-21', '33', '2', 0),
(28, 21, 'Lớp học toán cho học sinh lớp 6', '16-13-4120170703photo-1446329360995-b4642a139973.jpg', '0', 'Toán Học', '1. Nắm vững kiến thức sách giáo khoa môn toán lớp 8.\r\n2. Nắm vững phương pháp và kỹ năng giải những bài toán từ dễ đến khó.\r\n3. Đạt điểm cao trong các bài kiểm tra và kỳ thi học kỳ.', 'H?c sinh l?p 8 c?n n?ng cao m?n to?n', '--> Ch? tr?ng th?c h?nh, gi?i b?i t?p.\r\n--> R?n luy?n kh? n?ng ph?n x? khi gi?i b?i t?p.\r\n--> T?o kh?ng kh? vui v?, tho?i m?i ?? h?c sinh ti?p thu ki?n th?c nhanh v? d? nh?t', '', '["0","0","1","0","0","1","1","0","0","0","1","0","0","0","1","0","1","0","0","1","0"]', '2017-07-03', '2017-07-03', 100000, '', '', '', '1', 1),
(29, 21, 'Lớp học toán cho học sinh lớp 7', '16-20-1020170703photo-1446329360995-b4642a139973.jpg', '0', 'Toán Học', '1. Nắm vững kiến thức sách giáo khoa môn toán lớp 8.\r\n2. Nắm vững phương pháp và kỹ năng giải những bài toán từ dễ đến khó.\r\n3. Đạt điểm cao trong các bài kiểm tra và kỳ thi học kỳ.', 'T?t c? c?c h?c sinh l?p 8 c?n n?ng cao ki?n th?c to?n', '- Ch? tr?ng th?c h?nh, gi?i nhi?u b?i t?p. Th?c h?nh nhi?u l? c?ch t?t nh?t ?? gi?p c?c em n?m v?ng ki?n th?c.\r\n- Ph??ng ph?p d?y th?n thi?n, d? hi?u, g?n g?i v?i h?c sinh.', 'Theo s?ch gi?o khoa l?p 8 m?n to?n\r\n', '["0","0","1","0","0","1","0","0","1","0","0","1","0","0","1","0","0","1","0","0","1"]', '2017-07-03', '2017-07-03', 100000, '', '', '', '1', 1),
(30, 21, 'Lớp học toán cho học sinh lớp 9', '16-20-2320170703photo-1446329360995-b4642a139973.jpg', '0', 'Toán Học', '1. Nắm vững kiến thức sách giáo khoa môn toán lớp 8.\r\n2. Nắm vững phương pháp và kỹ năng giải những bài toán từ dễ đến khó.\r\n3. Đạt điểm cao trong các bài kiểm tra và kỳ thi học kỳ.', 'T?t c? c?c h?c sinh l?p 8 c?n n?ng cao ki?n th?c to?n', '- Ch? tr?ng th?c h?nh, gi?i nhi?u b?i t?p. Th?c h?nh nhi?u l? c?ch t?t nh?t ?? gi?p c?c em n?m v?ng ki?n th?c.\r\n- Ph??ng ph?p d?y th?n thi?n, d? hi?u, g?n g?i v?i h?c sinh.', 'Theo s?ch gi?o khoa l?p 8 m?n to?n\r\n', '["0","0","1","0","0","1","0","0","1","0","0","1","0","0","1","0","0","1","0","0","1"]', '2017-07-03', '2017-07-03', 100000, '', '', '', '1', 1),
(31, 21, 'Lớp học toán cho học sinh lớp 8', '16-20-4220170703photo-1446329360995-b4642a139973.jpg', '0', 'Toán Học', '1. Nắm vững kiến thức sách giáo khoa môn toán lớp 8.\r\n2. Nắm vững phương pháp và kỹ năng giải những bài toán từ dễ đến khó.\r\n3. Đạt điểm cao trong các bài kiểm tra và kỳ thi học kỳ.', 'T?t c? c?c h?c sinh l?p 8 c?n n?ng cao ki?n th?c to?n', '- Ch? tr?ng th?c h?nh, gi?i nhi?u b?i t?p. Th?c h?nh nhi?u l? c?ch t?t nh?t ?? gi?p c?c em n?m v?ng ki?n th?c.\r\n- Ph??ng ph?p d?y th?n thi?n, d? hi?u, g?n g?i v?i h?c sinh.', 'Theo s?ch gi?o khoa l?p 8 m?n to?n\r\n', '["0","0","1","0","0","1","0","0","1","0","0","1","0","0","1","0","0","1","0","0","1"]', '2017-07-03', '2017-07-03', 100000, '', '', '', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedbackhomes`
--

CREATE TABLE IF NOT EXISTS `feedbackhomes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rating` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cmt` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `images` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

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

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `start` int(11) NOT NULL,
  `content_feed` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ratings` int(11) NOT NULL,
  `id_feed` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

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

CREATE TABLE IF NOT EXISTS `followers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`id`, `user_id`, `follower_id`, `created_at`, `updated_at`) VALUES
(6, 10, 2, '2017-06-07', '2017-06-07'),
(10, 2, 3, '2017-06-07', '2017-06-07'),
(11, 10, 3, '2017-06-07', '2017-06-07'),
(12, 8, 3, '2017-06-07', '2017-06-07'),
(26, 7, 3, '2017-06-07', '2017-06-07'),
(28, 8, 2, '2017-06-07', '2017-06-07'),
(29, 7, 2, '2017-06-25', '2017-06-25'),
(30, 3, 2, '2017-06-25', '2017-06-25'),
(33, 21, 3, '2017-07-04', '2017-07-04');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `id_user`, `id_to_mess`, `name`, `phone`, `subject`, `grade`, `begin`, `location`, `time`, `target`, `content`, `watch`, `sender`, `type_mail`, `updated_at`, `created_at`) VALUES
(34, 2, 0, 'Vi', 0, 'Anh, Toán', '', '', '', '9/1/2016 12:00 AM', '', 'Hệ thống xin chúc mừng bạn. Bạn đã được Gia sư 3đồng ý với lời mời giảng dạy, bạn có thể liên hệ với gia sư để biết thêm chi tiết!. Cảm ơn bạn', 1, 'Hệ Thống', 1, '2016-08-21 16:51:58', '2016-08-21 16:51:58'),
(37, 5, 0, 'Trần Thị Mộng Vi', 0, 'Anh, Toán', 'THCS', 'Tuần sau', '{"value_1":"H\\u1ecdc t\\u1ea1i n\\u01a1i c\\u1ee7a gia s\\u01b0","value_2":""}', '8/19/2016 12:00 AM', '[[" ","C\\u1ea3i thi\\u1ec7n \\u0111i\\u1ec3m s\\u1ed1","Chu\\u1ea9n b\\u1ecb cho b\\u00e0i test"]]', 'hi', 1, 'Trần Thị Mộng Vi', 0, '2016-08-21 17:32:56', '2016-08-21 17:32:56'),
(38, 36, 0, 'Trần Thị Mộng Vi', 0, 'Anh, Toán', '', '', '', '8/17/2016 12:00 AM', '', 'Hệ thống xin chúc mừng bạn. Bạn đã được Gia sư 3đồng ý với lời mời giảng dạy, bạn có thể liên hệ với gia sư để biết thêm chi tiết!. Cảm ơn bạn', 0, 'Hệ Thống', 1, '2016-08-22 14:41:50', '2016-08-22 14:41:50'),
(41, 5, 0, 'Trần Thị Mộng Vi', 0, '', '', '', '', '', '', 'Hệ thống xin chúc mừng bạn. Bạn đã được Gia sư 3đồng ý với lời mời giảng dạy, bạn có thể liên hệ với gia sư để biết thêm chi tiết!. Cảm ơn bạn', 0, 'Hệ Thống', 1, '2016-08-30 01:23:10', '2016-08-30 01:23:10'),
(43, 36, 0, 'Trần Thị Mộng Vi', 0, 'Anh, Toán', '', '', '', '8/17/2016 12:00 AM', '', 'Hệ thống xin chúc mừng bạn. Bạn đã được Gia sư 3đồng ý với lời mời giảng dạy, bạn có thể liên hệ với gia sư để biết thêm chi tiết!. Cảm ơn bạn', 0, 'Hệ Thống', 1, '2016-08-30 01:23:29', '2016-08-30 01:23:29'),
(45, 44, 0, 'Kan Bi', 0, '1231', '', '', '', '8/9/2016 12:00 AM', '', 'Hệ thống xin chúc mừng bạn. Bạn đã được Gia sư 2đồng ý với lời mời giảng dạy, bạn có thể liên hệ với gia sư để biết thêm chi tiết!. Cảm ơn bạn', 0, 'Hệ Thống', 1, '2016-08-30 01:54:43', '2016-08-30 01:54:43'),
(46, 31, 0, 'Trần Thị Mộng Vi', 0, 'Anh, Toán', '', '', '', '9/1/2016 12:00 AM', '', 'Hệ thống xin chúc mừng bạn. Bạn đã được Gia sư 3đồng ý với lời mời giảng dạy, bạn có thể liên hệ với gia sư để biết thêm chi tiết!. Cảm ơn bạn', 0, 'Hệ Thống', 1, '2016-08-30 14:24:54', '2016-08-30 14:24:54'),
(47, 44, 0, 'Kan Bi', 0, '1231', '', '', '', '8/9/2016 12:00 AM', '', 'Hệ thống xin chúc mừng bạn. Bạn đã được Gia sư 2đồng ý với lời mời giảng dạy, bạn có thể liên hệ với gia sư để biết thêm chi tiết!. Cảm ơn bạn', 0, 'Hệ Thống', 1, '2016-08-30 14:38:37', '2016-08-30 14:38:37'),
(49, 48, 0, 'Lê Hải Nam', 0, '', '', '', '', '', '', 'Hệ thống xin chúc mừng bạn. Bạn đã được Gia sư 3đồng ý với lời mời giảng dạy, bạn có thể liên hệ với gia sư để biết thêm chi tiết!. Cảm ơn bạn', 0, 'Hệ Thống', 1, '2016-08-30 16:03:34', '2016-08-30 16:03:34'),
(50, 2, 0, 'Kan Bi', 0, '', '', '', '', '', '', '<p>\r\n	zsczxcx</p>\r\n', 1, 'Kan Bi', 0, '2016-09-04 06:11:13', '2016-09-04 06:11:13'),
(51, 2, 0, 'Kan Bi', 0, '', '', '', '', '', '', 'Hệ thống xin chúc mừng bạn. Bạn đã được Gia sư 2đồng ý với lời mời giảng dạy, bạn có thể liên hệ với gia sư để biết thêm chi tiết!. Cảm ơn bạn', 1, 'Hệ Thống', 1, '2016-09-04 06:11:24', '2016-09-04 06:11:24'),
(52, 2, 3, 'Lê Hải Nam', 0, 'toan', 'THPT', 'Tuần sau', '{"value_1":"H\\u1ecdc t\\u1ea1i n\\u01a1i c\\u1ee7a gia s\\u01b0","value_2":""}', '9/23/2016 12:00 AM', '[["N\\u00e2ng cao k\\u1ef9 n\\u0103ng","H\\u1ecdc k\\u1ef9 n\\u0103ng m\\u1edbi","Chu\\u1ea9n b\\u1ecb cho b\\u00e0i test"]]', 'không có', 1, 'Lê Hải Nam', 0, '2016-09-04 20:53:08', '2016-09-04 20:53:08'),
(58, 2, 0, 'Kan Bi', 167644053, '', '', '', '', '', '', '<p>\r\n	hello</p>\r\n', 1, 'Kan Bi', 0, '2016-09-04 21:13:04', '2016-09-04 21:13:04'),
(59, 6, 3, 'Lê Hải Nam', 0, '', 'Tiểu Học', 'Vài ngày sau', '{"value_1":"kh\\u00f4ng c\\u00f3","value_2":""}', '', '[" "]', '', 0, 'Lê Hải Nam', 0, '2016-09-05 12:52:47', '2016-09-05 12:52:47'),
(60, 2, 0, 'Kan Bi', 0, '', '', '', '', '', '', '<p>\r\n	hi</p>\r\n', 1, 'Kan Bi', 0, '2016-09-06 13:59:30', '2016-09-06 13:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `content_notification` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name_notification` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type_notification` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `nRead` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `id_user`, `content_notification`, `name_notification`, `type_notification`, `nRead`, `created_at`, `updated_at`) VALUES
(21, 3, '\r\n          <p> Chào Lê Quý Nam</p>\r\n          <p> Hệ thống thông báo bạn có học viên <a href="/trang-ca-nhan-3">Nguyễn Bảo Lâm</a> đã đăng ký khoá học <strong>Khóa học thiết kế Kiến Trúc</strong></p>\r\n          ', 'Học viên đăng ký khoá học Khóa học thiết kế Kiến Trúc', '0', 1, '2017-06-26', '2017-06-26'),
(22, 3, '\r\n          <p> Chào Lê Quý Nam</p>\r\n          <p> Hệ thống thông báo bạn học viên <a href="http://localhost:8081/tutor/public/trang-ca-nhan-3">Nguyễn Bảo Lâm</a> đã đăng ký khoá học <strong>Kế toán doanh nghiệp</strong> của bạn. Bạn hãy vào trang <a href="/quan-ly-hoc-vien">Quản lý học viên </a> của mình để xem chi tiết hơn.</p>\r\n          ', 'Học viên đăng ký khoá học Kế toán doanh nghiệp', '0', 1, '2017-06-26', '2017-06-26'),
(23, 3, '\r\n          <p> Chào Lê Quý Nam</p>\r\n          <p> Hệ thống thông báo bạn học viên <a href="http://localhost:8081/tutor/public/trang-ca-nhan-3">Nguyễn Bảo Lâm</a> đã đăng ký khoá học <strong>Khóa học thiết kế Kiến Trúc</strong> của bạn. Bạn hãy vào trang <a href=http://localhost:8081/tutor/public/quan-ly-hoc-vien>Quản lý học viên </a> của mình để xem chi tiết hơn.</p>\r\n          ', 'Học viên đăng ký khoá học Khóa học thiết kế Kiến Trúc', '0', 1, '2017-06-26', '2017-06-26'),
(24, 3, '\r\n          <p> Chào Nguyễn Bảo Lâm</p>\r\n          <p> Hệ thống thông báo bạn học viên <a href="http://localhost:8081/wiis/public/trang-ca-nhan-3">Nguyễn Bảo Lâm</a> đã đăng ký khoá học <strong>Khoá học Giao tiếp tiếng Anh</strong> của bạn. Bạn hãy vào trang <a href=http://localhost:8081/wiis/public/quan-ly-hoc-vien>Quản lý học viên </a> của mình để xem chi tiết hơn.</p>\r\n          ', 'Học viên đăng ký khoá học Khoá học Giao tiếp tiếng Anh', '0', 1, '2017-07-01', '2017-07-01'),
(25, 3, '\r\n        <p> Bạn hãy vào trang cá nhân của <a href="http://localhost:8081/wiis/public/trang-ca-nhan-3?tab=settings"> để xem rõ hơn phần hỏi đáp </a> nhé.</p>\r\n        <br>\r\n        <p>Câu hỏi:<strong> asdasd</strong></p>\r\n        <br>\r\n        <p>Câu trả lời: <strong>owf um</strong> </p>\r\n        ', 'Bạn có một phản hồi từ phần hỏi đáp', '0', 1, '2017-07-01', '2017-07-01'),
(26, 3, '\r\n          <p> Chào Lê Quý Nam</p>\r\n          <p> Hệ thống thông báo bạn học viên <a href="http://localhost:8081/wiis/public/trang-ca-nhan-3">Nguyễn Bảo Lâm</a> đã đăng ký khoá học <strong>Khoá học Giao tiếp tiếng Anh</strong> của bạn. Bạn hãy vào trang <a href=http://localhost:8081/wiis/public/quan-ly-hoc-vien>Quản lý học viên </a> của mình để xem chi tiết hơn.</p>\r\n          ', 'Học viên đăng ký khoá học Khoá học Giao tiếp tiếng Anh', '0', 1, '2017-07-02', '2017-07-02'),
(27, 3, '\r\n          <p> Chào Lê Quý Nam</p>\r\n          <p> Hệ thống thông báo bạn học viên <a href="http://localhost:8081/wiis/public/trang-ca-nhan-3-Nguyen-Bao-Lam">Nguyễn Bảo Lâm</a> đã đăng ký khoá học <strong>123123</strong> của bạn. Bạn hãy vào trang <a href=http://localhost:8081/wiis/public/quan-ly-hoc-vien>Quản lý học viên </a> của mình để xem chi tiết hơn.</p>\r\n          ', 'Học viên đăng ký khoá học 123123', '0', 1, '2017-07-03', '2017-07-03'),
(28, 21, '\r\n        <p> Bạn hãy trả lời tin nhăn trong <a href="http://wiis.vn/trang-ca-nhan-3-Nguyen-Bao-Lam?tab=settings">phần hỏi đáp </a> nhé.</p>\r\n        <br>\r\n        <p>Câu hỏi: <strong>lúc nãy cái tên chị đánh ở cuối dư một dấu cách đúng không ?</strong> </p>\r\n        ', 'Bạn có một tin nhắn trong phần hỏi đáp', '0', 1, '2017-07-03', '2017-07-03'),
(29, 21, '\r\n          <p> Chào Trần Ngọc Thảo </p>\r\n          <p> Hệ thống thông báo bạn học viên <a href="http://wiis.vn/trang-ca-nhan-21-Tran-Ngoc-Thao-">Trần Ngọc Thảo </a> đã đăng ký khoá học <strong>Lớp học toán cho học sinh lớp 6</strong> của bạn. Bạn hãy vào trang <a href=http://wiis.vn/quan-ly-hoc-vien>Quản lý học viên </a> của mình để xem chi tiết hơn.</p>\r\n          ', 'Học viên đăng ký khoá học Lớp học toán cho học sinh lớp 6', '0', 1, '2017-07-04', '2017-07-04'),
(30, 21, '\r\n          <p> Chào Phụ huynh khó tính</p>\r\n          <p> Hệ thống thông báo bạn học viên <a href="http://wiis.vn/trang-ca-nhan-21-Tran-Ngoc-Thao-">Trần Ngọc Thảo </a> đã đăng ký khoá học <strong>Lớp học toán cho học sinh lớp 9</strong> của bạn. Bạn hãy vào trang <a href=http://wiis.vn/quan-ly-hoc-vien>Quản lý học viên </a> của mình để xem chi tiết hơn.</p>\r\n          ', 'Học viên đăng ký khoá học Lớp học toán cho học sinh lớp 9', '0', 0, '2017-07-04', '2017-07-04'),
(31, 21, '\r\n        <p> Bạn hãy trả lời tin nhăn trong <a href="http://wiis.vn/trang-ca-nhan-22-Phu-huynh-kho-tinh?tab=settings">phần hỏi đáp </a> nhé.</p>\r\n        <br>\r\n        <p>Câu hỏi: <strong>kinh nghiệm học môn toán để được điểm cao là gì vậy ạ?</strong> </p>\r\n        ', 'Bạn có một tin nhắn trong phần hỏi đáp', '0', 0, '2017-07-04', '2017-07-04'),
(32, 3, '\r\n        <p> Bạn hãy trả lời tin nhăn trong <a href="http://wiis.vn/trang-ca-nhan-3-Nguyen-Bao-Lam?tab=settings">phần hỏi đáp </a> nhé.</p>\r\n        <br>\r\n        <p>Câu hỏi: <strong>ádasd</strong> </p>\r\n        ', 'Bạn có một tin nhắn trong phần hỏi đáp', '0', 1, '2017-07-04', '2017-07-04'),
(33, 3, '\n        <p> Bạn hãy vào trang cá nhân của <a href="http://wiis.vn/trang-ca-nhan-3-Nguyen-Bao-Lam?tab=settings"> để xem rõ hơn phần hỏi đáp </a> nhé.</p>\n        <br>\n        <p>Câu hỏi:<strong> ádasd</strong></p>\n        <br>\n        <p>Câu trả lời: <strong>đâsd</strong> </p>\n        ', 'Bạn có một phản hồi từ phần hỏi đáp', '0', 1, '2017-07-04', '2017-07-04'),
(34, 21, '\n        <p> Bạn hãy trả lời tin nhăn trong <a href="http://wiis.vn/trang-ca-nhan-3-Nguyen-Bao-Lam?tab=settings">phần hỏi đáp </a> nhé.</p>\n        <br>\n        <p>Câu hỏi: <strong>đã sửa phần comment</strong> </p>\n        ', 'Bạn có một tin nhắn trong phần hỏi đáp', '0', 0, '2017-07-04', '2017-07-04'),
(35, 5, '\r\n          <p> Chào Nguyễn Bảo Lâm</p>\r\n          <p> Hệ thống thông báo bạn học viên <a href="http://localhost:8081/hia/public/trang-ca-nhan-5-Thiet-Ha-Han">Thiết Hạ Hân</a> đã đăng ký khoá học <strong>Khoá học luyện viết Văn</strong> của bạn. Bạn hãy vào trang <a href=http://localhost:8081/hia/public/quan-ly-hoc-vien>Quản lý học viên </a> của mình để xem chi tiết hơn.</p>\r\n          ', 'Học viên đăng ký khoá học Khoá học luyện viết Văn', '0', 0, '2017-07-09', '2017-07-09'),
(36, 3, '\r\n          <p> Bạn hãy xem đánh giá của mình trong <a href="http://wiis.vn/trang-ca-nhan-2-Nguyen-Bao-Lam?tab=messages">phần đánh giá nhé </a> nhé.</p>\r\n          ', 'Bạn có một đánh giá mới', '0', 1, '2017-07-10', '2017-07-10'),
(37, 3, '\r\n          <p> Bạn hãy xem phản hồi đánh giá của mình trong <a href="http://wiis.vn/trang-ca-nhan-3-Nguyen-Bao-Lam?tab=messages">phần đánh giá </a> nhé.</p>\r\n          ', 'Bạn có một phản hồi từ đánh giá của bạn', '0', 0, '2017-07-10', '2017-07-10'),
(38, 3, '\r\n          <p> Bạn hãy xem đánh giá của mình trong <a href="http://wiis.vn/trang-ca-nhan-3-Nguyen-Bao-Lam?tab=messages">phần đánh giá nhé </a> nhé.</p>\r\n          ', 'Bạn có một đánh giá mới', '0', 0, '2017-07-10', '2017-07-10'),
(39, 2, '\r\n          <p> Bạn hãy xem phản hồi đánh giá của mình trong <a href="http://wiis.vn/trang-ca-nhan-2-Le-Quy-Nam?tab=messages">phần đánh giá </a> nhé.</p>\r\n          ', 'Bạn có một phản hồi từ đánh giá của bạn', '0', 1, '2017-07-10', '2017-07-10'),
(40, 3, '\r\n          <p> Bạn hãy xem phản hồi đánh giá của mình trong <a href="http://wiis.vn/trang-ca-nhan-3-Nguyen-Bao-Lam?tab=messages">phần đánh giá </a> nhé.</p>\r\n          ', 'Bạn có một phản hồi từ đánh giá của bạn', '0', 0, '2017-07-10', '2017-07-10'),
(41, 3, '\r\n          <p> Bạn hãy xem đánh giá của mình trong <a href="http://wiis.vn/trang-ca-nhan-3-Nguyen-Bao-Lam?tab=messages">phần đánh giá nhé </a> nhé.</p>\r\n          ', 'Bạn có một đánh giá mới', '0', 1, '2017-07-10', '2017-07-10'),
(42, 2, '\r\n          <p> Bạn hãy xem phản hồi đánh giá của mình trong <a href="http://wiis.vn/trang-ca-nhan-3-Le-Quy-Nam?tab=messages">phần đánh giá </a> nhé.</p>\r\n          ', 'Bạn có một phản hồi từ đánh giá của bạn', '0', 1, '2017-07-10', '2017-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `timeWeek` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `id_user`, `name`, `subject`, `grade`, `begin`, `location`, `time`, `target`, `content`, `avatar`, `price`, `sender`, `updated_at`, `created_at`, `timeHouse`, `timeWeek`) VALUES
(40, 2, 'Kan Bi', 'Kinh Tế Quốc Dân', 'THCS', 'Tháng sau', 'Học tại nơi của học viên', '[["8\\/17\\/2016 12:00 AM"]]', '[["C\\u1ea3i thi\\u1ec7n \\u0111i\\u1ec3m s\\u1ed1","12313"]]', '<p>\r\n	123123123</p>\r\n', 'lqn.jpg', '500000', 'Kan Bi', '2016-08-23', '2016-08-30', '4', '5');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_parents` int(11) NOT NULL,
  `id_child` int(11) NOT NULL,
  `content_teach` float NOT NULL,
  `img_ratings` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `value_get` float NOT NULL,
  `feebacks` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `learn` float NOT NULL,
  `feeling` float NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `id_user`, `id_post`, `id_parents`, `id_child`, `content_teach`, `img_ratings`, `value_get`, `feebacks`, `price`, `learn`, `feeling`, `created_at`, `updated_at`) VALUES
(40, 3, 2, 0, 0, 8.5, 'NULL', 8.5, 'đánh giá cho giảng viên', 8.5, 8.5, 8.5, '2017-07-10 10:11:41', '2017-07-10 10:11:41'),
(41, 3, 3, 0, 40, 0, 'NULL', 0, 'cảm ơn bạn', 0, 0, 0, '2017-07-10 10:12:06', '2017-07-10 10:12:06');

-- --------------------------------------------------------

--
-- Table structure for table `registercousers`
--

CREATE TABLE IF NOT EXISTS `registercousers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `id_teacher` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `planmoment` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `plantime` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `action` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `giftcode` varchar(255) NOT NULL,
  `pay` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `registercousers`
--

INSERT INTO `registercousers` (`id`, `user`, `id_teacher`, `id_course`, `planmoment`, `plantime`, `price`, `action`, `code`, `giftcode`, `pay`, `created_at`, `updated_at`) VALUES
(16, 2, 3, 7, '2', '2', '3199000', 0, 'Wiis1', '', 959700, '2017-06-26', '2017-06-26'),
(17, 3, 3, 5, '3', '3', '115000', 0, 'Wiis825732422', 'MSDT568899537', 1552500, '2017-07-01', '2017-07-01'),
(18, 2, 3, 5, '3', '3', '115000', 0, 'Wiis32958985', 'MSDT556594849', 1552500, '2017-07-02', '2017-07-02'),
(19, 2, 3, 27, '3', '3', '123123', 0, 'Wiis237716675', 'MSDT276745606', 1662160, '2017-07-03', '2017-07-03'),
(20, 21, 21, 28, '3', '2', '100000', 0, 'Wiis41486911', 'MSDT52360491', 900000, '2017-07-04', '2017-07-04'),
(21, 22, 21, 30, '1', '1', '100000', 0, 'Wiis478304139', 'MSDT63862048', 150000, '2017-07-04', '2017-07-04'),
(22, 3, 5, 4, '3', '3', '300000', 0, 'Wiis222061158', 'MSDT60919190', 3240000, '2017-07-09', '2017-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE IF NOT EXISTS `slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_big` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title_small` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name_button` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url_slide` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `images_slide` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

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

CREATE TABLE IF NOT EXISTS `texts` (
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

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_uni` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(10) NOT NULL,
  `avatar` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jobs` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ward` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `district` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `subjects` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `info` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active` int(10) NOT NULL,
  `date` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `level_user` int(11) NOT NULL,
  `top_teacher` int(11) NOT NULL,
  `folower` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `field` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `content_teach` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `method_teach` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sumRatings` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `countRatings` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `cover` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `picture` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `video` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `code_user` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `experience` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `educational` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time_learn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `id_uni`, `email`, `phone`, `password`, `gender`, `avatar`, `jobs`, `ward`, `district`, `subjects`, `info`, `title`, `active`, `date`, `level_user`, `top_teacher`, `folower`, `field`, `status`, `content_teach`, `method_teach`, `sumRatings`, `countRatings`, `remember_token`, `created_at`, `updated_at`, `cover`, `picture`, `video`, `code_user`, `experience`, `educational`, `city`, `level`, `time_learn`) VALUES
(2, 'Lê Quý Nam', '2', 'lequynam@gmail.com', 2147483647, '$2y$10$iz/MvQmDi25uKZRpOw2bCuRHCAxYNSsH6PZn/bT/3YH3Mc60KYf.e', 1, '04-23-252017060549c8d33637cb126c6c0745ddf6f5f03e.jpg', '2', 'số 211 Nguyễn Trãi phường 15', 'Quận 5', 'Anh, Nga, Pháp, Trung', '<p>I started learning English at the age of 3 and I&#39;ve been surrounded by it for whole of my life in every possible way.</p>\r\n\r\n<p>Currently, I&rsquo;m performing scientific research and tutoring online in my free timings. To specify, I teach techniques for IELTS speaking and writing and offer courses for English communication, interview and debating skills. I&rsquo;m also offering assistance in making corrections of written transcripts [films subtitles, translations of books, curriculum, office statements, essays etc]. Apart from this, I also teach professional media editing and graphics designing softwares.</p>\r\n\r\n<div class="for-lecturers" style="box-sizing: border-box; margin-top: 35px; color: rgb(51, 51, 51); font-family: OpenSans-Regular, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px;">\r\n<div class="imfomate general" style="box-sizing: border-box; padding: 0px;">\r\n<p>Currently, I&rsquo;m performing scientific research and tutoring online in my free timings. To specify, I teach techniques for IELTS speaking and writing and offer courses for English communication, interview and debating skills. I&rsquo;m also offering assistance in making corrections of written transcripts [films subtitles, translations of books, curriculum, office statements, essays etc]. Apart from this, I also teach professional media editing and graphics designing softwares.</p>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n', 'Kinh nghiệm 3 năm giảng dạy', 1, '2018-01-01', 1, 0, '"3"', 'Sư phạm Anh', 0, '{"class_group":{"subject":" ","price":" ","content":" ","method":" "}}', '', '0', '2', 'JihT0FIhgxMw5O4Wv832qvFj7ehXZaxLdb2SP6t9ogFQRU3uvpErhrzqHlDD', '2016-08-14 13:14:12', '2017-07-09 16:08:49', '15-09-55201706251176394_1396393813922747_829849495_n.jpg', '["17-24-31==2017-06-04==-16806775_1804867546502774_3771989680977662451_n.jpg","17-24-31==2017-06-04==-16830661_1804867483169447_1371076449408088748_n.jpg","17-24-31==2017-06-04==-16830693_1804867486502780_2573422782936129634_n.jpg","17-24-31==2017-06-04==-16830964_1804867503169445_1221483195989854047_n.jpg","17-24-31==2017-06-04==-16831033_1804867539836108_4231011083318236658_n.jpg","17-24-31==2017-06-04==-16831052_1804867456502783_3362415572487405662_n.jpg","17-24-31==2017-06-04==-16832062_1804867509836111_3963288658726311050_n.jpg","17-24-31==2017-06-04==-16832147_1804867463169449_1452755455391084880_n.jpg","17-24-31==2017-06-04==-16864282_1804867569836105_6380254026330523604_n.jpg","17-24-31==2017-06-04==-16864600_1804867659836096_5532593180209799403_n.jpg"]', '["17776455_337022060029070_5335841247112200192_n.mp4"]', '', '', '', 'Ho Chi Minh', '', ''),
(3, 'Nguyễn Bảo Lâm', '3', 'lehainam@gmail.com', 98135214, '$2y$10$Nndp.OAiVjRC7IaQlU.wgu49iZPt9ZStnjZRJ9xX2PnHahchVNcBC', 1, '19-37-3320170625bffa6871fb68f4562618cf8f76551bf1.jpg', '2', 'Phường 3', '1', 'Toán', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'Xin chào các bạn', 2, '1993-03-10', 1, 1, '', 'Cong nghe thong tin', 0, '', '', '8.5', '1', 'rYIlIwKZIxefSLBS1V4cXJ9nfb0G5QahVX8K06K8eN5JjHdmAwEAfzgA6AoF', '2016-08-20 02:22:58', '2017-07-06 21:54:01', '19-45-262017062512801363_1694733650803345_1365580251964161745_n.jpg', '["05-49-20==2017-06-18==-1600x800_8970_Rain_2d_illustration_rain_steampunk_train_environment_picture_image_digital_art.jpg","05-49-20==2017-06-18==-11810_415455621828391_1322483462_n.jpg","05-49-20==2017-06-18==-12220_689146384501284_8957757553677908226_n.png"]', '["05-49-01==2017-06-18==-17776455_337022060029070_5335841247112200192_n.mp4"]', '["06-30-09-2017-06-23--980x.jpg","06-30-09-2017-06-23--12312abas.jpg"]', '5', 'Su Pham Anh', 'Ho CHi Minh City', '', ''),
(5, 'Thiết Hạ Hân', '5', 'nguyenthaihan@gmail.com', 41314123, '$2y$10$/Ils7hhkj9xjQUlQv8xly.V/iiJZxcTR09QBPcyHQZRC4A4tY5l2i', 0, '071560ae00be5094091a10e458f867e7.jpg', '2', '', '', 'Tiếng Anh', '<p>\r\n	Trống rỗng</p>\r\n', '0000-00-00', 2, '', 1, 1, '', '', 0, '', '', '0', '1', 'WrJZM51YdK3Wj7sOTiTwwcw7QLKbrjkpuQeuhqff2dxQohdoVpXPCntDufDR', '2016-08-21 17:30:25', '2016-09-03 06:58:04', '', '', '', '', '', '', '', '', ''),
(6, 'Lý Bảo Anh', '6', 'lybaoanh@gmail.com', 0, '$2y$10$YJasrH0w7TCMETRbDOJDZuAyov1fTb8JUcqOBuZf.63HY6oig.7ie', 0, '31a95663cd826217f2dfe70857668ec2.jpg', '', '', '', 'Ngữ văn', 'Trống rỗng', '0000-00-00', 1, '', 1, 0, '', '', 0, '', '', '0', '1', 'mrhlwTEH2eHRHnBszyJh5WojsKUiEq7ksVKywDtEAk4LK3WQnYAqefFXQHeT', '2016-08-30 16:04:18', '2016-08-30 16:04:33', '', '', '', '', '', '', '', '', ''),
(7, 'admin', '7', 'admin@gmail.com', 1674644053, '$2y$10$iz/MvQmDi25uKZRpOw2bCuRHCAxYNSsH6PZn/bT/3YH3Mc60KYf.e', 0, '12805904_1357669444259322_328062833020822169_n.jpg', '1', 'Bình Thạnh', '', '', '<p>Trống rỗng</p>\r\n', '123123', 0, '', 1, 0, '', '', 0, '{"class_group":{"subject":"1231","price":"23123","content":" 12312","method":"3123123"}}', '<p>- Background:</p>\r\n\r\n<p>My name is Zeeshan Abid {scientifically, its Zinc! ;-) } I am a scientist and its my passion, not profession. I took IELTS 2 years ago and got 8 band.</p>\r\n\r\n<p>I started learning English at the age of 3 and I&#39;ve been surrounded by it for whole of my life in every possible way.</p>\r\n\r\n<p>Currently, I&rsquo;m performing scientific research and tutoring online in my free timings. To specify, I teach techniques for IELTS speaking and writing and offer courses for English communication, interview and debating skills. I&rsquo;m also offering assistance in making corrections of written transcripts [films subtitles, translations of books, curriculum, office statements, essays etc]. Apart from this, I also teach professional media editing and graphics designing softwares.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>- Personality and hobby :</p>\r\n\r\n<p>Personally I&#39;m a self-motivated person who can&#39;t seem to just settle down, who lives for adventure. My friends think I&#39;m a riddle wrapped up in a mystery. :p</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>I&rsquo;m particularly engrossed in self-awareness, interpreting omens and living for the moment. Having adventures, exploring new things, playing with children and sitting with old, befriending with white and black, poor and rich and mingling with the people belonging to various nations, religions and cultures have always fascinated me. I love sharing concepts and ideas to approach the unapproachable and to imagine the unimaginable things and I&rsquo;ve been using English as a medium to help this craving passion and curiosity.</p>\r\n', '0', '1', 'c0tQw2Ef9YDcaAsOdGm5o5NkqbcQbNuGObFT6JJROJRf71GU6yjHlz1D8Cnl', '2016-09-10 10:13:30', '2017-07-09 14:09:06', '', '', '', '', '', '', '', '', ''),
(8, 'Bảo Anh', '8', 'baoanh@witayl.com', 3523154, '$2y$10$iz/MvQmDi25uKZRpOw2bCuRHCAxYNSsH6PZn/bT/3YH3Mc60KYf.e', 1, '486856_152504521576279_1535443610_n.jpg', '3', '', '', 'Trống rỗng', '<p>Trống rỗng</p>\r\n', 'Xin chào các bạn', 2, '2017-06-14', 1, 1, '', 'Công nghệ thông tin', 0, '', '', '0', '1', '', '2016-09-19 19:31:10', '2016-09-19 19:31:10', '00-31-032017061820170127_145035_mix01.jpg', '', '', '["05-05-49-2017-06-18--640x360 (1).jpg"]', '', '', '', '', ''),
(19, 'Nguyễn Nam Thành', '19', 'namthanh@gmail.com', 0, '$2y$10$guJ/agjNROczdqBqM6czwOPAHeyrU9d.Y4ZM4f4hzgHWV2GCymkN6', 0, '15241820_1045855955539994_8241102179935298978_n.jpg', '', '', '', '', 'Trống rỗng', '', 2, '', 1, 0, '', '', 0, '', '', '0', '1', 'Q1bkhFcqfJPLhDMJ0UUhhkCO8TJHZnEkg2ONUmsqO3b7AE11cFut1JYOnJWE', '2017-07-01 18:22:23', '2017-07-01 23:24:23', '', '', '', '', '', '', '', '', ''),
(20, 'ga', '20', 'kiati@gmail.com', 0, '$2y$10$VxTt04T4/sXf9vH7QQsxD.unlAYaUsPJpSWcKhedZ/6o/FAxQrNjm', 0, 'hocvien.jpg', '', '', '', '', '', '', 1, '', 1, 0, '', '', 0, '', '', '0', '1', 'W5phKQ03NWiGTShzUavqRSqq2LhgO0sJ9qkMpXtjs2Sbz9hcGoEssj9Yd3dU', '2017-07-01 23:25:06', '2017-07-02 00:41:18', '', '', '', '', '', '', '', '', ''),
(21, 'Trần Ngọc Thảo', '21', 'uyenuyen0302@gmail.com', 0, '$2y$10$ipC0PfY5O3k9VfC8QVwpXuCblR/yMS6Vy24P7FnfNxwAO5ObpVHrO', 0, '15-45-332017070322d4490ca3234d1ef2fca1c6cea8c1a6--korean-hairstyles-pretty-asians.jpg', '2', '12 Ao Đôi, phường Bình Trị Đông A', 'Bình Tân', 'Toán', '<p>Xin ch&agrave;o mọi người!</p>\r\n\r\n<p>M&igrave;nh l&agrave; Ngọc Thảo, hiện tại m&igrave;nh đang l&agrave; sinh vi&ecirc;n năm 3 khoa kế to&aacute;n trường đại học Kinh tế TpHCM.</p>\r\n\r\n<p>M&igrave;nh đ&atilde; từng c&oacute; 3 năm kinh nghiệm giảng dạy to&aacute;n cho c&aacute;c học sinh cấp 2. C&aacute;c em đều c&oacute; những th&agrave;nh t&iacute;ch rất tốt sau khi được m&igrave;nh giảng dạy. Do vậy, m&igrave;nh tin chắc c&aacute;c em học sinh v&agrave; qu&yacute; phụ huynh c&oacute; thể đặt niềm tin ở nơi m&igrave;nh.</p>\r\n\r\n<p>M&igrave;nh sẽ dạy thử miễn ph&iacute; 3 buổi.</p>\r\n\r\n<p>Nếu cần gia sư to&aacute;n cấp hai chất lượng v&agrave; tận t&acirc;m, qu&yacute; phụ huynh v&agrave; c&aacute;c em học sinh h&atilde;y li&ecirc;n hệ m&igrave;nh nh&eacute;.</p>\r\n\r\n<p>Th&acirc;n</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Giúp học viên nắm chắc kiến thức và học giỏi Toán. Môn toán sẽ trở nên dễ dàng hơn rất nhiều', 2, '1992-02-03', 1, 0, '', 'Toán', 0, '', '', '0', '1', '0OlcOiVcVjxhm1PKKbEUt4PU2lbYhL5WxqmzRJaI0foINUkJC9hc7OKPdXX6', '2017-07-03 11:51:40', '2017-07-04 10:17:57', '15-48-1520170703o-BOOK-COFFEE-facebook.jpg', '["16-04-09==2017-07-03==-15267612_1251129444952040_3633706963732169078_n.jpg"]', '', '["16-04-28-2017-07-03--_gnPxlVO.jpg"]', '3', '??i h?c Kinh t? TPHCM', 'H? Ch? Minh', '', ''),
(22, 'Phụ huynh khó tính', '22', 'uyendao0302@gmail.com', 0, '$2y$10$b2G7yyEllb6i.rZA98PWiuF5uJ15J4SybP.Q2Au8gilelspt41uMi', 0, '18739627_184751208717890_8894181257290486855_n.jpg', '', '', '', '', '', '', 3, '', 1, 0, '', '', 0, '', '', '0', '1', '', '2017-07-04 10:25:10', '2017-07-04 10:25:10', '', '', '', '', '', '', '', '', ''),
(23, 'Lý Bảo Hân', '23', 'baohan@gmail.com', 0, '$2y$10$5F6I6s69N8A3u22XYJSwqeX0Hnf4imoLzC4He6tde97CmhMQ12eB2', 0, 'giasu.jpg', '', '', '', '', '', '', 2, '', 1, 0, '', '', 0, '', '', '0', '1', '', '2017-07-05 05:33:46', '2017-07-05 05:33:46', '', '', '', '', '', '', '', '', ''),
(24, '', '', '', 0, '', 0, '', '', '', '', '', '', '', 0, '', 0, 0, '', '', 0, '', '', '', '', '', '2017-07-10 09:57:28', '2017-07-10 09:57:28', '', '', '', '', '', '', '', '', ''),
(25, '', '', '', 0, '', 0, '', '', '', '', '', '', '', 0, '', 0, 0, '', '', 0, '', '', '', '', '', '2017-07-10 09:59:45', '2017-07-10 09:59:45', '', '', '', '', '', '', '', '', ''),
(26, '', '', '', 0, '', 0, '', '', '', '', '', '', '', 0, '', 0, 0, '', '', 0, '', '', '', '', '', '2017-07-10 10:02:12', '2017-07-10 10:02:12', '', '', '', '', '', '', '', '', ''),
(27, '', '', '', 0, '', 0, '', '', '', '', '', '', '', 0, '', 0, 0, '', '', 0, '', '', '', '', '', '2017-07-10 10:03:02', '2017-07-10 10:03:02', '', '', '', '', '', '', '', '', ''),
(28, '', '', '', 0, '', 0, '', '', '', '', '', '', '', 0, '', 0, 0, '', '', 0, '', '', '', '', '', '2017-07-10 10:03:40', '2017-07-10 10:03:40', '', '', '', '', '', '', '', '', ''),
(29, '', '', '', 0, '', 0, '', '', '', '', '', '', '', 0, '', 0, 0, '', '', 0, '', '', '', '', '', '2017-07-10 10:08:27', '2017-07-10 10:08:27', '', '', '', '', '', '', '', '', ''),
(30, '', '', '', 0, '', 0, '', '', '', '', '', '', '', 0, '', 0, 0, '', '', 0, '', '', '', '', '', '2017-07-10 10:12:06', '2017-07-10 10:12:06', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE IF NOT EXISTS `vouchers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voucher` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

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

CREATE TABLE IF NOT EXISTS `wigets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `value` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `wigets`
--

INSERT INTO `wigets` (`id`, `name`, `value`, `updated_at`, `created_at`) VALUES
(1, 'Slider chính', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Câu hỏi', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Môn học', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Vì sao', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
