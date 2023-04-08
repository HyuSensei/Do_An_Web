-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 08, 2023 lúc 11:38 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `do_an_web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `custumers`
--

CREATE TABLE `custumers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` char(20) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `verify_token` varchar(150) NOT NULL,
  `verify_status` tinyint(2) DEFAULT 0 COMMENT '0=no,1=yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `custumers`
--

INSERT INTO `custumers` (`id`, `name`, `email`, `phone_number`, `address`, `password`, `token`, `verify_token`, `verify_status`) VALUES
(11, 'Phan Tiến Huy', 'huyphan1232002@gmail.com', '0986538387', 'Hà Nội', '123', '', 'e5a0b580ae5eec48bcd245faf8207047', 1),
(13, 'Phan Tiến Huy', 'huyphan21091999@gmail.com', '0986538387', 'Hà Nội', '123', '', 'beabbb32bbc8b895ddddb8c2c0ceabb8', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `code_order` int(11) NOT NULL,
  `order_status` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `payment` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `phone_customer` char(20) NOT NULL,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `id_customer`, `code_order`, `order_status`, `date`, `payment`, `customer_address`, `phone_customer`, `total_price`) VALUES
(18, 11, 436872, 0, '2023-03-29 12:56:00', 'Thanh toán khi nhận hàng', 'Hà Nội', '0986538387', 292000),
(19, 11, 143358, 0, '2023-03-29 12:57:59', 'Thanh toán khi nhận hàng', 'Hà Nội', '0986538387', 275000),
(20, 11, 809107, 0, '2023-04-01 08:50:05', 'Thanh toán khi nhận hàng', 'Hà Nội', '0986538387', 1076000),
(21, 11, 240631, 0, '2023-04-01 08:55:01', 'Thanh toán khi nhận hàng', 'Hà Nội', '0986538387', 420000),
(22, 11, 172117, 0, '2023-04-05 00:22:40', 'Thanh toán khi nhận hàng', 'Hà Nội', '0986538487', 174000),
(23, 11, 796870, 0, '2023-04-08 07:54:01', 'Thanh toán khi nhận hàng', 'Hà Nội', '0986538387', 286000),
(24, 11, 793228, 0, '2023-04-08 07:54:42', 'Thanh toán khi nhận hàng', 'Hà Nội', '0986538387', 143000),
(25, 11, 622409, 0, '2023-04-08 08:09:16', 'Thanh toán khi nhận hàng', 'Hà Nội', '0986538387', 442000),
(26, 11, 572601, 0, '2023-04-08 08:32:52', 'Thanh toán khi nhận hàng', 'Hà Nội', '0986538387', 812000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `quantity_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `id_product`, `id_order`, `quantity_order`) VALUES
(30, 1, 18, 1),
(31, 2, 18, 1),
(32, 4, 19, 1),
(33, 7, 20, 1),
(34, 8, 20, 1),
(35, 4, 20, 1),
(36, 3, 21, 1),
(37, 6, 22, 1),
(38, 2, 23, 2),
(39, 2, 24, 1),
(40, 8, 25, 1),
(41, 15, 26, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `img_main` varchar(255) NOT NULL,
  `img_extra` varchar(255) NOT NULL,
  `img_extra1` varchar(255) NOT NULL,
  `img_extra2` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `type` varchar(255) NOT NULL,
  `describe` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `product_name`, `img_main`, `img_extra`, `img_extra1`, `img_extra2`, `quantity`, `price`, `type`, `describe`, `category`) VALUES
