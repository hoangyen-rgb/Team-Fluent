-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2023 lúc 01:46 AM
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
-- Cơ sở dữ liệu: `chickcuisine`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cartdetail`
--

CREATE TABLE `cartdetail` (
  `Id` int(5) NOT NULL COMMENT 'Mã chi tiết giỏ hàng',
  `Quantity` int(10) NOT NULL COMMENT 'Số lượng',
  `Price` int(10) NOT NULL COMMENT 'Giá',
  `UserId` int(5) NOT NULL COMMENT 'Mã người dùng',
  `ProductId` int(5) NOT NULL COMMENT 'Mã sản phẩm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cartdetail`
--

INSERT INTO `cartdetail` (`Id`, `Quantity`, `Price`, `UserId`, `ProductId`) VALUES
(1, 3, 50000, 1, 1),
(2, 3, 75000, 2, 3),
(3, 1, 30000, 1, 2),
(4, 4, 120000, 3, 5),
(5, 2, 60000, 2, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `Id` int(5) NOT NULL COMMENT 'Mã danh mục',
  `Name` varchar(50) NOT NULL COMMENT 'Tên danh mục',
  `Image` varchar(255) NOT NULL COMMENT 'Tên file ảnh danh mục'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`Id`, `Name`, `Image`) VALUES
(1, 'Đồ ăn nhanh', 'category-fast-food.png'),
(2, 'Pizza', 'category-pizza.png'),
(3, 'Cơm', 'category-cooked-rice.png'),
(4, 'Bánh ngọt', 'category-dessert.png'),
(5, 'Mì', 'category-noodle.png'),
(6, 'Đồ uống', 'category-drink.png'),
(7, 'Trà sữa', 'category-milk-tea.png'),
(8, 'Đường phố', 'category-street.png'),
(9, 'Salad', 'category-salad.png'),
(14, 'mèo nè tr', 'z4831803975939_d175dadab6035450e16c8f333daed2f7.gif');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `Id` int(5) NOT NULL COMMENT 'Mã bình luận',
  `Content` text NOT NULL COMMENT 'Nội dung',
  `Rating` int(1) NOT NULL COMMENT 'Đánh giá (1-5)',
  `Time` datetime NOT NULL COMMENT 'Thời gian',
  `UserId` int(5) NOT NULL COMMENT 'Mã người dùng',
  `ProductId` int(5) NOT NULL COMMENT 'Mã sản phẩm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`Id`, `Content`, `Rating`, `Time`, `UserId`, `ProductId`) VALUES
