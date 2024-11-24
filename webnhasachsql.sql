-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2024 lúc 09:42 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webnhasachsql`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_authorname` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_saleprice` varchar(100) DEFAULT NULL,
  `product_descript` text DEFAULT NULL,
  `product_detail` text DEFAULT NULL,
  `product_image` varchar(500) DEFAULT NULL,
  `product_images` varchar(500) DEFAULT NULL,
  `product_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_authorname`, `product_price`, `product_saleprice`, `product_descript`, `product_detail`, `product_image`, `product_images`, `product_date`) VALUES
(1, 'Không phải sói nhưng cũng đừng là cừu', 'Lê Bảo Ngọc', '69.000', '50.000', 'SÓI VÀ CỪU - BẠN KHÔNG TỐT NHƯ BẠN NGHĨ ĐÂU!\r\n\r\nLàn ranh của việc ngây thơ hay xấu xa đôi khi mỏng manh hơn bạn nghĩ.\r\n\r\nBạn làm một việc mà mình cho là đúng, kết quả lại bị mọi người khiển trách.\r\n\r\nBạn ủng hộ một quan điểm của ai đó, và số đông khác lại ủng hộ một quan điểm trái chiều.\r\n\r\nRốt cuộc thì bạn sai hay họ sai?', 'Tên Nhà Cung Cấp: Skybooks\r\nTác giả: Lê Bảo Ngọc\r\nNXB: Thế Giới\r\nNăm XB: 2022\r\nNgôn Ngữ: Tiếng Việt\r\nTrọng lượng (gr): 340\r\nKích Thước Bao Bì: 20.5 x 14.5 x 1 cm\r\nSố trang: 296\r\nHình thức: Bìa Mềm', 'khong-phai-soi-nhung-cung-dung-la-cuu_1.1.jpg', 'khong-phai-soi-nhung-cung-dung-la-cuu_1.2.jpg\r\nkhong-phai-soi-nhung-cung-dung-la-cuu_1.3.jpg\r\nkhong-phai-soi-nhung-cung-dung-la-cuu_1.4.jpg\r\nkhong-phai-soi-nhung-cung-dung-la-cuu_1.5.jpg', '2024-11-23 16:36:24'),
(23, 'Không phải sói nhưng cũng đừng là cừu', 'Lê Bảo Ngọc', '69.000', '50.000', 'SÓI VÀ CỪU - BẠN KHÔNG TỐT NHƯ BẠN NGHĨ ĐÂU!\r\n\r\nLàn ranh của việc ngây thơ hay xấu xa đôi khi mỏng manh hơn bạn nghĩ.\r\n\r\nBạn làm một việc mà mình cho là đúng, kết quả lại bị mọi người khiển trách.\r\n\r\nBạn ủng hộ một quan điểm của ai đó, và số đông khác lại ủng hộ một quan điểm trái chiều.\r\n\r\nRốt cuộc thì bạn sai hay họ sai?', 'Tên Nhà Cung Cấp: Skybooks\r\nTác giả: Lê Bảo Ngọc\r\nNXB: Thế Giới\r\nNăm XB: 2022\r\nNgôn Ngữ: Tiếng Việt\r\nTrọng lượng (gr): 340\r\nKích Thước Bao Bì: 20.5 x 14.5 x 1 cm\r\nSố trang: 296\r\nHình thức: Bìa Mềm', 'khong-phai-soi-nhung-cung-dung-la-cuu_1.1.jpg', 'khong-phai-soi-nhung-cung-dung-la-cuu_1.2.jpg\nkhong-phai-soi-nhung-cung-dung-la-cuu_1.3.jpg\nkhong-phai-soi-nhung-cung-dung-la-cuu_1.4.jpg\nkhong-phai-soi-nhung-cung-dung-la-cuu_1.5.jpg', '2024-11-23 16:36:24'),
(27, 'Không phải sói nhưng cũng đừng là cừu', 'Lê Bảo Ngọc', '69.000', '50.000', '', '', 'thien-tai-ben-trai-ke-dien-ben-phai.jpg', '', '2024-11-23 20:51:33'),
(28, 'Không phải sói nhưng cũng đừng là cừu', 'Lê Bảo Ngọc', '69.000', '50.000', '', '', 'sau-canh-cua-khoa-kin.jpg', '', '2024-11-23 20:51:50');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