(1, 'Nước Tẩy Trang Làm Sạch Sâu 3 In 1 L\'Oreal Micellar Water Deep Cleansing', 'https://product.hstatic.net/1000006063/product/35.1_a1bbf6f5149b413bb944822fee6aacaf_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/35_d358f360acdd474ca478215012a4a8e0_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/z4187212891903_087dc5cfe515a2cdf4cf27b8393fe5e1_3af8db695d6647b283d5e2e3b8990ace_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/35.3_3b8be97d06a04237ac1234e110ffe8ea_1024x1024.jpg', 10, 149000, 'Tẩy trang', 'Nước Tẩy Trang Làm Sạch Sâu 3 In 1 L\'Oreal Micellar Water Deep Cleansing là nước tẩy trang chứa các phân tử micellar có tác dụng hòa tan chất bẩn và làm sạch toàn bộ lớp trang điểm hiệu quả, kể cả lớp trang điểm lâu trôi và không thấm nước chỉ trong một b', 'Chăm sóc da'),
(2, 'Nước Tẩy Trang Làm Sạch Sâu Garnier Micellar Cleansing Water', 'https://product.hstatic.net/1000006063/product/12.5_a8532d48b9a9411d9d3e7849279006d0_1024x1024.png', 'https://product.hstatic.net/1000006063/product/6923700996739_9771fd08780c448f832250d8ff3a45cd_1024x1024.png', 'https://product.hstatic.net/1000006063/product/garnier_e19a3cd2753c472dbde3d686d9ecef70_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/tay_trang_garnier_fced731dc8314b6c8c50f877bfe590cc_1024x1024.jpg', 30, 143000, 'Tẩy trang', 'Nước Tẩy Trang làm Sạch Sâu Garnier Micellar Cleansing Water là nước tẩy trang với chiết xuất thành phần từ thiên nhiên an toàn có khả năng làm sạch cặn bẩn, tế bào chết và lớp trang điểm đậm, sản phẩm phù hợp với mọi loại da mang đến trải nghiệm tươi mát', 'Chăm sóc da'),
(3, 'Nước Tẩy Trang Bioderma Dành Cho Da Nhạy Cảm Công Nghệ Micellar Sensibio H2O', 'https://product.hstatic.net/1000006063/product/4_d18d46a22ca8499397c0a8df33473e55_1024x1024.png', 'https://product.hstatic.net/1000006063/product/1_c09cda949d5d497e89b7c00bb76a7760_1024x1024.png', 'https://product.hstatic.net/1000006063/product/1_c09cda949d5d497e89b7c00bb76a7760_1024x1024.png', 'https://product.hstatic.net/1000006063/product/83680317_165266688338757_7225469853511424331_n_423f1cae1d1d4389b2573e25905b6343_1024x1024.png', 30, 420000, 'Tẩy trang', 'Nước Tẩy Trang Cho Da Nhạy Cảm Công Nghệ Micellar Bioderma Sensibio H2O là nước tẩy trang dạng micellar đến từ thương hiệu Bioderma giúp nhẹ nhàng làm sạch bụi bẩn và các lớp trang điểm trên da (kể cả vùng mắt và môi) hông cần rửa lại bằng nước với công n', 'Chăm sóc da'),
(4, 'Nước Tẩy Trang Làm Sạch Dịu Nhẹ Chiết Xuất Bí Đao The Cocoon Winter Melon Micellar Water 500ml', 'https://product.hstatic.net/1000006063/product/cocoon-copy-30_1510dea086f0459782df0a72d2b514ff_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/11_ab84cdc78d0c458b89e3e434569490ca_1024x1024.png', 'https://product.hstatic.net/1000006063/product/tay_trang_bi_dao_500ml_c411ef0ad9ec4f3abca5499c8c9d7171_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/1661072141521-070185120pin01.thumb.jpg_90e7958d445b4658bde63ac8e819fa39_1024x1024.png', 20, 275000, 'Tẩy trang', 'Nước Tẩy Trang Làm Sạch Dịu Nhẹ Chiết Xuất Bí Đao Cocoon Winter Melon Micellar Water là nước tẩy trang  với công nghệ micellar, nước tẩy trang bí đao giúp làm sạch hiệu quả lớp trang điểm, bụi bẩn và dầu thừa mang lại làn da sạch mịn và hoàn toàn dịu nhẹ,', 'Chăm sóc da'),
(5, 'Nước Tẩy Trang Dành Cho Da Dầu Mụn, Da Nhạy Cảm La Roche-Posay Effaclar Eau Micellaire Ultra', 'https://product.hstatic.net/1000006063/product/33_7ca394f971284bf5ab7acfcc9e7f5fe6_1024x1024.png', 'https://product.hstatic.net/1000006063/product/laroche_e_74d479df39ca41468c33e8cb68926bb7_1024x1024_9456d102738d47e2a5f127cedf9adea3_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/021fbc1e06140da60926ebdf65240b16_e5a912861cc34bc98d2001076d759700_1024x1024.jpeg', 'https://product.hstatic.net/1000006063/product/4_d9cd1f1ffdcf402aa64f0095ae8202bd_1024x1024.png', 25, 396000, 'Tẩy trang', 'Nước Tẩy Trang La Roche Posay Cho Da Dầu Mụn là dòng tẩy trang với công thức đặc biệt dành riêng cho da dầu, da mụn. Nhẹ nhàng làm sạch da và tẩy trang, làm sạch bụi bẩn và bã nhờn khỏi bề mặt da nhờ công nghệ cải tiến Glyco Micellar. Giàu nước khoáng La ', 'Chăm sóc da'),
(6, 'Nước Tẩy Trang Làm Sạch Sâu Nature Republic Good Skin Ampoule Cleansing Water 500ml', 'https://product.hstatic.net/1000006063/product/sku-4-copy-2_3cb617478a6b4e69a49e560fb9c2600a_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/nature_republic_good_skin_ampoule_cleansing_water_500ml_7953094705fa40ad83e988ec43485bd4_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/4_9453842420c14f0b8f46a46eb8af13db_1024x1024.png', 'https://product.hstatic.net/1000006063/product/11_104391e476a348008c1ebd0eeeb80d28_1024x1024.jpg', 20, 174000, 'Tẩy trang', 'Nước Tẩy Trang Làm Sạch Sâu Nature Republic Good Skin Ampoule Cleansing Water là dòng nước tẩy trang thuộc thương hiệu Nature Republic nổi bật công thức Micellar với độ pH từ 5.5 đến 6.5 giúp duy trì độ pH cân bằng của làn da, giúp làm sạch lớp trang điểm', 'Chăm sóc da'),
(7, 'Gel Rửa Mặt Dành Cho Da Khô, Viêm Da Cơ Địa Bioderma Atoderm Intensive Gel Moussant', 'https://product.hstatic.net/1000006063/product/1_dd9b93db10d24eaba9def40fed0d982a_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/28_19bfca7474374c47918d5a3053573440_1024x1024.png', 'https://product.hstatic.net/1000006063/product/28_19bfca7474374c47918d5a3053573440_1024x1024.png', 'https://product.hstatic.net/1000006063/product/5a671539208192af74027dcdb8a14432_f09f7e25677e496eb903958be2055133_1024x1024.jpg', 30, 359000, 'Sửa rửa mặt', 'Gel Rửa Mặt Bioderma Atoderm Intensive Gel Moussant là dòng sản phẩm làm sạch đến từ thương hiệu dược mỹ phẩm Bioderma, sản phẩm có chức năng nhẹ nhàng làm sạch da, xoa dịu cảm giác khó chịu và làm dịu cơn ngứa của da khô, da dị ứng, kích ứng.', 'Chăm sóc da'),
(8, 'Sữa Rửa Mặt Dạng Gel Không Chứa Xà Phòng Dành Cho Da Dầu SVR Sebiaclear Gel Moussant', 'https://product.hstatic.net/1000006063/product/20_cd98904da9bb4ccca02cb4f57a29235e_1024x1024.png', 'https://product.hstatic.net/1000006063/product/6a953237593cd5bcb91e8e_quot_6fd3c74567b942fc8525201c331e9c82_1024x1024_1a34288b62184e8bb37a3938ccba4caa_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/6a953237593cd5bcb91e8e_quot_6fd3c74567b942fc8525201c331e9c82_1024x1024_1a34288b62184e8bb37a3938ccba4caa_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/b772c5039f240fd12c6fddb8b7cf60dc_quot_efbd1e72085d44c4acab4b95038e787b_1024x1024.jpg', 10, 442000, 'Sửa rửa mặt', 'Sữa Rửa Mặt Dạng Gel SVR Dành Cho Da Dầu Mụn là sữa rửa mặt với công thức dịu nhẹ không chứa thành phần xà phòng đặc biệt phù hợp với làn da dầu mụn và nhạy cảm, có tác dụng làm sạch, làm sạch tế bào da chết và dầu nhờn trong lỗ chân lông giúp ngăn ngừa t', 'Chăm sóc da'),
(9, 'Gel Rửa Mặt Ngăn Ngừa Mụn Cho Da Dầu Bioderma Sebium Gel Moussant', 'https://product.hstatic.net/1000006063/product/1_69f0ce3ea29244359edd80dd24c5ea28_1024x1024.png', 'https://product.hstatic.net/1000006063/product/4_51296b8a297c48e0b037896327fc398b_1024x1024.png', 'https://product.hstatic.net/1000006063/product/4_51296b8a297c48e0b037896327fc398b_1024x1024.png', 'https://product.hstatic.net/1000006063/product/unnamed_c8265f734a074c95af2f1d9940eeaf31_1024x1024.png', 25, 387000, 'Sữa rửa mặt', 'Gel Rửa Mặt Ngăn Ngừa Mụn Cho Da Dầu Bioderma Sebium Gel Moussant là sữa rửa mặt dạng gel đến từ thương hiệu dược mỹ phẩm Bioderma giúp nhẹ nhàng làm sạch, thanh lọc da, giảm mụn và hạn chế tăng tiết bã nhờn nhờ thành phần kẽm Gluconate và đồng Sulphate. ', 'Chăm sóc da'),
(10, '[400ml] Sữa Rửa Mặt Làm Sạch Sâu Cho Da Nhạy Cảm Eucerin pH5 Facial Cleanser Sensitive Skin', 'https://product.hstatic.net/1000006063/product/70_28f81f62248a4ada9b75a3a4893b9ea6_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/eucerin_e_548a5300c3a34843b6b3c10ed383b1df_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/eucerin_e_548a5300c3a34843b6b3c10ed383b1df_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/-eucerin-diu-nhe-cho-da-nhay-cam-400ml-1_img_800x800_eb97c5_fit_center_dd79147dcf2b4ac980566a7249964dbd_1024x1024.jpg', 30, 222000, 'Sữa rửa mặt', 'Sữa Rửa Mặt Làm Sạch Sâu Cho Da Nhạy Cảm Eucerin pH5 Facial Cleanser Sensitive Skin là dòng sữa rửa mặt được thiết kế dành riêng cho da nhạy cảm với thành phần pH5 Citrate Buffer giúp phục hồi và hỗ trợ duy trì độ cân bằng pH5 tối ưu của da, cùng công thứ', 'Chăm sóc da'),
(11, '[200ml] Sữa Rửa Mặt Dạng Gel Cho Da Dầu Mụn La Roche-Posay Effaclar Purifying Foaming Gel For Oily Sensitive Skin', 'https://product.hstatic.net/1000006063/product/29_55d29233e91a45ab86cbc6c0d8a7bc46_1024x1024.png', 'https://product.hstatic.net/1000006063/product/laroche_e_29b69b8973a146fa9fb0d3ebc59db531_1024x1024_copy_7a03fa790d934037a65b3572e7c05662_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/8_0d7fb5a9cf2f4e0c89212ca4e4d2436d_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/doi_mau_b1bd280fabb8487698833249db6bea79_1024x1024.jpg', 10, 316000, 'Sữa rửa mặt', 'Sữa Rửa Mặt Dạng Gel Cho Da Dầu Mụn La Roche-Posay Effaclar Purifying Foaming Gel For Oily Sensitive Skin là sửa rửa mặt giúp nhẹ nhàng làm sạch bụi bẩn và bã nhờn dư thừa - nguyên nhân chính gây nên mụn. Không làm khô da nhờ các thành phần', 'Chăm sóc da\r\n'),
(12, 'Sữa Rửa Mặt Sạch Sâu Dành Cho Da Dầu Cerave Developed With Dermatologists Foaming Cleanser', 'https://product.hstatic.net/1000006063/product/6_b8a1590bb8694733be9f2e2751f23898_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/cerave_xanh_la_46be10b5b7eb41a2980f15aba821d0e2_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/98d20c5951ead5fe6b33428c39f7622b_57b67f92a37743868daca78ef109fb02_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/ba45786910b96f938949318fd9d547d8_24808b20f6d5409184df1aa70b598ec8_1024x1024.jpg', 20, 377000, 'Sữa rửa mặt', 'Sữa Rửa Mặt Sạch Sâu Dành Cho Da Dầu Cerave Developed With Dermatologists Foaming Cleanser là sữa rửa mặt với công thức lành tính giúp làm sạch bụi bẩn, dầu thừa một cách nhẹ nhàng mà không gây bít tắc lỗ chân lông, duy trì độ ẩm cân bằng da và phù hợp vớ', 'Chăm sóc da'),
(13, 'Tinh Chất Tăng Cường Sáng Da Mờ Thâm Garnier Light Complete Vitamin C 30X Booster Serum', 'https://product.hstatic.net/1000006063/product/6923700996739_copy_068a07262a1645088cd853abb3400a2c_1024x1024.png', 'https://product.hstatic.net/1000006063/product/dcd12563915b37a9fc4da70e132c9704_623bbfed0c04442291fba82c5eb67a91_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/light_complete_vitamin_c_30x_booster_serum_15ml_-_30ml_346f00f2ea534ea8aee3266aa3861381_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/6_a627234ce00f4d719e009f0b09547f0c_master_a92a36cabf5a40fa950e8aca253cccd8_1024x1024.jpg', 10, 193000, 'Serum', 'Tinh Chất Tăng Cường Sáng Da Mờ Thâm Garnier Light Complete Vitamin C 30X Booster Serum là tinh chất dưỡng da thuộc thương hiệu Garnier với công thức nồng độ Vitamin C đậm đặc gấp 30 lần từ tinh chất quả Yuzu, giúp làm sáng da mờ thâm mụn từ sau 3 ngày sử', 'Chăm sóc da'),
(14, 'Tinh Chất Dưỡng Ẩm, Làm Dịu Da Chiết Xuất Thiên Nhiên Dearmay Green Line Miracle Mild Serum', 'https://product.hstatic.net/1000006063/product/1024_5cf496e09ffe4d488441d27473829766_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/dearmay_green_line_miracle_mild_serum1_8b6b443fd34048c7b1c0005cd497eef9_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/dearmay_green_line_miracle_mild_serum_14291b0fd01d4df78a6fb612ba226b00_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/4157_ea5636837d5345b7a67e62993fa2d5cf_1024x1024.jpg', 20, 199000, 'Serum', 'Tinh Chất Dưỡng Ẩm, Làm Dịu Da Chiết Xuất Thiên Nhiên Dearmay Green Line Miracle Mild Serum là tinh chất dưỡng với bảng thành phần lành tính chứa các thành phần có chiết xuất từ thiên nhiên như ngải cứu, tràm trà, trà xanh, rau má giúp bổ sung độ ẩm, làm ', 'Chăm sóc da'),
(15, '[Thần Dược Giữ Gìn Tuổi Thanh Xuân] Tinh Chất DNA Cá Hồi Phục Hồi Da, Giảm Mụn Sau 28 Ngày Suiskin Salmon DN Ampoule', 'https://product.hstatic.net/1000006063/product/suiskin_12943afd73674282a1c94a6bffb8796a_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/2606-p2-1543316029_49975b6cbb2242cab3c5a58948b517eb_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/nen_1_chai_e4e549fcaeb74442aead0d4e98dfa797_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/1750_p_1535701164079_8ee22afae28d4341a103f837a1c051e7_1024x1024.jpg', 10, 812000, 'Serum', 'Tinh Chất DNA Cá Hồi Phục Hồi Da, Giảm Mụn Sau 28 Ngày Suiskin Salmon DN Ampoule là tinh chất dưỡng da thuộc thương hiệu Suiskin chứa các thành phần hữu hiệu được chiết xuất từ tế bào gốc DNA của cá hồi, trứng cá hồi, tinh chất Creatine và khoáng chất biể', 'Chăm sóc da'),
(16, 'Tinh Chất Dưỡng Trắng Da Trị Thâm Balance Active Formula Vitamin C Brightening Serum', 'https://product.hstatic.net/1000006063/product/6_f402e2dc167b48e0a8ac68b348ca3a21_large_9d3061d8a5664bffb665ce45ff5e9280_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/dd_269e52aaa47c40a0b7982caa6745b31e_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/ba84053cd2e73994d991af0ccc3f7eaa_quot_7ef28a4f4a654bd2ac3ab573490e1b2d_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/7b346905493c2b1face2f7914626d837_quot_456161dd4b4741779595ac9c561ea40b_1024x1024.jpg', 10, 269000, 'Serum', 'Tinh Chất Dưỡng Trắng Da Trị Thâm Balance Active Formula Vitamin C Brightening Serum là một loại tinh chất thuộc thương hiệu Balance Active Formula có chứa 6% Illumiscin và 3% Stay-C® 50, là hai dạng dẫn xuất từ Vitamin C có tính ổn định, giảm thiểu tối đ', 'Chăm sóc da'),
(17, 'Tinh Chất Vitamin C Giúp Mờ Thâm Nám, Trắng Sáng Dành Cho Da Dễ Kích Ứng Klairs Freshly Juiced Vitamin Drop 35ml', 'https://product.hstatic.net/1000006063/product/1_2014839e234f47d586b90df9494d1a62_1024x1024.png', 'https://product.hstatic.net/1000006063/product/6316ef9472379add7ce9062ee8376c09_a80562e35b4740378f712f713d8fe789_1024x1024.jpeg', 'https://product.hstatic.net/1000006063/product/img_7810_5f39ecf37de34c208d1d49965ebb7f79_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/6316ef9472379add7ce9062ee8376c09_a80562e35b4740378f712f713d8fe789_1024x1024.jpeg', 10, 280000, 'Serum', 'Tinh Chất Vitamin C Giúp Mờ Thâm Nám, Trắng Sáng Dành Cho Da Dễ Kích Ứng Klairs Freshly Juiced Vitamin Drop là tinh chất dưỡng  \"siêu phẩm\" chứa vitamin C tươi đậm đặc chiết xuất từ Cam, Chanh, Quýt cùng nhiều chiết xuất từ thực vật giúp tăng năng lượng v', 'Chăm sóc da'),
(18, 'Nước Hoa Hồng Không Mùi Dưỡng Ẩm, Làm Dịu Da Klairs Supple Preparation Unscented Toner', 'https://product.hstatic.net/1000006063/product/39744f6d2fe7_1024x1024_23c1125b85244bab82da3d1f160b6ac1_1024x1024_copy_caf8029a1ad0464c8b9bffa1ecf58fce_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/ded0e91db0af0dccf07e228ee5820454_a1e504912a63409997768c8767f25e75_1024x1024.jpeg', 'https://product.hstatic.net/1000006063/product/ded0e91db0af0dccf07e228ee5820454_a1e504912a63409997768c8767f25e75_1024x1024.jpeg', 'https://product.hstatic.net/1000006063/product/39744f6d2fe7_1024x1024_23c1125b85244bab82da3d1f160b6ac1_1024x1024_copy_caf8029a1ad0464c8b9bffa1ecf58fce_1024x1024.jpg', 10, 259000, 'Toner', 'Nước Hoa Hồng Không Mùi Dưỡng Ẩm, Làm Dịu Da Klairs Supple Preparation Unscented Toner là nước hoa hồng giúp làm sạch bụi bẩn và bã nhờn dư thừa bằng các axit amin và các thành phần chiết xuất như rễ cam thảo và lô hội để làm dịu kích ứng. Đặc biệt không ', 'Chăm sóc da'),
(19, 'Nước Hoa Hồng Chiết Xuất Diếp Cá, Tía Tô Chinoshio Natural Skin Lotion 500ml', 'https://product.hstatic.net/1000006063/product/anh-bia_b288a111b3034dd28c6b66ea639389d3_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/3ca245b0f4f2d821571a47cc470aef88_611b3fc89de1432e811436ddc8ff5acc_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/nuoc-hoa-hong-diep-ca-dokudami-natural-nhat-3_a9ef78d6945e4081bf522a215a915161_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/ikdwzzdx1615557562-800x800_2e880d914d40442d8c63f761a2598b6d_1024x1024.jpg', 30, 94000, 'Toner', 'Nước Hoa Hồng Chiết Xuất Diếp Cá, Tía Tô Chinoshio Natural Skin Lotion là nước hoa hồng từ thương hiệu Chinoshio Nhật Bản. Với thành phần chính được chiết xuất từ lá diếp cá và tía tô được gọi là \"thần dược\" về chất chống oxy hóa cùng vitamin giúp loại bỏ', 'Chăm sóc da'),
(20, 'Nước Hoa Hồng Làm Sạch, Dưỡng Ẩm, Se Khít Lỗ Chân Lông Klairs Supple Preparation Facial Toner\n', 'https://product.hstatic.net/1000006063/product/2_514638768fe142668056fcb86e4c5b51_1024x1024.png', 'https://product.hstatic.net/1000006063/product/6e773ca845f9074ff2001e47394e213a_47da7cabc42a41c3a2fdccf21a849a5f_1024x1024.jpeg', 'https://product.hstatic.net/1000006063/product/11_a7c20570a4214007b32489baf4ae67f7_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/7116f9ec2c0423f262ef65450364075b_quot_ea89c16e35004962ae4e65be3ef1313f_1024x1024.jpg', 10, 259000, 'Toner', 'Nước Hoa Hồng Làm Sạch, Dưỡng Ẩm, Se Khít Lỗ Chân Lông Klairs Supple Preparation Facial Toner là nước hoa hồng giúp cân bằng độ pH tự nhiên trên da. Với công thức chứa các chiết xuất từ thực vật khác nhau và các thành phần làm dịu được pha trộn với nhau g', 'Chăm sóc da'),
(21, '[Size 100ml] Nước Hoa Hồng Cho Da Nhạy Cảm Bioderma Sensibio Tonique', 'https://product.hstatic.net/1000006063/product/17_88902e6c296f4f528f3ff2eb917b35c3_1024x1024.png', 'https://product.hstatic.net/1000006063/product/8_494a225b3c1c4d99a02ee63312eb57f1_1024x1024.png', 'https://product.hstatic.net/1000006063/product/1_7016f50bf61349bc9fb05f082078c41c_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/fbe5a29fe2190ac70a034bc31ae17561_quot_d75a71b5d6304be29f6f411834550fdc_1024x1024.jpg', 20, 238000, 'Toner', 'Nước Hoa Hồng Cho Da Nhạy Cảm Bioderma Sensibio Tonique là dòng nước hoa hồng giúp cân bằng độ pH sinh lí tự nhiên trên da đến từ thương hiệu Bioderma, sản phẩm giúp dưỡng ẩm và làm dịu da nhạy cảm, kích ứng với thành phần chính là nước, chiết xuất dưa le', 'Chăm sóc da'),
(23, 'Kem Che Khuyết Điểm Có Chống Nắng Hàn Quốc The Saem Cover Perfection Tip Concealer SPF28/PA++', 'https://product.hstatic.net/1000006063/product/4443_bf7c84eabb0c47cb9afe97252b697344_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/3_1dca4a9dfc384de7bc4590d65dfa28d8_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/4_a04d02a24c4542349a355f87a395fdd8_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/5_d248bd14420d48d5b64ba26d5e2e610e_1024x1024.jpg', 10, 92000, 'Mặt', 'Kem Che Khuyết Điểm Có Chống Nắng Hàn Quốc The Saem Cover Perfection Tip Concealer SPF28/PA++ là che khuyết điểm với khả năng che phủ cao giúp che hiệu quả các đốm tàn nhang, sẹo do mụn hay các đầu mụn bị ửng đỏ trên da, hiệu chỉnh tông màu da mang đến ch', 'Trang Điểm'),
(24, 'Kem Lót Làm Mịn Da, Che Khuyết Điểm, Se Khít Lỗ Chân Lông Maybelline Baby Skin Pore Eraser 22ml', 'https://product.hstatic.net/1000006063/product/299_b2adbb3ff2ad4d3c9f4d5cdaf887ade7_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/300_d17f6295e9564fd1aadfdc5cc3a64250_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/301_68a45954bd0848bca6b46fa8e4f8dff4_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/302_10a92aa3fe4946db8e72304fe7973c5d_1024x1024.jpg', 20, 149000, 'Mặt', 'Kem Lót Làm Mịn Da, Che Khuyết Điểm, Se Khít Lỗ Chân Lông Maybelline Baby Skin Pore Eraser 22ml là kem lót thuộc thương hiệu Maybelline có kết cấu gel mịn làm mịn da, se khít lỗ chân lông, hỗ trợ kiềm dầu nhưng vẫn cung cấp đầy đủ độ ẩm cho da và chứa chi', 'Trang Điểm'),
(25, '\r\nPhấn Phủ Dạng Bột Kiềm Dầu, Hiệu Ứng Mờ Lì, Cho Lớp Nền Mịn Màng, Lâu Trôi Merzy Stay Blur Loose Powder 6.2g', 'https://product.hstatic.net/1000006063/product/loose_a51b7c7960c54bd8934f542f9189431c_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/4_911777f03f0c4ba0a83f57be8034ef01_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/21_685c35a3d1894640bfbd089a1f28c298_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/14_cfa4fbb1a9db4aaf81039990fe6c292c_1024x1024.jpg', 20, 149000, 'Mặt', 'Phấn Phủ Dạng Bột Kiềm Dầu, Hiệu Ứng Mờ Lì, Cho Lớp Nền Mịn Màng, Lâu Trôi Merzy Stay Blur Loose Powder là phấn phủ dạng bột đến từ thương hiệu Merzy có công dụng kiềm dầu mang đến hiệu quả cố định lớn nền và duy trì độ ẩm giúp mang lại làn da mịn màng kh', 'Trang Điểm'),
(26, 'Bút Che Khuyết Điểm Đa Năng Che Phủ Hoàn Hảo Maybelline Instant Age Rewind Eraser Multi-Use Concealer SPF 30 6ml', 'https://product.hstatic.net/1000006063/product/105.9_675e79d3390449fc8aa66ed683c8f696_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/105.5_65f5e2aa80f1486b96af5f86b5963da5_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/105.6_84ea4800073647f99a5bba5ba7723b8e_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/105.8_0508340c529c4fc3ba838bf85c309bfa_1024x1024.jpg', 10, 169000, 'Mặt', 'Bút Che Khuyết Điểm Đa Năng Che Phủ Hoàn Hảo Maybelline Instant Age Rewind Eraser Multi-Use Concealer  là che khuyết điểm đến từ thương hiệu Maybelline giúp che khuyết điểm quầng thâm mắt, mụn, thâm một cách hiệu quả, thành phần chứa quả kĩ tử giúp dưỡng ', 'Trang Điểm'),
(27, 'Kem Lót Kiềm Dầu, Lâu Trôi, Ngăn Xuống Tông Maybelline Fit Me Matte + Poreless 16H Mattifying Primer 30ml', 'https://product.hstatic.net/1000006063/product/1_4dede1e248984a708e67c8123ffe937e_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/2_f8bc81f2ba3746729ce8502f342b511e_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/3_c4b71578d84442729d753ef89b96c68e_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/4_d1bce1dea62643638a0eaa39274bf417_1024x1024.jpg', 20, 179000, 'Mặt', 'Kem Lót Kiềm Dầu, Lâu Trôi, Ngăn Xuống Tông Maybelline Fit Me Matte + Poreless 16H Mattifying Primer là kem lót đến từ thương hiệu Maybelline có thành phần tích hợp đất sét khoáng giúp kiềm dầu, ngăn nền xuống tông hiệu quả suốt 16H. Chất kem dạng sữa dễ ', 'Trang Điểm'),
(28, 'Bút Kẻ Mắt Nước Chống Trôi Merzy The First Pen Eyeliner 0.5g', 'https://product.hstatic.net/1000006063/product/216_51f51e528da94f16a99149c3ef4bc46e_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/21_d02edd53bbbb485a99d590cfef11dd2b_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/199_85bd27efe9c1474fb4ac182db3aa69a5_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/4629_89436b9c80964113ab503096c79286f8_1024x1024.jpg', 20, 169000, 'Mắt', 'Bút Kẻ Mắt Nước Chống Trôi Merzy The First Pen Eyeliner là kẻ mắt nước của thương hiệu Merzy với đầu bút mềm mại giúp kẻ đường line một cách dễ dàng tạo đôi mắt sắc sảo, cho đường kẻ chính xác và liền mạch, bền màu, lâu trôi giữ cho đôi mắt thu hút suốt c', 'Trang Điểm'),
(29, 'Mascara Tơi Dài Mi, Cho Mi Cong Dài Tự Nhiên Maybelline New York Lash Sensational Sky High Mascara 6ml', 'https://product.hstatic.net/1000006063/product/79_5417b96e60fc4ff3b2de8611d6f75880_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/82_cc1691d9ab9a44938cef6a7c039a0803_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/86_01dcf75cc76448a1a6ec0fb1ccd1ad28_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/83_53d9cf6cba014672b9422bb0fe6bdebc_1024x1024.jpg', 10, 209000, 'Mắt', 'Mascara Tơi Dài Mi, Cho Mi Cong Dài Tự Nhiên Maybelline New York Lash Sensational Sky High Mascara là mascara đến từ thương hiệu Maybelline  giúp mi tơi dài không giới hạn. Đầu cọ Flex Tower mới giúp chuốt mi cao vút, chạm từng sợi mi, cho 360 độ hiệu quả', 'Trang Điểm'),
(30, 'Mascara Làm Dài Và Cong Mi, Không Lem Không Trôi Maybelline The Hyper Curl Mascara', 'https://product.hstatic.net/1000006063/product/114_c186ba72d893459a88bf79fdf41d06d8_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/hype_c84fd9a6abf74439afd31b4fcac4e0b1_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/267841997_4703874096397806_4149352826199906464_n_c0d3f6d49bef40f082db9f6d27c750e2_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/114.1_577b5022b3a04723a5755c89a4facbea_1024x1024.jpg', 20, 129000, 'Mắt', 'Mascara Làm Dài Và Cong Mi, Không Lem Không Trôi Maybelline The Hyper Curl Mascara là mascara chuốt mi thuộc thương hiệu Maybelline chứa công thức tối ưu giúp mascara được bao phủ hiệu quả, làm dày mi gấp 3 lần và giúp hàng mi cong vút suốt nhiều giờ liền', 'Trang Điểm'),
(31, '[New] Bút Kẻ Mắt Nước Siêu Sắc Mảnh, Không Lem Trôi Maybelline New York Hyper Sharp Liner Extreme 0.4g', 'https://product.hstatic.net/1000006063/product/4636_e651d7559ebd43cca23676c1eddea96e_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/maybelline_ke_mat_942687171ea84289b98a52feb11d3127_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/4633_8c95d185bb7b4ac99568bccfc7f578ee_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/103.6_b1c0b5a67f4845f6a5c6a42555d6192b_1024x1024.jpg', 10, 169000, 'Mắt', 'Bút Kẻ Mắt Nước Siêu Sắc Mảnh, Không Lem Trôi Maybelline New York Hyper Sharp Liner Extreme là kẻ mắt nước đến từ thương hiệu Maybelline được cải tiến với đầu cọ mảnh, 0.01mm, sắc nét, công nghệ màng phim độc đáo giữ màu lâu, cực kì linh hoạt giúp bạn dễ ', 'Trang Điểm'),
(32, '[Màu 1-5] Chì Kẻ Mày Dearmay Sketch Eyebrow Pencil 0.3g', 'https://product.hstatic.net/1000006063/product/150_00609b4c1a774dac8c26fce9bd9fb5b7_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/2_957d9e5ff7924d0e9e31998a7aa00309_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/152_da423146cb404da38961c04cee1e9ff2_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/3_8866b82bacb0450bbf9513be42e96074_1024x1024.jpg', 10, 59000, 'Mắt', 'Chì kẻ mày ngang hai đầu Dearmay Sketch Eyebrow Pencil là chì kẻ mày đến từ thương hiệu Dearmay giúp bạn kẻ được những dáng mày sắc nét dễ dàng hơn bao giờ hết. Kết cấu chì mịn cùng màu lên chuẩn, lâu trôi và bảng màu phù hợp với màu da, màu tóc châu Á là', 'Trang Điểm'),
(33, '[A1- A45] Son Kem Lì Hàn Quốc Black Rouge Air Fit Velvet Tint 4.5g', 'https://product.hstatic.net/1000006063/product/101_d539cdf5b9ed40548d68176baa4d3038_1024x1024_e4b7b39a53454fcfb8b420640d67e44f_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/141_12169268976942c1a1cc4f919c23757f_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/427_a2aa964dd9cc4c8c8be48ff1f35eef6e_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/a01_a60f0527c5c5453ea7c843f071904af9_1024x1024.jpg', 10, 164000, 'Môi', 'Son Kem Lì Hàn Quốc Black Rouge Air Fit Velvet Tint thuộc dòng son tint của thương hiệu Black Rouge với chất son velvet tint mịn lì, trơn mượt trên môi quen thuộc, son có kết cấu dễ tán với đầu cọ tên tiến, lớp finish để lại lớp tint nhẹ và set lì nhanh c', 'Trang Điểm'),
(34, '[V1 - V12] Son Kem Lì Merzy The First Velvet Tint 4.5g', 'https://product.hstatic.net/1000006063/product/v1_d43d97fa09514473a14f14b3df329e65_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/139_92153c339f6042a8a4c8d82b9bcab88e_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/820_33e3ef0e52764579baa549fa528d2af8_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/v01_82b10c67a95c48749f3df5357ed89624_1024x1024.png', 10, 139000, 'Môi', 'Son Kem Lì Merzy The First Velvet Tint 4.5g là son kem lì thuộc dòng Velvet tint của thương hiệu Merzy có chất son vượt trội cùng độ lên màu chuẩn, mịn mướt không hề làm bay màu hay lộ vân môi, độ bám màu hoàn hảo cùng bảng màu đa dạng và phong phú giúp đ', 'Trang Điểm'),
(35, '[MÀU 1-30] Son Kem Lì Cực Nhẹ Môi Romand Zero Velvet Tint 5.5g', 'https://product.hstatic.net/1000006063/product/172_b15c5daa991e430487b507042fcd8b4f_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/33_e1fd9a0dbdf24986a8bffa44fef4f5ba_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/31_f1362971e8454814bd03ab10ddfd4d5e_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/226_ca52a7dfce2b4dcb99102120004c97e8_1024x1024.jpg', 10, 149000, 'Môi', 'Son Kem Lì Cực Nhẹ Môi Romand Zero Velvet Tint hiện tại đã có tại Thế giới Skinfood có những đặc trưng nổi bật như sau: Về thiết kế: Son Kem Lì Cực Nhẹ Môi Romand Zero Velvet Tint có thân hình trụ tròn, vỏ nhám lì dễ dàng phân biệt màu son bên trong, kích', 'Trang Điểm'),
(36, '[Màu 1-4] Son Kem Lì, Mịn Mượt Như Nhung Romand Milk Tea Velvet Tint 4.4g', 'https://product.hstatic.net/1000006063/product/28_9eed9b75e050498eb53432c99e864935_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/mil4_18b9f53af457436fb5200e01481019fc_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/mlik_tea_3fd3663f99aa431c9af678fd38e17e43_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/174_b67f2477bad34b7d8c99c4ebe7d758c5_1024x1024.jpg', 10, 135000, 'Môi', 'Son Kem Lì Romand Milk Tea Velvet Tint  là son kem lì của thương hiệu Romand có chất son xốp mịn, độ lên màu chuẩn, dễ tán đều trên môi cùng bảng màu ngọt ngào, mùi thơm dịu nhẹ tựa ly trà sữa hương socola ngọt ngào, êm dịu cho bạn đôi môi ngọt ngào, xinh', 'Trang Điểm'),
(37, '[V13 - V18] Son Kem Lì Merzy The First Velvet Tint Season 3 - Red Edition', 'https://product.hstatic.net/1000006063/product/mz3_fbabb974343b4bda8a15bb5644712c2d_1024x1024.jpg', 'https://product.hstatic.net/1000006063/product/69dcad566412576ba09841d9e8497632_0b257afac8a34e4c8d4088c80e7e1236_1024x1024.jpeg', 'https://product.hstatic.net/1000006063/product/v13_a75640f79a8e4d76816b7676ed0e7267_1024x1024.png', 'https://product.hstatic.net/1000006063/product/v14_c2bd3459bf86436d8a8e3c81c72271a7_1024x1024.png', 10, 139000, 'Môi', 'Son Kem Lì Merzy The First Velvet Tint Season 3 - Red Edition hiện đã có tại Thế giới Skinfood nằm trong phiên bản version 3 Red Edition thuộc dòng Velvet tint của thương hiệu Merzy có kết cấu son nhung mịn cùng bảng màu trendy, hợp thời thượng mang cảm g', 'Trang Điểm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vn_pay`
--

CREATE TABLE `vn_pay` (
  `id_vnpay` int(11) NOT NULL,
  `code_cart` varchar(50) NOT NULL,
  `vnp_amount` varchar(100) NOT NULL,
  `vnp_bankcode` varchar(100) NOT NULL,
  `vnp_banktranno` varchar(100) NOT NULL,
  `vnp_cardtype` varchar(100) NOT NULL,
  `vnp_orderinfo` varchar(100) NOT NULL,
  `vnp_paydate` varchar(100) NOT NULL,
  `vnp_tmncode` varchar(100) NOT NULL,
  `vnp_transactionno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `custumers`
--
ALTER TABLE `custumers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vn_pay`
--
ALTER TABLE `vn_pay`
  ADD PRIMARY KEY (`id_vnpay`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `custumers`
--
ALTER TABLE `custumers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `vn_pay`
--
ALTER TABLE `vn_pay`
  MODIFY `id_vnpay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