(223, 'Hôm nay, mình đã thử món mới ở đây và phải nói rằng ấn tượng thật sự. Mùi thơm của đồ ăn khiến mình không thể chờ đợi được nữa. ', 5, '2023-11-08 15:54:55', 4, 34),
(224, 'Không gian ở đây rất thoải mái và ấm cúng. Cảm giác như đang ở nhà vậy. Thực đơn đa dạng, mình chọn một bữa trưa ngon miệng. ', 4, '2023-10-28 03:30:55', 1, 13),
(225, 'Mình đã đến đây với gia đình và chúng tôi đều rất hài lòng với chất lượng đồ ăn và dịch vụ. Giá cả hợp lý so với chất lượng.', 5, '2023-11-14 02:44:55', 5, 28),
(226, 'Mình không thích mùi vị của đồ ăn này, có lẽ không phải là sở thích của mình. Nên thử món khác lần sau.', 2, '2023-11-15 13:55:55', 2, 25),
(227, 'Chất lượng đồ ăn giảm sút so với lần trước. Hy vọng nhà hàng sẽ cải thiện trong tương lai.', 3, '2023-11-12 19:26:55', 3, 3),
(228, 'Sẽ quay lại lần sau vì thực sự hài lòng với dịch vụ và chất lượng đồ ăn ở đây. Mong rằng sẽ có thêm nhiều món mới để thử.', 5, '2023-11-04 11:33:55', 5, 11),
(229, 'Hôm nay, mình đã thử món mới ở đây và phải nói rằng ấn tượng thật sự. Mùi thơm của đồ ăn khiến mình không thể chờ đợi được nữa. ', 5, '2023-11-17 07:07:57', 3, 30),
(230, 'Không gian ở đây rất thoải mái và ấm cúng. Cảm giác như đang ở nhà vậy. Thực đơn đa dạng, mình chọn một bữa trưa ngon miệng. ', 4, '2023-10-30 03:13:57', 3, 13),
(231, 'Mình đã đến đây với gia đình và chúng tôi đều rất hài lòng với chất lượng đồ ăn và dịch vụ. Giá cả hợp lý so với chất lượng.', 5, '2023-11-18 17:29:57', 1, 2),
(232, 'Mình không thích mùi vị của đồ ăn này, có lẽ không phải là sở thích của mình. Nên thử món khác lần sau.', 2, '2023-10-31 18:13:57', 2, 24),
(233, 'Chất lượng đồ ăn giảm sút so với lần trước. Hy vọng nhà hàng sẽ cải thiện trong tương lai.', 3, '2023-11-17 13:43:57', 2, 8),
(234, 'Sẽ quay lại lần sau vì thực sự hài lòng với dịch vụ và chất lượng đồ ăn ở đây. Mong rằng sẽ có thêm nhiều món mới để thử.', 5, '2023-10-30 04:33:57', 1, 8),
(235, 'Thực sự không thể tin được với giá này. Đồ ăn ở đây thậm chí còn ngon hơn cả những nơi đắt đỏ mà mình từng thử.', 5, '2023-11-01 14:16:57', 4, 9),
(236, 'Mình là người ưa thích đồ ăn chay và đây là một trong những nơi tốt nhất mà mình từng ghé thăm. Đặc biệt là món ', 4, '2023-11-19 16:57:57', 3, 26),
(237, 'Đến nhà hàng lúc 7 giờ tối và chỗ đã đầy ắp người. Tuy nhiên, dịch vụ vẫn rất nhanh chóng và chuyên nghiệp. Menu đa dạng và phong phú, có nhiều món mà mình chưa từng thử.', 4, '2023-11-23 20:19:08', 3, 30),
(238, 'Hôm nay mình đến đây với bạn bè và chúng tôi đã thử nhiều món khác nhau. Mọi thứ đều rất ngon và phục vụ tận tâm.', 5, '2023-11-21 20:41:08', 4, 19),
(239, 'Không gian quán rất sạch sẽ và thoải mái. Đặc biệt, đèn trang trí tạo ra không khí ấm cúng.', 4, '2023-11-09 18:33:08', 1, 16),
(240, 'Không hài lòng với giá cả ở đây. Đồ ăn có vẻ ngon nhưng giá lại khá cao so với chất lượng.', 2, '2023-11-07 02:27:08', 4, 23),
(241, 'Đồ ăn ở đây còn thua xa so với những nơi khác trong cùng phân khúc giá. Chắc chắn sẽ không quay lại lần nữa.', 3, '2023-11-18 17:23:08', 5, 18),
(242, 'Mình không thể ngờ rằng đồ ăn ở đây lại ngon đến vậy. Đặc biệt là món ', 5, '2023-10-31 06:55:08', 5, 34),
(243, 'Nhân viên phục vụ nhiệt tình và thân thiện. Họ đã tư vấn cho chúng tôi những món ăn phổ biến và phù hợp với khẩu vị.', 5, '2023-11-16 07:35:08', 4, 30),
(244, 'Đến đây vào cuối tuần và không gian quán rất sôi động. Rất phù hợp để họp mặt bạn bè hoặc gia đình.', 4, '2023-11-13 11:47:08', 1, 7),
(245, 'Chúc quán ngày càng phát triển. Mình sẽ quay lại và giới thiệu cho bạn bè về địa điểm này.', 5, '2023-11-14 16:21:08', 4, 30),
(246, 'Đến nhà hàng lúc 7 giờ tối và chỗ đã đầy ắp người. Tuy nhiên, dịch vụ vẫn rất nhanh chóng và chuyên nghiệp. Menu đa dạng và phong phú, có nhiều món mà mình chưa từng thử.', 4, '2023-11-19 18:20:56', 1, 23),
(247, 'Hôm nay mình đến đây với bạn bè và chúng tôi đã thử nhiều món khác nhau. Mọi thứ đều rất ngon và phục vụ tận tâm.', 5, '2023-11-02 23:06:56', 5, 30),
(248, 'Không gian quán rất sạch sẽ và thoải mái. Đặc biệt, đèn trang trí tạo ra không khí ấm cúng.', 4, '2023-11-10 22:12:56', 2, 14),
(249, 'Không hài lòng với giá cả ở đây. Đồ ăn có vẻ ngon nhưng giá lại khá cao so với chất lượng.', 2, '2023-10-31 23:19:56', 5, 6),
(250, 'Đồ ăn ở đây còn thua xa so với những nơi khác trong cùng phân khúc giá. Chắc chắn sẽ không quay lại lần nữa.', 3, '2023-11-20 11:56:56', 2, 19),
(251, 'Mình không thể ngờ rằng đồ ăn ở đây lại ngon đến vậy. Đặc biệt là món ', 5, '2023-11-09 19:47:56', 1, 3),
(252, 'Nhân viên phục vụ nhiệt tình và thân thiện. Họ đã tư vấn cho chúng tôi những món ăn phổ biến và phù hợp với khẩu vị.', 5, '2023-10-31 22:04:56', 5, 32),
(253, 'Đến đây vào cuối tuần và không gian quán rất sôi động. Rất phù hợp để họp mặt bạn bè hoặc gia đình.', 4, '2023-11-04 02:50:56', 5, 14),
(254, 'Chúc quán ngày càng phát triển. Mình sẽ quay lại và giới thiệu cho bạn bè về địa điểm này.', 5, '2023-11-08 04:45:56', 3, 14),
(255, 'Đến nhà hàng lúc 7 giờ tối và chỗ đã đầy ắp người. Tuy nhiên, dịch vụ vẫn rất nhanh chóng và chuyên nghiệp. Menu đa dạng và phong phú, có nhiều món mà mình chưa từng thử.', 4, '2023-11-02 09:24:00', 5, 15),
(256, 'Hôm nay mình đến đây với bạn bè và chúng tôi đã thử nhiều món khác nhau. Mọi thứ đều rất ngon và phục vụ tận tâm.', 5, '2023-11-13 02:54:00', 3, 17),
(257, 'Không gian quán rất sạch sẽ và thoải mái. Đặc biệt, đèn trang trí tạo ra không khí ấm cúng.', 4, '2023-11-08 09:46:00', 1, 10),
(258, 'Không hài lòng với giá cả ở đây. Đồ ăn có vẻ ngon nhưng giá lại khá cao so với chất lượng.', 2, '2023-11-19 17:12:00', 5, 17),
(259, 'Đồ ăn ở đây còn thua xa so với những nơi khác trong cùng phân khúc giá. Chắc chắn sẽ không quay lại lần nữa.', 3, '2023-10-28 13:42:00', 5, 5),
(260, 'Mình không thể ngờ rằng đồ ăn ở đây lại ngon đến vậy. Đặc biệt là món ', 5, '2023-11-23 21:51:00', 2, 15),
(261, 'Nhân viên phục vụ nhiệt tình và thân thiện. Họ đã tư vấn cho chúng tôi những món ăn phổ biến và phù hợp với khẩu vị.', 5, '2023-11-14 00:28:00', 3, 15),
(262, 'Đến đây vào cuối tuần và không gian quán rất sôi động. Rất phù hợp để họp mặt bạn bè hoặc gia đình.', 4, '2023-11-01 03:04:00', 4, 20),
(263, 'Chúc quán ngày càng phát triển. Mình sẽ quay lại và giới thiệu cho bạn bè về địa điểm này.', 5, '2023-11-06 09:58:00', 1, 33),
(264, 'Mình đã đặt một chiếc pizza từ trang web này và không thể tin nổi với sự thuận tiện và nhanh chóng. Sau khi đặt hàng, thời gian giao hàng chỉ mất khoảng 30 phút. Pizza vẫn nóng hổi khi đến tay mình và hương vị thật ngon. Cảm ơn đội ngũ đầu bếp và nhân viên giao hàng đã tạo ra một bữa ăn tuyệt vời.', 5, '2023-11-13 20:44:56', 1, 16),
(265, 'Dịch vụ giao hàng của trang web này rất tiện lợi. Mình đã thử nhiều món từ các nhà hàng khác nhau và đều hài lòng với chất lượng và dịch vụ. Nhân viên giao hàng luôn nhanh nhẹn và thân thiện. Các món ăn đều được đóng gói cẩn thận và giữ nhiệt tốt. Sẽ tiếp tục sử dụng dịch vụ của trang web này.', 4, '2023-11-01 05:51:56', 5, 1),
(266, 'Thực đơn trên trang web rất đa dạng, từ đồ ăn nhanh đến các món ẩm thực cao cấp. Mình đã thử nhiều món và đều rất hài lòng. Hệ thống đặt hàng và thanh toán rất thuận tiện, giúp tiết kiệm thời gian. Còn chần chừ gì nữa, hãy đặt ngay để trải nghiệm!', 5, '2023-11-06 18:52:56', 1, 34),
(267, 'Mình là một khách hàng thường xuyên của trang web này và luôn hài lòng với chất lượng và sự đa dạng của thực đơn. Dù ở bất kỳ đâu, chỉ cần một chiếc điện thoại di động, mình có thể dễ dàng đặt món và nhận được giao hàng trong thời gian ngắn. Điều này thật sự thuận tiện cho cuộc sống bận rộn của mình.', 5, '2023-11-13 19:34:56', 5, 26),
(268, 'Gần đây mình mới sử dụng dịch vụ này và đã có một trải nghiệm tuyệt vời. Mình đặt một bữa tối gia đình và mọi thứ đều tới đúng giờ. Thực đơn có nhiều lựa chọn và mình đã thử một số món mới. Tất cả đều ngon và giá cả phải chăng. Sẽ tiếp tục ủng hộ trang web này.', 4, '2023-11-26 06:16:56', 3, 8),
(269, 'Mình là người thích ẩm thực và đã thử nhiều dịch vụ đặt món trực tuyến. Trang web này là một trong những lựa chọn hàng đầu của mình. Dịch vụ giao hàng nhanh chóng và thực đơn đa dạng, phù hợp cho mọi khẩu vị. Mình đã giới thiệu cho nhiều người bạn và họ cũng rất hài lòng.', 5, '2023-11-15 21:46:56', 1, 22),
(270, 'Mình đã đặt một chiếc pizza từ trang web này và không thể tin nổi với sự thuận tiện và nhanh chóng. Sau khi đặt hàng, thời gian giao hàng chỉ mất khoảng 30 phút. Pizza vẫn nóng hổi khi đến tay mình và hương vị thật ngon. Cảm ơn đội ngũ đầu bếp và nhân viên giao hàng đã tạo ra một bữa ăn tuyệt vời.', 5, '2023-11-26 21:43:00', 3, 3),
(271, 'Dịch vụ giao hàng của trang web này rất tiện lợi. Mình đã thử nhiều món từ các nhà hàng khác nhau và đều hài lòng với chất lượng và dịch vụ. Nhân viên giao hàng luôn nhanh nhẹn và thân thiện. Các món ăn đều được đóng gói cẩn thận và giữ nhiệt tốt. Sẽ tiếp tục sử dụng dịch vụ của trang web này.', 4, '2023-10-30 18:39:00', 3, 17),
(272, 'Thực đơn trên trang web rất đa dạng, từ đồ ăn nhanh đến các món ẩm thực cao cấp. Mình đã thử nhiều món và đều rất hài lòng. Hệ thống đặt hàng và thanh toán rất thuận tiện, giúp tiết kiệm thời gian. Còn chần chừ gì nữa, hãy đặt ngay để trải nghiệm!', 5, '2023-11-21 14:43:00', 3, 18),
(273, 'Mình là một khách hàng thường xuyên của trang web này và luôn hài lòng với chất lượng và sự đa dạng của thực đơn. Dù ở bất kỳ đâu, chỉ cần một chiếc điện thoại di động, mình có thể dễ dàng đặt món và nhận được giao hàng trong thời gian ngắn. Điều này thật sự thuận tiện cho cuộc sống bận rộn của mình.', 5, '2023-11-03 18:02:00', 2, 15),
(274, 'Gần đây mình mới sử dụng dịch vụ này và đã có một trải nghiệm tuyệt vời. Mình đặt một bữa tối gia đình và mọi thứ đều tới đúng giờ. Thực đơn có nhiều lựa chọn và mình đã thử một số món mới. Tất cả đều ngon và giá cả phải chăng. Sẽ tiếp tục ủng hộ trang web này.', 4, '2023-11-25 05:06:00', 2, 23),
(275, 'Mình là người thích ẩm thực và đã thử nhiều dịch vụ đặt món trực tuyến. Trang web này là một trong những lựa chọn hàng đầu của mình. Dịch vụ giao hàng nhanh chóng và thực đơn đa dạng, phù hợp cho mọi khẩu vị. Mình đã giới thiệu cho nhiều người bạn và họ cũng rất hài lòng.', 5, '2023-11-20 03:09:00', 5, 11),
(276, 'Mình đã đặt một chiếc pizza từ trang web này và không thể tin nổi với sự thuận tiện và nhanh chóng. Sau khi đặt hàng, thời gian giao hàng chỉ mất khoảng 30 phút. Pizza vẫn nóng hổi khi đến tay mình và hương vị thật ngon. Cảm ơn đội ngũ đầu bếp và nhân viên giao hàng đã tạo ra một bữa ăn tuyệt vời.', 5, '2023-11-18 23:57:03', 4, 14),
(277, 'Dịch vụ giao hàng của trang web này rất tiện lợi. Mình đã thử nhiều món từ các nhà hàng khác nhau và đều hài lòng với chất lượng và dịch vụ. Nhân viên giao hàng luôn nhanh nhẹn và thân thiện. Các món ăn đều được đóng gói cẩn thận và giữ nhiệt tốt. Sẽ tiếp tục sử dụng dịch vụ của trang web này.', 4, '2023-11-23 16:51:03', 1, 23),
(278, 'Thực đơn trên trang web rất đa dạng, từ đồ ăn nhanh đến các món ẩm thực cao cấp. Mình đã thử nhiều món và đều rất hài lòng. Hệ thống đặt hàng và thanh toán rất thuận tiện, giúp tiết kiệm thời gian. Còn chần chừ gì nữa, hãy đặt ngay để trải nghiệm!', 5, '2023-10-31 13:42:03', 3, 16),
(279, 'Mình là một khách hàng thường xuyên của trang web này và luôn hài lòng với chất lượng và sự đa dạng của thực đơn. Dù ở bất kỳ đâu, chỉ cần một chiếc điện thoại di động, mình có thể dễ dàng đặt món và nhận được giao hàng trong thời gian ngắn. Điều này thật sự thuận tiện cho cuộc sống bận rộn của mình.', 5, '2023-11-10 17:13:03', 2, 34),
(280, 'Gần đây mình mới sử dụng dịch vụ này và đã có một trải nghiệm tuyệt vời. Mình đặt một bữa tối gia đình và mọi thứ đều tới đúng giờ. Thực đơn có nhiều lựa chọn và mình đã thử một số món mới. Tất cả đều ngon và giá cả phải chăng. Sẽ tiếp tục ủng hộ trang web này.', 4, '2023-11-03 00:24:03', 2, 2),
(281, 'Mình là người thích ẩm thực và đã thử nhiều dịch vụ đặt món trực tuyến. Trang web này là một trong những lựa chọn hàng đầu của mình. Dịch vụ giao hàng nhanh chóng và thực đơn đa dạng, phù hợp cho mọi khẩu vị. Mình đã giới thiệu cho nhiều người bạn và họ cũng rất hài lòng.', 5, '2023-11-15 09:05:03', 1, 33),
(282, 'Mình đã đặt một chiếc pizza từ trang web này và không thể tin nổi với sự thuận tiện và nhanh chóng. Sau khi đặt hàng, thời gian giao hàng chỉ mất khoảng 30 phút. Pizza vẫn nóng hổi khi đến tay mình và hương vị thật ngon. Cảm ơn đội ngũ đầu bếp và nhân viên giao hàng đã tạo ra một bữa ăn tuyệt vời.', 5, '2023-11-14 00:25:05', 2, 32),
(283, 'Dịch vụ giao hàng của trang web này rất tiện lợi. Mình đã thử nhiều món từ các nhà hàng khác nhau và đều hài lòng với chất lượng và dịch vụ. Nhân viên giao hàng luôn nhanh nhẹn và thân thiện. Các món ăn đều được đóng gói cẩn thận và giữ nhiệt tốt. Sẽ tiếp tục sử dụng dịch vụ của trang web này.', 4, '2023-10-30 09:31:05', 5, 4),
(284, 'Thực đơn trên trang web rất đa dạng, từ đồ ăn nhanh đến các món ẩm thực cao cấp. Mình đã thử nhiều món và đều rất hài lòng. Hệ thống đặt hàng và thanh toán rất thuận tiện, giúp tiết kiệm thời gian. Còn chần chừ gì nữa, hãy đặt ngay để trải nghiệm!', 5, '2023-10-28 10:05:05', 1, 20),
(285, 'Mình là một khách hàng thường xuyên của trang web này và luôn hài lòng với chất lượng và sự đa dạng của thực đơn. Dù ở bất kỳ đâu, chỉ cần một chiếc điện thoại di động, mình có thể dễ dàng đặt món và nhận được giao hàng trong thời gian ngắn. Điều này thật sự thuận tiện cho cuộc sống bận rộn của mình.', 5, '2023-11-16 03:47:05', 5, 4),
(286, 'Gần đây mình mới sử dụng dịch vụ này và đã có một trải nghiệm tuyệt vời. Mình đặt một bữa tối gia đình và mọi thứ đều tới đúng giờ. Thực đơn có nhiều lựa chọn và mình đã thử một số món mới. Tất cả đều ngon và giá cả phải chăng. Sẽ tiếp tục ủng hộ trang web này.', 4, '2023-10-31 22:15:05', 4, 4),
(287, 'Mình là người thích ẩm thực và đã thử nhiều dịch vụ đặt món trực tuyến. Trang web này là một trong những lựa chọn hàng đầu của mình. Dịch vụ giao hàng nhanh chóng và thực đơn đa dạng, phù hợp cho mọi khẩu vị. Mình đã giới thiệu cho nhiều người bạn và họ cũng rất hài lòng.', 5, '2023-11-21 12:01:05', 4, 3),
(288, 'Mình đã đặt một chiếc pizza từ trang web này và không thể tin nổi với sự thuận tiện và nhanh chóng. Sau khi đặt hàng, thời gian giao hàng chỉ mất khoảng 30 phút. Pizza vẫn nóng hổi khi đến tay mình và hương vị thật ngon. Cảm ơn đội ngũ đầu bếp và nhân viên giao hàng đã tạo ra một bữa ăn tuyệt vời.', 5, '2023-10-29 21:19:07', 3, 16),
(289, 'Dịch vụ giao hàng của trang web này rất tiện lợi. Mình đã thử nhiều món từ các nhà hàng khác nhau và đều hài lòng với chất lượng và dịch vụ. Nhân viên giao hàng luôn nhanh nhẹn và thân thiện. Các món ăn đều được đóng gói cẩn thận và giữ nhiệt tốt. Sẽ tiếp tục sử dụng dịch vụ của trang web này.', 4, '2023-11-26 10:04:07', 1, 17),
(290, 'Thực đơn trên trang web rất đa dạng, từ đồ ăn nhanh đến các món ẩm thực cao cấp. Mình đã thử nhiều món và đều rất hài lòng. Hệ thống đặt hàng và thanh toán rất thuận tiện, giúp tiết kiệm thời gian. Còn chần chừ gì nữa, hãy đặt ngay để trải nghiệm!', 5, '2023-10-29 20:00:07', 5, 19),
(291, 'Mình là một khách hàng thường xuyên của trang web này và luôn hài lòng với chất lượng và sự đa dạng của thực đơn. Dù ở bất kỳ đâu, chỉ cần một chiếc điện thoại di động, mình có thể dễ dàng đặt món và nhận được giao hàng trong thời gian ngắn. Điều này thật sự thuận tiện cho cuộc sống bận rộn của mình.', 5, '2023-11-20 17:05:07', 5, 16),
(292, 'Gần đây mình mới sử dụng dịch vụ này và đã có một trải nghiệm tuyệt vời. Mình đặt một bữa tối gia đình và mọi thứ đều tới đúng giờ. Thực đơn có nhiều lựa chọn và mình đã thử một số món mới. Tất cả đều ngon và giá cả phải chăng. Sẽ tiếp tục ủng hộ trang web này.', 4, '2023-11-13 05:27:07', 4, 12),
(293, 'Mình là người thích ẩm thực và đã thử nhiều dịch vụ đặt món trực tuyến. Trang web này là một trong những lựa chọn hàng đầu của mình. Dịch vụ giao hàng nhanh chóng và thực đơn đa dạng, phù hợp cho mọi khẩu vị. Mình đã giới thiệu cho nhiều người bạn và họ cũng rất hài lòng.', 5, '2023-11-09 04:52:07', 4, 7),
(294, 'Mình đã đặt một chiếc pizza từ trang web này và không thể tin nổi với sự thuận tiện và nhanh chóng. Sau khi đặt hàng, thời gian giao hàng chỉ mất khoảng 30 phút. Pizza vẫn nóng hổi khi đến tay mình và hương vị thật ngon. Cảm ơn đội ngũ đầu bếp và nhân viên giao hàng đã tạo ra một bữa ăn tuyệt vời.', 5, '2023-10-29 07:37:09', 2, 18),
(295, 'Dịch vụ giao hàng của trang web này rất tiện lợi. Mình đã thử nhiều món từ các nhà hàng khác nhau và đều hài lòng với chất lượng và dịch vụ. Nhân viên giao hàng luôn nhanh nhẹn và thân thiện. Các món ăn đều được đóng gói cẩn thận và giữ nhiệt tốt. Sẽ tiếp tục sử dụng dịch vụ của trang web này.', 4, '2023-11-01 08:21:09', 4, 24),
(296, 'Thực đơn trên trang web rất đa dạng, từ đồ ăn nhanh đến các món ẩm thực cao cấp. Mình đã thử nhiều món và đều rất hài lòng. Hệ thống đặt hàng và thanh toán rất thuận tiện, giúp tiết kiệm thời gian. Còn chần chừ gì nữa, hãy đặt ngay để trải nghiệm!', 5, '2023-11-11 14:41:09', 4, 12),
(297, 'Mình là một khách hàng thường xuyên của trang web này và luôn hài lòng với chất lượng và sự đa dạng của thực đơn. Dù ở bất kỳ đâu, chỉ cần một chiếc điện thoại di động, mình có thể dễ dàng đặt món và nhận được giao hàng trong thời gian ngắn. Điều này thật sự thuận tiện cho cuộc sống bận rộn của mình.', 5, '2023-11-16 08:58:09', 4, 16),
(298, 'Gần đây mình mới sử dụng dịch vụ này và đã có một trải nghiệm tuyệt vời. Mình đặt một bữa tối gia đình và mọi thứ đều tới đúng giờ. Thực đơn có nhiều lựa chọn và mình đã thử một số món mới. Tất cả đều ngon và giá cả phải chăng. Sẽ tiếp tục ủng hộ trang web này.', 4, '2023-11-15 12:49:09', 5, 3),
(299, 'Mình là người thích ẩm thực và đã thử nhiều dịch vụ đặt món trực tuyến. Trang web này là một trong những lựa chọn hàng đầu của mình. Dịch vụ giao hàng nhanh chóng và thực đơn đa dạng, phù hợp cho mọi khẩu vị. Mình đã giới thiệu cho nhiều người bạn và họ cũng rất hài lòng.', 5, '2023-10-31 23:35:09', 2, 32),
(300, 'Mình đã đặt một chiếc pizza từ trang web này và không thể tin nổi với sự thuận tiện và nhanh chóng. Sau khi đặt hàng, thời gian giao hàng chỉ mất khoảng 30 phút. Pizza vẫn nóng hổi khi đến tay mình và hương vị thật ngon. Cảm ơn đội ngũ đầu bếp và nhân viên giao hàng đã tạo ra một bữa ăn tuyệt vời.', 5, '2023-11-16 07:43:11', 4, 12),
(301, 'Dịch vụ giao hàng của trang web này rất tiện lợi. Mình đã thử nhiều món từ các nhà hàng khác nhau và đều hài lòng với chất lượng và dịch vụ. Nhân viên giao hàng luôn nhanh nhẹn và thân thiện. Các món ăn đều được đóng gói cẩn thận và giữ nhiệt tốt. Sẽ tiếp tục sử dụng dịch vụ của trang web này.', 4, '2023-11-15 00:12:11', 2, 9),
(302, 'Thực đơn trên trang web rất đa dạng, từ đồ ăn nhanh đến các món ẩm thực cao cấp. Mình đã thử nhiều món và đều rất hài lòng. Hệ thống đặt hàng và thanh toán rất thuận tiện, giúp tiết kiệm thời gian. Còn chần chừ gì nữa, hãy đặt ngay để trải nghiệm!', 5, '2023-11-11 07:02:11', 1, 31),
(303, 'Mình là một khách hàng thường xuyên của trang web này và luôn hài lòng với chất lượng và sự đa dạng của thực đơn. Dù ở bất kỳ đâu, chỉ cần một chiếc điện thoại di động, mình có thể dễ dàng đặt món và nhận được giao hàng trong thời gian ngắn. Điều này thật sự thuận tiện cho cuộc sống bận rộn của mình.', 5, '2023-11-19 12:21:11', 1, 5),
(304, 'Gần đây mình mới sử dụng dịch vụ này và đã có một trải nghiệm tuyệt vời. Mình đặt một bữa tối gia đình và mọi thứ đều tới đúng giờ. Thực đơn có nhiều lựa chọn và mình đã thử một số món mới. Tất cả đều ngon và giá cả phải chăng. Sẽ tiếp tục ủng hộ trang web này.', 4, '2023-11-18 00:00:11', 2, 8),
(305, 'Mình là người thích ẩm thực và đã thử nhiều dịch vụ đặt món trực tuyến. Trang web này là một trong những lựa chọn hàng đầu của mình. Dịch vụ giao hàng nhanh chóng và thực đơn đa dạng, phù hợp cho mọi khẩu vị. Mình đã giới thiệu cho nhiều người bạn và họ cũng rất hài lòng.', 5, '2023-11-25 14:02:11', 5, 3),
(306, 'Mình đã đặt một chiếc pizza từ trang web này và không thể tin nổi với sự thuận tiện và nhanh chóng. Sau khi đặt hàng, thời gian giao hàng chỉ mất khoảng 30 phút. Pizza vẫn nóng hổi khi đến tay mình và hương vị thật ngon. Cảm ơn đội ngũ đầu bếp và nhân viên giao hàng đã tạo ra một bữa ăn tuyệt vời.', 5, '2023-11-03 16:47:48', 3, 3),
(307, 'Dịch vụ giao hàng của trang web này rất tiện lợi. Mình đã thử nhiều món từ các nhà hàng khác nhau và đều hài lòng với chất lượng và dịch vụ. Nhân viên giao hàng luôn nhanh nhẹn và thân thiện. Các món ăn đều được đóng gói cẩn thận và giữ nhiệt tốt. Sẽ tiếp tục sử dụng dịch vụ của trang web này.', 4, '2023-10-28 11:15:48', 3, 14),
(308, 'Thực đơn trên trang web rất đa dạng, từ đồ ăn nhanh đến các món ẩm thực cao cấp. Mình đã thử nhiều món và đều rất hài lòng. Hệ thống đặt hàng và thanh toán rất thuận tiện, giúp tiết kiệm thời gian. Còn chần chừ gì nữa, hãy đặt ngay để trải nghiệm!', 5, '2023-11-06 21:39:48', 4, 14),
(309, 'Thực đơn trên trang web rất đa dạng, từ đồ ăn nhanh đến các món ẩm thực cao cấp. Mình đã thử nhiều món và đều rất hài lòng. Hệ thống đặt hàng và thanh toán rất thuận tiện, giúp tiết kiệm thời gian. Còn chần chừ gì nữa, hãy đặt ngay để trải nghiệm!', 5, '2023-11-09 09:47:48', 4, 2),
(310, 'Mình là một khách hàng thường xuyên của trang web này và luôn hài lòng với chất lượng và sự đa dạng của thực đơn. Dù ở bất kỳ đâu, chỉ cần một chiếc điện thoại di động, mình có thể dễ dàng đặt món và nhận được giao hàng trong thời gian ngắn. Điều này thật sự thuận tiện cho cuộc sống bận rộn của mình.', 5, '2023-11-18 19:59:48', 5, 24),
(311, 'Gần đây mình mới sử dụng dịch vụ này và đã có một trải nghiệm tuyệt vời. Mình đặt một bữa tối gia đình và mọi thứ đều tới đúng giờ. Thực đơn có nhiều lựa chọn và mình đã thử một số món mới. Tất cả đều ngon và giá cả phải chăng. Sẽ tiếp tục ủng hộ trang web này.', 4, '2023-10-31 17:13:48', 2, 27),
(312, 'Gần đây mình mới sử dụng dịch vụ này và đã có một trải nghiệm tuyệt vời. Mình đặt một bữa tối gia đình và mọi thứ đều tới đúng giờ. Thực đơn có nhiều lựa chọn và mình đã thử một số món mới. Tất cả đều ngon và giá cả phải chăng. Sẽ tiếp tục ủng hộ trang web này.', 4, '2023-11-01 00:54:48', 5, 28),
(313, 'Mình là người thích ẩm thực và đã thử nhiều dịch vụ đặt món trực tuyến. Trang web này là một trong những lựa chọn hàng đầu của mình. Dịch vụ giao hàng nhanh chóng và thực đơn đa dạng, phù hợp cho mọi khẩu vị. Mình đã giới thiệu cho nhiều người bạn và họ cũng rất hài lòng.', 5, '2023-11-19 02:22:48', 4, 12),
(314, 'Mình đã đặt một chiếc pizza từ trang web này và không thể tin nổi với sự thuận tiện và nhanh chóng. Sau khi đặt hàng, thời gian giao hàng chỉ mất khoảng 30 phút. Pizza vẫn nóng hổi khi đến tay mình và hương vị thật ngon. Cảm ơn đội ngũ đầu bếp và nhân viên giao hàng đã tạo ra một bữa ăn tuyệt vời.', 5, '2023-11-20 14:55:03', 4, 34),
(315, 'Mình đã đặt một chiếc pizza từ trang web này và không thể tin nổi với sự thuận tiện và nhanh chóng. Sau khi đặt hàng, thời gian giao hàng chỉ mất khoảng 30 phút. Pizza vẫn nóng hổi khi đến tay mình và hương vị thật ngon. Cảm ơn đội ngũ đầu bếp và nhân viên giao hàng đã tạo ra một bữa ăn tuyệt vời.', 5, '2023-11-07 20:07:03', 2, 6),
(316, 'Mình đã đặt một chiếc pizza từ trang web này và không thể tin nổi với sự thuận tiện và nhanh chóng. Sau khi đặt hàng, thời gian giao hàng chỉ mất khoảng 30 phút. Pizza vẫn nóng hổi khi đến tay mình và hương vị thật ngon. Cảm ơn đội ngũ đầu bếp và nhân viên giao hàng đã tạo ra một bữa ăn tuyệt vời.', 5, '2023-11-01 02:09:03', 5, 12),
(317, 'Mình đã đặt một chiếc pizza từ trang web này và không thể tin nổi với sự thuận tiện và nhanh chóng. Sau khi đặt hàng, thời gian giao hàng chỉ mất khoảng 30 phút. Pizza vẫn nóng hổi khi đến tay mình và hương vị thật ngon. Cảm ơn đội ngũ đầu bếp và nhân viên giao hàng đã tạo ra một bữa ăn tuyệt vời.', 5, '2023-10-30 09:54:03', 1, 24),
(318, 'Dịch vụ giao hàng của trang web này rất tiện lợi. Mình đã thử nhiều món từ các nhà hàng khác nhau và đều hài lòng với chất lượng và dịch vụ. Nhân viên giao hàng luôn nhanh nhẹn và thân thiện. Các món ăn đều được đóng gói cẩn thận và giữ nhiệt tốt. Sẽ tiếp tục sử dụng dịch vụ của trang web này.', 4, '2023-11-22 11:54:03', 2, 28),
(319, 'Thực đơn trên trang web rất đa dạng, từ đồ ăn nhanh đến các món ẩm thực cao cấp. Mình đã thử nhiều món và đều rất hài lòng. Hệ thống đặt hàng và thanh toán rất thuận tiện, giúp tiết kiệm thời gian. Còn chần chừ gì nữa, hãy đặt ngay để trải nghiệm!', 5, '2023-11-26 12:27:03', 3, 21),
(320, 'Thực đơn trên trang web rất đa dạng, từ đồ ăn nhanh đến các món ẩm thực cao cấp. Mình đã thử nhiều món và đều rất hài lòng. Hệ thống đặt hàng và thanh toán rất thuận tiện, giúp tiết kiệm thời gian. Còn chần chừ gì nữa, hãy đặt ngay để trải nghiệm!', 5, '2023-11-17 08:54:03', 1, 20),
(321, 'Mình là một khách hàng thường xuyên của trang web này và luôn hài lòng với chất lượng và sự đa dạng của thực đơn. Dù ở bất kỳ đâu, chỉ cần một chiếc điện thoại di động, mình có thể dễ dàng đặt món và nhận được giao hàng trong thời gian ngắn. Điều này thật sự thuận tiện cho cuộc sống bận rộn của mình.', 5, '2023-11-11 05:45:03', 2, 19),
(322, 'Gần đây mình mới sử dụng dịch vụ này và đã có một trải nghiệm tuyệt vời. Mình đặt một bữa tối gia đình và mọi thứ đều tới đúng giờ. Thực đơn có nhiều lựa chọn và mình đã thử một số món mới. Tất cả đều ngon và giá cả phải chăng. Sẽ tiếp tục ủng hộ trang web này.', 4, '2023-11-11 04:27:03', 4, 8),
(323, 'Gần đây mình mới sử dụng dịch vụ này và đã có một trải nghiệm tuyệt vời. Mình đặt một bữa tối gia đình và mọi thứ đều tới đúng giờ. Thực đơn có nhiều lựa chọn và mình đã thử một số món mới. Tất cả đều ngon và giá cả phải chăng. Sẽ tiếp tục ủng hộ trang web này.', 4, '2023-10-28 20:06:03', 2, 18),
(324, 'Mình là người thích ẩm thực và đã thử nhiều dịch vụ đặt món trực tuyến. Trang web này là một trong những lựa chọn hàng đầu của mình. Dịch vụ giao hàng nhanh chóng và thực đơn đa dạng, phù hợp cho mọi khẩu vị. Mình đã giới thiệu cho nhiều người bạn và họ cũng rất hài lòng.', 5, '2023-11-11 03:12:03', 5, 1),
(325, 'Mình đã đặt một chiếc pizza từ trang web này và không thể tin nổi với sự thuận tiện và nhanh chóng. Sau khi đặt hàng, thời gian giao hàng chỉ mất khoảng 30 phút. Pizza vẫn nóng hổi khi đến tay mình và hương vị thật ngon. Cảm ơn đội ngũ đầu bếp và nhân viên giao hàng đã tạo ra một bữa ăn tuyệt vời.', 5, '2023-11-06 10:16:06', 2, 31),
(326, 'Mình đã đặt một chiếc pizza từ trang web này và không thể tin nổi với sự thuận tiện và nhanh chóng. Sau khi đặt hàng, thời gian giao hàng chỉ mất khoảng 30 phút. Pizza vẫn nóng hổi khi đến tay mình và hương vị thật ngon. Cảm ơn đội ngũ đầu bếp và nhân viên giao hàng đã tạo ra một bữa ăn tuyệt vời.', 5, '2023-11-11 06:59:06', 2, 34),
(327, 'Mình đã đặt một chiếc pizza từ trang web này và không thể tin nổi với sự thuận tiện và nhanh chóng. Sau khi đặt hàng, thời gian giao hàng chỉ mất khoảng 30 phút. Pizza vẫn nóng hổi khi đến tay mình và hương vị thật ngon. Cảm ơn đội ngũ đầu bếp và nhân viên giao hàng đã tạo ra một bữa ăn tuyệt vời.', 5, '2023-10-28 03:48:06', 5, 12),
(328, 'Mình đã đặt một chiếc pizza từ trang web này và không thể tin nổi với sự thuận tiện và nhanh chóng. Sau khi đặt hàng, thời gian giao hàng chỉ mất khoảng 30 phút. Pizza vẫn nóng hổi khi đến tay mình và hương vị thật ngon. Cảm ơn đội ngũ đầu bếp và nhân viên giao hàng đã tạo ra một bữa ăn tuyệt vời.', 5, '2023-10-31 16:02:06', 2, 27),
(329, 'Dịch vụ giao hàng của trang web này rất tiện lợi. Mình đã thử nhiều món từ các nhà hàng khác nhau và đều hài lòng với chất lượng và dịch vụ. Nhân viên giao hàng luôn nhanh nhẹn và thân thiện. Các món ăn đều được đóng gói cẩn thận và giữ nhiệt tốt. Sẽ tiếp tục sử dụng dịch vụ của trang web này.', 4, '2023-11-22 16:59:06', 3, 8),
(330, 'Thực đơn trên trang web rất đa dạng, từ đồ ăn nhanh đến các món ẩm thực cao cấp. Mình đã thử nhiều món và đều rất hài lòng. Hệ thống đặt hàng và thanh toán rất thuận tiện, giúp tiết kiệm thời gian. Còn chần chừ gì nữa, hãy đặt ngay để trải nghiệm!', 5, '2023-11-14 18:04:06', 2, 9),
(331, 'Thực đơn trên trang web rất đa dạng, từ đồ ăn nhanh đến các món ẩm thực cao cấp. Mình đã thử nhiều món và đều rất hài lòng. Hệ thống đặt hàng và thanh toán rất thuận tiện, giúp tiết kiệm thời gian. Còn chần chừ gì nữa, hãy đặt ngay để trải nghiệm!', 5, '2023-11-20 16:08:06', 5, 28),
(332, 'Mình là một khách hàng thường xuyên của trang web này và luôn hài lòng với chất lượng và sự đa dạng của thực đơn. Dù ở bất kỳ đâu, chỉ cần một chiếc điện thoại di động, mình có thể dễ dàng đặt món và nhận được giao hàng trong thời gian ngắn. Điều này thật sự thuận tiện cho cuộc sống bận rộn của mình.', 5, '2023-11-10 17:10:06', 4, 3),
(333, 'Gần đây mình mới sử dụng dịch vụ này và đã có một trải nghiệm tuyệt vời. Mình đặt một bữa tối gia đình và mọi thứ đều tới đúng giờ. Thực đơn có nhiều lựa chọn và mình đã thử một số món mới. Tất cả đều ngon và giá cả phải chăng. Sẽ tiếp tục ủng hộ trang web này.', 4, '2023-11-15 06:44:06', 4, 28),
(334, 'Gần đây mình mới sử dụng dịch vụ này và đã có một trải nghiệm tuyệt vời. Mình đặt một bữa tối gia đình và mọi thứ đều tới đúng giờ. Thực đơn có nhiều lựa chọn và mình đã thử một số món mới. Tất cả đều ngon và giá cả phải chăng. Sẽ tiếp tục ủng hộ trang web này.', 4, '2023-11-23 21:54:06', 4, 4),
(335, 'Mình là người thích ẩm thực và đã thử nhiều dịch vụ đặt món trực tuyến. Trang web này là một trong những lựa chọn hàng đầu của mình. Dịch vụ giao hàng nhanh chóng và thực đơn đa dạng, phù hợp cho mọi khẩu vị. Mình đã giới thiệu cho nhiều người bạn và họ cũng rất hài lòng.', 5, '2023-11-07 01:15:06', 2, 18),
(336, 'Mình đã đặt một chiếc pizza từ trang web này và không thể tin nổi với sự thuận tiện và nhanh chóng. Sau khi đặt hàng, thời gian giao hàng chỉ mất khoảng 30 phút. Pizza vẫn nóng hổi khi đến tay mình và hương vị thật ngon. Cảm ơn đội ngũ đầu bếp và nhân viên giao hàng đã tạo ra một bữa ăn tuyệt vời.', 5, '2023-11-05 03:57:09', 1, 32),
(337, 'Mình đã đặt một chiếc pizza từ trang web này và không thể tin nổi với sự thuận tiện và nhanh chóng. Sau khi đặt hàng, thời gian giao hàng chỉ mất khoảng 30 phút. Pizza vẫn nóng hổi khi đến tay mình và hương vị thật ngon. Cảm ơn đội ngũ đầu bếp và nhân viên giao hàng đã tạo ra một bữa ăn tuyệt vời.', 5, '2023-11-21 22:14:09', 5, 1),
(338, 'Mình đã đặt một chiếc pizza từ trang web này và không thể tin nổi với sự thuận tiện và nhanh chóng. Sau khi đặt hàng, thời gian giao hàng chỉ mất khoảng 30 phút. Pizza vẫn nóng hổi khi đến tay mình và hương vị thật ngon. Cảm ơn đội ngũ đầu bếp và nhân viên giao hàng đã tạo ra một bữa ăn tuyệt vời.', 5, '2023-11-22 09:27:09', 2, 11),
(339, 'Mình đã đặt một chiếc pizza từ trang web này và không thể tin nổi với sự thuận tiện và nhanh chóng. Sau khi đặt hàng, thời gian giao hàng chỉ mất khoảng 30 phút. Pizza vẫn nóng hổi khi đến tay mình và hương vị thật ngon. Cảm ơn đội ngũ đầu bếp và nhân viên giao hàng đã tạo ra một bữa ăn tuyệt vời.', 5, '2023-11-10 07:09:09', 3, 17),
(340, 'Dịch vụ giao hàng của trang web này rất tiện lợi. Mình đã thử nhiều món từ các nhà hàng khác nhau và đều hài lòng với chất lượng và dịch vụ. Nhân viên giao hàng luôn nhanh nhẹn và thân thiện. Các món ăn đều được đóng gói cẩn thận và giữ nhiệt tốt. Sẽ tiếp tục sử dụng dịch vụ của trang web này.', 4, '2023-11-01 02:14:09', 3, 27),
(341, 'Thực đơn trên trang web rất đa dạng, từ đồ ăn nhanh đến các món ẩm thực cao cấp. Mình đã thử nhiều món và đều rất hài lòng. Hệ thống đặt hàng và thanh toán rất thuận tiện, giúp tiết kiệm thời gian. Còn chần chừ gì nữa, hãy đặt ngay để trải nghiệm!', 5, '2023-11-19 03:27:09', 3, 15),
(342, 'Thực đơn trên trang web rất đa dạng, từ đồ ăn nhanh đến các món ẩm thực cao cấp. Mình đã thử nhiều món và đều rất hài lòng. Hệ thống đặt hàng và thanh toán rất thuận tiện, giúp tiết kiệm thời gian. Còn chần chừ gì nữa, hãy đặt ngay để trải nghiệm!', 5, '2023-11-11 18:22:09', 5, 20),
(343, 'Mình là một khách hàng thường xuyên của trang web này và luôn hài lòng với chất lượng và sự đa dạng của thực đơn. Dù ở bất kỳ đâu, chỉ cần một chiếc điện thoại di động, mình có thể dễ dàng đặt món và nhận được giao hàng trong thời gian ngắn. Điều này thật sự thuận tiện cho cuộc sống bận rộn của mình.', 5, '2023-11-17 01:12:09', 3, 11),
(344, 'Gần đây mình mới sử dụng dịch vụ này và đã có một trải nghiệm tuyệt vời. Mình đặt một bữa tối gia đình và mọi thứ đều tới đúng giờ. Thực đơn có nhiều lựa chọn và mình đã thử một số món mới. Tất cả đều ngon và giá cả phải chăng. Sẽ tiếp tục ủng hộ trang web này.', 4, '2023-11-23 09:17:09', 1, 23),
(345, 'Gần đây mình mới sử dụng dịch vụ này và đã có một trải nghiệm tuyệt vời. Mình đặt một bữa tối gia đình và mọi thứ đều tới đúng giờ. Thực đơn có nhiều lựa chọn và mình đã thử một số món mới. Tất cả đều ngon và giá cả phải chăng. Sẽ tiếp tục ủng hộ trang web này.', 4, '2023-11-24 16:48:09', 3, 15),
(346, 'Mình là người thích ẩm thực và đã thử nhiều dịch vụ đặt món trực tuyến. Trang web này là một trong những lựa chọn hàng đầu của mình. Dịch vụ giao hàng nhanh chóng và thực đơn đa dạng, phù hợp cho mọi khẩu vị. Mình đã giới thiệu cho nhiều người bạn và họ cũng rất hài lòng.', 5, '2023-11-10 16:03:09', 2, 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `Id` int(5) NOT NULL COMMENT 'Mã đơn hàng',
  `TotalPrice` int(10) NOT NULL COMMENT 'Tổng giá',
  `Note` text DEFAULT NULL COMMENT 'Ghi chú',
  `Date` datetime NOT NULL COMMENT 'Ngày đặt',
  `Status` int(1) NOT NULL COMMENT 'Trạng thái\r\n(1 = Đang chờ, 2 = Đang chuẩn bị, 3 = Đang giao hàng, 4 = Đã giao hàng, 5 = Đã hủy)',
  `UserId` int(5) NOT NULL COMMENT 'Mã người dùng',
  `RecipientName` varchar(50) DEFAULT NULL,
  `RecipientPhoneNumber` varchar(10) DEFAULT NULL,
  `RecipientAddress` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`Id`, `TotalPrice`, `Note`, `Date`, `Status`, `UserId`, `RecipientName`, `RecipientPhoneNumber`, `RecipientAddress`) VALUES
