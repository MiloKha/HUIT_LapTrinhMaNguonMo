-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 05:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_bainhom`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'NghiaAdmin', '376febef5dab2ee8d03ba443f6641c9c', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_binhluan`
--

CREATE TABLE `tbl_binhluan` (
  `id_binhluan` int(11) NOT NULL,
  `id_dangky` int(11) NOT NULL,
  `noidung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_dangky` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_dangky`, `code_cart`, `cart_status`) VALUES
(1, 13, '1614', 0),
(2, 13, '7740', 0),
(3, 13, '3378', 0),
(4, 13, '5885', 0),
(5, 13, '4759', 1),
(6, 13, '6234', 1),
(7, 13, '4695', 1),
(8, 13, '2570', 1),
(9, 13, '897', 1),
(10, 17, '5888', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_detail`
--

CREATE TABLE `tbl_cart_detail` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cart_detail`
--

INSERT INTO `tbl_cart_detail` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(1, '1614', 13, 1),
(2, '7740', 13, 1),
(3, '3378', 13, 1),
(4, '5885', 13, 2),
(5, '4759', 15, 1),
(6, '4695', 13, 1),
(7, '4695', 15, 1),
(8, '4695', 34, 1),
(9, '2570', 30, 3),
(10, '897', 13, 1),
(11, '5888', 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(13, 'Trương Phùng Đức Duy', 'duynhok19133@gmail.com', '102 Quốc lộ 1A, Bình Hưng Hòa B, Bình Tân, Hồ Chí Minh', '376febef5dab2ee8d03ba443f6641c9c', '0773153574'),
(14, 'Nguyễn Văn B', 'Ginzeeforwork@gmail.com', '102 Quốc lộ 1A, Bình Hưng Hòa B, Bình Tân, Hồ Chí Minh', '376febef5dab2ee8d03ba443f6641c9c', '0141120011'),
(16, 'Test1', 'DucDuy123@gmail.com', 'Diachi', '376febef5dab2ee8d03ba443f6641c9c', '0773153578'),
(17, 'Duy', 'Duynhok19133@gmail.com', '102 Quốc lộ 1A, Bình Hưng Hòa B, Bình Tân, Hồ Chí Minh', '376febef5dab2ee8d03ba443f6641c9c', '0773153578');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(8, 'Tablet', 2),
(10, 'Loa', 3),
(15, 'Điện thoại', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nhanvien`
--

CREATE TABLE `tbl_nhanvien` (
  `id_nhanvien` int(11) NOT NULL,
  `tennhanvien` varchar(150) NOT NULL,
  `namsinh` int(11) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `loainhanvien` varchar(50) NOT NULL,
  `taikhoan` varchar(50) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ngayvaolam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_nhanvien`
--

INSERT INTO `tbl_nhanvien` (`id_nhanvien`, `tennhanvien`, `namsinh`, `sdt`, `loainhanvien`, `taikhoan`, `matkhau`, `email`, `ngayvaolam`) VALUES
(10, 'test4', 1999, '0123123122', 'Thu viec', 'test3', 'f5bb0c8de146c67b44babbf4e6584cc0', 'test3@gmail.com', '2021-11-14'),
(13, 'Nguyễn Văn A', 1998, '0123123123', 'Nhân viên chính thức', 'nva1998', '376febef5dab2ee8d03ba443f6641c9c', 'Ginzeeforwork@gmail.com', '2022-01-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(13, 'iPhone 14 ProMax', '001                                  ', '29990000', 50, '1680972901_iphone-14-pro-max-vang.jpg', 'iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022. Máy trang bị con chip Apple A16 Bionic vô cùng mạnh mẽ, đi kèm theo đó là thiết kế hình màn hình mới, hứa hẹn mang lại những trải nghiệm đầy mới mẻ cho người dùng iPhone.', 'iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022. Máy trang bị con chip Apple A16 Bionic vô cùng mạnh mẽ, đi kèm theo đó là thiết kế hình màn hình mới, hứa hẹn mang lại những trải nghiệm đầy mới mẻ cho người dùng iPhone.', 1, 15),
(14, 'iPhone 14 Pro 128GB', '002    ', '27990000', 50, '1680514064_iphone-14-pro-tim.jpg', 'iPhone 14 Pro 128GB - Mẫu smartphone đến từ nhà Apple được mong đợi nhất năm 2022, lần này nhà Táo mang đến cho chúng ta một phiên bản với kiểu thiết kế hình notch mới, cấu hình mạnh mẽ nhờ con chip Apple A16 Bionic và cụm camera có độ phân giải được nâng cấp lên đến 48 MP.', 'iPhone 14 Pro 128GB - Mẫu smartphone đến từ nhà Apple được mong đợi nhất năm 2022, lần này nhà Táo mang đến cho chúng ta một phiên bản với kiểu thiết kế hình notch mới, cấu hình mạnh mẽ nhờ con chip Apple A16 Bionic và cụm camera có độ phân giải được nâng cấp lên đến 48 MP.', 1, 15),
(15, 'iPhone 13 ProMax 1TB', '003 ', '29990000', 50, '1680518899_iphone-13-pro-max-graphite.jpg', 'iPhone 13 Pro Max 1 TB thuộc phân khúc điện thoại cao cấp mà không một iFan nào có thể bỏ qua, với màn hình lớn sắc nét, cấu hình vượt trội, dung lượng lưu trữ \"khủng\", thời gian sử dụng dài, mỗi lần trải nghiệm đều cho bạn cảm giác thỏa mãn đáng ngạc nhiên.', 'iPhone 13 Pro Max 1 TB thuộc phân khúc điện thoại cao cấp mà không một iFan nào có thể bỏ qua, với màn hình lớn sắc nét, cấu hình vượt trội, dung lượng lưu trữ \"khủng\", thời gian sử dụng dài, mỗi lần trải nghiệm đều cho bạn cảm giác thỏa mãn đáng ngạc nhiên.', 1, 15),
(16, 'iPhone 11 64GB', '004', '11990000', 50, '1680518999_iphone-11-trang.jpg', 'Apple đã chính thức trình làng bộ 3 siêu phẩm iPhone 11, trong đó phiên bản iPhone 11 64GB có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như iPhone Xr ra mắt trước đó.', 'Apple đã chính thức trình làng bộ 3 siêu phẩm iPhone 11, trong đó phiên bản iPhone 11 64GB có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như iPhone Xr ra mắt trước đó.', 1, 15),
(17, 'iPhone 12 64GB', '005 ', '17990000', 50, '1680521144_iphone-12-den-new-2.jpg', 'Trong những tháng cuối năm 2020, Apple đã chính thức giới thiệu đến người dùng cũng như iFan thế hệ iPhone 12 series mới với hàng loạt tính năng bứt phá, thiết kế được lột xác hoàn toàn, hiệu năng đầy mạnh mẽ và một trong số đó chính là iPhone 12 64GB.', 'Trong những tháng cuối năm 2020, Apple đã chính thức giới thiệu đến người dùng cũng như iFan thế hệ iPhone 12 series mới với hàng loạt tính năng bứt phá, thiết kế được lột xác hoàn toàn, hiệu năng đầy mạnh mẽ và một trong số đó chính là iPhone 12 64GB.', 1, 15),
(18, 'OPPO Reno8 Pro 5G', '006', '18990000', 50, '1680521288_oppo-reno8-pro-thumb-xanh-1.jpg', 'OPPO Reno8 Pro 5G là chiếc điện thoại cao cấp được nhà OPPO ra mắt vào thời điểm 09/2022, máy hướng đến sự hoàn thiện cao cấp ở phần thiết kế cùng khả năng quay chụp chuyên nghiệp nhờ trang bị vi xử lý hình ảnh MariSilicon X chuyên dụng.', 'OPPO Reno8 Pro 5G là chiếc điện thoại cao cấp được nhà OPPO ra mắt vào thời điểm 09/2022, máy hướng đến sự hoàn thiện cao cấp ở phần thiết kế cùng khả năng quay chụp chuyên nghiệp nhờ trang bị vi xử lý hình ảnh MariSilicon X chuyên dụng.', 1, 15),
(19, 'Samsung Galaxy A04s', '007', '3990000', 50, '1680521483_samsung-galaxy-a04s-den-thumb-1.jpg', 'Samsung Galaxy A04s mang nhiều cải tiến so với thế hệ Galaxy A03s, màn hình hỗ trợ tần số quét 90 Hz cho trải nghiệm mượt mà cùng camera độ phân giải lên đến 50 MP để bạn nhiếp ảnh thêm tự tin, hứa hẹn mang đầy đủ các tính năng cần thiết ở một chiếc điện thoại dòng A giá rẻ.', 'Samsung Galaxy A04s mang nhiều cải tiến so với thế hệ Galaxy A03s, màn hình hỗ trợ tần số quét 90 Hz cho trải nghiệm mượt mà cùng camera độ phân giải lên đến 50 MP để bạn nhiếp ảnh thêm tự tin, hứa hẹn mang đầy đủ các tính năng cần thiết ở một chiếc điện thoại dòng A giá rẻ.', 1, 15),
(20, 'Samsung Galaxy A33 5G 6GB', '008', '7290000', 50, '1680521620_samsung-galaxy-a33-5g-thumb-new-1.jpg', 'Samsung Galaxy A33 5G 6GB ra mắt vào ngày 17/03, được xem là bản cập nhật khá lớn so với thế hệ tiền nhiệm Galaxy A32 về thiết kế đến thông số kỹ thuật bên trong, nhằm mang đến vẻ ngoài đẹp mắt cũng như cạnh tranh trực tiếp ở phần hiệu năng đối với các đối thủ cùng phân khúc giá.', 'Samsung Galaxy A33 5G 6GB ra mắt vào ngày 17/03, được xem là bản cập nhật khá lớn so với thế hệ tiền nhiệm Galaxy A32 về thiết kế đến thông số kỹ thuật bên trong, nhằm mang đến vẻ ngoài đẹp mắt cũng như cạnh tranh trực tiếp ở phần hiệu năng đối với các đối thủ cùng phân khúc giá.', 1, 15),
(21, ' Samsung Galaxy S23 5G 128GB', '009', '22990000', 50, '1680521697_samsung-galaxy-s23-.png', 'Samsung Galaxy S23 có thể xem là cái tên mở màn cho dòng điện thoại cao cấp được nhà Samsung giới thiệu vào dịp đầu năm 2023, kể từ lúc chính thức ra mắt máy nhận được khá nhiều sự quan tâm với hàng loạt thông tin cấu hình hết sức nổi bật như con chip hàng đầu Qualcomm cùng bộ camera siêu chất lượng.', 'Samsung Galaxy S23 có thể xem là cái tên mở màn cho dòng điện thoại cao cấp được nhà Samsung giới thiệu vào dịp đầu năm 2023, kể từ lúc chính thức ra mắt máy nhận được khá nhiều sự quan tâm với hàng loạt thông tin cấu hình hết sức nổi bật như con chip hàng đầu Qualcomm cùng bộ camera siêu chất lượng.', 1, 15),
(22, 'Samsung Galaxy Z Flip4 128GB', '010', '23990000', 50, '1680521812_samsung-galaxy-z-flip4-5g-128gb-thumb-tim.jpg', 'Samsung Galaxy Z Flip4 128GB đã chính thức ra mắt thị trường công nghệ, đánh dấu sự trở lại của Samsung trên con đường định hướng người dùng về sự tiện lợi trên những chiếc điện thoại gập. Với độ bền được gia tăng cùng kiểu thiết kế đẹp mắt giúp Flip4 trở thành một trong những tâm điểm sáng giá cho nửa cuối năm 2022.', 'Samsung Galaxy Z Flip4 128GB đã chính thức ra mắt thị trường công nghệ, đánh dấu sự trở lại của Samsung trên con đường định hướng người dùng về sự tiện lợi trên những chiếc điện thoại gập. Với độ bền được gia tăng cùng kiểu thiết kế đẹp mắt giúp Flip4 trở thành một trong những tâm điểm sáng giá cho nửa cuối năm 2022.', 1, 15),
(23, 'iPad 9 WiFi 64GB ', 't001', '9990000', 50, '1680526689_iPad-9-wifi-trang.jpg', 'Sau thành công của iPad 8, Apple cho đã cho ra mắt máy tính bảng iPad 9 WiFi 64GB - phiên bản tiếp theo của dòng iPad 10.2 inch, về cơ bản nó kế thừa những điểm mạnh từ các phiên bản trước đó và được cải tiến thêm hiệu suất, trải nghiệm người dùng nhằm giúp nhu cầu sử dụng giải trí và làm việc tiện lợi, linh hoạt hơn.', 'Sau thành công của iPad 8, Apple cho đã cho ra mắt máy tính bảng iPad 9 WiFi 64GB - phiên bản tiếp theo của dòng iPad 10.2 inch, về cơ bản nó kế thừa những điểm mạnh từ các phiên bản trước đó và được cải tiến thêm hiệu suất, trải nghiệm người dùng nhằm giúp nhu cầu sử dụng giải trí và làm việc tiện lợi, linh hoạt hơn.', 1, 8),
(24, 'iPad 10 WiFi 64GB', 't002 ', '12990000', 50, '1680526796_iPad-Gen-10-Pink-thumb.jpg', 'Sau khi trình làng hàng loạt mẫu iPhone vào tháng 09/2022 thì Apple cũng đã tiếp tục giới thiệu series iPad mới cho năm 2022. Trong đó iPad 10 WiFi 64GB là cái tên được hãng chú trọng khá nhiều về việc tối ưu giá thành nhằm giúp người dùng có thể dễ dàng tiếp cận. Máy hỗ trợ hệ điều hành iPadOS 16 cùng con chip Apple A14 Bionic 6 giúp mang lại hiệu năng vượt trội.', 'Sau khi trình làng hàng loạt mẫu iPhone vào tháng 09/2022 thì Apple cũng đã tiếp tục giới thiệu series iPad mới cho năm 2022. Trong đó iPad 10 WiFi 64GB là cái tên được hãng chú trọng khá nhiều về việc tối ưu giá thành nhằm giúp người dùng có thể dễ dàng tiếp cận. Máy hỗ trợ hệ điều hành iPadOS 16 cùng con chip Apple A14 Bionic 6 giúp mang lại hiệu năng vượt trội.', 1, 8),
(25, 'iPad Pro M1 11 inch WiFi 2TB (2021) ', 't003', '44990000', 50, '1680526870_ipad-pro-m1-11-inch-wifi-2tb-2021-xam-thumb.jpeg', 'Máy tính bảng iPad Pro M1 11 inch WiFi 2TB (2021) được giới thiệu với 2 màu xám và bạc hiện đại, chất liệu nhôm nguyên khối sang trọng cùng thiết kế thanh lịch, tinh tế, phù hợp trong mọi không gian sử dụng.', 'Máy tính bảng iPad Pro M1 11 inch WiFi 2TB (2021) được giới thiệu với 2 màu xám và bạc hiện đại, chất liệu nhôm nguyên khối sang trọng cùng thiết kế thanh lịch, tinh tế, phù hợp trong mọi không gian sử dụng.', 1, 8),
(26, 'iPad Air 5 M1 Wifi Cellular 64GB', 't004', '17990000', 50, '1680529118_ipad-air-5-wifi-cellular-pink-thumb.jpg', 'So với chiếc iPad Air 5 M1 Wifi 64GB thì chiếc iPad Air 5 M1 Wifi Cellular 64GB đã có một điểm khác biệt đáng kể đó là phương thức kết nối khi bạn vừa có thể sử dụng Wifi và vừa sử dụng mạng di động một cách bình thường nhưng vẫn cho một trải nghiệm rất tuyệt vời.', 'So với chiếc iPad Air 5 M1 Wifi 64GB thì chiếc iPad Air 5 M1 Wifi Cellular 64GB đã có một điểm khác biệt đáng kể đó là phương thức kết nối khi bạn vừa có thể sử dụng Wifi và vừa sử dụng mạng di động một cách bình thường nhưng vẫn cho một trải nghiệm rất tuyệt vời.', 1, 8),
(27, 'iPad mini 6 WiFi 64GB ', 't005', '14990000', 0, '1680529545_ipad-mini-6-wifi-starlight.jpg', 'Sau thời gian dài chờ đợi thì iPad mini 6 WiFi 64GB cũng đã được Apple trình làng với thiết kế vừa quen thuộc vừa mới lạ, máy có nhiều cải tiến trong cấu hình lẫn phần mềm nhằm gia tăng lợi ích sử dụng, mang lại sự hài lòng cao hơn cho người dùng khi lựa chọn.', 'Sau thời gian dài chờ đợi thì iPad mini 6 WiFi 64GB cũng đã được Apple trình làng với thiết kế vừa quen thuộc vừa mới lạ, máy có nhiều cải tiến trong cấu hình lẫn phần mềm nhằm gia tăng lợi ích sử dụng, mang lại sự hài lòng cao hơn cho người dùng khi lựa chọn.', 1, 8),
(28, 'iPad Pro M1 12.9 inch WiFi Cellular 128GB (2021)', 't006', '34990000', 50, '1680529672_ipad-pro-2021-129-inch-gray.jpg', 'Bạn có đang mong chờ những sản phẩm chất lượng đến từ Apple? Sau hàng loạt các sản phẩm đình đám như iPhone 12 series thì hãng đã tung ra chiếc iPad Pro M1 12.9 inch Wifi Cellular 128GB (2021) trang bị những tính năng ngày càng vượt trội và thời thượng.', 'Bạn có đang mong chờ những sản phẩm chất lượng đến từ Apple? Sau hàng loạt các sản phẩm đình đám như iPhone 12 series thì hãng đã tung ra chiếc iPad Pro M1 12.9 inch Wifi Cellular 128GB (2021) trang bị những tính năng ngày càng vượt trội và thời thượng.', 1, 8),
(29, 'Samsung Galaxy Tab A8 (2022)', 't007', '6990000', 50, '1680529755_samsung-galaxy-tab-a8-thumb-1.jpg', 'Máy tính bảng Samsung Galaxy Tab A8 (2022) có kích thước màn hình 10.5 inch, tỉ lệ 16:10 cho không gian hiển thị rộng hơn, rất lý tưởng cho người dùng trải nghiệm xem phim, live stream, chơi game. \r\n\r\n', 'Máy tính bảng Samsung Galaxy Tab A8 (2022) có kích thước màn hình 10.5 inch, tỉ lệ 16:10 cho không gian hiển thị rộng hơn, rất lý tưởng cho người dùng trải nghiệm xem phim, live stream, chơi game. \r\n\r\nMàn hình TFT LCD có độ phân giải 1200 x 1920 Pixels tái hiện hình ảnh khá chi tiết, màu sắc trung thực, phong phú. Tận hưởng âm thanh sống động đến từ hệ thống 4 loa hỗ trợ công nghệ Dolby Atmos cung cấp âm thanh vòm bùng nổ, nghe nhạc rất đã tai. ', 1, 8),
(30, 'Lenovo Tab M8 ', 't008', '2490000', 50, '1680529848_lenovo-tab-a22-xam.jpg', 'Lenovo Tab M8 chiếc máy tính bảng giá rẻ, cấu hình ổn, thiết kế cao cấp trong tầm giá, hoàn toàn phù hợp với các nhu cầu cơ bản như đọc báo, xem phim, lướt web hằng ngày.', 'Lenovo Tab M8 chiếc máy tính bảng giá rẻ, cấu hình ổn, thiết kế cao cấp trong tầm giá, hoàn toàn phù hợp với các nhu cầu cơ bản như đọc báo, xem phim, lướt web hằng ngày.', 1, 8),
(31, 'Samsung Galaxy Tab A7 Lite ', 't008', '4490000', 50, '1680529930_samsung-galaxy-tab-a7-lite-gray.jpg', 'Máy tính bảng Samsung Galaxy Tab A7 Lite là phiên bản rút gọn của dòng tablet \"ăn khách\" Galaxy Tab A7 thuộc thương hiệu Samsung, đáp ứng nhu cầu giải trí của khách hàng thuộc phân khúc bình dân với màn hình lớn nhưng vẫn gọn nhẹ hợp túi tiền.', 'Máy tính bảng Samsung Galaxy Tab A7 Lite là phiên bản rút gọn của dòng tablet \"ăn khách\" Galaxy Tab A7 thuộc thương hiệu Samsung, đáp ứng nhu cầu giải trí của khách hàng thuộc phân khúc bình dân với màn hình lớn nhưng vẫn gọn nhẹ hợp túi tiền.', 1, 8),
(32, 'Samsung Galaxy Tab S8 Ultra 5G', 't010', '30990000', 50, '1680530011_samsung-tab-s8-ultra-thumb.jpg', 'Samsung Galaxy Tab S8 Ultra ra mắt với kích thước màn hình siêu to cùng một cấu hình mạnh mẽ, được xem là thiết bị phù hợp đối với những ai thường xuyên làm các công việc thiết kế hay thao tác trên trình duyệt web, bên cạnh đó Tab S8 Ultra còn mang đến những trải nghiệm tương tự một chiếc laptop khi sử dụng kèm với bàn phím.', 'Samsung Galaxy Tab S8 Ultra ra mắt với kích thước màn hình siêu to cùng một cấu hình mạnh mẽ, được xem là thiết bị phù hợp đối với những ai thường xuyên làm các công việc thiết kế hay thao tác trên trình duyệt web, bên cạnh đó Tab S8 Ultra còn mang đến những trải nghiệm tương tự một chiếc laptop khi sử dụng kèm với bàn phím.', 1, 8),
(33, 'Loa vi tính Enkor E50 Đen', 'l001', '500000', 50, '1680530779_loa-vi-tinh-21-enkor-e50-den.jpeg', 'Thiết kế màu đen sang trọng, chất liệu chính là gỗ MDF (gỗ ép), loa vi tính Enkor E50 không chỉ giúp bạn tận hưởng âm nhạc mà còn làm nổi bật không gian nơi loa được bố trí.', 'Thiết kế màu đen sang trọng, chất liệu chính là gỗ MDF (gỗ ép), loa vi tính Enkor E50 không chỉ giúp bạn tận hưởng âm nhạc mà còn làm nổi bật không gian nơi loa được bố trí.', 1, 10),
(34, 'Loa vi tính Bluetooth Enkor E700 Đen', 'l002', '800000', 50, '1680530863_loa-vi-tinh-21-enkor-e700-den.jpeg', 'Loa vi tính 2.1 Enkor E700 Đen với thiết kế tổng thể màu đen với các họa tiết vân gỗ sang trọng, kích thước loa không quá lớn giúp bạn dễ dàng bố trí ở nhiều không gian khác nhau.', 'Loa vi tính 2.1 Enkor E700 Đen với thiết kế tổng thể màu đen với các họa tiết vân gỗ sang trọng, kích thước loa không quá lớn giúp bạn dễ dàng bố trí ở nhiều không gian khác nhau.', 1, 10),
(35, 'Loa vi tính Enkor E300 Plus', 'l003', '600000', 50, '1680530914_loa-enkor-e300plus.jpeg', 'Loa Vi Tính Enkor E300PLUS có kiểu dáng gọn gàng và hợp thời trang, tổng công suất loa 20 W cho ra âm thanh lớn và chân thật.', 'Loa Vi Tính Enkor E300PLUS có kiểu dáng gọn gàng và hợp thời trang, tổng công suất loa 20 W cho ra âm thanh lớn và chân thật.', 1, 10),
(36, 'Loa Bluetooth Mozard S21 Đỏ', 'l004', '550000', 50, '1680530961_loa-bluetooth-mozard-s21-do.jpeg', 'Dễ dàng mang theo và sử dụng loa Bluetooth Mozard S21 Đỏ nhờ khối lượng gọn nhẹ, âm thanh sống động, kết nối ổn định, liền mạch,...', 'Dễ dàng mang theo và sử dụng loa Bluetooth Mozard S21 Đỏ nhờ khối lượng gọn nhẹ, âm thanh sống động, kết nối ổn định, liền mạch,...', 1, 10),
(37, 'Loa Bluetooth Fenda W5 Plus', 'l005', '270000', 50, '1680531004_loa-bluetooth-fenda-w5-plus.jpeg', 'Chiếc loa Bluetooth Fenda này sở hữu màu sắc trẻ trung năng động, loa có kích thước nhỏ gọn dễ dàng mang theo trong những chuyến dã ngoại ngoài trời, góp phần tăng thêm bầu không khí cho chuyến đi.', 'Chiếc loa Bluetooth Fenda này sở hữu màu sắc trẻ trung năng động, loa có kích thước nhỏ gọn dễ dàng mang theo trong những chuyến dã ngoại ngoài trời, góp phần tăng thêm bầu không khí cho chuyến đi.', 1, 10),
(38, 'Loa vi tính Fenda V320', 'l006', '150000', 50, '1680531108_loa-vi-tinh-fenda-v320.jpeg', 'Loa vi tính Fenda V320 - Nhỏ gọn, có thể đặt ở bất cứ đâu\r\n\r\nÂm thanh phát ra to và khá rõ\r\nLoa vi tính Fenda V320 - Âm thanh phát ra to và khá rõ\r\n\r\nLà dạng loa nhỏ gọn đơn giản nên dây được gắn liền với loa', 'Loa vi tính Fenda V320 - Nhỏ gọn, có thể đặt ở bất cứ đâu\r\n\r\nÂm thanh phát ra to và khá rõ\r\nLoa vi tính Fenda V320 - Âm thanh phát ra to và khá rõ\r\n\r\nLà dạng loa nhỏ gọn đơn giản nên dây được gắn liền với loa', 1, 10),
(39, 'Loa Bluetooth Mozard Y550 Plus', 'l007', '330000', 50, '1680531149_loa-bluetooth-mozard-y550-plus.jpeg', 'Loa Bluetooth Mozard Y550 Plus có thiết kế hình lăng trụ tam giác độc đáo cùng màu đen hợp thời trang sẽ là một món phụ kiện lạ mắt dành cho những bạn trẻ. Loa có kích thước nhỏ gọn bạn có thể để vào balo hay túi xách mang đi muôn nơi, loa còn được trang bị thêm dây treo tiện lợi.', 'Loa Bluetooth Mozard Y550 Plus có thiết kế hình lăng trụ tam giác độc đáo cùng màu đen hợp thời trang sẽ là một món phụ kiện lạ mắt dành cho những bạn trẻ. Loa có kích thước nhỏ gọn bạn có thể để vào balo hay túi xách mang đi muôn nơi, loa còn được trang bị thêm dây treo tiện lợi.', 1, 10),
(40, 'Loa vi tính Bluetooth Enkor V2720 Gold', 'l007', '930000', 50, '1680531348_loa-vi-tinh-21-enkor-v2720-gold.jpeg', 'Loa vi tính 2.1 Enkor V2720 Gold có thiết kế vàng đồng sang trọng\r\nKích thước loa máy tính không quá to, có thể đặt vừa trên bàn làm việc, bàn vi tính hay trên kệ tivi.', 'Loa vi tính 2.1 Enkor V2720 Gold có thiết kế vàng đồng sang trọng\r\nKích thước loa máy tính không quá to, có thể đặt vừa trên bàn làm việc, bàn vi tính hay trên kệ tivi.', 1, 10),
(41, 'Loa Bluetooth Mozard BT100 Đen', 'l009', '1070000', 50, '1680531407_bluetooth-mozard-bt100.jpeg', 'Loa Bluetooth Mozard BT100 có kiểu dáng đơn giản, các góc bo cong ôm trọn thân loa cho thiết kế hoàn thiện, sử dụng chất liệu vải để lọc âm và được bọc lớp da xung quanh tránh việc bám vân tay. Dạng loa Bluetooth nhỏ nhắn, dễ dàng mang theo để nghe nhạc cho các chuyến đi xa thêm thú vị, phấn khích. ', 'Loa Bluetooth Mozard BT100 có kiểu dáng đơn giản, các góc bo cong ôm trọn thân loa cho thiết kế hoàn thiện, sử dụng chất liệu vải để lọc âm và được bọc lớp da xung quanh tránh việc bám vân tay. Dạng loa Bluetooth nhỏ nhắn, dễ dàng mang theo để nghe nhạc cho các chuyến đi xa thêm thú vị, phấn khích. ', 1, 10),
(42, 'Loa Bluetooth Harman Kardon SoundSticks 4', 'l010 ', '7185000', 50, '1680531504_bluetooth-harman-kardon-soundsticks-4-140223-040818.jpeg', 'Loa Bluetooth Harman Kardon SoundSticks 4 Trắng gồm 2 cột loa vệ tinh và một subwoofer, loa subwoofer có thiết kế dạng vòm, bề mặt trong suốt cùng tông màu trắng cho các chi tiết bên trong loa, mặt trong loa sub được gia công thêm những chi tiết gợn sóng vừa để tạo điểm nhấn vừa có tác dụng khử nhiễu.', 'Loa Bluetooth Harman Kardon SoundSticks 4 Trắng gồm 2 cột loa vệ tinh và một subwoofer, loa subwoofer có thiết kế dạng vòm, bề mặt trong suốt cùng tông màu trắng cho các chi tiết bên trong loa, mặt trong loa sub được gia công thêm những chi tiết gợn sóng vừa để tạo điểm nhấn vừa có tác dụng khử nhiễu.', 1, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  ADD PRIMARY KEY (`id_binhluan`),
  ADD KEY `FK_binhluan` (`id_dangky`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `FK_cart` (`id_dangky`);

--
-- Indexes for table `tbl_cart_detail`
--
ALTER TABLE `tbl_cart_detail`
  ADD PRIMARY KEY (`id_cart_details`),
  ADD KEY `FK_cartdetail` (`id_sanpham`);

--
-- Indexes for table `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  ADD PRIMARY KEY (`id_nhanvien`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `FK_sanpham` (`id_danhmuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  MODIFY `id_binhluan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_cart_detail`
--
ALTER TABLE `tbl_cart_detail`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  MODIFY `id_nhanvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  ADD CONSTRAINT `FK_binhluan` FOREIGN KEY (`id_dangky`) REFERENCES `tbl_dangky` (`id_dangky`);

--
-- Constraints for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `FK_cart` FOREIGN KEY (`id_dangky`) REFERENCES `tbl_dangky` (`id_dangky`);

--
-- Constraints for table `tbl_cart_detail`
--
ALTER TABLE `tbl_cart_detail`
  ADD CONSTRAINT `FK_cartdetail` FOREIGN KEY (`id_sanpham`) REFERENCES `tbl_sanpham` (`id_sanpham`);

--
-- Constraints for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `FK_sanpham` FOREIGN KEY (`id_danhmuc`) REFERENCES `tbl_danhmuc` (`id_danhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
