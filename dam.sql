-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2023 lúc 04:07 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ngay_bl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_kh`, `ma_hh`, `ngay_bl`) VALUES
(5, 'abc', 8, 3, '2022-10-05'),
(6, 'CMT', 9, 13, '2023-10-01'),
(11, 'vip', 9, 13, '2023-10-23'),
(12, 'Đẹp', 9, 3, '2023-10-23'),
(14, 'ngon đấy\r\n', 8, 14, '2023-10-23'),
(17, 'Samsung xịn đấy', 8, 14, '2023-10-24'),
(19, 'Đù vip', 8, 24, '2023-10-24'),
(20, 'Nokia eww', 8, 19, '2023-10-24'),
(21, 'nokia vip đấy', 8, 20, '2023-10-24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(255) NOT NULL,
  `don_gia` int(50) NOT NULL,
  `giam_gia` float NOT NULL DEFAULT 0,
  `hinh` text NOT NULL,
  `ngay_nhap` date NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `dac_biet` varchar(255) NOT NULL DEFAULT 'Thường',
  `so_luot_xem` int(50) NOT NULL DEFAULT 0,
  `mo_ta` text NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `ma_loai`, `dac_biet`, `so_luot_xem`, `mo_ta`, `deleted`) VALUES
(3, 'iPhone 14 Pro Max 128GB | Chính hãng VN/A', 26690000, 1.2, 'https://cdn2.cellphones.com.vn/200x/media/catalog/product/3/_/3_51_1_7.jpg', '2023-10-11', 1, 'Đặc Biệt', 2, 'iPhone 14 Pro Max sở hữu thiết kế màn hình Dynamic Island ấn tượng cùng màn hình OLED 6,7 inch hỗ trợ always-on display và hiệu năng vượt trội với chip A16 Bionic. Bên cạnh đó máy còn sở hữu nhiều nâng cấp về camera với cụm camera sau 48MP, camera trước 12MP dùng bộ nhớ RAM 6GB đa nhiệm vượt trội. Cùng phân tích chi tiết thông số siêu phẩm này ngay sau đây.', 1),
(11, 'iPhone 15 128GB | Chính hãng VN/A', 21690000, 1.1, 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/i/p/iphone-15-plus_1__1.png', '2023-10-19', 1, 'Thường', 0, 'iPhone 15 128GB được trang bị màn hình Dynamic Island kích thước 6.1 inch với công nghệ hiển thị Super Retina XDR màn lại trải nghiệm hình ảnh vượt trội. Điện thoại với mặt lưng kính nhám chống bám mồ hôi cùng 5 phiên bản màu sắc lựa chọn: Hồng, Vàng, Xanh lá, Xanh dương và đen. Camera trên iPhone 15 series cũng được nâng cấp lên cảm biến 48MP cùng tính năng chụp zoom quang học tới 2x. Cùng với thiết kế cổng sạc thay đổi từ lightning sang USB-C vô cùng ấn tượng.', 1),
(13, 'iPhone 15 Pro Max 512GB | Chính hãng VN/A', 40990000, 1.05, 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/i/p/iphone-15-pro-max_5.png', '2023-10-21', 1, 'Đặc Biệt', 7, 'iPhone 15 Pro Max 512GB là sự kết hợp hoàn hảo giữa dung lượng lưu trữ lớn, hiệu suất mạnh mẽ và màn hình xuất sắc. Điều này khiến giá iPhone 15 Pro Max cũng cao nhất trong series iPhone mới năm 2023. Cùng tìm hiểu ngay model Pro Max 512GB trong series điện thoại iPhone 15 có gì nổi bật đáng chú ý nhé:\r\n\r\nBộ nhớ trong lớn 512GB: Với không gian lưu trữ này, bạn sẽ không bao giờ lo lắng về việc không đủ chỗ để lưu trữ ảnh, video và ứng dụng yêu thích.\r\n\r\nHiệu suất đỉnh cao: Với việc được trang bị chipset A17 Pro tiên tiến, iPhone 15 Pro Max 512GB có thể đáp ứng mọi nhu cầu về hiệu suất. Với CPU nhanh hơn đến 10% và GPU mạnh mẽ hơn đến 20%, chiếc điện thoại này giúp bạn thực hiện mọi tác vụ mượt mà và nhanh chóng.\r\n\r\nMàn hình chất lượng vượt trội: Màn hình OLED 120Hz độ phân giải cao và mật độ điểm ảnh ấn tượng trên iPhone 15 Pro Max 512GB đem đến trải nghiệm xem video và chơi game vượt trội. Hình ảnh sống động, sắc nét cùng với khả năng điều chỉnh màu sắc tự động tạo nên một trải nghiệm tuyệt vời cho người dùng.\r\n\r\nNếu cần lưu trữ nhiều hơn, điện thoại iPhone 15 Pro Max 1TB có lẽ là lựa chọn hoàn hảo dành cho bạn.', 1),
(14, 'Samsung Galaxy S22 Ultra (8GB - 128GB)', 16000000, 1.5, 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/s/m/sm-s908_galaxys22ultra_front_burgundy_211119.jpg', '2023-10-23', 2, 'Thường', 6, 'Đúng như các thông tin được đồn đoán trước đó, mẫu flagship mới của gả khổng lồ Hàn Quốc được ra mắt với tên gọi là Samsung Galaxy S22 Ultra với nhiều cải tiến đáng giá. Mẫu điện thoại cao cấp đến từ Samsung này có nhiều thay đổi từ thiết kế, cấu hình cho đến camera. Vậy siêu phẩm này có gì mới, giá bao nhiêu và có nên mua không? Hãy cùng tìm hiểu chi tiết ngay bên dưới nhé!', 1),
(15, 'Samsung Galaxy A34 5G 8GB 128GB', 7000000, 1.3, 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/s/a/samsung-galaxy-a34_3_.jpg', '2023-10-23', 2, 'Thường', 0, 'Samsung Galaxy A34 là sản phẩm được đánh giá \"đáng đồng tiền bát gạo\" trong phân khúc tầm trung. Samsung A34 sở hữu màn hình Super AMOLED 6.6 inch với tần số quét lên đến 120Hz, độ sáng lên đến 1.000 nits. Thêm vào đó là dung lượng siêu bền bỉ 5.000mAh có thể sử dụng lên đến 2 ngày kết hợp với camera sắc nét tích hợp công nghệ chống rung OIS. Đặc biệt, thiết kế trẻ trung năng động, thời thượng với viền kim loại tinh giản và các góc được bo tròn mềm mại.', 1),
(18, 'Điện thoại Nokia 8210 4G 128MB', 1500000, 1, 'https://cdn2.cellphones.com.vn/insecure/rs:fill:0:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/d/v/dvdv.png', '2023-10-24', 4, 'Đặc Biệt', 14, 'Nokia 8210 4G có thể coi là làn gió mới của thương hiệu Nokia. Dòng điện thoại này vừa mang xu hướng cổ điển, vừa mang một chút hiện đại và là phiên bản nâng cấp của dòng Nokia 8210 truyền thống. Đây là một sản phẩm nằm trong phân khúc giá rẻ và phù hợp với những ai chỉ sử dụng điện thoại với nhu cầu nghe, gọi, nhắn tin cơ bản.\r\n\r\nNokia 8210 4G – Nét đẹp cổ điển với cấu hình được nâng cấp\r\nNokia 8210 4G có thiết kế được lấy ý tưởng từ chiếc smartphone đời cũ của Nokia 8210. Tuy nhiên trong lần ra mắt này, chiếc điện thoại đã được nâng cấp về ngoại hình, bóng bẩy và hút mắt hơn so với phiên bản cũ. Cùng với đó, các bộ phận khác của chiếc smartphone đã được cải tiến rất nhiều, hứa hẹn mang đến một thiết bị tuyệt vời cho người dùng.', 1),
(19, 'Nokia C21 Plus 2GB 32GB', 1600000, 1.1, 'https://cdn2.cellphones.com.vn/insecure/rs:fill:0:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/n/o/nokia-c21-plus-600x600_6.jpg', '2023-10-24', 4, 'Thường', 5, 'Nokia C21 Plus sở hữu bộ đôi camera sau 13MP+2MP. Trong đó, camera chính của điện thoại Nokia C21 Plus còn hỗ trợ thêm tính năng chụp góc rộng kèm theo tự động lấy nét giúp bạn có thể thỏa sức sáng tạo nên những bức ảnh bắt trọn nhiều khoảnh khắc đáng nhớ. Ngoài ra, camera phụ 2,P hỗ trợ chế độ chụp chân dung tạo nên những bức ảnh nghệ thuật đỉnh cao. ', 1),
(20, 'Nokia 150', 900000, 1, 'https://cdn2.cellphones.com.vn/insecure/rs:fill:0:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/n/o/nokia-150.png', '2023-10-24', 4, 'Đặc Biệt', 3, 'Nokia 150 là một chiếc điện thoại có màn hình màu 2.4 inch TFT với độ phân giải QVGA và bàn phím vật lý truyền thống, giúp dễ dàng sử dụng và hiển thị nội dung một cách rõ nét. Nokia 150 cung cấp khả năng lưu trữ với bộ nhớ trong 4MB và hỗ trợ thẻ nhớ microSD mở rộng lên đến 32GB. Điện thoại được trang bị camera 0,3 megapixel ở phía sau, cho phép chụp ảnh đơn giản. Với viên pin 1020mAh, Nokia 150 có thời gian chờ lên đến 19.4 giờ.\r\n\r\nNokia 150 – Sự hoàn hảo của đơn giản và tiện ích trong một chiếc điện thoại\r\nNokia 150 đang được đánh giá rất cao và là sự lựa chọn tuyệt vời cho những người muốn sở hữu một chiếc điện thoại di động đơn giản nhưng vẫn mang lại những tính năng tiện ích. Với thiết kế chắc chắn và kích thước nhỏ gọn, Nokia 150 dễ dàng vừa vặn trong lòng bàn tay và thuận tiện mang đi bất cứ đâu.', 1),
(21, 'OPPO Reno10 5G 8GB 256GB', 11000000, 1.4, 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/r/e/reno10_5g_-_combo_product_-_blue.png', '2023-10-24', 11, 'Thường', 0, 'Điện thoại OPPO Reno 10 sở hữu hiệu năng vô cùng mạnh mẽ khi được trang bị chipset MediaTek Dimensity 7050. Chất lượng hình ảnh của máy có độ sắc nét, mượt mà nhờ sở hữu tấm nền 3D AMOLED hiện đại với độ phân giải FHD+ 2412 × 1080 pixel cùng tần số quét 120Hz. Bên cạnh đó, Reno 10 còn sở hữu một vài ưu điểm khác như dung lượng Pin 5000mAh với sạc nhanh SUPERVOOC 67W cùng cụm camera 64MP sắc nét giúp nâng cao trải nghiệm của người dùng.', 1),
(22, 'Xiaomi 13T 12GB 256GB', 14000000, 1.2, 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/x/i/xiaomi-13t_1_2.png', '2023-10-24', 12, 'Thường', 0, 'Xiaomi 13T đem tới trải nghiệm siêu mượt mà cho người dùng khi được trang bị chipset mạnh mẽ MediaTek Dimensity 8200-Ultra. Màn hình AMOLED thế hệ mới với tần số quét 144Hz giúp chất lượng hiển thị được sắc nét và chân thực trong từng điểm ảnh. Hệ thống quay chụp của máy cũng cực kỳ ấn tượng với cảm biến camera lên tới 50MP. Đồng thời, viên pin lên tới 5000mAh kết hợp với sạc nhanh 67W giúp nâng cao thời lượng sử dụng của người dùng.', 1),
(23, 'OPPO Find N2 Flip', 18990000, 1.1, 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/n/2/n2_flip_-_combo_product_-_black.png', '2023-10-24', 11, 'Thường', 1, 'OPPO Find N2 Flip - Màn hình gập không nếp gấp, camera gương thần ấn tượng\r\nOPPO Find N2 Flip dự kiến sẽ là chiếc điện thoại khiến nhiều tín đồ công nghệ quan tâm khi sở hữu thiết kế bắt mắt, cùng màn hình ấn tượng. Đi cùng với đó là hệ thống camera của thiết bị cũng cao cấp không kém khi tích hợp đầy đủ các cảm biến, cùng đa dạng tính năng chụp ảnh.\r\n\r\nCùng với sự thành công vang dội của Find N2 Flip, OPPO sắp tung ra Find N3 Flip mới nhất 2023 với nhiều cải tiến hơn. Vậy điện thoại gập OPPO Find N3 Flip giá bao nhiêu và có gì nổi bật? Tìm hiểu ngay để không bỏ lỡ các ưu đãi hấp dẫn khi mua OPPO N3 Flip tại CellphoneS.\r\n\r\nMàn hình gập không nếp gấp, màn hình phụ kích thước lớn\r\nTrên thị trường hiện tại, các dòng điện thoại Flip đa số vẫn chưa giải quyết được vấn đề nếp nhăn xuất hiện ở phần màn hình gập. Tuy nhiên đến với OPPO Find N2 Flip, bạn sẽ có được trải nghiệm hoàn toàn mới – GẬP KHÔNG NẾP GẤP. Tất cả là nhờ vào bản lề cao cấp có độ bền 10 năm được chế tạo từ vật liệu chuyên dụng trong ngành hàng không. Đây chính là thành quả đột phá của quá trình nghiên cứu và phát triển của OPPO trong suốt 5 năm đối với dòng điện thoại gập.\r\n\r\nOPPO Find N2 Flip - Màn hình gập không nếp gấp, camera gương thần ấn tượng\r\n\r\nNgoài ra, OPPO Find N2 Flip sẽ sở hữu hai màn hình với kích thước, cùng những thông số về cấu hình khác nhau. Theo đó màn hình phụ kích thước 3.26 inch rộng rãi, tấm nền AMOLED, tần số quét 60Hz, cùng độ phân giải 720x382. Nhờ vậy, bạn có thể xem được các thông báo một cách liền mạch, trực quan và sắc nét hơn. Đồng thời, các phím tắt ở màn hình này được tích hợp vào nhằm hỗ trợ tùy chỉnh nhanh và tiết kiệm thời gian.\r\n\r\nMàn hình\r\n\r\nMàn hình chính của thiết bị sẽ có kích thước là 6.8 inch, với cùng một tấm nền AMOLED và tần số 120Hz. Tuy nhiên, độ phân giải của màn hình lớn sẽ có một chút khác biệt là Full HD+.\r\n\r\nMàn hình phụ\r\n\r\nCamera gương thần với bộ xử lý hình ảnh MariSilicon X\r\nỞ mỗi màn hình trong và ngoài của smartphone Find N2 Flip đều được OPPO trang bị một chiếc camera selfie có độ phân giải 32MP. Như vậy, dù thiết bị đang được gập lại, hay mở ra, người dùng đều có thể chụp những bức ảnh selfie hay thực hiện cuộc gọi video.\r\n\r\nĐiểm nhấn ở dòng flaghip này nằm ở những tính năng cao cấp mà hãng tích hợp trong máy. Cụ thể hơn, điện thoại sở hữu:\r\n\r\n- Chụp ảnh tự sướng FlexForm thông qua cử chỉ\r\n\r\n- Chụp ảnh tầm thấp\r\n\r\n- Chế độ quay video cầm tay\r\n\r\nOPPO Find N2 Flip - Màn hình gập không nếp gấp, camera gương thần ấn tượng\r\n\r\nCùng với đó, thiết bị còn được trang bị công nghệ cao cấp, bao gồm cảm biến Sony và bộ xử lý hình ảnh NPU mang tên MariSilicon X. Nhờ vậy, ảnh chụp trở nên rõ ràng sắc nét kể cả trong điều kiện ánh sáng kém. Hệ thống camera man đến cảm giác chân thực như đang thao tác trên máy ảnh Hasselblad. Từ âm thanh màn trập mang tính biểu tượng cho đến chế độ Xpan huyền thoại, thiết bị còn kết hợp bộ lọc màu Hasselblad cho cảm giác chân thực đáng kinh ngạc.\r\n\r\nCamera gương thần với bộ xử lý hình ảnh MariSilicon X\r\n\r\nOPPO Find N2 Flip sở hữu cụm camera: camera chính 50MP, camera góc siêu rộng 8MP và camera selfie 32MP. Nhờ độ phân giải cao, cảm biến đi kèm và công nghệ cao cấp mà người dùng có thể bắt trọn mọi khoảnh khắc trong cuộc sống hằng ngày một cách dễ dàng.\r\n\r\nThiết kế bỏ túi tiện lợi, màu sắc trẻ trung\r\nĐiện thoại OPPO Find N2 Flip sở hữu thiết kế dạng vỏ sò gập cao cấp. Theo đó, khối lượng thiết bị nhẹ chỉ khoảng 191gram. Ngoài ra, tuy sở hữu thiết kế gập, nhưng bề dày của smartphone chỉ dừng lại ở 16.02mm, không khiến bạn bị mỏi tay khi sử dụng trong thời gian dài.\r\n\r\nOPPO Find N2 Flip - Màn hình gập không nếp gấp, camera gương thần ấn tượng\r\n\r\nVề màu sắc, thế hệ smartphone mới của OPPO sẽ cung cấp 2 phiên bản là Đen Khói và Tím Sương. Các gam màu này đều mang tính năng động, trẻ trung, thanh lịch đi kèm với mặt lưng đơn giản nhưng hiện đại.\r\n\r\nSử dụng bộ vi cao cấp cùng dung lượng pin tối ưu\r\nOPPO Find N2 Flip được vận hành bởi con chip Dimensity 9000+. Con chip này nằm trong bộ sưu tập vi xử lý mạnh mẽ và cao cấp nhất hiện nay đến từ nhà Mediatek. Chip sở hữu 8 nhân, cùng xung nhịp tối đa đạt đến 3.2 GHz. Như vậy bạn có thể yên tâm khi sử dụng điện thoại với mọi trận chiến game, cũng như xử lý mọi tác vụ.\r\n\r\nSử dụng bộ vi cao cấp cùng dung lượng pin tối ưu\r\n\r\nChiếc flagship của nhà OPPO cũng nổi bật với dung lượng pin đạt đến 4,300mAh. Với viên pin khổng lồ, cùng khả năng tiết kiệm năng lượng của chip Dimesity 9000+, người dùng có thể kéo dài thời gian sử dụng thiết bị đến nhiều giờ đồng hồ.\r\n\r\nOPPO Find N2 Flip - Màn hình gập không nếp gấp, camera gương thần ấn tượng\r\n\r\nĐiện thoại OPPO Find N2 Flip khi nào ra mắt?\r\nOPPO Find N2 Flip ra mắt chính thức với người tiêu dùng tại Trung Quốc vào ngày 15 tháng 12 và ra mắt thị trường quốc tế vào giữa tháng 2 năm 2023. Tại thời điểm ra mắt, người dùng sẽ được trải nghiệm 2 phiên bản của dòng N2 Flip này bao gồm Đen Khói và Tím Sương. Ngoài ra, chiếc smartphone có  phiên bản là RAM 8GB + bộ nhớ trong 256GB.\r\n\r\nOPPO Find N2 Flip - Màn hình gập không nếp gấp, camera gương thần ấn tượng\r\n\r\nTheo nhiều thông tin cho biết, chiếc flagship mới của nhà OPPO sẽ chạy trên hệ điều hành Android 13. Bên cạnh đó người dùng thiết bị sẽ được trải nghiệm giao diện mới nhất ColorOS 13.\r\n\r\nĐiện thoại OPPO Find N2 Flip giá bán bao nhiêu tiền?\r\nỞ phiên bản khởi điểm, OPPO Find N2 Flip bản quốc tế sẽ được bán với với mức 849 EUR (tương đương 21.4 triệu đồng) dành cho dung lượng RAM 8GB và bộ nhớ trong 256GB. Sản phẩm mở bán tại thị trường Việt Nam có giá 19.990.000đ. Đặc biệt, khi đặt trước tại CellphoneS, bạn còn có cơ hội nhận được bộ quà trị giá lên đến 5.000.000 đồng cùng nhiều ưu đãi hấp dẫn khác.\r\n\r\ngiá bán bao nhiêu tiền\r\n\r\nNhư vậy, dòng flagship đến từ nhà OPPO cạnh tranh cùng với những đối thủ khác trong cùng phân khúc giá như: Galaxy Z Flip4, Galaxy S22 Ultra 5G, Google Pixel 7 Pro, Huawei Mate 30 Pro, Samsung Galaxy Note 12 Plus,...\r\n\r\nMua ngay OPPO Find N2 Flip chính hãng tại CellphoneS\r\nOPPO Find N2 Flip nổi bật với màn hình OLED Full HD+ đẹp mắt, cùng hệ thống camera tiên tiến cho chất lượng ảnh chụp đỉnh cao. Để sở hữu N2 Flip chính hãng trong thời gian sớm nhất với mức giá ưu đãi\r\n', 1),
(24, 'Xiaomi 13 Pro 12GB 256GB', 24490000, 1, 'https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/1/3/13_prooo.jpg', '2023-10-24', 12, 'Thường', 3, 'Xiaomi 13 Pro là mẫu flagship mới sở hữu màn hình OLED 6.7 inch cùng tần số quét lên tới 120 Hz. Điện thoại sở hữu một cấu hình vượt trội với con chip Snapdragon gen 2 thế hệ mới, viên pin 4800 mAh hỗ trợ sạc nhanh công suất 120W. Camera máy mang lại cho người dùng khả năng nhiếp ảnh chuyên nghiệp với cụm camera Leica 50MP.', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` int(11) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hinh` text NOT NULL,
  `kich_hoat` varchar(500) NOT NULL,
  `vai_tro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `ho_ten`, `mat_khau`, `email`, `hinh`, `kich_hoat`, `vai_tro`) VALUES
(8, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'https://nhadepso.com/wp-content/uploads/2023/03/suu-tam-60-hinh-anh-avatar-trang-cho-facebook-dep-doc-dao_1.jpg', 'active', 'admin'),
(9, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@gmail.com', 'https://vnn-imgs-f.vgcloud.vn/2020/03/23/11/trend-avatar-12.jpg', 'active', 'user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(255) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`, `deleted`) VALUES
(1, 'Iphone', 1),
(2, 'Samsung', 1),
(4, 'Nokia', 1),
(11, 'Oppo', 1),
(12, 'Xiaomi', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `ma_kh` (`ma_kh`),
  ADD KEY `ma_hh` (`ma_hh`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `ma_loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`),
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`);

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `hang_hoa_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