(63, 128250, 'giao lẹ dùm cái', '2023-11-26 03:29:02', 4, 127, 'Châu Thành Cường', '0903252075', '12/23 Tân Thới Hiệp'),
(64, 22800, NULL, '2023-11-26 05:24:28', 4, 127, 'Châu Thành Cường', '0903252075', '12/23 Tân Thới Hiệp'),
(65, 47500, NULL, '2023-11-26 19:28:37', 4, 127, 'Châu Thành Cường', '0903252075', '12/23 Tân Thới Hiệp'),
(66, 182520, NULL, '2023-11-27 07:58:45', 2, 129, 'Châu Thành Cường', '0903252075', '12/23 Tân Thới Hiệp'),
(67, 182520, NULL, '2023-11-27 07:59:41', 5, 130, 'Châu Thành Cường', '0903252075', '12/23 Tân Thới Hiệp'),
(68, 182520, NULL, '2023-11-27 08:11:57', 3, 131, 'Châu Thành Cường', '0903252075', '12/23 Tân Thới Hiệp'),
(69, 297800, NULL, '2023-11-27 08:15:02', 2, 132, 'Châu Thành Cường', '0903252075', '12/23 Tân Thới Hiệp'),
(70, 297800, NULL, '2023-11-27 08:15:46', 2, 133, 'Châu Thành Cường', '0903252075', '12/23 Tân Thới Hiệp'),
(71, 0, NULL, '2023-11-27 08:15:50', 5, 134, 'Châu Thành Cường', '0903252075', '12/23 Tân Thới Hiệp'),
(72, 22800, NULL, '2023-11-27 08:16:24', 2, 135, 'Châu Thành Cường', '0903252075', '12/23 Tân Thới Hiệp'),
(73, 0, NULL, '2023-11-27 08:17:57', 5, 136, 'Châu Thành Cường', '0903252075', '12/23 Tân Thới Hiệp'),
(74, 178500, NULL, '2023-11-27 08:18:13', 2, 137, 'Châu Thành Cường', '0903252075', '12/23 Tân Thới Hiệp'),
(75, 27900, NULL, '2023-11-27 08:18:43', 2, 138, 'Châu Thành Cường', '0903252075', '12/23 Tân Thới Hiệp'),
(76, 74250, NULL, '2023-11-27 08:37:57', 2, 140, 'Châu Thành Cường', '0903252075', '12/23 Tân Thới Hiệp'),
(77, 27900, NULL, '2023-11-27 08:38:08', 2, 141, 'Châu Thành Cường', '0903252075', '12/23 Tân Thới Hiệp'),
(78, 0, NULL, '2023-11-27 08:40:52', 2, 142, '1', '1', '12/23 Tân Thới Hiệp'),
(79, 91200, NULL, '2023-11-27 08:41:05', 3, 143, '1', '903252075', '12/23 Tân Thới Hiệp'),
(80, 349875, NULL, '2023-11-29 01:22:11', 1, 127, 'Nguyễn văn A', '0903252075', 'abcxyz'),
(81, 47500, NULL, '2023-11-29 01:26:52', 1, 127, NULL, NULL, NULL),
(82, 24000, NULL, '2023-11-29 07:34:45', 1, 127, 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `Id` int(5) NOT NULL COMMENT 'Mã chi tiết đơn hàng',
  `Quantity` int(10) NOT NULL COMMENT 'Số lượng',
  `Price` int(10) NOT NULL COMMENT 'Giá',
  `OrderId` int(5) NOT NULL COMMENT 'Mã đơn hàng',
  `ProductId` int(5) NOT NULL COMMENT 'Mã sản phẩm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orderdetail`
--

INSERT INTO `orderdetail` (`Id`, `Quantity`, `Price`, `OrderId`, `ProductId`) VALUES
(54, 6, 23750, 63, 15),
(55, 1, 22800, 64, 18),
(56, 2, 23750, 65, 15),
(57, 4, 22800, 66, 18),
(58, 4, 27900, 66, 1),
(59, 4, 22800, 67, 18),
(60, 4, 27900, 67, 1),
(61, 4, 22800, 68, 18),
(62, 4, 27900, 68, 1),
(63, 4, 22800, 69, 18),
(64, 4, 27900, 69, 1),
(65, 2, 47500, 69, 7),
(66, 4, 22800, 70, 18),
(67, 4, 27900, 70, 1),
(68, 2, 47500, 70, 7),
(69, 1, 22800, 72, 18),
(70, 6, 29750, 74, 5),
(71, 1, 27900, 75, 1),
(72, 3, 20000, 76, 4),
(73, 1, 14250, 76, 19),
(74, 1, 27900, 77, 1),
(75, 4, 22800, 79, 18),
(76, 5, 35000, 80, 6),
(77, 5, 38000, 80, 28),
(78, 1, 23750, 80, 15),
(79, 1, 47500, 81, 7),
(80, 1, 24000, 82, 34);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `Id` int(5) NOT NULL COMMENT 'Mã sản phẩm',
  `Name` varchar(50) NOT NULL COMMENT 'Tên sản phẩm',
  `Image` varchar(255) NOT NULL COMMENT 'Tên file ảnh sản phẩm',
  `Description` text NOT NULL DEFAULT current_timestamp() COMMENT 'Mô tả sản phẩm',
  `Price` int(10) NOT NULL COMMENT 'Giá bán sản phẩm',
  `Cost` int(10) NOT NULL COMMENT 'Chi phí sản phẩm',
  `Discount` int(3) NOT NULL COMMENT 'Giảm giá sản phẩm',
  `Views` int(5) NOT NULL COMMENT 'Số lượt xem',
  `IsSpecial` tinyint(1) NOT NULL COMMENT 'Đặc biệt (1 = có, 0 = không)',
  `CategoryId` int(5) DEFAULT NULL COMMENT 'Mã danh mục'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`Id`, `Name`, `Image`, `Description`, `Price`, `Cost`, `Discount`, `Views`, `IsSpecial`, `CategoryId`) VALUES
