-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 01:30 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id_city` int(5) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id_city`, `city`) VALUES
(1, 'Đà Nẵng'),
(2, 'Quảng Nam');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `idCATEGORY` int(100) NOT NULL,
  `TenDM` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`idCATEGORY`, `TenDM`) VALUES
(4, 'Thể thao'),
(5, 'Thời sự'),
(10, 'Du lịch'),
(11, 'Bóng đá'),
(12, 'Văn hóa');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id_dis` int(10) NOT NULL,
  `Quận/Huyện` varchar(100) NOT NULL,
  `id_city` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id_dis`, `Quận/Huyện`, `id_city`) VALUES
(1, 'Liên chiểu', 1),
(2, 'Cẩm Lệ', 1),
(3, 'Hải Châu', 1),
(4, 'Thanh Khê', 1),
(5, 'Ngũ Hành Sơn', 1),
(6, 'Thăng Bình', 2),
(7, 'Quế Sơn', 2),
(8, 'Đại Lộc', 2),
(9, 'TP Tam kỳ', 2),
(10, 'Hội An', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID` int(100) NOT NULL,
  `TITLE` varchar(100) NOT NULL,
  `DECRIPTION` varchar(100) NOT NULL,
  `dayUp` date NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(100) NOT NULL,
  `TITLE` text NOT NULL,
  `DECRIPTION` text NOT NULL,
  `CONTENT` text NOT NULL,
  `IMG` text NOT NULL,
  `DAYUP` date NOT NULL,
  `idCATEGORY` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `TITLE`, `DECRIPTION`, `CONTENT`, `IMG`, `DAYUP`, `idCATEGORY`) VALUES
(4, 'Antoine Hey - \'Joachim Low\' của bóng đá Myanmar ', 'HLV người Đức từng vượt qua hơn 70 ứng viên, trước khi được Liên đoàn Bóng đá Myanmar bổ nhiệm vào chiếc ghế nóng.', 'Antoine Hey - \'Joachim Low\' của bóng đá Myanmar\r\nHLV người Đức từng vượt qua hơn 70 ứng viên, trước khi được Liên đoàn Bóng đá Myanmar bổ nhiệm vào chiếc ghế nóng.\r\nMyanmar tập mở trước truyền thông Việt Nam / HLV Myanmar: \'Chúng tôi biết rõ điểm yếu của tuyển Việt Nam\'\r\nĐánh bại hơn 70 đối thủ\r\n\r\nTrước khi được Liên đoàn bóng đá Myanmar (MFF) bổ nhiệm vào tháng 5/2018, Antoine Hey từng được lãnh đạo bóng đá nước này tiếp cận từ năm 2010. Thời điểm đó, HLV Drago Mamic vừa chia tay Myanmar, và MFF muốn có một kế hoạch dài hơi cho việc đào tạo, phát triển và sử dụng lứa cầu thủ tài năng như Aung Thu, Kyaw Ko Ko. Tuy nhiên, ý định của MFF bất thành, bởi Hey đã ký hợp đồng với Libya. \r\n\r\nLibya chỉ là một trong số nhiều điểm dừng chân của Hey trong 15 năm làm nghề HLV. Ông từng qua Lesotho, Gambia, Liberia, Kenya và Rwanda trước khi đến Myanmar. Năm 2010, khi được MFF tiếp cận, là thời gian khó khăn với nhà cầm quân người Đức. Ông vừa thất bại trước Nigeria ở vòng loại World Cup 2010 và không thể giành vé dự CAN 2010 do đội tuyển Kenya đứng chót bảng. Hey muốn tìm hướng đi mới cho sự nghiệp và nhận lời làm Giám đốc kỹ thuật cho Liên đoàn Bóng đá Libya bốn năm, từ 2010 đến 2014, sau đó giữ chức vụ tương tự ở Liên đoàn bóng đá Bahrain từ 2015 đến 2016.\r\n\r\nHLV Antoine Hey (mặc vest) trong buổi ký hợp đồng với MFF. Ảnh: MMT.\r\nHLV Antoine Hey (mặc vest) trong buổi ký hợp đồng với MFF. Ảnh: MMT.\r\n\r\nKinh qua nhiều chức vụ và địa điểm làm việc khác nhau, nhưng tình yêu với nghề HLV vẫn tiềm ẩn trong nhà cầm quân sinh tại Berlin. Tháng 11/2016, Hey quay lại với băng ghế chỉ đạo, ở CLB Al-Merrikh của Sudan. Dù vậy, ông bị sa thải chỉ hai tháng sau đó vì thành tích nghèo nàn. Hey nhanh chóng tìm được việc mới sau đó một tháng, với thử thách lần này là ở đội tuyển Rwanda. Ông ở quốc gia Trung Phi gần một năm, trước khi tái ngộ với bóng đá Myanmar, tám năm sau lần bén duyên hụt.\r\n\r\n\"Nếu không có niềm tin vào thành công, có lẽ tôi đã không nhận công việc này\", Antoine Hey phát biểu trong buổi nhậm chức ở MFF. \"Tôi chưa có hiểu biết nhiều về cầu thủ Myanmar nhưng tin chắc mình sẽ thành công cùng đội tuyển Myanmar. Tôi từng xem đội tuyển này thi đấu khoảng năm trận, bao gồm cả trận giao hữu với Leeds United. Tôi cần xem kỹ lại từng vị trí của Myanmar, trước khi quyết định sử dụng chiến thuật nào cho đội. Tôi sẽ lựa chọn cầu thủ dựa trên phong độ, chứ không phải vì tuổi tác hay CLB mà họ chơi. Tôi có cả một ban huấn luyện sẽ giúp mình làm những việc này\".\r\n\r\nBóng đá Myanmar có xu hướng chệch quỹ đạo phát triển trong vài năm gần đây, dù họ sở hữu lứa cầu thủ trẻ tài năng từng dự U20 World Cup 2015. Việc chỉ vào bán kết SEA Games 28 (năm 2015) và bán kết AFF Cup 2016 được cho là không đáp ứng được kỳ vọng của lãnh đạo MFF. Điều này thể hiện rõ qua phát biểu của Giám đốc kỹ thuật MFF, Tin Myint Aung. Ông tâm sự: \"Có rất nhiều HLV đã ứng tuyển cho vị trí này, cả từ châu Âu lẫn châu Á, trong đó rất nhiều người quốc tịch Đức. Yếu tố quan trọng nhất được chúng tôi xem xét với các ứng viên là kinh nghiệm với đội tuyển quốc gia. Chúng tôi có nhiều cái tên xuất sắc nhưng họ chỉ mới dẫn dắt các CLB. Hey, vì thế, là một trường hợp đặc biệt. Ông ấy đã dẫn dắt năm đội tuyển quốc gia. Chúng tôi cũng thích triết lý bóng đá của ông ấy, và đó là lý do tại sao MFF bổ nhiệm Hey\".\r\n\r\nLời của Tin Myint Aung được tờ Myanmar Times xác nhận. Vào đầu năm 2018, hơn 70 HLV đã nộp đơn tới MFF. Với mức đãi ngộ tốt, cộng với một nền kinh tế đang thời mở cửa và phát triển, Myanmar trở thành điểm đến lý tưởng cho những HLV trẻ như Hey thể hiện tài năng. Ông được mời ký hợp đồng một năm rưỡi, và sớm bắt tay vào công việc chỉ vài ngày sau lễ ký, với chuyến du đấu tại Nam Ninh, Trung Quốc.\r\n\r\nHLV Antoine Hey ngoài đường biên chỉ đạo học trò ở AFF Cup 2018. Ảnh: AFF.\r\nHLV Antoine Hey ngoài đường biên chỉ đạo học trò ở AFF Cup 2018. Ảnh: AFF.\r\n\r\nJoachim Low của Myanmar\r\n\r\nTruyền thông Myanmar đón nhận Antoine Hey với nhiều niềm tin và hy vọng. Sau thành công của HLV Park Hang-seo cùng Việt Nam, xứ chùa tháp hy vọng nhà cầm quân sinh năm 1970 sẽ trở thành một Joachim Low của bóng đá Myanmar, giúp đội tuyển nước này khôi phục thanh thế giống những năm đầu của thập niên 90.\r\n\r\nTrong vòng nửa năm, kể từ khi nhậm chức, Antoine Hey liên tục đi khắp Myanmar xem giò cầu thủ. Sau chuyến du đấu và tập huấn ở Trung Quốc, Hey trở về Myanmar để chọn đội hình Olympic dự Asiad 2018. Giữa tháng Bảy, đội tuyển Olympic Myanmar hội quân và có giải đấu giao hữu tại quê nhà với Bahrain, Thái Lan và Hàn Quốc. Cuối tháng Tám, thầy trò Antoine Hey sang Indonesia dự Asiad và gây tiếng vang khi đánh bại Iran 2-0 ở lượt trận cuối vòng bảng. Dù có cùng bốn điểm như ba đội xếp trên, Myanmar bị loại vì thua hiệu số bàn thắng thua. Tuy không giành quyền vào vòng 1/8, dấu ấn tại Asiad của Hey được báo giới Myanmar đánh giá cao, bởi đó mới là giải đấu chính thức đầu tiên của nhà cầm quân người Đức.\r\n\r\nGiống Việt Nam, Myanmar sử dụng rất nhiều cầu thủ trẻ tại AFF Cup 2018. Trong 23 cầu thủ Myanmar dự giải, 15 người ở độ tuổi U23. Những trụ cột của đội tuyển Myanmar hiện nay như tiền đạo Aung Thu, tiền vệ Maung Maung Soe, trung vệ Nanda Kyaw đều từng dự U20 World Cup 2015.\r\n\r\nHey từng nói một câu nổi tiếng rằng: \"Mọi sự so sánh đều khập khiễng. Myanmar từng thua Hàn Quốc 0-2, nhưng Đức cũng thất bại với tỷ số trước Hàn Quốc ở World Cup 2018\". Ông cũng chủ trương linh hoạt trong cách vận dụng lối chơi khi thừa nhận, bóng đá Myanmar chịu ảnh hưởng lớn từ Ngoại hạng Anh và La Liga. \"Bayern Munich và bóng đá Đức thực sự chưa có chỗ đứng tại nơi đây\", ông bộc bạch.\r\n\r\nHLV Antoine Hey (áo sơ mi sáng màu) cùng Ban huấn luyện đội tuyển Myanmar. Ảnh: Reuters.\r\nHLV Antoine Hey (áo sơ mi sáng màu) cùng Ban huấn luyện đội tuyển Myanmar. Ảnh: Reuters.\r\n\r\nỞ một môi trường lạ lẫm, với nhiều nét khác biệt về văn hoá, Hey vẫn giữ sự lạc quan. Ông bày tỏ: \"Nhiều vùng ở Myanmar có điều kiện kinh tế, xã hội tốt hơn hẳn những quốc gia châu Phi tôi từng làm việc. Trong mắt tôi, bóng đá Myanmar có tiềm năng to lớn để phát triển. Tôi tin đất nước này sẽ có nhiều cái để nói trong tương lai\".\r\n\r\nMỗi lần xuất hiện trước công chúng, Antoine Hey luôn giữ hình ảnh chau chuốt, một nét rất giống với Joachim Low. Khi chỉ đạo học trò thi đấu, ông cũng thường diện áo sơ mi, thay vì mặc đồ thể thao giống các thành viên trong ban huấn luyện. Khi được hỏi về việc so sánh với Joachim Low, nhà cầm quân 48 tuổi chia sẻ: \"Cả hai chúng tôi cùng có điểm chung ở tính chất công việc. Khi làm HLV của một đội tuyển, cái mà bạn thể hiện chính là bộ mặt của một quốc gia\".\r\n\r\nLúc 18h30 hôm nay, Hey và đội tuyển Myanmar sẽ gặp Việt Nam trong trận cầu có tính quyết định cơ hội đi tiếp ở bảng A AFF Cup 2018. Hai đội đang chia sẻ đỉnh bảng, với cùng sáu điểm và hiệu số bàn thắng - bại là +5. Ở lượt trận cuối, Myanmar phải làm khách trên sân Malaysia, trong khi Việt Nam được đá trên sân nhà, tiếp đối thủ yếu nhất bảng Campuchia. ', 'hau.jpg', '2019-11-26', 0),
(5, 'CLB Heerenveen vinh danh Đoàn Văn Hậu trước CĐV nhà ', 'Đội bóng của Hà Lan chúc mừng hậu vệ Đoàn Văn Hậu cùng Việt Nam giành HC vàng SEA Games 30....', 'Đội bóng của Hà Lan chúc mừng hậu vệ Đoàn Văn Hậu cùng Việt Nam giành HC vàng SEA Games 30....', 'aa.jpg', '2019-12-14', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id_city`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idCATEGORY`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id_dis`),
  ADD KEY `id_city` (`id_city`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `idCATEGORY` (`idCATEGORY`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `idCATEGORY` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `district_ibfk_1` FOREIGN KEY (`id_city`) REFERENCES `address` (`id_city`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