(1, 'Thạch chanh mâm xôi', 'thach-chanh-mam-xoi.png', 'Món thạch chanh mâm xôi là một món tráng miệng truyền thống với hương vị tươi mát và bắt mắt. Thạch chanh mâm xôi bao gồm lớp thạch chanh mịn màng, được làm từ nước chanh tươi, đường và gelatin, được đặt trên mâm xôi trắng mềm mịn. Mâm xôi có mùi thơm của nếp gạo và được trang trí bằng những lát dừa tươi và hạt mè rang. Món này là sự kết hợp hoàn hảo giữa vị chua ngọt của thạch chanh và vị ngọt nhẹ của mâm xôi, mang lại cảm giác thú vị và sảng khoái cho người thưởng thức.', 31000, 24800, 0, 140, 1, 4),
(2, 'Cocktail táo', 'cocktail-tao.png', 'Món cocktail táo là một sự kết hợp tuyệt vời giữa vị chua ngọt của táo và hương thơm của các thành phần khác như rượu vodka, nước chanh và đường. Cocktail táo có màu sắc tươi sáng và hấp dẫn, mang lại cảm giác mát lạnh và sảng khoái khi thưởng thức. Món này thường được trang trí bằng lát táo tươi hoặc đá viên, tạo nên một thức uống hấp dẫn và hòa quyện với không gian vui tươi và năng động.', 60000, 48000, 0, 153, 0, 6),
(3, 'Cocktail xương rồng', 'cocktail-xuong-rong.png', 'Món cocktail xương rồng là một sự pha trộn độc đáo giữa hương vị trái cây tươi mát và hình dáng độc đáo của xương rồng. Cocktail này thường được làm từ nước ép hoa quả như dứa, cam, và dứa xanh, kết hợp với rượu hoặc nước ngọt. Món cocktail xương rồng có màu sắc rực rỡ và hấp dẫn, tạo nên một trải nghiệm thú vị và độc đáo cho thực khách.', 55000, 44000, 10, 91, 1, 6),
(4, 'Xúc xích nấm', 'xuc-xich-nam.png', 'Món xúc xích nấm là sự kết hợp ngon lành giữa xúc xích thịt và nấm tươi. Xúc xích được nướng hoặc chiên giòn, mang lại hương vị thơm ngon và đậm đà. Nấm tươi thêm độ mềm mịn và hương vị đặc trưng. Món xúc xích nấm thường được dùng làm món ăn nhẹ, hoặc kèm với bánh mì, mì Ý hoặc salad.', 20000, 16000, 0, 23, 0, 4),
(5, 'Xúc xích nấm', 'xuc-xich-nam.png', 'Món xúc xích nấm là sự kết hợp ngon lành giữa xúc xích thịt và nấm tươi. Xúc xích được nướng hoặc chiên giòn, mang lại hương vị thơm ngon và đậm đà. Nấm tươi thêm độ mềm mịn và hương vị đặc trưng. Có thể dùng làm món ăn nhẹ, hoặc kèm với bánh mì, mì Ý hoặc salad.', 35000, 28000, 15, 54, 0, 8),
(6, 'Nấm Portobello nhồi phô mai', 'nam-portobello-nhoi-pho-mai.png', 'Nấm Portobello nhồi phô mai là một món ăn tuyệt vời, với nấm Portobello to và mềm, được nhồi đầy với một hỗn hợp phô mai kem mịn, tỏi thái nhỏ và các loại gia vị thơm ngon khác. Khi nướng, nấm trở nên mềm mịn và phô mai tan chảy, tạo nên một sự kết hợp hương vị độc đáo và ngon lành. Món ăn này thường được trang trí với rau mùi tươi và hạt tiêu đen, tạo nên một món ăn hấp dẫn về cả mắt và khẩu vị. Bạn có thể thưởng thức nấm Portobello nhồi phô mai như một món khai vị ngon lành hoặc kèm với salad ', 35000, 28000, 0, 129, 1, 8),
(7, 'Cocktail kiwi', 'cocktail-kiwi.png', 'món cocktail kiwi là một sự kết hợp tuyệt vời giữa hương vị tươi mát của kiwi và hương thơm của các thành phần khác như rượu vodka, nước chanh và đường. Cocktail kiwi có màu xanh tươi sáng và hấp dẫn, mang lại cảm giác mát lạnh và sảng khoái khi thưởng thức. Món này thường được trang trí bằng lát kiwi tươi hoặc đá viên, tạo nên một thức uống hấp dẫn và hòa quyện với không gian vui tươi và năng động.\r\n', 50000, 40000, 5, 250, 1, 6),
(8, 'Caponata Ý cổ điển', 'caponata-y-co-dien.png', 'Món Caponata Ý cổ điển là một món ăn truyền thống của Ý, mang đậm hương vị địa phương và sự phong phú của các nguyên liệu tươi ngon. Caponata được làm từ các loại rau củ như cà tím, cà chua, cà rốt, hành tây, ớt và nhiều loại gia vị khác như cây quế, nghệ, hạt tiêu và giấm. Món này thường được nấu chín chầm chậm để các thành phần hòa quyện với nhau, tạo nên một hương vị độc đáo và phong phú. Caponata Ý cổ điển thường được dùng làm món khai vị hoặc kèm với bánh mì nướng, mang lại trải nghiệm ẩm t', 45000, 36000, 5, 215, 0, 8),
(9, 'Mỳ Ý sốt bí đỏ', 'my-y-sot-bi-do.png', 'Mì ý sốt bí đỏ là một món ăn Ý truyền thống, nơi mì ý được kết hợp với sốt bí đỏ. Sốt bí đỏ được làm từ bí đỏ tươi, nấu chín và xay nhuyễn kèm với các thành phần như hành tây, tỏi, gia vị và nước cốt dừa. Món này có hương vị độc đáo, hấp dẫn và màu sắc hấp dẫn từ bí đỏ. Mì ý sốt bí đỏ thường được thưởng thức kèm với phô mai Parmesan và rau mùi tươi, tạo nên một trải nghiệm ẩm thực đậm đà và ngon lành.', 35000, 28000, 5, 123, 1, 5),
(10, 'Bánh mì nướng phô mai cà chua', 'banh-mi-nuong-pho-mai-ca-chua.png', 'bánh mì nướng phô mai cà chua là một món ăn ngon với sự kết hợp giữa bánh mì nướng giòn, phô mai béo ngậy và cà chua tươi mọng.\r\n', 23000, 18400, 10, 290, 1, 8),
(11, 'Bánh trứng kẹp nấm', 'banh-trung-kep-nam.png', 'Bánh trứng kẹp nấm là một món ăn ngon và đơn giản, với trứng và nấm được kẹp giữa hai lát bánh mì. Trứng được chiên hoặc luộc tới độ chín vừa, tạo nên lớp lòng đỏ mềm mịn hoặc lòng trắng bồng bềnh. Nấm tươi được thái mỏng và chế biến sao cho giữ được độ giòn và hương vị tự nhiên. Khi kết hợp với bánh mì, món ăn trở nên hấp dẫn với sự kết hợp của các thành phần. Bánh trứng kẹp nấm thường được thưởng thức kèm với nước sốt tùy ý hoặc các loại gia vị như mayonnaise, hành tây, rau sống và ớt. Đây là ', 24000, 19200, 5, 213, 0, 8),
(12, 'Bánh trứng nướng tỏi', 'banh-trung-nuong-toi.png', 'Bánh trứng nướng tỏi là một món ăn đơn giản nhưng ngon miệng. Trứng được đập vào một chén, kết hợp với tỏi thái nhỏ và gia vị như muối, tiêu và rau mùi tươi. Hỗn hợp trứng và tỏi được đánh đều để tạo ra một hỗn hợp mịn và bọt nhẹ. Sau đó, hỗn hợp được đổ vào khuôn nướng và nướng trong lò nhiệt độ vừa khoảng 15-20 phút cho đến khi bánh trứng chín vàng và phồng lên. Khi nướng xong, món bánh trứng nướng tỏi có một hương vị thơm ngon của tỏi, cùng với vị béo của trứng và hương thơm của rau mùi tươi.', 25000, 20000, 0, 100, 0, 8),
(13, 'Salad đậu phụ', 'salad-dau-phu.png', 'Salad đậu phụ là một món ăn tươi mát và bổ dưỡng. Nó được làm từ đậu phụ tươi, được cắt thành từng miếng nhỏ và kết hợp với các loại rau tươi như rau xà lách, cà chua, dưa leo và hành tây. Đậu phụ có vị thịt mềm mịn và hấp dẫn, tạo nên một sự kết hợp hương vị độc đáo. Món salad này thường được trang trí với gia vị như mè rang, hành phi, và nước mắm chua ngọt. Salad đậu phụ là một món ăn nhẹ nhàng và giàu chất dinh dưỡng, phù hợp để thưởng thức trong bữa trưa hoặc bữa tối.', 20000, 16000, 10, 98, 1, 9),
(14, 'Salad mì ý', 'salad-mi-y.png', 'Món salad mì ý là một món ăn tươi mát và đa dạng, kết hợp giữa mì ý mềm mịn và các loại rau tươi như rau xà lách, cà chua, dưa leo và hành tây. Salad còn được trang trí với các thành phần khác như jambon, phô mai và trứng luộc. Mì ý tạo nên một cơ sở ngon và sự kết hợp của các loại rau và gia vị tạo nên một hương vị phong phú. Salad mì ý thường được kết hợp với nước sốt vinaigrette hoặc nước mắm chua ngọt, tạo nên một món ăn tươi mát và hấp dẫn.', 45000, 36000, 15, 109, 1, 9),
(15, 'Salad trộn cơm', 'com-tron-salad.png', 'Món salad trộn cơm là sự pha trộn hài hòa giữa cơm trắng và các loại rau tươi như rau xà lách, cà chua, dưa leo và hành tây.', 25000, 20000, 5, 231, 0, 9),
(16, 'Súp lơ nướng Tahini', 'sup-lo-nuong-tahini.png', 'Súp lơ nướng tahini là một món ăn ngon và đầy đặn, với lơ nướng thơm béo và hương vị đặc biệt từ tahini.', 15000, 12000, 5, 102, 1, 9),
(17, 'Bánh phô mai mâm xôi', 'banh-pho-mai-mam-xoi.png', 'Bánh phô mai mâm xôi là một món ăn ngọt thơm ngon, nơi bánh phô mai mềm mịn và mâm xôi ngọt ngào hòa quyện với nhau.', 25000, 20000, 5, 194, 1, 4),
(18, 'Sinh tố trứng', 'sinh-to-trung.png', 'Sinh tố trứng là một món đồ uống thơm ngon và bổ dưỡng, nơi trứng tươi được kết hợp với sữa tươi, đường và các loại trái cây tươi ngon như chuối, dứa, và dâu tây. Món này có hương vị ngọt ngào từ trái cây và độ béo mịn từ sữa và trứng, tạo nên một sự kết hợp hài hòa và thỏa mãn vị giác. Sinh tố trứng thường được thưởng thức trong những ngày nóng bức hoặc làm món tráng miệng sau bữa ăn.', 24000, 19200, 5, 267, 0, 6),
(19, 'Kem dừa vải', 'kem-dua-vai.png', 'Kem dừa vải là một món tráng miệng ngọt ngào và thơm mát, nơi kem dừa mềm mịn và vị ngọt của vải kết hợp tạo nên một hương vị độc đáo và thú vị.', 15000, 12000, 5, 93, 1, 4),
(20, 'Pudding socola hạt lựu', 'pudding-socola-hat-luu.png', 'Món Pudding socola hạt lựu là một món tráng miệng thơm ngon với hương vị socola đậm đà và hạt lựu giòn tan.\r\n', 20000, 16000, 0, 200, 0, 4),
(21, 'Mì xào cuộn trứng', 'mi-xao-cuon-trung.png', 'Mì xào cuộn trứng là một món ăn ngon với mì xào được cuộn trong trứng và nướng giòn.', 23000, 18400, 10, 102, 0, 5),
(22, 'Mì ramen miso', 'mi-ramen-miso.png', 'Mì ramen miso là một món ăn truyền thống của Nhật Bản, với mì mềm mịn và nước dùng miso đậm đà. Nước dùng miso được làm từ nấm miso, một loại gia vị truyền thống của Nhật Bản, kết hợp với các thành phần như xương heo, xương gà, rau củ và các loại gia vị khác để tạo ra một hương vị độc đáo và thơm ngon. Mì ramen thường được kèm theo các loại topping như thịt heo, trứng luộc, rau mùi, rong biển và hành tây. Món ăn này thường được thưởng thức trong những ngày lạnh hoặc khi bạn muốn một bữa ăn ngon ', 30000, 24000, 15, 89, 1, 5),
(23, 'Mì tsukemen', 'mi-tsukemen.png', 'Mì tsukemen là một món ăn đặc trưng của Nhật Bản, với mì dày và nước dùng đậm đà. Thay vì truyền thống là ngâm mì trong nước dùng như mì ramen, mì tsukemen được đặt riêng vào một tô riêng, và nước dùng được đặt trong một tô khác. Khi ăn, bạn sẽ lấy một miếng mì từ tô mì và ngâm vào tô nước dùng, sau đó ăn mì và nước dùng cùng lúc. Nước dùng thường được làm từ xương heo, xương gà hoặc hải sản, kết hợp với các loại gia vị như tương miso, tương đậu nành, tỏi, và gia vị khác để tạo ra hương vị độc đ', 35000, 28000, 5, 22, 0, 5),
(24, 'Sushi', 'sushi.png', 'Sushi là một món ăn truyền thống của Nhật Bản, với cơ sở là cơm trộn giấm được cuộn trong các loại hải sản như cá hồi, tôm, hoặc hải sản khác, cùng với rau sống và các loại gia vị như wasabi và gừng.', 45000, 36000, 15, 128, 1, 3),
(25, 'Cơm cà ri trứng', 'com-cari-trung.png', 'Cơm cà ri trứng là một món ăn ngon với cơm trắng mềm mịn được trộn với cà ri và trứng, tạo nên một hương vị đậm đà và thơm ngon.', 25000, 20000, 0, 225, 0, 3),
(26, 'Hamburger thịt bò', 'hamburger-bo.png', 'Hamburger bò là một món ăn ngon với bánh mì mềm mịn, thịt bò xay tươi ngon, và các loại gia vị và rau sống như cà chua, hành tây và rau xà lách.', 23000, 18400, 10, 111, 1, 1),
(27, 'Combo hamburger khoai tây chiên', 'combo-hamburger-khoai-tay-chien.png', 'Combo hamburger khoai tây chiên là một sự kết hợp tuyệt vời giữa món hamburger thơm ngon và khoai tây chiên giòn tan.', 30000, 24000, 10, 111, 1, 1),
(28, 'Combo hamburger khoai tây chiên gà rán', 'combo-hamburger-khoai-tay-chien-ga-ran.png', 'Combo hamburger khoai tây chiên gà rán là một sự kết hợp tuyệt vời giữa món hamburger thơm ngon và khoai tây chiên và gà rán giòn tan.', 40000, 32000, 5, 228, 1, 1),
(29, 'Bánh mì kẹp xúc xích', 'banh-mi-kep-xuc-xich.png', 'Bánh mì kẹp xúc xích là một món ăn vặt ngon lành với bánh mì mềm mịn và xúc xích thịt bò nướng giòn tan.\r\n', 25000, 20000, 0, 127, 1, 8),
(30, 'Trà sữa ô long', 'tra-sua-o-long.png', 'Trà sữa ô long là một đồ uống phổ biến với hương vị đặc trưng của trà ô long hòa quyện với sữa béo ngọt, tạo nên một hương vị thơm ngon và hấp dẫn.', 25000, 20000, 5, 110, 1, 6),
(31, 'Trà sữa thái xanh', 'tra-sua-thai-xanh.png', 'Trà sữa thái xanh là một đồ uống phổ biến và thú vị, kết hợp giữa hương vị đặc trưng của trà xanh và sữa thơm ngon. Trà xanh thái được chế biến từ lá trà tươi nhưng không qua quá trình lên men, giữ nguyên hương vị tự nhiên và màu xanh đặc trưng. Khi trộn với sữa, hương vị trà xanh thái trở nên nhẹ nhàng và bùi ngọt, tạo nên một sự kết hợp hài hòa và thỏa mãn vị giác. Đôi khi, trà sữa thái xanh còn được thêm đá hoặc bột trân châu để tăng thêm sự thú vị và độ ngon. Món này thường được thưởng thức ', 25000, 20000, 5, 101, 1, 6),
(32, 'Trà sữa khoai lang tím', 'sua-tuoi-tran-trau-duong-den-khoai-lang-tim.png', 'Trà sữa khoai lang tím là một đồ uống độc đáo với hương vị đặc biệt của khoai lang tím, kết hợp với trà đen thơm ngon và sữa béo mịn.', 25000, 20000, 5, 111, 1, 7),
(33, 'Trà sữa lài', 'tra-sua-lai.png', 'Trà sữa lài là một loại đồ uống phổ biến với hương vị đặc trưng của trà đen pha chút sữa và thêm một chút đường để tạo thành một hỗn hợp ngọt ngào và đậm đà. Hương vị của trà đen mang đến sự đậm đà và mạnh mẽ, trong khi sữa tạo ra lớp kem mịn và béo ngọt. Thêm vào đó, đường làm tăng thêm độ ngọt và cân bằng hương vị tổng thể của trà sữa lài. Đây là một món đồ uống thú vị và thỏa mãn vị giác, phù hợp để thưởng thức trong những ngày nóng hoặc khi bạn muốn một ly trà thơm ngon và ngọt ngào.', 25000, 20000, 5, 231, 0, 6),
(34, 'Sữa tươi trân trâu đường đen', 'sua-tuoi-tran-trau-duong-den.png', 'Sữa tươi trân châu đường đen là một món đồ uống phổ biến và thú vị, với hương vị đặc trưng của trà đen hòa quyện với sữa béo ngọt và trân châu giòn tan. Trà đen tạo nên một hương vị đậm đà và mạnh mẽ, cùng với sữa tạo nên một lớp kem mịn và béo ngọt. Trân châu, là những viên bột sắn nấu chín, có độ giòn và đàn hồi đặc biệt, tạo thêm sự thú vị và độ ngon cho món trà sữa này. Đường đen, với hương vị đặc trưng của mật đường, được thêm vào để tăng thêm độ ngọt và đậm đà cho món trà sữa này. Món trà ', 30000, 24000, 20, 115, 1, 6),
(43, 'tí nị', 'tini.jpg', 'nothing', 1000, 1000, 0, 10, 1, 14);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `Id` int(5) NOT NULL COMMENT 'Mã người dùng',
  `Email` varchar(50) DEFAULT NULL COMMENT 'Email',
  `Password` varchar(255) DEFAULT NULL COMMENT 'Mật khẩu',
  `Avatar` varchar(255) DEFAULT NULL COMMENT 'Tên file ảnh đại diện',
  `Name` varchar(50) DEFAULT NULL COMMENT 'Tên người dùng',
  `PhoneNumber` varchar(10) DEFAULT NULL COMMENT 'Số điện thoại',
  `Point` int(5) DEFAULT NULL COMMENT 'Điểm mua hàng',
  `Role` int(1) NOT NULL COMMENT 'Vai trò (0 = người dùng chưa đăng ký, 1 = khách hàng, 2 = Quản trị)',
  `Address` text DEFAULT NULL COMMENT 'Địa chỉ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`Id`, `Email`, `Password`, `Avatar`, `Name`, `PhoneNumber`, `Point`, `Role`, `Address`) VALUES
(1, 'user1@example.com', 'password1', 'default.png', 'Người dùng 1', '1234567890', 50, 1, 'Địa chỉ 1'),
(2, 'user2@example.com', 'password2', 'default.png', 'Người dùng 2', '2147483647', 30, 1, 'Địa chỉ 2'),
(3, 'user3@example.com', 'password3', 'default.png', 'Người dùng 3', '2147483647', 70, 2, 'Địa chỉ 3'),
(4, 'user4@example.com', 'password4', 'default.png', 'Người dùng 4', '2147483647', 20, 1, 'Địa chỉ 4'),
(5, 'user5@example.com', 'password5', 'default.png', 'Người dùng 5', '2147483647', 90, 2, 'Địa chỉ 5'),
(127, 'cuongctps28903@gmai.com', '$2y$10$ll7lpqpOp67yjaPsvy/AhOxMUvlgDEnp7Oc0u1UletH35U63ezuzS', 'default.png', NULL, '903252075', NULL, 1, NULL),
(129, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(130, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(131, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(132, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(133, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(134, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(135, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(136, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(137, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(138, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(139, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(140, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(141, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(142, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(143, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `uservoucher`
--

CREATE TABLE `uservoucher` (
  `Id` int(5) NOT NULL,
  `UserId` int(5) NOT NULL,
  `VoucherId` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `uservoucher`
--

INSERT INTO `uservoucher` (`Id`, `UserId`, `VoucherId`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `voucher`
--

CREATE TABLE `voucher` (
  `Id` int(5) NOT NULL COMMENT 'Mã Voucher',
  `Code` varchar(20) NOT NULL COMMENT 'Mã chữ Voucher',
  `Description` text NOT NULL COMMENT 'Mô tả Voucher',
  `DiscountPrice` int(10) NOT NULL COMMENT 'Số tiền giảm (Chỉ nhập 1 trong 2 cột Số tiền giảm và Phần trăm giảm)',
  `DiscountPercentage` int(3) NOT NULL COMMENT 'Phần trăm giảm (Chỉ nhập 1 trong 2 cột Số tiền giảm và Phần trăm giảm)',
  `MinOrderPrice` int(10) NOT NULL COMMENT 'Giá trị đơn hàng yêu cầu tối thiểu',
  `MaxDiscountPrice` int(10) NOT NULL COMMENT 'Mức giảm giá tối đa',
  `ExpiryDate` date NOT NULL COMMENT 'Ngày hết hạn',
  `RemainingUses` int(5) NOT NULL COMMENT 'Lượt dùng tối đa',
  `Point` int(5) NOT NULL COMMENT 'Số điểm cần để đổi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `voucher`
--

INSERT INTO `voucher` (`Id`, `Code`, `Description`, `DiscountPrice`, `DiscountPercentage`, `MinOrderPrice`, `MaxDiscountPrice`, `ExpiryDate`, `RemainingUses`, `Point`) VALUES
(1, 'VOUCHER01', 'Mã giảm giá 1', 50000, 0, 100000, 0, '2023-12-31', 50, 20),
(2, 'VOUCHER02', 'Mã giảm giá 2', 0, 15, 200000, 30000, '2023-12-31', 30, 15),
(3, 'VOUCHER03', 'Mã giảm giá 3', 70000, 0, 150000, 0, '2023-12-31', 40, 25),
(4, 'VOUCHER04', 'Mã giảm giá 4', 0, 10, 100000, 20000, '2023-12-31', 20, 10),
(5, 'VOUCHER05', 'Mã giảm giá 5', 80000, 0, 200000, 0, '2023-12-31', 60, 30);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cartdetail`
--
ALTER TABLE `cartdetail`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ProductId` (`ProductId`),
  ADD KEY `UserId` (`UserId`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ProductId` (`ProductId`),
  ADD KEY `UserId` (`UserId`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserId` (`UserId`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `OrderId` (`OrderId`),
  ADD KEY `ProductId` (`ProductId`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `product_ibfk_1` (`CategoryId`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `uservoucher`
--
ALTER TABLE `uservoucher`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `VoucherId` (`VoucherId`);

--
-- Chỉ mục cho bảng `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cartdetail`
--
ALTER TABLE `cartdetail`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Mã chi tiết giỏ hàng', AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Mã danh mục', AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Mã bình luận', AUTO_INCREMENT=347;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Mã đơn hàng', AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Mã chi tiết đơn hàng', AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Mã sản phẩm', AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Mã người dùng', AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT cho bảng `uservoucher`
--
ALTER TABLE `uservoucher`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `voucher`
--
ALTER TABLE `voucher`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Mã Voucher', AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cartdetail`
--
ALTER TABLE `cartdetail`
  ADD CONSTRAINT `cartdetail_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `product` (`Id`),
  ADD CONSTRAINT `cartdetail_ibfk_2` FOREIGN KEY (`UserId`) REFERENCES `user` (`Id`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `product` (`Id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`UserId`) REFERENCES `user` (`Id`);

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `user` (`Id`);

--
-- Các ràng buộc cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`OrderId`) REFERENCES `order` (`Id`),
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`ProductId`) REFERENCES `product` (`Id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`CategoryId`) REFERENCES `category` (`Id`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `uservoucher`
--
ALTER TABLE `uservoucher`
  ADD CONSTRAINT `uservoucher_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `user` (`Id`),
  ADD CONSTRAINT `uservoucher_ibfk_2` FOREIGN KEY (`VoucherId`) REFERENCES `voucher` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
