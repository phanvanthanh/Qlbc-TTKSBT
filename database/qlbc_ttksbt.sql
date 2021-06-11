-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.30-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for qlbc-ttksbt
CREATE DATABASE IF NOT EXISTS `qlbc-ttksbt` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `qlbc-ttksbt`;

-- Dumping structure for table qlbc-ttksbt.admin_resource
CREATE TABLE IF NOT EXISTS `admin_resource` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ten_hien_thi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resource` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parameter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parameter_value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `uri` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_menu` int(11) DEFAULT NULL,
  `use_when_login` int(11) DEFAULT '1',
  `only_show_admin` int(11) DEFAULT '0',
  `order` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `admin_resource_parent_foreign` (`parent_id`),
  CONSTRAINT `admin_resource_parent_foreign` FOREIGN KEY (`parent_id`) REFERENCES `admin_resource` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=342 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table qlbc-ttksbt.admin_resource: ~134 rows (approximately)
/*!40000 ALTER TABLE `admin_resource` DISABLE KEYS */;
INSERT INTO `admin_resource` (`id`, `ten_hien_thi`, `resource`, `method`, `action`, `parameter`, `parameter_value`, `status`, `parent_id`, `created_at`, `updated_at`, `uri`, `show_menu`, `use_when_login`, `only_show_admin`, `order`) VALUES
	(1, '#', '#', '#', '#', '', '', 1, 1, NULL, NULL, '#', 0, 1, 1, 2),
	(3, 'Quyền', '#', '#', '#', '', '', 1, 1, NULL, NULL, '#', 1, 1, 1, 3),
	(133, 'login', 'GET | App\\Http\\Controllers\\Auth\\LoginController@showLoginForm', 'GET', 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm', '', '', 1, 1, NULL, NULL, 'login', 0, 1, 1, 1),
	(134, 'login', 'POST | App\\Http\\Controllers\\Auth\\LoginController@login', 'POST', 'App\\Http\\Controllers\\Auth\\LoginController@login', '', '', 1, 1, NULL, NULL, 'login', 0, 1, 1, 2),
	(135, 'logout', 'POST | App\\Http\\Controllers\\Auth\\LoginController@logout', 'POST', 'App\\Http\\Controllers\\Auth\\LoginController@logout', '', '', 1, 1, NULL, NULL, 'logout', 0, 1, 1, 3),
	(136, 'register', 'GET | App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm', 'GET', 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm', '', '', 1, 1, NULL, NULL, 'register', 0, 1, 1, 4),
	(137, 'register', 'POST | App\\Http\\Controllers\\Auth\\RegisterController@register', 'POST', 'App\\Http\\Controllers\\Auth\\RegisterController@register', '', '', 1, 1, NULL, NULL, 'register', 0, 1, 1, 5),
	(138, 'password/reset', 'GET | App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm', 'GET', 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm', '', '', 1, 1, NULL, NULL, 'password/reset', 0, 1, 1, 6),
	(139, 'password/email', 'POST | App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail', 'POST', 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail', '', '', 1, 1, NULL, NULL, 'password/email', 0, 1, 1, 7),
	(140, 'password/reset/{token}', 'GET | App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm', 'GET', 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm', '', '', 1, 1, NULL, NULL, 'password/reset/{token}', 0, 1, 1, 8),
	(141, 'password/reset', 'POST | App\\Http\\Controllers\\Auth\\ResetPasswordController@reset', 'POST', 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset', '', '', 1, 1, NULL, NULL, 'password/reset', 0, 1, 1, 9),
	(142, 'DM Resource', 'GET | App\\Http\\Controllers\\AdminResourceRefullController@index', 'GET', 'App\\Http\\Controllers\\AdminResourceRefullController@index', '', '', 1, 1, NULL, NULL, 'admin/resource', 1, 1, 1, 4),
	(143, 'admin/resource/create', 'GET | App\\Http\\Controllers\\AdminResourceRefullController@create', 'GET', 'App\\Http\\Controllers\\AdminResourceRefullController@create', '', '', 1, 1, NULL, NULL, 'admin/resource/create', 0, 1, 1, 11),
	(144, 'admin/resource', 'POST | App\\Http\\Controllers\\AdminResourceRefullController@store', 'POST', 'App\\Http\\Controllers\\AdminResourceRefullController@store', '', '', 1, 1, NULL, NULL, 'admin/resource', 0, 1, 1, 12),
	(145, 'admin/resource/{resource}', 'GET | App\\Http\\Controllers\\AdminResourceRefullController@show', 'GET', 'App\\Http\\Controllers\\AdminResourceRefullController@show', '', '', 1, 1, NULL, NULL, 'admin/resource/{resource}', 0, 1, 1, 13),
	(146, 'admin/resource/{resource}/edit', 'GET | App\\Http\\Controllers\\AdminResourceRefullController@edit', 'GET', 'App\\Http\\Controllers\\AdminResourceRefullController@edit', '', '', 1, 1, NULL, NULL, 'admin/resource/{resource}/edit', 0, 1, 1, 14),
	(147, 'admin/resource/{resource}', 'PUT | App\\Http\\Controllers\\AdminResourceRefullController@update', 'PUT', 'App\\Http\\Controllers\\AdminResourceRefullController@update', '', '', 1, 1, NULL, NULL, 'admin/resource/{resource}', 0, 1, 1, 15),
	(148, 'admin/resource/{resource}', 'DELETE | App\\Http\\Controllers\\AdminResourceRefullController@destroy', 'DELETE', 'App\\Http\\Controllers\\AdminResourceRefullController@destroy', '', '', 1, 1, NULL, NULL, 'admin/resource/{resource}', 0, 1, 1, 16),
	(149, 'Nhóm quyền', 'GET | App\\Http\\Controllers\\AdminRoleController@taoNhomQuyenView', 'GET', 'App\\Http\\Controllers\\AdminRoleController@taoNhomQuyenView', '', '', 1, 3, NULL, NULL, 'admin/tao-nhom-quyen', 1, 1, 1, 17),
	(150, 'admin/tao-nhom-quyen', 'POST | App\\Http\\Controllers\\AdminRoleController@taoNhomQuyenPost', 'POST', 'App\\Http\\Controllers\\AdminRoleController@taoNhomQuyenPost', '', '', 1, 1, NULL, NULL, 'admin/tao-nhom-quyen', 0, 1, 1, 18),
	(151, 'Phân quyền', 'GET | App\\Http\\Controllers\\AdminRuleController@phanQuyenGet', 'GET', 'App\\Http\\Controllers\\AdminRuleController@phanQuyenGet', '', '', 1, 3, NULL, NULL, 'admin/phan-quyen', 1, 1, 1, 19),
	(152, 'admin/phan-quyen', 'POST | App\\Http\\Controllers\\AdminRuleController@phanQuyenPost', 'POST', 'App\\Http\\Controllers\\AdminRuleController@phanQuyenPost', '', '', 1, 1, NULL, NULL, 'admin/phan-quyen', 0, 1, 1, 20),
	(153, 'admin/danh-sach-quyen', 'POST | App\\Http\\Controllers\\AdminRuleController@danhSachQuyenPost', 'POST', 'App\\Http\\Controllers\\AdminRuleController@danhSachQuyenPost', '', '', 1, 1, NULL, NULL, 'admin/danh-sach-quyen', 0, 1, 1, 21),
	(154, 'Nhân viên', 'GET | App\\Http\\Controllers\\NhanVienController@NhanVien', 'GET', 'App\\Http\\Controllers\\NhanVienController@NhanVien', '', '', 1, 237, NULL, NULL, 'admin/nhan-vien', 1, 1, 1, 2),
	(155, 'admin/tao-nhan-vien', 'POST | App\\Http\\Controllers\\NhanVienController@TaoNhanVien', 'POST', 'App\\Http\\Controllers\\NhanVienController@TaoNhanVien', '', '', 1, 1, NULL, NULL, 'admin/tao-nhan-vien', 0, 1, 1, 23),
	(157, 'admin/xoa-nhan-vien/{id}', 'DELETE | App\\Http\\Controllers\\NhanVienController@XoaNhanVien', 'DELETE', 'App\\Http\\Controllers\\NhanVienController@XoaNhanVien', '', '', 1, 1, NULL, NULL, 'admin/xoa-nhan-vien/{id}', 0, 1, 1, 25),
	(218, '/', 'GET | App\\Http\\Controllers\\HomeController@home', 'GET', 'App\\Http\\Controllers\\HomeController@home', '', '', 1, 1, NULL, NULL, '/', 0, 1, 1, 1),
	(219, 'admin/xoa-nhom-quyen/{id}', 'DELETE | App\\Http\\Controllers\\AdminRoleController@xoaNhomQuyen', 'DELETE', 'App\\Http\\Controllers\\AdminRoleController@xoaNhomQuyen', '', '', 1, 1, NULL, NULL, 'admin/xoa-nhom-quyen/{id}', 0, 1, 1, 20),
	(220, 'admin/sua-nhom-quyen', 'POST | App\\Http\\Controllers\\AdminRoleController@suaNhomQuyen', 'POST', 'App\\Http\\Controllers\\AdminRoleController@suaNhomQuyen', '', '', 1, 1, NULL, NULL, 'admin/sua-nhom-quyen', 0, 1, 1, 21),
	(222, 'admin/get-thong-tin-nhan-vien', 'POST | App\\Http\\Controllers\\NhanVienController@getThongTinNhanVien', 'POST', 'App\\Http\\Controllers\\NhanVienController@getThongTinNhanVien', '', '', 1, 1, NULL, NULL, 'admin/get-thong-tin-nhan-vien', 0, 1, 1, 29),
	(223, 'admin/sua-nhan-vien', 'POST | App\\Http\\Controllers\\DonViController@suaDonVi', 'POST', 'App\\Http\\Controllers\\DonViController@suaDonVi', '', '', 1, 1, NULL, NULL, 'admin/sua-don-vi', 0, 1, 1, 27),
	(224, 'Đơn vị', 'GET | App\\Http\\Controllers\\DonViController@donVi', 'GET', 'App\\Http\\Controllers\\DonViController@donVi', '', '', 1, 1, NULL, NULL, 'admin/don-vi', 1, 1, 1, 1),
	(225, 'admin/them-don-vi', 'POST | App\\Http\\Controllers\\DonViController@themDonVi', 'POST', 'App\\Http\\Controllers\\DonViController@themDonVi', '', '', 1, 1, NULL, NULL, 'admin/them-don-vi', 0, 1, 1, 31),
	(226, 'admin/xoa-don-vi/{id}', 'DELETE | App\\Http\\Controllers\\DonViController@xoaDonVi', 'DELETE', 'App\\Http\\Controllers\\DonViController@xoaDonVi', '', '', 1, 1, NULL, NULL, 'admin/xoa-don-vi/{id}', 0, 1, 1, 32),
	(228, 'admin/sua-nhan-vien', 'POST | App\\Http\\Controllers\\NhanVienController@suaNhanVien', 'POST', 'App\\Http\\Controllers\\NhanVienController@suaNhanVien', '', '', 1, 1, NULL, NULL, 'admin/sua-nhan-vien', 0, 1, 1, 27),
	(229, 'admin/get-thong-tin-don-vi', 'POST | App\\Http\\Controllers\\DonViController@getThongTinDonVi', 'POST', 'App\\Http\\Controllers\\DonViController@getThongTinDonVi', '', '', 1, 1, NULL, NULL, 'admin/get-thong-tin-don-vi', 0, 1, 1, 34),
	(230, 'DM Lỗi', 'GET | App\\Http\\Controllers\\DanhMucLoiController@danhMucLoi', 'GET', 'App\\Http\\Controllers\\DanhMucLoiController@danhMucLoi', '', '', 1, 1, NULL, NULL, 'admin/danh-muc-loi', 1, 1, 1, 5),
	(231, 'admin/them-danh-muc-loi', 'POST | App\\Http\\Controllers\\DanhMucLoiController@themDanhMucLoi', 'POST', 'App\\Http\\Controllers\\DanhMucLoiController@themDanhMucLoi', '', '', 1, 1, NULL, NULL, 'admin/them-danh-muc-loi', 0, 1, 1, 36),
	(232, 'admin/sua-danh-muc-loi', 'POST | App\\Http\\Controllers\\DanhMucLoiController@suaDanhMucLoi', 'POST', 'App\\Http\\Controllers\\DanhMucLoiController@suaDanhMucLoi', '', '', 1, 1, NULL, NULL, 'admin/sua-danh-muc-loi', 0, 1, 1, 37),
	(233, 'admin/xoa-danh-muc-loi/{id}', 'DELETE | App\\Http\\Controllers\\DanhMucLoiController@xoaDanhMucLoi', 'DELETE', 'App\\Http\\Controllers\\DanhMucLoiController@xoaDanhMucLoi', '', '', 1, 1, NULL, NULL, 'admin/xoa-danh-muc-loi/{id}', 0, 1, 1, 38),
	(234, 'admin/get-thong-tin-danh-muc-loi', 'POST | App\\Http\\Controllers\\DanhMucLoiController@getThongTinDanhMucLoi', 'POST', 'App\\Http\\Controllers\\DanhMucLoiController@getThongTinDanhMucLoi', '', '', 1, 1, NULL, NULL, 'admin/get-thong-tin-danh-muc-loi', 0, 1, 1, 39),
	(235, 'admin/get-thong-tin-nhom-quyen', 'POST | App\\Http\\Controllers\\AdminRoleController@getThongTinNhomQuyen', 'POST', 'App\\Http\\Controllers\\AdminRoleController@getThongTinNhomQuyen', '', '', 1, 1, NULL, NULL, 'admin/get-thong-tin-nhom-quyen', 0, 1, 1, 22),
	(236, 'admin/urd-danh-muc-loi-word/{id}', 'GET | App\\Http\\Controllers\\DanhMucLoiController@urdDanhMucLoiWord', 'GET', 'App\\Http\\Controllers\\DanhMucLoiController@urdDanhMucLoiWord', '', '', 1, 1, NULL, NULL, 'admin/urd-danh-muc-loi-word/{id}', 0, 1, 1, 41),
	(237, 'Nhân viên', '#', '#', '#', '', '', 1, 1, NULL, NULL, '#', 1, 1, 1, 2),
	(238, 'Công tác hỗ trợ tuần', 'GET | App\\Http\\Controllers\\HoTroController@congTacHoTro', 'GET', 'App\\Http\\Controllers\\HoTroController@congTacHoTro', '', '', 1, 1, NULL, NULL, 'admin/cong-tac-ho-tro', 1, 1, 1, 60),
	(239, 'admin/get-danh-muc-loi-theo-loai-danh-muc', 'POST | App\\Http\\Controllers\\HoTroController@getDanhMucLoiTheoLoaiDanhMuc', 'POST', 'App\\Http\\Controllers\\HoTroController@getDanhMucLoiTheoLoaiDanhMuc', '', '', 1, 1, NULL, NULL, 'admin/get-danh-muc-loi-theo-loai-danh-muc', 0, 1, 1, 43),
	(240, 'admin/get-danh-cong-tac-ho-tro', 'POST | App\\Http\\Controllers\\HoTroController@getCongTacHoTro', 'POST', 'App\\Http\\Controllers\\HoTroController@getCongTacHoTro', '', '', 1, 1, NULL, NULL, 'admin/get-danh-cong-tac-ho-tro', 0, 1, 1, 44),
	(241, 'admin/them-thong-tin-ho-tro', 'POST | App\\Http\\Controllers\\HoTroController@themThongTinHoTro', 'POST', 'App\\Http\\Controllers\\HoTroController@themThongTinHoTro', '', '', 1, 1, NULL, NULL, 'admin/them-thong-tin-ho-tro', 0, 1, 1, 45),
	(243, 'Lịch upcode', 'GET | App\\Http\\Controllers\\LichUpcodeController@lichUpcode', 'GET', 'App\\Http\\Controllers\\LichUpcodeController@lichUpcode', '', '', 1, 1, NULL, NULL, 'admin/lich-upcode', 1, 1, 1, 10),
	(244, 'admin/tao-lich-upcode', 'POST | App\\Http\\Controllers\\LichUpcodeController@taoLichUpcode', 'POST', 'App\\Http\\Controllers\\LichUpcodeController@taoLichUpcode', '', '', 1, 1, NULL, NULL, 'admin/tao-lich-upcode', 0, 1, 1, 48),
	(245, 'admin/sua-lich-upcode', 'POST | App\\Http\\Controllers\\LichUpcodeController@suaLichUpcode', 'POST', 'App\\Http\\Controllers\\LichUpcodeController@suaLichUpcode', '', '', 1, 1, NULL, NULL, 'admin/sua-lich-upcode', 0, 1, 1, 49),
	(246, 'admin/xoa-lich-upcode', 'POST | App\\Http\\Controllers\\LichUpcodeController@xoaLichUpcode', 'POST', 'App\\Http\\Controllers\\LichUpcodeController@xoaLichUpcode', '', '', 1, 1, NULL, NULL, 'admin/xoa-lich-upcode', 0, 1, 1, 50),
	(247, 'admin/load-ds-nhan-su-upcode', 'POST | App\\Http\\Controllers\\LichUpcodeController@loadDsNhanSuUpcode', 'POST', 'App\\Http\\Controllers\\LichUpcodeController@loadDsNhanSuUpcode', '', '', 1, 1, NULL, NULL, 'admin/load-ds-nhan-su-upcode', 0, 1, 1, 51),
	(248, 'admin/them-nhan-su-upcode', 'POST | App\\Http\\Controllers\\LichUpcodeController@themNhanSuUpcode', 'POST', 'App\\Http\\Controllers\\LichUpcodeController@themNhanSuUpcode', '', '', 1, 1, NULL, NULL, 'admin/them-nhan-su-upcode', 0, 1, 1, 52),
	(249, 'admin/xoa-nhan-su-upcode', 'POST | App\\Http\\Controllers\\LichUpcodeController@xoaNhanSuUpcode', 'POST', 'App\\Http\\Controllers\\LichUpcodeController@xoaNhanSuUpcode', '', '', 1, 1, NULL, NULL, 'admin/xoa-nhan-su-upcode', 0, 1, 1, 53),
	(250, 'admin/load-chi-tiet-upcode', 'POST | App\\Http\\Controllers\\LichUpcodeController@loadChiTietUpcode', 'POST', 'App\\Http\\Controllers\\LichUpcodeController@loadChiTietUpcode', '', '', 1, 1, NULL, NULL, 'admin/load-chi-tiet-upcode', 0, 1, 1, 54),
	(251, 'admin/them-chi-tiet-upcode', 'POST | App\\Http\\Controllers\\LichUpcodeController@themChiTietUpcode', 'POST', 'App\\Http\\Controllers\\LichUpcodeController@themChiTietUpcode', '', '', 1, 1, NULL, NULL, 'admin/them-chi-tiet-upcode', 0, 1, 1, 55),
	(253, 'admin/xoa-chi-tiet-upcode', 'POST | App\\Http\\Controllers\\LichUpcodeController@xoaChiTietUpcode', 'POST', 'App\\Http\\Controllers\\LichUpcodeController@xoaChiTietUpcode', '', '', 1, 1, NULL, NULL, 'admin/xoa-chi-tiet-upcode', 0, 1, 1, 57),
	(254, 'admin/load-lich-upcode', 'POST | App\\Http\\Controllers\\LichUpcodeController@loadLichUpcode', 'POST', 'App\\Http\\Controllers\\LichUpcodeController@loadLichUpcode', '', '', 1, 1, NULL, NULL, 'admin/load-lich-upcode', 0, 1, 1, 51),
	(255, 'admin/get-lich-upcode-by-id', 'POST | App\\Http\\Controllers\\LichUpcodeController@getLichUpcodeById', 'POST', 'App\\Http\\Controllers\\LichUpcodeController@getLichUpcodeById', '', '', 1, 1, NULL, NULL, 'admin/get-lich-upcode-by-id', 0, 1, 1, 52),
	(256, 'Bảng phân công', 'GET | App\\Http\\Controllers\\PhanCongController@bangPhanCong', 'GET', 'App\\Http\\Controllers\\PhanCongController@bangPhanCong', '', '', 1, 1, NULL, NULL, 'admin/bang-phan-cong', 1, 1, 1, 11),
	(257, 'admin/tao-bang-phan-cong', 'POST | App\\Http\\Controllers\\PhanCongController@taoBangPhanCong', 'POST', 'App\\Http\\Controllers\\PhanCongController@taoBangPhanCong', '', '', 1, 1, NULL, NULL, 'admin/tao-bang-phan-cong', 0, 1, 1, 60),
	(258, 'admin/sua-bang-phan-cong', 'POST | App\\Http\\Controllers\\PhanCongController@suaBangPhanCong', 'POST', 'App\\Http\\Controllers\\PhanCongController@suaBangPhanCong', '', '', 1, 1, NULL, NULL, 'admin/sua-bang-phan-cong', 0, 1, 1, 61),
	(259, 'admin/xoa-bang-phan-cong', 'POST | App\\Http\\Controllers\\PhanCongController@xoaBangPhanCong', 'POST', 'App\\Http\\Controllers\\PhanCongController@xoaBangPhanCong', '', '', 1, 1, NULL, NULL, 'admin/xoa-bang-phan-cong', 0, 1, 1, 62),
	(261, 'admin/them-chi-tiet-bang-phan-cong', 'POST | App\\Http\\Controllers\\PhanCongController@themChiTietBangPhanCong', 'POST', 'App\\Http\\Controllers\\PhanCongController@themChiTietBangPhanCong', '', '', 1, 1, NULL, NULL, 'admin/them-chi-tiet-bang-phan-cong', 0, 1, 1, 64),
	(262, 'admin/xoa-chi-tiet-bang-phan-cong', 'POST | App\\Http\\Controllers\\PhanCongController@xoaChiTietBangPhanCong', 'POST', 'App\\Http\\Controllers\\PhanCongController@xoaChiTietBangPhanCong', '', '', 1, 1, NULL, NULL, 'admin/xoa-chi-tiet-bang-phan-cong', 0, 1, 1, 65),
	(263, 'admin/load-bang-phan-cong', 'POST | App\\Http\\Controllers\\PhanCongController@loadBangPhanCong', 'POST', 'App\\Http\\Controllers\\PhanCongController@loadBangPhanCong', '', '', 1, 1, NULL, NULL, 'admin/load-bang-phan-cong', 0, 1, 1, 61),
	(264, 'admin/get-bang-phan-cong-by-id', 'POST | App\\Http\\Controllers\\PhanCongController@getBangPhanCongById', 'POST', 'App\\Http\\Controllers\\PhanCongController@getBangPhanCongById', '', '', 1, 1, NULL, NULL, 'admin/get-bang-phan-cong-by-id', 0, 1, 1, 62),
	(265, 'admin/load-chi-tiet-bang-phan-cong', 'POST | App\\Http\\Controllers\\PhanCongController@loadChiTietBangPhanCong', 'POST', 'App\\Http\\Controllers\\PhanCongController@loadChiTietBangPhanCong', '', '', 1, 1, NULL, NULL, 'admin/load-chi-tiet-bang-phan-cong', 0, 1, 1, 65),
	(266, 'DM khách hàng', 'GET | App\\Http\\Controllers\\CanBoController@canBo', 'GET', 'App\\Http\\Controllers\\CanBoController@canBo', '', '', 1, 1, NULL, NULL, 'admin/can-bo', 1, 1, 1, 7),
	(267, 'admin/load-can-bo', 'POST | App\\Http\\Controllers\\CanBoController@loadCanBo', 'POST', 'App\\Http\\Controllers\\CanBoController@loadCanBo', '', '', 1, 1, NULL, NULL, 'admin/load-can-bo', 0, 1, 1, 69),
	(268, 'admin/them-can-bo', 'POST | App\\Http\\Controllers\\CanBoController@themCanBo', 'POST', 'App\\Http\\Controllers\\CanBoController@themCanBo', '', '', 1, 1, NULL, NULL, 'admin/them-can-bo', 0, 1, 1, 70),
	(269, 'admin/xoa-can-bo', 'POST | App\\Http\\Controllers\\CanBoController@xoaCanBo', 'POST', 'App\\Http\\Controllers\\CanBoController@xoaCanBo', '', '', 1, 1, NULL, NULL, 'admin/xoa-can-bo', 0, 1, 1, 71),
	(270, 'admin/sua-can-bo', 'POST | App\\Http\\Controllers\\CanBoController@suaCanBo', 'POST', 'App\\Http\\Controllers\\CanBoController@suaCanBo', '', '', 1, 1, NULL, NULL, 'admin/sua-can-bo', 0, 1, 1, 72),
	(271, 'DM đơn vị khách hàng', 'GET | App\\Http\\Controllers\\DmDonViYeuCauController@dmDonViYeuCau', 'GET', 'App\\Http\\Controllers\\DmDonViYeuCauController@dmDonViYeuCau', '', '', 1, 1, NULL, NULL, 'admin/dm-don-vi-yeu-cau', 1, 1, 1, 6),
	(272, 'admin/load-dm-don-vi-yeu-cau', 'POST | App\\Http\\Controllers\\DmDonViYeuCauController@loadDmDonViYeuCau', 'POST', 'App\\Http\\Controllers\\DmDonViYeuCauController@loadDmDonViYeuCau', '', '', 1, 1, NULL, NULL, 'admin/load-dm-don-vi-yeu-cau', 0, 1, 1, 74),
	(273, 'admin/them-dm-don-vi-yeu-cau', 'POST | App\\Http\\Controllers\\DmDonViYeuCauController@themDmDonViYeuCau', 'POST', 'App\\Http\\Controllers\\DmDonViYeuCauController@themDmDonViYeuCau', '', '', 1, 1, NULL, NULL, 'admin/them-dm-don-vi-yeu-cau', 0, 1, 1, 75),
	(274, 'admin/xoa-dm-don-vi-yeu-cau', 'POST | App\\Http\\Controllers\\DmDonViYeuCauController@xoaDmDonViYeuCau', 'POST', 'App\\Http\\Controllers\\DmDonViYeuCauController@xoaDmDonViYeuCau', '', '', 1, 1, NULL, NULL, 'admin/xoa-dm-don-vi-yeu-cau', 0, 1, 1, 76),
	(275, 'admin/sua-dm-don-vi-yeu-cau', 'POST | App\\Http\\Controllers\\DmDonViYeuCauController@suaDmDonViYeuCau', 'POST', 'App\\Http\\Controllers\\DmDonViYeuCauController@suaDmDonViYeuCau', '', '', 1, 1, NULL, NULL, 'admin/sua-dm-don-vi-yeu-cau', 0, 1, 1, 77),
	(276, 'DM loại dịch vụ', 'GET | App\\Http\\Controllers\\LoaiDanhMucController@loaiDanhMuc', 'GET', 'App\\Http\\Controllers\\LoaiDanhMucController@loaiDanhMuc', '', '', 1, 1, NULL, NULL, 'admin/loai-danh-muc', 1, 1, 1, 8),
	(277, 'admin/load-loai-danh-muc', 'POST | App\\Http\\Controllers\\LoaiDanhMucController@loadLoaiDanhMuc', 'POST', 'App\\Http\\Controllers\\LoaiDanhMucController@loadLoaiDanhMuc', '', '', 1, 1, NULL, NULL, 'admin/load-loai-danh-muc', 0, 1, 1, 79),
	(278, 'admin/them-loai-danh-muc', 'POST | App\\Http\\Controllers\\LoaiDanhMucController@themLoaiDanhMuc', 'POST', 'App\\Http\\Controllers\\LoaiDanhMucController@themLoaiDanhMuc', '', '', 1, 1, NULL, NULL, 'admin/them-loai-danh-muc', 0, 1, 1, 80),
	(279, 'admin/xoa-loai-danh-muc', 'POST | App\\Http\\Controllers\\LoaiDanhMucController@xoaLoaiDanhMuc', 'POST', 'App\\Http\\Controllers\\LoaiDanhMucController@xoaLoaiDanhMuc', '', '', 1, 1, NULL, NULL, 'admin/xoa-loai-danh-muc', 0, 1, 1, 81),
	(280, 'admin/sua-loai-danh-muc', 'POST | App\\Http\\Controllers\\LoaiDanhMucController@suaLoaiDanhMuc', 'POST', 'App\\Http\\Controllers\\LoaiDanhMucController@suaLoaiDanhMuc', '', '', 1, 1, NULL, NULL, 'admin/sua-loai-danh-muc', 0, 1, 1, 82),
	(281, 'Phân đơn vị cho nhân viên', 'GET | App\\Http\\Controllers\\PhanCongCanBoController@phanDonViChoCanBo', 'GET', 'App\\Http\\Controllers\\PhanCongCanBoController@phanDonViChoCanBo', '', '', 1, 237, NULL, NULL, 'admin/phan-don-vi-cho-can-bo', 1, 1, 1, 83),
	(282, 'admin/load-user-chua-phan-don-vi', 'POST | App\\Http\\Controllers\\PhanCongCanBoController@loadUserChuaPhanDonVi', 'POST', 'App\\Http\\Controllers\\PhanCongCanBoController@loadUserChuaPhanDonVi', '', '', 1, 1, NULL, NULL, 'admin/load-user-chua-phan-don-vi', 0, 1, 1, 84),
	(283, 'admin/load-dm-don-vi-can-phan', 'POST | App\\Http\\Controllers\\PhanCongCanBoController@loadDmDonViCanPhan', 'POST', 'App\\Http\\Controllers\\PhanCongCanBoController@loadDmDonViCanPhan', '', '', 1, 1, NULL, NULL, 'admin/load-dm-don-vi-can-phan', 0, 1, 1, 85),
	(284, 'admin/cap-nhat-phan-don-vi-cho-can-bo', 'POST | App\\Http\\Controllers\\PhanCongCanBoController@capNhatPhanDonViChoCanBo', 'POST', 'App\\Http\\Controllers\\PhanCongCanBoController@capNhatPhanDonViChoCanBo', '', '', 1, 1, NULL, NULL, 'admin/cap-nhat-phan-don-vi-cho-can-bo', 0, 1, 1, 86),
	(285, 'load-dm-loi-public', 'POST | App\\Http\\Controllers\\HomeController@loadDmLoiPublic', 'POST', 'App\\Http\\Controllers\\HomeController@loadDmLoiPublic', '', '', 1, 1, NULL, NULL, 'load-dm-loi-public', 0, 1, 1, 11),
	(287, 'admin/xoa-thong-tin-ho-tro', 'POST | App\\Http\\Controllers\\HoTroController@xoaThongTinHoTro', 'POST', 'App\\Http\\Controllers\\HoTroController@xoaThongTinHoTro', '', '', 1, 1, NULL, NULL, 'admin/xoa-thong-tin-ho-tro', 0, 1, 1, 48),
	(288, 'admin/get-danh-muc-loi-by-id', 'POST | App\\Http\\Controllers\\DanhMucLoiController@getDanhMucLoiById', 'POST', 'App\\Http\\Controllers\\DanhMucLoiController@getDanhMucLoiById', '', '', 1, 1, NULL, NULL, 'admin/get-danh-muc-loi-by-id', 0, 1, 1, 43),
	(289, 'admin/sua-trang-thai-chi-tiet-upcode', 'POST | App\\Http\\Controllers\\LichUpcodeController@suaTrangThaiChiTietUpcode', 'POST', 'App\\Http\\Controllers\\LichUpcodeController@suaTrangThaiChiTietUpcode', '', '', 1, 1, NULL, NULL, 'admin/sua-trang-thai-chi-tiet-upcode', 0, 1, 1, 62),
	(290, 'Đăng ký nghỉ bù', 'GET | App\\Http\\Controllers\\BaoBuController@baoCaoNghiBu', 'GET', 'App\\Http\\Controllers\\BaoBuController@baoCaoNghiBu', '', '', 1, 1, NULL, NULL, 'admin/bao-cao-nghi-bu', 1, 1, 1, 12),
	(291, 'admin/load-bao-cao-nghi-bu', 'POST | App\\Http\\Controllers\\BaoBuController@loadBaoCaoNghiBu', 'POST', 'App\\Http\\Controllers\\BaoBuController@loadBaoCaoNghiBu', '', '', 1, 1, NULL, NULL, 'admin/load-bao-cao-nghi-bu', 0, 1, 1, 92),
	(292, 'admin/them-bao-cao-nghi-bu', 'POST | App\\Http\\Controllers\\BaoBuController@themBaoCaoNghiBu', 'POST', 'App\\Http\\Controllers\\BaoBuController@themBaoCaoNghiBu', '', '', 1, 1, NULL, NULL, 'admin/them-bao-cao-nghi-bu', 0, 1, 1, 93),
	(293, 'admin/sua-bao-cao-nghi-bu', 'POST | App\\Http\\Controllers\\BaoBuController@suaBaoCaoNghiBu', 'POST', 'App\\Http\\Controllers\\BaoBuController@suaBaoCaoNghiBu', '', '', 1, 1, NULL, NULL, 'admin/sua-bao-cao-nghi-bu', 0, 1, 1, 94),
	(294, 'admin/xoa-bao-cao-nghi-bu', 'POST | App\\Http\\Controllers\\BaoBuController@xoaBaoCaoNghiBu', 'POST', 'App\\Http\\Controllers\\BaoBuController@xoaBaoCaoNghiBu', '', '', 1, 1, NULL, NULL, 'admin/xoa-bao-cao-nghi-bu', 0, 1, 1, 95),
	(296, 'admin/get-bao-cao-nghi-bu-by-id', 'POST | App\\Http\\Controllers\\BaoBuController@getBaoCaoNghiBuById', 'POST', 'App\\Http\\Controllers\\BaoBuController@getBaoCaoNghiBuById', '', '', 1, 1, NULL, NULL, 'admin/get-bao-cao-nghi-bu-by-id', 0, 1, 1, 97),
	(297, 'DM Link quản trị', 'GET | App\\Http\\Controllers\\DmLinkQuanTriController@dmLinkQuanTri', 'GET', 'App\\Http\\Controllers\\DmLinkQuanTriController@dmLinkQuanTri', '', '', 1, 1, NULL, NULL, 'admin/dm-link-quan-tri', 1, 1, 1, 9),
	(298, 'admin/load-dm-link-quan-tri', 'POST | App\\Http\\Controllers\\DmLinkQuanTriController@loadDmLinkQuanTri', 'POST', 'App\\Http\\Controllers\\DmLinkQuanTriController@loadDmLinkQuanTri', '', '', 1, 1, NULL, NULL, 'admin/load-dm-link-quan-tri', 0, 1, 1, 99),
	(299, 'admin/them-dm-link-quan-tri', 'POST | App\\Http\\Controllers\\DmLinkQuanTriController@themDmLinkQuanTri', 'POST', 'App\\Http\\Controllers\\DmLinkQuanTriController@themDmLinkQuanTri', '', '', 1, 1, NULL, NULL, 'admin/them-dm-link-quan-tri', 0, 1, 1, 100),
	(300, 'admin/sua-dm-link-quan-tri', 'POST | App\\Http\\Controllers\\DmLinkQuanTriController@suaDmLinkQuanTri', 'POST', 'App\\Http\\Controllers\\DmLinkQuanTriController@suaDmLinkQuanTri', '', '', 1, 1, NULL, NULL, 'admin/sua-dm-link-quan-tri', 0, 1, 1, 101),
	(301, 'admin/xoa-dm-link-quan-tri', 'POST | App\\Http\\Controllers\\DmLinkQuanTriController@xoaDmLinkQuanTri', 'POST', 'App\\Http\\Controllers\\DmLinkQuanTriController@xoaDmLinkQuanTri', '', '', 1, 1, NULL, NULL, 'admin/xoa-dm-link-quan-tri', 0, 1, 1, 102),
	(302, 'admin/get-dm-link-quan-tri-by-id', 'POST | App\\Http\\Controllers\\DmLinkQuanTriController@getDmLinkQuanTriById', 'POST', 'App\\Http\\Controllers\\DmLinkQuanTriController@getDmLinkQuanTriById', '', '', 1, 1, NULL, NULL, 'admin/get-dm-link-quan-tri-by-id', 0, 1, 1, 103),
	(303, 'admin/get-can-bo-by-id', 'POST | App\\Http\\Controllers\\CanBoController@getCanBoById', 'POST', 'App\\Http\\Controllers\\CanBoController@getCanBoById', '', '', 1, 1, NULL, NULL, 'admin/get-can-bo-by-id', 0, 1, 1, 77),
	(304, 'admin/get-dm-don-vi-yeu-cau-by-id', 'POST | App\\Http\\Controllers\\DmDonViYeuCauController@getDmDonViYeuCauById', 'POST', 'App\\Http\\Controllers\\DmDonViYeuCauController@getDmDonViYeuCauById', '', '', 1, 1, NULL, NULL, 'admin/get-dm-don-vi-yeu-cau-by-id', 0, 1, 1, 83),
	(305, 'admin/get-loai-danh-muc-by-id', 'POST | App\\Http\\Controllers\\LoaiDanhMucController@getLoaiDanhMucById', 'POST', 'App\\Http\\Controllers\\LoaiDanhMucController@getLoaiDanhMucById', '', '', 1, 1, NULL, NULL, 'admin/get-loai-danh-muc-by-id', 0, 1, 1, 89),
	(306, 'chi-tiet-dm-loi/{id}', 'GET | App\\Http\\Controllers\\HomeController@chiTietDmLoi', 'GET', 'App\\Http\\Controllers\\HomeController@chiTietDmLoi', '', '', 1, 1, NULL, NULL, 'chi-tiet-dm-loi/{id}', 0, 1, 1, 12),
	(307, 'DM Chức năng/Module', 'GET | App\\Http\\Controllers\\DanhMucLoiController@danhMucModuleChucNang', 'GET', 'App\\Http\\Controllers\\DanhMucLoiController@danhMucModuleChucNang', '', '', 1, 1, NULL, NULL, 'admin/danh-muc-module-chuc-nang', 1, 1, 1, 5),
	(308, 'admin/them-danh-muc-module-chuc-nang', 'POST | App\\Http\\Controllers\\DanhMucLoiController@themDanhMucModuleChucNang', 'POST', 'App\\Http\\Controllers\\DanhMucLoiController@themDanhMucModuleChucNang', '', '', 1, 1, NULL, NULL, 'admin/them-danh-muc-module-chuc-nang', 0, 1, 1, 46),
	(309, 'admin/sua-danh-muc-module-chuc-nang', 'POST | App\\Http\\Controllers\\DanhMucLoiController@suaDanhMucModuleChucNang', 'POST', 'App\\Http\\Controllers\\DanhMucLoiController@suaDanhMucModuleChucNang', '', '', 1, 1, NULL, NULL, 'admin/sua-danh-muc-module-chuc-nang', 0, 1, 1, 47),
	(310, 'admin/xoa-danh-muc-module-chuc-nang', 'POST | App\\Http\\Controllers\\DanhMucLoiController@xoaDanhMucModuleChucNang', 'POST', 'App\\Http\\Controllers\\DanhMucLoiController@xoaDanhMucModuleChucNang', '', '', 1, 1, NULL, NULL, 'admin/xoa-danh-muc-module-chuc-nang', 0, 1, 1, 48),
	(311, 'admin/get-danh-muc-module-chuc-nang-by-id', 'POST | App\\Http\\Controllers\\DanhMucLoiController@getDanhMucModuleChucNangById', 'POST', 'App\\Http\\Controllers\\DanhMucLoiController@getDanhMucModuleChucNangById', '', '', 1, 1, NULL, NULL, 'admin/get-danh-muc-module-chuc-nang-by-id', 0, 1, 1, 49),
	(312, 'admin/load-danh-muc-module-chuc-nang', 'POST | App\\Http\\Controllers\\DanhMucLoiController@loadDanhMucModuleChucNang', 'POST', 'App\\Http\\Controllers\\DanhMucLoiController@loadDanhMucModuleChucNang', '', '', 1, 1, NULL, NULL, 'admin/load-danh-muc-module-chuc-nang', 0, 1, 1, 50),
	(314, 'admin/load-duyet-bao-cao-nghi-bu', 'POST | App\\Http\\Controllers\\BaoBuController@loadDuyetBaoCaoNghiBu', 'POST', 'App\\Http\\Controllers\\BaoBuController@loadDuyetBaoCaoNghiBu', '', '', 1, 1, NULL, NULL, 'admin/load-duyet-bao-cao-nghi-bu', 0, 1, 1, 109),
	(315, 'Duyệt nghỉ bù', 'GET | App\\Http\\Controllers\\BaoBuController@duyetBaoCaoNghiBu', 'GET', 'App\\Http\\Controllers\\BaoBuController@duyetBaoCaoNghiBu', '', '', 1, 1, NULL, NULL, 'admin/duyet-bao-cao-nghi-bu', 1, 1, 1, 12),
	(316, 'admin/duyet-bao-cao-nghi-bu-by-id', 'POST | App\\Http\\Controllers\\BaoBuController@duyetBaoCaoNghiBuById', 'POST', 'App\\Http\\Controllers\\BaoBuController@duyetBaoCaoNghiBuById', '', '', 1, 1, NULL, NULL, 'admin/duyet-bao-cao-nghi-bu-by-id', 0, 1, 1, 108),
	(317, 'Lịch upcode cá nhân', 'GET | App\\Http\\Controllers\\LichUpcodeController@lichUpcodeCaNhan', 'GET', 'App\\Http\\Controllers\\LichUpcodeController@lichUpcodeCaNhan', '', '', 1, 1, NULL, NULL, 'admin/lich-upcode-ca-nhan', 1, 1, 1, 10),
	(319, 'admin/load-lich-upcode-ca-nhan', 'POST | App\\Http\\Controllers\\LichUpcodeController@loadLichUpcodeCaNhan', 'POST', 'App\\Http\\Controllers\\LichUpcodeController@loadLichUpcodeCaNhan', '', '', 1, 1, NULL, NULL, 'admin/load-lich-upcode-ca-nhan', 0, 1, 1, 71),
	(321, 'admin/load-chi-tiet-upcode-ca-nhan', 'POST | App\\Http\\Controllers\\LichUpcodeController@loadChiTietUpcodeCaNhan', 'POST', 'App\\Http\\Controllers\\LichUpcodeController@loadChiTietUpcodeCaNhan', '', '', 1, 1, NULL, NULL, 'admin/load-chi-tiet-upcode-ca-nhan', 0, 1, 1, 72),
	(322, 'admin/them-chi-tiet-upcode-ca-nhan', 'POST | App\\Http\\Controllers\\LichUpcodeController@themChiTietUpcodeCaNhan', 'POST', 'App\\Http\\Controllers\\LichUpcodeController@themChiTietUpcodeCaNhan', '', '', 1, 1, NULL, NULL, 'admin/them-chi-tiet-upcode-ca-nhan', 0, 1, 1, 73),
	(323, 'admin/load-chi-tiet-upcode-ca-nhan-by-id', 'POST | App\\Http\\Controllers\\LichUpcodeController@loadChiTietUpcodeCaNhanById', 'POST', 'App\\Http\\Controllers\\LichUpcodeController@loadChiTietUpcodeCaNhanById', '', '', 1, 1, NULL, NULL, 'admin/load-chi-tiet-upcode-ca-nhan-by-id', 0, 1, 1, 74),
	(324, 'admin/sua-chi-tiet-upcode-ca-nhan-by-id', 'POST | App\\Http\\Controllers\\LichUpcodeController@suaChiTietUpcodeCaNhanById', 'POST', 'App\\Http\\Controllers\\LichUpcodeController@suaChiTietUpcodeCaNhanById', '', '', 1, 1, NULL, NULL, 'admin/sua-chi-tiet-upcode-ca-nhan-by-id', 0, 1, 1, 75),
	(325, 'admin/load-danh-muc-loi', 'POST | App\\Http\\Controllers\\LichUpcodeController@loadDanhMucLoi', 'POST', 'App\\Http\\Controllers\\LichUpcodeController@loadDanhMucLoi', '', '', 1, 1, NULL, NULL, 'admin/load-danh-muc-loi', 0, 1, 1, 63),
	(326, 'admin/get-tuan', 'POST | App\\Http\\Controllers\\HoTroController@getTuan', 'POST', 'App\\Http\\Controllers\\HoTroController@getTuan', '', '', 1, 1, NULL, NULL, 'admin/get-tuan', 0, 1, 1, 57),
	(327, 'admin/bao-cao-cong-tac-ho-tro-tuan-word&nam={nam}&tuan={tuan}&dv={dv}', 'GET | App\\Http\\Controllers\\HoTroController@baoCaoCongTacHoTroTuanWord', 'GET', 'App\\Http\\Controllers\\HoTroController@baoCaoCongTacHoTroTuanWord', '', '', 1, 1, NULL, NULL, 'admin/bao-cao-cong-tac-ho-tro-tuan-word&nam={nam}&tuan={tuan}&dv={dv}', 0, 1, 1, 55),
	(328, 'Nhập thông tin bệnh nhân', 'GET | App\\Http\\Controllers\\QlbcController@nhapLieu', 'GET', 'App\\Http\\Controllers\\QlbcController@nhapLieu', '', '', 1, 1, NULL, NULL, 'admin/nhap-lieu', 1, 1, 1, 124),
	(329, 'admin/luu-benh-nhan', 'POST | App\\Http\\Controllers\\QlbcController@luuBenhNhan', 'POST', 'App\\Http\\Controllers\\QlbcController@luuBenhNhan', '', '', 1, 1, NULL, NULL, 'admin/luu-benh-nhan', 0, 1, 1, 125),
	(330, 'Danh sách bệnh nhân', 'GET | App\\Http\\Controllers\\QlbcController@danhSachBenhNhan', 'GET', 'App\\Http\\Controllers\\QlbcController@danhSachBenhNhan', '', '', 1, 1, NULL, NULL, 'admin/danh-sach-benh-nhan', 1, 1, 1, 126),
	(331, 'admin/load-benh-nhan', 'POST | App\\Http\\Controllers\\QlbcController@loadBenhNhan', 'POST', 'App\\Http\\Controllers\\QlbcController@loadBenhNhan', '', '', 1, 1, NULL, NULL, 'admin/load-benh-nhan', 0, 1, 1, 127),
	(332, 'admin/xoa-benh-nhan', 'POST | App\\Http\\Controllers\\QlbcController@xoaBenhNhan', 'POST', 'App\\Http\\Controllers\\QlbcController@xoaBenhNhan', '', '', 1, 1, NULL, NULL, 'admin/xoa-benh-nhan', 0, 1, 1, 128),
	(335, 'admin/sua-benh-nhan', 'POST | App\\Http\\Controllers\\QlbcController@suaBenhNhan', 'POST', 'App\\Http\\Controllers\\QlbcController@suaBenhNhan', '', '', 1, 1, NULL, NULL, 'admin/sua-benh-nhan', 0, 1, 1, 129),
	(337, 'admin/cap-nhat-benh-nhan', 'POST | App\\Http\\Controllers\\QlbcController@capNhatBenhNhan', 'POST', 'App\\Http\\Controllers\\QlbcController@capNhatBenhNhan', '', '', 1, 1, NULL, NULL, 'admin/cap-nhat-benh-nhan', 0, 1, 1, 130),
	(341, 'Xuất Excel', 'GET | App\\Http\\Controllers\\QlbcController@xuatExcel', 'GET', 'App\\Http\\Controllers\\QlbcController@xuatExcel', '', '', 1, 1, NULL, NULL, 'admin/xuat-excel', 0, 1, 1, 131);
/*!40000 ALTER TABLE `admin_resource` ENABLE KEYS */;

-- Dumping structure for table qlbc-ttksbt.admin_role
CREATE TABLE IF NOT EXISTS `admin_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_don_vi` int(11) unsigned NOT NULL COMMENT 'id đơn vị cha có level = 0',
  `state` int(11) unsigned NOT NULL DEFAULT '1' COMMENT '0: ngừng hoạt động; 1: hoạt động',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_admin_role_don_vi` (`id_don_vi`),
  CONSTRAINT `FK_admin_role_don_vi` FOREIGN KEY (`id_don_vi`) REFERENCES `don_vi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table qlbc-ttksbt.admin_role: ~3 rows (approximately)
/*!40000 ALTER TABLE `admin_role` DISABLE KEYS */;
INSERT INTO `admin_role` (`id`, `role_name`, `id_don_vi`, `state`, `created_at`, `updated_at`) VALUES
	(1, 'ADMIN', 1, 1, NULL, NULL),
	(3, 'Nhân viên - TTKS Bệnh Tật', 8, 1, NULL, NULL),
	(4, 'Quản trị - TTKS Bệnh Tật', 8, 1, NULL, NULL);
/*!40000 ALTER TABLE `admin_role` ENABLE KEYS */;

-- Dumping structure for table qlbc-ttksbt.admin_rule
CREATE TABLE IF NOT EXISTS `admin_rule` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL,
  `resource_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `admin_rule_role_id_foreign` (`role_id`),
  KEY `admin_rule_resource_id_foreign` (`resource_id`),
  CONSTRAINT `admin_rule_resource_id_foreign` FOREIGN KEY (`resource_id`) REFERENCES `admin_resource` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `admin_rule_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `admin_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15453 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table qlbc-ttksbt.admin_rule: ~159 rows (approximately)
/*!40000 ALTER TABLE `admin_rule` DISABLE KEYS */;
INSERT INTO `admin_rule` (`id`, `role_id`, `resource_id`, `created_at`, `updated_at`) VALUES
	(14794, 1, 1, NULL, NULL),
	(14795, 1, 3, NULL, NULL),
	(14796, 1, 133, NULL, NULL),
	(14797, 1, 134, NULL, NULL),
	(14798, 1, 135, NULL, NULL),
	(14799, 1, 136, NULL, NULL),
	(14800, 1, 137, NULL, NULL),
	(14801, 1, 138, NULL, NULL),
	(14802, 1, 139, NULL, NULL),
	(14803, 1, 140, NULL, NULL),
	(14804, 1, 141, NULL, NULL),
	(14805, 1, 142, NULL, NULL),
	(14806, 1, 143, NULL, NULL),
	(14807, 1, 144, NULL, NULL),
	(14808, 1, 145, NULL, NULL),
	(14809, 1, 146, NULL, NULL),
	(14810, 1, 147, NULL, NULL),
	(14811, 1, 148, NULL, NULL),
	(14812, 1, 149, NULL, NULL),
	(14813, 1, 150, NULL, NULL),
	(14814, 1, 151, NULL, NULL),
	(14815, 1, 152, NULL, NULL),
	(14816, 1, 153, NULL, NULL),
	(14817, 1, 154, NULL, NULL),
	(14818, 1, 155, NULL, NULL),
	(14819, 1, 157, NULL, NULL),
	(14820, 1, 218, NULL, NULL),
	(14821, 1, 219, NULL, NULL),
	(14822, 1, 220, NULL, NULL),
	(14823, 1, 222, NULL, NULL),
	(14824, 1, 223, NULL, NULL),
	(14825, 1, 224, NULL, NULL),
	(14826, 1, 225, NULL, NULL),
	(14827, 1, 226, NULL, NULL),
	(14828, 1, 228, NULL, NULL),
	(14829, 1, 229, NULL, NULL),
	(14830, 1, 230, NULL, NULL),
	(14831, 1, 231, NULL, NULL),
	(14832, 1, 232, NULL, NULL),
	(14833, 1, 233, NULL, NULL),
	(14834, 1, 234, NULL, NULL),
	(14835, 1, 235, NULL, NULL),
	(14836, 1, 236, NULL, NULL),
	(14837, 1, 237, NULL, NULL),
	(14838, 1, 238, NULL, NULL),
	(14839, 1, 239, NULL, NULL),
	(14840, 1, 240, NULL, NULL),
	(14841, 1, 241, NULL, NULL),
	(14842, 1, 243, NULL, NULL),
	(14843, 1, 244, NULL, NULL),
	(14844, 1, 245, NULL, NULL),
	(14845, 1, 246, NULL, NULL),
	(14846, 1, 247, NULL, NULL),
	(14847, 1, 248, NULL, NULL),
	(14848, 1, 249, NULL, NULL),
	(14849, 1, 250, NULL, NULL),
	(14850, 1, 251, NULL, NULL),
	(14851, 1, 253, NULL, NULL),
	(14852, 1, 254, NULL, NULL),
	(14853, 1, 255, NULL, NULL),
	(14854, 1, 256, NULL, NULL),
	(14855, 1, 257, NULL, NULL),
	(14856, 1, 258, NULL, NULL),
	(14857, 1, 259, NULL, NULL),
	(14858, 1, 261, NULL, NULL),
	(14859, 1, 262, NULL, NULL),
	(14860, 1, 263, NULL, NULL),
	(14861, 1, 264, NULL, NULL),
	(14862, 1, 265, NULL, NULL),
	(14863, 1, 266, NULL, NULL),
	(14864, 1, 267, NULL, NULL),
	(14865, 1, 268, NULL, NULL),
	(14866, 1, 269, NULL, NULL),
	(14867, 1, 270, NULL, NULL),
	(14868, 1, 271, NULL, NULL),
	(14869, 1, 272, NULL, NULL),
	(14870, 1, 273, NULL, NULL),
	(14871, 1, 274, NULL, NULL),
	(14872, 1, 275, NULL, NULL),
	(14873, 1, 276, NULL, NULL),
	(14874, 1, 277, NULL, NULL),
	(14875, 1, 278, NULL, NULL),
	(14876, 1, 279, NULL, NULL),
	(14877, 1, 280, NULL, NULL),
	(14878, 1, 281, NULL, NULL),
	(14879, 1, 282, NULL, NULL),
	(14880, 1, 283, NULL, NULL),
	(14881, 1, 284, NULL, NULL),
	(14882, 1, 285, NULL, NULL),
	(14883, 1, 287, NULL, NULL),
	(14884, 1, 288, NULL, NULL),
	(14885, 1, 289, NULL, NULL),
	(14886, 1, 290, NULL, NULL),
	(14887, 1, 291, NULL, NULL),
	(14888, 1, 292, NULL, NULL),
	(14889, 1, 293, NULL, NULL),
	(14890, 1, 294, NULL, NULL),
	(14891, 1, 296, NULL, NULL),
	(14892, 1, 297, NULL, NULL),
	(14893, 1, 298, NULL, NULL),
	(14894, 1, 299, NULL, NULL),
	(14895, 1, 300, NULL, NULL),
	(14896, 1, 301, NULL, NULL),
	(14897, 1, 302, NULL, NULL),
	(14898, 1, 303, NULL, NULL),
	(14899, 1, 304, NULL, NULL),
	(14900, 1, 305, NULL, NULL),
	(14901, 1, 306, NULL, NULL),
	(14902, 1, 307, NULL, NULL),
	(14903, 1, 308, NULL, NULL),
	(14904, 1, 309, NULL, NULL),
	(14905, 1, 310, NULL, NULL),
	(14906, 1, 311, NULL, NULL),
	(14907, 1, 312, NULL, NULL),
	(14908, 1, 314, NULL, NULL),
	(14909, 1, 315, NULL, NULL),
	(14910, 1, 316, NULL, NULL),
	(14911, 1, 317, NULL, NULL),
	(14912, 1, 319, NULL, NULL),
	(14913, 1, 321, NULL, NULL),
	(14914, 1, 322, NULL, NULL),
	(14915, 1, 323, NULL, NULL),
	(14916, 1, 324, NULL, NULL),
	(14917, 1, 325, NULL, NULL),
	(14918, 1, 326, NULL, NULL),
	(14919, 1, 327, NULL, NULL),
	(15392, 4, 3, NULL, NULL),
	(15393, 4, 133, NULL, NULL),
	(15394, 4, 134, NULL, NULL),
	(15395, 4, 135, NULL, NULL),
	(15396, 4, 149, NULL, NULL),
	(15397, 4, 150, NULL, NULL),
	(15398, 4, 151, NULL, NULL),
	(15399, 4, 152, NULL, NULL),
	(15400, 4, 153, NULL, NULL),
	(15401, 4, 154, NULL, NULL),
	(15402, 4, 155, NULL, NULL),
	(15403, 4, 157, NULL, NULL),
	(15404, 4, 218, NULL, NULL),
	(15405, 4, 219, NULL, NULL),
	(15406, 4, 220, NULL, NULL),
	(15407, 4, 222, NULL, NULL),
	(15408, 4, 223, NULL, NULL),
	(15409, 4, 224, NULL, NULL),
	(15410, 4, 225, NULL, NULL),
	(15411, 4, 226, NULL, NULL),
	(15412, 4, 228, NULL, NULL),
	(15413, 4, 229, NULL, NULL),
	(15414, 4, 235, NULL, NULL),
	(15415, 4, 237, NULL, NULL),
	(15416, 4, 281, NULL, NULL),
	(15417, 4, 282, NULL, NULL),
	(15418, 4, 283, NULL, NULL),
	(15419, 4, 284, NULL, NULL),
	(15420, 4, 328, NULL, NULL),
	(15421, 4, 329, NULL, NULL),
	(15422, 4, 330, NULL, NULL),
	(15423, 4, 331, NULL, NULL),
	(15424, 4, 332, NULL, NULL),
	(15425, 4, 335, NULL, NULL),
	(15426, 4, 337, NULL, NULL),
	(15427, 4, 341, NULL, NULL),
	(15441, 3, 133, NULL, NULL),
	(15442, 3, 134, NULL, NULL),
	(15443, 3, 135, NULL, NULL),
	(15444, 3, 218, NULL, NULL),
	(15445, 3, 328, NULL, NULL),
	(15446, 3, 329, NULL, NULL),
	(15447, 3, 330, NULL, NULL),
	(15448, 3, 331, NULL, NULL),
	(15449, 3, 332, NULL, NULL),
	(15450, 3, 335, NULL, NULL),
	(15451, 3, 337, NULL, NULL),
	(15452, 3, 341, NULL, NULL);
/*!40000 ALTER TABLE `admin_rule` ENABLE KEYS */;

-- Dumping structure for table qlbc-ttksbt.bao_cao_nghi_bu
CREATE TABLE IF NOT EXISTS `bao_cao_nghi_bu` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_users` int(11) unsigned DEFAULT NULL COMMENT 'id user xin được nghỉ bù',
  `id_users_duyet` int(11) unsigned DEFAULT NULL COMMENT 'id user duyệt cho phép nghỉ bù',
  `id_lich_upcode` int(11) unsigned DEFAULT NULL,
  `noi_dung_nghi_bu` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ds_tai_khoan_duoc_chia_se` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ds_don_vi_duoc_chia_se` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thoi_gian_yeu_cau_nghi_bu` float DEFAULT NULL,
  `thoi_gian_duoc_duyet_nghi_bu` float DEFAULT NULL,
  `ngay_gui_yeu_cau` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngay_duyet` datetime DEFAULT NULL,
  `state` int(11) NOT NULL DEFAULT '0' COMMENT '0 không được duyệt; 1 được duyệt; 2 đã nghỉ',
  PRIMARY KEY (`id`),
  KEY `FK_bao_cao_nghi_bu_users` (`id_users`),
  KEY `FK_bao_cao_nghi_bu_lich_upcode` (`id_lich_upcode`),
  KEY `FK_bao_cao_nghi_bu_users_2` (`id_users_duyet`),
  CONSTRAINT `FK_bao_cao_nghi_bu_lich_upcode` FOREIGN KEY (`id_lich_upcode`) REFERENCES `lich_upcode` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_bao_cao_nghi_bu_users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_bao_cao_nghi_bu_users_2` FOREIGN KEY (`id_users_duyet`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table qlbc-ttksbt.bao_cao_nghi_bu: ~0 rows (approximately)
/*!40000 ALTER TABLE `bao_cao_nghi_bu` DISABLE KEYS */;
/*!40000 ALTER TABLE `bao_cao_nghi_bu` ENABLE KEYS */;

-- Dumping structure for table qlbc-ttksbt.can_bo
CREATE TABLE IF NOT EXISTS `can_bo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) unsigned DEFAULT '1' COMMENT 'id user tạo, để sau này đổi thành id user để cho cán bộ đăng nhập được luôn',
  `ten_can_bo` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_dm_don_vi_yeu_cau` int(11) unsigned DEFAULT NULL,
  `di_dong` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_chuc_vu` int(11) unsigned NOT NULL,
  `dia_chi` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` int(11) DEFAULT '1' COMMENT '1 còn làm; 0 nghỉ làm',
  PRIMARY KEY (`id`),
  KEY `FK_can_bo_Users` (`id_user`),
  KEY `FK_can_bo_dm_don_vi_yeu_cau` (`id_dm_don_vi_yeu_cau`),
  KEY `FK_can_bo_dm_chuc_vu` (`id_chuc_vu`),
  CONSTRAINT `FK_can_bo_Users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_can_bo_dm_chuc_vu` FOREIGN KEY (`id_chuc_vu`) REFERENCES `dm_chuc_vu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_can_bo_dm_don_vi_yeu_cau` FOREIGN KEY (`id_dm_don_vi_yeu_cau`) REFERENCES `dm_don_vi_yeu_cau` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table qlbc-ttksbt.can_bo: ~10 rows (approximately)
/*!40000 ALTER TABLE `can_bo` DISABLE KEYS */;
/*!40000 ALTER TABLE `can_bo` ENABLE KEYS */;

-- Dumping structure for table qlbc-ttksbt.chi_tiet_phan_cong
CREATE TABLE IF NOT EXISTS `chi_tiet_phan_cong` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_phan_cong` int(11) unsigned NOT NULL DEFAULT '1',
  `id_dm_don_vi_yeu_cau` int(11) unsigned NOT NULL DEFAULT '1',
  `tu_ngay` date DEFAULT NULL,
  `den_ngay` date DEFAULT NULL,
  `ghi_chu` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `FK_chi_tiet_phan_cong_phan_cong` (`id_phan_cong`),
  KEY `FK_chi_tiet_phan_cong_dm_don_vi_yeu_cau` (`id_dm_don_vi_yeu_cau`),
  CONSTRAINT `FK_chi_tiet_phan_cong_dm_don_vi_yeu_cau` FOREIGN KEY (`id_dm_don_vi_yeu_cau`) REFERENCES `dm_don_vi_yeu_cau` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_chi_tiet_phan_cong_phan_cong` FOREIGN KEY (`id_phan_cong`) REFERENCES `phan_cong` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table qlbc-ttksbt.chi_tiet_phan_cong: ~0 rows (approximately)
/*!40000 ALTER TABLE `chi_tiet_phan_cong` DISABLE KEYS */;
/*!40000 ALTER TABLE `chi_tiet_phan_cong` ENABLE KEYS */;

-- Dumping structure for table qlbc-ttksbt.chi_tiet_upcode
CREATE TABLE IF NOT EXISTS `chi_tiet_upcode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_lich_upcode` int(11) unsigned NOT NULL,
  `id_users` int(11) unsigned NOT NULL COMMENT 'id user tham gia upcode',
  `id_dm_loi` int(11) unsigned NOT NULL,
  `tinh_trang` int(11) NOT NULL DEFAULT '1' COMMENT '0: không hoàn thành; 1: hoàn thành; 2 lỗi cũ; 3 lỗi mới',
  `bat_dau` datetime DEFAULT NULL,
  `ket_thuc` datetime DEFAULT NULL,
  `ghi_chu` varchar(250) COLLATE utf8_unicode_ci DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `FK_chi_tiet_upcode_lich_upcode` (`id_lich_upcode`),
  KEY `FK_chi_tiet_upcode_users` (`id_users`),
  KEY `FK_chi_tiet_upcode_dm_loi` (`id_dm_loi`),
  CONSTRAINT `FK_chi_tiet_upcode_dm_loi` FOREIGN KEY (`id_dm_loi`) REFERENCES `dm_loi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_chi_tiet_upcode_lich_upcode` FOREIGN KEY (`id_lich_upcode`) REFERENCES `lich_upcode` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_chi_tiet_upcode_users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table qlbc-ttksbt.chi_tiet_upcode: ~3 rows (approximately)
/*!40000 ALTER TABLE `chi_tiet_upcode` DISABLE KEYS */;
/*!40000 ALTER TABLE `chi_tiet_upcode` ENABLE KEYS */;

-- Dumping structure for table qlbc-ttksbt.chi_tiet_users_tham_gia_upcode
CREATE TABLE IF NOT EXISTS `chi_tiet_users_tham_gia_upcode` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_users` int(11) unsigned NOT NULL COMMENT 'user tham gia upcode',
  `id_lich_upcode` int(11) unsigned NOT NULL,
  `ghi_chu` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `state` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_chi_tiet_users_tham_gia_upcode_users` (`id_users`),
  KEY `FK_chi_tiet_users_tham_gia_upcode_lich_upcode` (`id_lich_upcode`),
  CONSTRAINT `FK_chi_tiet_users_tham_gia_upcode_lich_upcode` FOREIGN KEY (`id_lich_upcode`) REFERENCES `lich_upcode` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_chi_tiet_users_tham_gia_upcode_users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table qlbc-ttksbt.chi_tiet_users_tham_gia_upcode: ~0 rows (approximately)
/*!40000 ALTER TABLE `chi_tiet_users_tham_gia_upcode` DISABLE KEYS */;
/*!40000 ALTER TABLE `chi_tiet_users_tham_gia_upcode` ENABLE KEYS */;

-- Dumping structure for table qlbc-ttksbt.dm_chuc_vu
CREATE TABLE IF NOT EXISTS `dm_chuc_vu` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ten_chuc_vu` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` int(11) DEFAULT '1' COMMENT '0 nghỉ sử dụng; 1 còn sử dụng',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table qlbc-ttksbt.dm_chuc_vu: ~11 rows (approximately)
/*!40000 ALTER TABLE `dm_chuc_vu` DISABLE KEYS */;
INSERT INTO `dm_chuc_vu` (`id`, `ten_chuc_vu`, `state`) VALUES
	(1, 'Chuyên viên IT', 1),
	(2, 'Chuyên viên', 1),
	(3, 'Giám đốc', 1),
	(4, 'Phó Giám đốc', 1),
	(5, 'Trưởng phòng', 1),
	(6, 'Phó Trưởng phòng', 1),
	(7, 'Lãnh đạo', 1),
	(8, 'Nhân viên', 1),
	(9, 'Chủ tịch', 1),
	(10, 'Phó Chủ tịch', 1),
	(11, 'Cán bộ', 1);
/*!40000 ALTER TABLE `dm_chuc_vu` ENABLE KEYS */;

-- Dumping structure for table qlbc-ttksbt.dm_don_vi_yeu_cau
CREATE TABLE IF NOT EXISTS `dm_don_vi_yeu_cau` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_users` int(11) unsigned NOT NULL DEFAULT '1' COMMENT 'id user tạo',
  `ten_don_vi` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent` int(11) unsigned DEFAULT NULL,
  `state` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `FK_dm_don_vi_yeu_cau_users` (`id_users`),
  KEY `FK_dm_don_vi_yeu_cau_dm_don_vi_yeu_cau` (`parent`),
  CONSTRAINT `FK_dm_don_vi_yeu_cau_dm_don_vi_yeu_cau` FOREIGN KEY (`parent`) REFERENCES `dm_don_vi_yeu_cau` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_dm_don_vi_yeu_cau_users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table qlbc-ttksbt.dm_don_vi_yeu_cau: ~0 rows (approximately)
/*!40000 ALTER TABLE `dm_don_vi_yeu_cau` DISABLE KEYS */;
/*!40000 ALTER TABLE `dm_don_vi_yeu_cau` ENABLE KEYS */;

-- Dumping structure for table qlbc-ttksbt.dm_link_quan_tri
CREATE TABLE IF NOT EXISTS `dm_link_quan_tri` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_users` int(11) unsigned DEFAULT NULL,
  `id_loai_danh_muc` int(11) unsigned DEFAULT NULL,
  `link` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ten_link` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mo_ta` longtext COLLATE utf8_unicode_ci,
  `ds_tai_khoan_duoc_chia_se` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ds_don_vi_duoc_chia_se` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `FK_dm_link_admin_users` (`id_users`),
  KEY `FK_dm_link_quan_tri_loai_danh_muc` (`id_loai_danh_muc`),
  CONSTRAINT `FK_dm_link_admin_users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_dm_link_quan_tri_loai_danh_muc` FOREIGN KEY (`id_loai_danh_muc`) REFERENCES `loai_danh_muc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table qlbc-ttksbt.dm_link_quan_tri: ~3 rows (approximately)
/*!40000 ALTER TABLE `dm_link_quan_tri` DISABLE KEYS */;
INSERT INTO `dm_link_quan_tri` (`id`, `id_users`, `id_loai_danh_muc`, `link`, `ten_link`, `mo_ta`, `ds_tai_khoan_duoc_chia_se`, `ds_don_vi_duoc_chia_se`, `state`) VALUES
	(4, 1, 1, '12', 'Thanh 12', 'Thanh 1112', NULL, '1;5;', 1),
	(5, 1, 14, '1', 'Thanh 1', 'Thanh 111', NULL, '1;5;', 1),
	(6, 1, 15, '1', 'Thanh 1', 'Thanh 111', NULL, '1;5;', 1);
/*!40000 ALTER TABLE `dm_link_quan_tri` ENABLE KEYS */;

-- Dumping structure for table qlbc-ttksbt.dm_loi
CREATE TABLE IF NOT EXISTS `dm_loi` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(11) unsigned NOT NULL DEFAULT '0' COMMENT 'user tạo',
  `ds_don_vi_duoc_chia_se` varchar(250) COLLATE utf8_unicode_ci DEFAULT '0' COMMENT '-1: public và toan đơn vị; 0: không chia sẽ với ai; còn lại là id_don_vi được chia sẽ',
  `ds_tai_khoan_duoc_chia_se` varchar(250) COLLATE utf8_unicode_ci DEFAULT '0',
  `ten_dm_loi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `link_video_loi` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'module hoặc chức năng thì link video lỗi sẽ là link chức năng',
  `mo_ta` longtext COLLATE utf8_unicode_ci,
  `ma_yeu_cau` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `yeu_cau` longtext COLLATE utf8_unicode_ci,
  `hinh_anh` longtext COLLATE utf8_unicode_ci,
  `file` longtext COLLATE utf8_unicode_ci,
  `cach_khac_phuc` longtext COLLATE utf8_unicode_ci COMMENT 'Nhập vào để ae khác xem',
  `link_video_cach_khac_phuc` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_huong_xu_ly` int(11) unsigned NOT NULL DEFAULT '1' COMMENT '1 đơn vị tự xử lý; 2...; Module hoặc chức năng thì giá trị bằng 2',
  `id_loai_danh_muc` int(11) unsigned NOT NULL DEFAULT '1' COMMENT 'là loại dịch vụ như his, igate...',
  `loai` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'LỖI' COMMENT '1: là loại lỗi hoặc 2: module để test hoặc 3: chức năng để test;',
  `state` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `FK_dm_loi_users` (`id_user`),
  KEY `FK_dm_loi_phan_mem` (`id_loai_danh_muc`),
  KEY `FK_dm_loi_huong_xu_ly` (`id_huong_xu_ly`),
  CONSTRAINT `FK_dm_loi_huong_xu_ly` FOREIGN KEY (`id_huong_xu_ly`) REFERENCES `huong_xu_ly` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_dm_loi_phan_mem` FOREIGN KEY (`id_loai_danh_muc`) REFERENCES `loai_danh_muc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_dm_loi_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table qlbc-ttksbt.dm_loi: ~4 rows (approximately)
/*!40000 ALTER TABLE `dm_loi` DISABLE KEYS */;
INSERT INTO `dm_loi` (`id`, `id_user`, `ds_don_vi_duoc_chia_se`, `ds_tai_khoan_duoc_chia_se`, `ten_dm_loi`, `link_video_loi`, `mo_ta`, `ma_yeu_cau`, `yeu_cau`, `hinh_anh`, `file`, `cach_khac_phuc`, `link_video_cach_khac_phuc`, `id_huong_xu_ly`, `id_loai_danh_muc`, `loai`, `state`) VALUES
	(35, 1, NULL, NULL, 'Thanh', NULL, '<h1 style="text-indent: -6px; text-align: center;"><span style="font-size: 16pt;"><font face="Times New Roman"><b>LỊCH SỬ THAY ĐỔI</b></font></span>&nbsp;</h1>\n\n\n                              <table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="700" style="border: none;">\n                               <tbody><tr>\n                                <td width="43" style="width:32.05pt;border:solid windowtext 1.0pt;mso-border-alt:\n                                solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" align="center" style="margin-left:9.0pt;text-align:center;\n                                text-indent:-4.5pt"><b><font face="Times New Roman">ID<o:p></o:p></font></b></p>\n                                </td>\n                                <td width="90" style="width:67.85pt;border:solid windowtext 1.0pt;border-left:\n                                none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\n                                padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" align="center" style="margin-left:9.0pt;text-align:center;\n                                text-indent:-4.5pt"><b><font face="Times New Roman">Phiên bản<o:p></o:p></font></b></p>\n                                </td>\n                                <td width="138" style="width:103.5pt;border:solid windowtext 1.0pt;border-left:\n                                none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\n                                padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" align="center" style="margin-left:9.0pt;text-align:center;\n                                text-indent:-4.5pt"><b><font face="Times New Roman">Người thực hiện<o:p></o:p></font></b></p>\n                                </td>\n                                <td width="150" style="width:112.5pt;border:solid windowtext 1.0pt;border-left:\n                                none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\n                                padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" align="center" style="margin-left:9.0pt;text-align:center;\n                                text-indent:-4.5pt"><b><font face="Times New Roman">Người phê duyệt<o:p></o:p></font></b></p>\n                                </td>\n                                <td width="126" style="width:94.5pt;border:solid windowtext 1.0pt;border-left:\n                                none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\n                                padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" align="center" style="margin-left:9.0pt;text-align:center;\n                                text-indent:-4.5pt"><b><font face="Times New Roman">Ngày hiệu lực<o:p></o:p></font></b></p>\n                                </td>\n                                <td width="176" style="width:131.7pt;border:solid windowtext 1.0pt;border-left:\n                                none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\n                                padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" align="center" style="margin-left:9.0pt;text-align:center;\n                                text-indent:-4.5pt"><b><font face="Times New Roman">Nội dung thay đổi<o:p></o:p></font></b></p>\n                                </td>\n                               </tr>\n                               <tr style="mso-yfti-irow:1;mso-yfti-lastrow:yes;height:23.35pt">\n                                <td width="43" style="width:32.05pt;border:solid windowtext 1.0pt;border-top:\n                                none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\n                                padding:0in 5.4pt 0in 5.4pt;height:23.35pt">\n                                <p class="MsoNormal" align="center" style="margin-left:9.0pt;text-align:center;\n                                text-indent:-4.5pt"><span style="font-size:11.0pt;mso-bidi-font-size:12.0pt"><font face="Times New Roman">1<o:p></o:p></font></span></p>\n                                </td>\n                                <td width="90" style="width:67.85pt;border-top:none;border-left:none;\n                                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\n                                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\n                                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:23.35pt">\n                                <p class="MsoNormal" align="center" style="margin-left:9.0pt;text-align:center;\n                                text-indent:-4.5pt"><span style="font-size:11.0pt;mso-bidi-font-size:12.0pt"><font face="Times New Roman">V1.0<o:p></o:p></font></span></p>\n                                </td>\n                                <td width="138" style="width:103.5pt;border-top:none;border-left:none;\n                                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\n                                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\n                                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:23.35pt">\n                                <p class="MsoNormal" align="center" style="margin-left:9.0pt;text-align:center;\n                                text-indent:-4.5pt"><span style="font-size:11.0pt;mso-bidi-font-size:12.0pt"><o:p><font face="Times New Roman">&nbsp;</font></o:p></span></p>\n                                </td>\n                                <td width="150" style="width:112.5pt;border-top:none;border-left:none;\n                                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\n                                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\n                                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:23.35pt">\n                                <p class="MsoNormal" align="center" style="margin-left:9.0pt;text-align:center;\n                                text-indent:-4.5pt"><span style="font-size:11.0pt;mso-bidi-font-size:12.0pt"><o:p><font face="Times New Roman">&nbsp;</font></o:p></span></p>\n                                </td>\n                                <td width="126" style="width:94.5pt;border-top:none;border-left:none;\n                                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\n                                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\n                                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:23.35pt">\n                                <p class="MsoNormal" align="center" style="margin-left:9.0pt;text-align:center;\n                                text-indent:-4.5pt"><span style="font-size:11.0pt;mso-bidi-font-size:12.0pt"><o:p><font face="Times New Roman">&nbsp;</font></o:p></span></p>\n                                </td>\n                                <td width="176" style="width:131.7pt;border-top:none;border-left:none;\n                                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\n                                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\n                                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:23.35pt">\n                                <p class="MsoNormal"><span style="font-size:11.0pt;mso-bidi-font-size:12.0pt"><font face="Times New Roman">&nbsp;Chỉnh sửa chức năng<o:p></o:p></font></span></p>\n                                <p class="MsoNormal"><span style="font-size:11.0pt;mso-bidi-font-size:12.0pt"><o:p><font face="Times New Roman">&nbsp;</font></o:p></span></p>\n                                </td>\n                               </tr>\n                              </tbody></table>\n\n                              <h1 style="text-indent: -6px; text-align: left;"><span style="font-size: 16pt;"><font face="Times New Roman"><b>1. Chức năng cụ thể</b></font></span>&nbsp;</h1>\n                              <table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="border: none;" width="700">\n                               <tbody><tr>\n                                <td width="51" valign="top" style="width:38.0pt;border:solid windowtext 1.0pt;\n                                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" align="center" style="margin-top:6.0pt;margin-right:0in;\n                                margin-bottom:6.0pt;margin-left:9.0pt;text-align:center;text-indent:-4.5pt"><b><font face="Times New Roman">STT<o:p></o:p></font></b></p>\n                                </td>\n                                <td width="117" valign="top" style="width:87.75pt;border:solid windowtext 1.0pt;\n                                border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:\n                                solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" align="center" style="margin-top:6.0pt;margin-right:0in;\n                                margin-bottom:6.0pt;margin-left:9.0pt;text-align:center;text-indent:-4.5pt"><b><font face="Times New Roman">Mã chức năng<o:p></o:p></font></b></p>\n                                </td>\n                                <td width="273" valign="top" style="width:204.65pt;border:solid windowtext 1.0pt;\n                                border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:\n                                solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" align="center" style="margin-top:6.0pt;margin-right:0in;\n                                margin-bottom:6.0pt;margin-left:9.0pt;text-align:center;text-indent:-4.5pt"><b><font face="Times New Roman">Tên chức năng<o:p></o:p></font></b></p>\n                                </td>\n                                <td width="153" valign="top" style="width:114.5pt;border:solid windowtext 1.0pt;\n                                border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:\n                                solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" align="center" style="margin-top:6.0pt;margin-right:0in;\n                                margin-bottom:6.0pt;margin-left:9.0pt;text-align:center;text-indent:-4.5pt"><b><font face="Times New Roman">Đối tượng liên quan<o:p></o:p></font></b></p>\n                                </td>\n                                <td width="74" valign="top" style="width:55.75pt;border:solid windowtext 1.0pt;\n                                border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:\n                                solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" align="center" style="margin-top:6.0pt;margin-right:0in;\n                                margin-bottom:6.0pt;margin-left:9.0pt;text-align:center;text-indent:-4.5pt"><b><font face="Times New Roman">Mức độ ưu tiên<o:p></o:p></font></b></p>\n                                </td>\n                               </tr>\n                               <tr>\n                                <td width="51" valign="top" style="width:38.0pt;border:solid windowtext 1.0pt;\n                                border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\n                                padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" align="center" style="margin-top:6.0pt;margin-right:0in;\n                                margin-bottom:6.0pt;margin-left:9.0pt;text-align:center;text-indent:-4.5pt"><font face="Times New Roman">1<o:p></o:p></font></p>\n                                </td>\n                                <td width="117" valign="top" style="width:87.75pt;border-top:none;border-left:\n                                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\n                                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\n                                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" style="margin-top:6.0pt;margin-right:0in;margin-bottom:\n                                6.0pt;margin-left:0in"><o:p><font face="Times New Roman">&nbsp;</font></o:p></p>\n                                </td>\n                                <td width="273" valign="top" style="width:204.65pt;border-top:none;border-left:\n                                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\n                                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\n                                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>\n                                </td>\n                                <td width="153" valign="top" style="width:114.5pt;border-top:none;border-left:\n                                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\n                                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\n                                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" style="margin-top:6.0pt;margin-right:0in;margin-bottom:\n                                6.0pt;margin-left:0in"><font face="Times New Roman">Nhân&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; viên<span lang="FR"><o:p></o:p></span></font></p>\n                                </td>\n                                <td width="74" valign="top" style="width:55.75pt;border-top:none;border-left:\n                                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\n                                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\n                                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" style="margin-top:6.0pt;margin-right:0in;margin-bottom:\n                                6.0pt;margin-left:9.0pt;text-indent:-4.5pt"><font face="Times New Roman">Trung bình<o:p></o:p></font></p>\n                                </td>\n                               </tr>\n                              </tbody></table>\n                              <h1 style="text-indent: -6px; text-align: left;"><span style="font-size: 16pt;"><font face="Times New Roman"><b>2. Đối tượng người dùng của hệ thống</b></font></span>&nbsp;</h1>\n\n\n                              <table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="700" style="border: none;">\n                               <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:21.75pt">\n                                <td width="45" rowspan="2" valign="top" style="width:33.75pt;border:solid windowtext 1.0pt;\n                                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.75pt">\n                                <p class="MsoNormal" align="center" style="margin-top:6.0pt;margin-right:0in;\n                                margin-bottom:6.0pt;margin-left:9.0pt;text-align:center;text-indent:-4.5pt"><b><font face="Times New Roman">TT<o:p></o:p></font></b></p>\n                                </td>\n                                <td width="130" rowspan="2" valign="top" style="width:97.65pt;border:solid windowtext 1.0pt;\n                                border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:\n                                solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.75pt">\n                                <p class="MsoNormal" align="center" style="margin-top:6.0pt;margin-right:0in;\n                                margin-bottom:6.0pt;margin-left:9.0pt;text-align:center;text-indent:-4.5pt"><b><font face="Times New Roman">Tên đối tượng<o:p></o:p></font></b></p>\n                                </td>\n                                <td width="154" rowspan="2" valign="top" style="width:115.55pt;border:solid windowtext 1.0pt;\n                                border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:\n                                solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.75pt">\n                                <p class="MsoNormal" align="center" style="margin-top:6.0pt;margin-right:0in;\n                                margin-bottom:6.0pt;margin-left:9.0pt;text-align:center;text-indent:-4.5pt"><b><font face="Times New Roman">Mô tả<o:p></o:p></font></b></p>\n                                </td>\n                                <td width="239" colspan="2" valign="top" style="width:179.4pt;border:solid windowtext 1.0pt;\n                                border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:\n                                solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.75pt">\n                                <p class="MsoNormal" align="center" style="margin-top:6.0pt;margin-right:0in;\n                                margin-bottom:6.0pt;margin-left:9.0pt;text-align:center;text-indent:-4.5pt"><b><font face="Times New Roman">Tương tác với hệ&nbsp; thống<o:p></o:p></font></b></p>\n                                </td>\n                                <td width="123" rowspan="2" valign="top" style="width:92.25pt;border:solid windowtext 1.0pt;\n                                border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:\n                                solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.75pt">\n                                <p class="MsoNormal" align="center" style="margin-top:6.0pt;margin-right:0in;\n                                margin-bottom:6.0pt;margin-left:9.0pt;text-align:center;text-indent:-4.5pt"><b><font face="Times New Roman">Lợi ích mong đợi<o:p></o:p></font></b></p>\n                                </td>\n                               </tr>\n                               <tr style="mso-yfti-irow:1;height:21.1pt">\n                                <td width="128" valign="top" style="width:95.95pt;border-top:none;border-left:\n                                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\n                                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\n                                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.1pt">\n                                <p class="MsoNormal" align="center" style="margin-top:6.0pt;margin-right:0in;\n                                margin-bottom:6.0pt;margin-left:9.0pt;text-align:center;text-indent:-4.5pt"><b><font face="Times New Roman">Vào<o:p></o:p></font></b></p>\n                                </td>\n                                <td width="111" valign="top" style="width:83.45pt;border-top:none;border-left:\n                                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\n                                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\n                                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:21.1pt">\n                                <p class="MsoNormal" align="center" style="margin-top:6.0pt;margin-right:0in;\n                                margin-bottom:6.0pt;margin-left:9.0pt;text-align:center;text-indent:-4.5pt"><b><font face="Times New Roman">Ra<o:p></o:p></font></b></p>\n                                </td>\n                               </tr>\n                               <tr>\n                                <td width="45" valign="top" style="width:33.75pt;border:solid windowtext 1.0pt;\n                                border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\n                                padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" align="center" style="margin-top:6.0pt;margin-right:0in;\n                                margin-bottom:6.0pt;margin-left:9.0pt;text-align:center;text-indent:-4.5pt"><font face="Times New Roman">1<o:p></o:p></font></p>\n                                </td>\n                                <td width="130" valign="top" style="width:97.65pt;border-top:none;border-left:\n                                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\n                                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\n                                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" align="center" style="margin-top:6.0pt;margin-right:0in;\n                                margin-bottom:6.0pt;margin-left:9.0pt;text-align:center;text-indent:-4.5pt"><font face="Times New Roman">Nhân\n                                viên<o:p></o:p></font></p>\n                                </td>\n                                <td width="154" valign="top" style="width:115.55pt;border-top:none;border-left:\n                                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\n                                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\n                                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal"><br></p>\n                                </td>\n                                <td width="128" valign="top" style="width:95.95pt;border-top:none;border-left:\n                                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\n                                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\n                                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" style="margin-top:6.0pt;margin-right:0in;margin-bottom:\n                                6.0pt;margin-left:9.0pt;text-indent:-4.5pt"><o:p><font face="Times New Roman">&nbsp;</font></o:p></p>\n                                </td>\n                                <td width="111" valign="top" style="width:83.45pt;border-top:none;border-left:\n                                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\n                                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\n                                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" style="margin-top:6.0pt;margin-right:0in;margin-bottom:\n                                6.0pt;margin-left:9.0pt;text-indent:-4.5pt"><o:p><font face="Times New Roman">&nbsp;</font></o:p></p>\n                                </td>\n                                <td width="123" valign="top" style="width:92.25pt;border-top:none;border-left:\n                                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\n                                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\n                                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" style="margin-top:6.0pt;margin-right:0in;margin-bottom:\n                                6.0pt;margin-left:9.0pt;text-indent:-4.5pt"><o:p><font face="Times New Roman">&nbsp;</font></o:p></p>\n                                </td>\n                               </tr>\n                              </tbody></table>\n\n                              <h1 style="text-indent: -6px; text-align: left;"><span style="font-size: 16pt;"><font face="Times New Roman"><b>3. Quy trình nghiệp vu</b></font></span>&nbsp;</h1>\n\n                              <table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="700" style="border: none;">\n                               <tbody><tr>\n                                <td width="45" style="width:33.5pt;border:solid windowtext 1.0pt;mso-border-alt:\n                                solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" style="line-height:150%"><b><font face="Times New Roman">STT<o:p></o:p></font></b></p>\n                                </td>\n                                <td width="81" style="width:61.0pt;border:solid windowtext 1.0pt;border-left:\n                                none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\n                                padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" style="line-height:150%"><b><font face="Times New Roman">Mã bước<o:p></o:p></font></b></p>\n                                </td>\n                                <td width="162" style="width:121.5pt;border:solid windowtext 1.0pt;border-left:\n                                none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\n                                padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" style="line-height:150%"><b><span style="font-size:13.0pt;line-height:150%"><font face="Times New Roman">Tên bước<o:p></o:p></font></span></b></p>\n                                </td>\n                                <td width="378" style="width:283.5pt;border:solid windowtext 1.0pt;border-left:\n                                none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\n                                padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" style="line-height:150%"><b><font face="Times New Roman">Mô tả<o:p></o:p></font></b></p>\n                                </td>\n                               </tr>\n                               <tr>\n                                <td width="45" style="width:33.5pt;border:solid windowtext 1.0pt;border-top:\n                                none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\n                                padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" style="line-height:150%"><font face="Times New Roman">1<o:p></o:p></font></p>\n                                </td>\n                                <td width="81" style="width:61.0pt;border-top:none;border-left:none;border-bottom:\n                                solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:\n                                solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:\n                                solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal" style="line-height:150%"><font face="Times New Roman">B.01<o:p></o:p></font></p>\n                                </td>\n                                <td width="162" valign="top" style="width:121.5pt;border-top:none;border-left:\n                                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\n                                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\n                                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">\n                                <p class="MsoNormal"><br></p></td><td width="378" style="width:283.5pt;border-top:none;border-left:none;\n                                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\n                                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\n                                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt">\n                                </td>\n                               </tr>\n                               <tr style="mso-yfti-irow:2;height:20.7pt">\n                                <td width="45" style="width:33.5pt;border:solid windowtext 1.0pt;border-top:\n                                none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\n                                padding:0in 5.4pt 0in 5.4pt;height:20.7pt">\n                                <p class="MsoNormal" style="line-height:150%"><font face="Times New Roman">2<o:p></o:p></font></p>\n                                </td>\n                                <td width="81" style="width:61.0pt;border-top:none;border-left:none;border-bottom:\n                                solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:\n                                solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:\n                                solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:20.7pt">\n                                <p class="MsoNormal" style="line-height:150%"><font face="Times New Roman">B.02<o:p></o:p></font></p>\n                                </td>\n                                <td width="162" style="width:121.5pt;border-top:none;border-left:none;\n                                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\n                                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\n                                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:20.7pt">\n                                <p class="MsoNormal" style="line-height:150%"><br></p>\n                                </td>\n                                <td width="378" style="width:283.5pt;border-top:none;border-left:none;\n                                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\n                                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\n                                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:20.7pt">\n                                <p class="MsoNormal" style="line-height:150%"><br></p>\n                                </td>\n                               </tr>\n                               <tr style="mso-yfti-irow:3;mso-yfti-lastrow:yes;height:20.7pt">\n                                <td width="45" style="width:33.5pt;border:solid windowtext 1.0pt;border-top:\n                                none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\n                                padding:0in 5.4pt 0in 5.4pt;height:20.7pt">\n                                <p class="MsoNormal" style="line-height:150%"><font face="Times New Roman">3<o:p></o:p></font></p>\n                                </td>\n                                <td width="81" style="width:61.0pt;border-top:none;border-left:none;border-bottom:\n                                solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:\n                                solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:\n                                solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:20.7pt">\n                                <p class="MsoNormal" style="line-height:150%"><font face="Times New Roman">B.03<o:p></o:p></font></p>\n                                </td>\n                                <td width="162" style="width:121.5pt;border-top:none;border-left:none;\n                                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\n                                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\n                                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:20.7pt">\n                                <p class="MsoNormal" style="line-height:150%"><br></p></td><td width="378" style="width:283.5pt;border-top:none;border-left:none;\n                                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\n                                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\n                                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:20.7pt">\n                                </td>\n                               </tr>\n                              </tbody></table>\n                              <h1 style="text-indent: -6px; text-align: left;"><span style="font-size: 16pt;"><font face="Times New Roman"><b>4. Yêu cầu</b></font></span>&nbsp;</h1>', '360', NULL, NULL, NULL, '<table class="table table-bordered" style="width: 100%;"><tbody><tr><td width="100px" style="text-align: center;"><span style="font-weight: bolder;">Tên bước</span></td><td style="text-align: center;"><span style="font-weight: bolder;">Cách xử lý</span></td></tr><tr><td>Bước 1:&nbsp;</td><td><br></td></tr><tr><td>Bước 2:&nbsp;</td><td><br></td></tr><tr><td>Bước 3:&nbsp;</td><td><br></td></tr><tr><td>Bước 4:&nbsp;</td><td><br></td></tr></tbody></table>', NULL, 1, 14, 'LỖI', 1);
/*!40000 ALTER TABLE `dm_loi` ENABLE KEYS */;

-- Dumping structure for table qlbc-ttksbt.don_vi
CREATE TABLE IF NOT EXISTS `don_vi` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_users` int(11) unsigned NOT NULL DEFAULT '1' COMMENT 'id người tạo',
  `ten_don_vi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `co_dinh` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `di_dong` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent` int(11) unsigned DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `state` int(11) NOT NULL DEFAULT '1' COMMENT '0: không hoạt động; 1: hoạt động',
  PRIMARY KEY (`id`),
  KEY `FK_don_vi_don_vi` (`parent`),
  KEY `order` (`order`),
  KEY `FK_don_vi_users` (`id_users`),
  CONSTRAINT `FK_don_vi_don_vi` FOREIGN KEY (`parent`) REFERENCES `don_vi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table qlbc-ttksbt.don_vi: ~2 rows (approximately)
/*!40000 ALTER TABLE `don_vi` DISABLE KEYS */;
INSERT INTO `don_vi` (`id`, `id_users`, `ten_don_vi`, `dia_chi`, `email`, `co_dinh`, `di_dong`, `fax`, `parent`, `order`, `state`) VALUES
	(1, 1, 'VNPT Trà Vinh', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1),
	(8, 1, 'TTKS Bệnh Tật', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1);
/*!40000 ALTER TABLE `don_vi` ENABLE KEYS */;

-- Dumping structure for table qlbc-ttksbt.don_vi_tham_so_don_vi
CREATE TABLE IF NOT EXISTS `don_vi_tham_so_don_vi` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_don_vi` int(11) unsigned NOT NULL DEFAULT '1',
  `id_tham_so_don_vi` int(11) unsigned NOT NULL,
  `ngay_bat_dau` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngay_ket_thuc` datetime NOT NULL,
  `gia_tri_tham_so` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `FK_don_vi_tham_so_don_vi_tham_so_don_vi` (`id_tham_so_don_vi`),
  KEY `FK_don_vi_tham_so_don_vi_don_vi` (`id_don_vi`),
  CONSTRAINT `FK_don_vi_tham_so_don_vi_don_vi` FOREIGN KEY (`id_don_vi`) REFERENCES `don_vi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_don_vi_tham_so_don_vi_tham_so_don_vi` FOREIGN KEY (`id_tham_so_don_vi`) REFERENCES `tham_so_don_vi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table qlbc-ttksbt.don_vi_tham_so_don_vi: ~0 rows (approximately)
/*!40000 ALTER TABLE `don_vi_tham_so_don_vi` DISABLE KEYS */;
/*!40000 ALTER TABLE `don_vi_tham_so_don_vi` ENABLE KEYS */;

-- Dumping structure for table qlbc-ttksbt.huong_xu_ly
CREATE TABLE IF NOT EXISTS `huong_xu_ly` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_users` int(11) unsigned NOT NULL DEFAULT '1' COMMENT 'id người tạo',
  `ten_huong_xu_ly` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `FK_huong_xu_ly_users` (`id_users`),
  CONSTRAINT `FK_huong_xu_ly_users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table qlbc-ttksbt.huong_xu_ly: ~4 rows (approximately)
/*!40000 ALTER TABLE `huong_xu_ly` DISABLE KEYS */;
INSERT INTO `huong_xu_ly` (`id`, `id_users`, `ten_huong_xu_ly`, `state`) VALUES
	(1, 1, 'Đơn vị tự xử lý', 1),
	(2, 1, 'TTCNTT VNPT xử lý', 1),
	(3, 1, 'IT KV xử lý', 1),
	(4, 1, 'Trung tâm e.Gov hoặc e.Health xử lý', 1);
/*!40000 ALTER TABLE `huong_xu_ly` ENABLE KEYS */;

-- Dumping structure for table qlbc-ttksbt.lich_upcode
CREATE TABLE IF NOT EXISTS `lich_upcode` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_users` int(11) unsigned NOT NULL DEFAULT '1' COMMENT 'id người tạo',
  `id_loai_danh_muc` int(10) unsigned DEFAULT NULL,
  `ten_lich_upcode` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian_bat_dau_du_kien` datetime DEFAULT NULL,
  `thoi_gian_ket_thuc_du_kien` datetime DEFAULT NULL,
  `thoi_gian_bat_dau` datetime DEFAULT NULL,
  `thoi_gian_ket_thuc` datetime DEFAULT NULL COMMENT 'Có thời gian kết thúc là đã hoàn tất',
  `so_luong_nhan_su_tham_gia` int(11) NOT NULL DEFAULT '0',
  `state` int(11) NOT NULL DEFAULT '1' COMMENT '0 chưa hoàn thành, 1 hoàn thành',
  PRIMARY KEY (`id`),
  KEY `FK_lich_upcode_users` (`id_users`),
  KEY `FK_lich_upcode_loai_danh_muc` (`id_loai_danh_muc`),
  CONSTRAINT `FK_lich_upcode_loai_danh_muc` FOREIGN KEY (`id_loai_danh_muc`) REFERENCES `loai_danh_muc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_lich_upcode_users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table qlbc-ttksbt.lich_upcode: ~0 rows (approximately)
/*!40000 ALTER TABLE `lich_upcode` DISABLE KEYS */;
/*!40000 ALTER TABLE `lich_upcode` ENABLE KEYS */;

-- Dumping structure for table qlbc-ttksbt.loai_danh_muc
CREATE TABLE IF NOT EXISTS `loai_danh_muc` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_users` int(11) unsigned NOT NULL DEFAULT '1' COMMENT 'id người tạo',
  `ten_loai_danh_muc` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `FK_loai_danh_muc_loai_danh_muc` (`id_users`),
  CONSTRAINT `FK_loai_danh_muc_loai_danh_muc` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table qlbc-ttksbt.loai_danh_muc: ~5 rows (approximately)
/*!40000 ALTER TABLE `loai_danh_muc` DISABLE KEYS */;
INSERT INTO `loai_danh_muc` (`id`, `id_users`, `ten_loai_danh_muc`, `state`) VALUES
	(1, 1, 'VNPT iGate', 1),
	(14, 1, 'VNPT HIS', 1),
	(15, 1, 'VNPT iOffice', 1),
	(17, 1, 'vnPortal', 1),
	(18, 1, 'eCabinet', 1);
/*!40000 ALTER TABLE `loai_danh_muc` ENABLE KEYS */;

-- Dumping structure for table qlbc-ttksbt.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table qlbc-ttksbt.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('p.thanhit@gmail.com', '$2y$10$GeJq5nbaNzdeY8UqlCnDIOIh6uSHYw5iZcRhpKuPxDrBtqBT4qAG.', '2019-06-20 02:17:07');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table qlbc-ttksbt.phan_cong
CREATE TABLE IF NOT EXISTS `phan_cong` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_user_phan_cong` int(11) unsigned NOT NULL DEFAULT '1',
  `id_user` int(11) unsigned NOT NULL DEFAULT '1',
  `id_loai_danh_muc` int(11) unsigned NOT NULL DEFAULT '1',
  `tu_ngay` date DEFAULT NULL,
  `den_ngay` date DEFAULT NULL,
  `ghi_chu` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `FK_phan_cong_users` (`id_user_phan_cong`),
  KEY `FK_phan_cong_users_2` (`id_user`),
  KEY `FK_phan_cong_loai_danh_muc` (`id_loai_danh_muc`),
  CONSTRAINT `FK_phan_cong_loai_danh_muc` FOREIGN KEY (`id_loai_danh_muc`) REFERENCES `loai_danh_muc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_phan_cong_users` FOREIGN KEY (`id_user_phan_cong`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_phan_cong_users_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table qlbc-ttksbt.phan_cong: ~5 rows (approximately)
/*!40000 ALTER TABLE `phan_cong` DISABLE KEYS */;
/*!40000 ALTER TABLE `phan_cong` ENABLE KEYS */;

-- Dumping structure for table qlbc-ttksbt.qlbc_kiem_soat_benh_tat
CREATE TABLE IF NOT EXISTS `qlbc_kiem_soat_benh_tat` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ma_benh_nhan` varchar(50) DEFAULT NULL,
  `ten_benh_nhan` varchar(250) DEFAULT NULL,
  `dia_chi` varchar(250) DEFAULT NULL,
  `tuoi` datetime DEFAULT NULL,
  `gioi_tinh` int(2) DEFAULT '0',
  `ngay_dong_vat_can` datetime DEFAULT NULL,
  `muc_do_vet_thuong` int(2) DEFAULT '0',
  `cho` int(2) DEFAULT '0',
  `meo` int(2) DEFAULT '0',
  `doi` int(2) DEFAULT '0',
  `dv_khac` varchar(250) DEFAULT NULL,
  `dau_mat_co` int(2) DEFAULT '0',
  `than` int(2) DEFAULT '0',
  `tay` int(2) DEFAULT '0',
  `chan` int(2) DEFAULT '0',
  `binh_thuong` int(2) DEFAULT '0',
  `om` int(2) DEFAULT '0',
  `mat_tich` int(2) DEFAULT '0',
  `chay_rong` int(2) DEFAULT '0',
  `len_con_dai` int(2) DEFAULT '0',
  `mui_mot` datetime DEFAULT NULL,
  `mui_hai` datetime DEFAULT NULL,
  `mui_ba` datetime DEFAULT NULL,
  `mui_bon` datetime DEFAULT NULL,
  `mui_nam` datetime DEFAULT NULL,
  `mui_mot_hai` datetime DEFAULT NULL,
  `mui_ba_bon` datetime DEFAULT NULL,
  `mui_nam_sau` datetime DEFAULT NULL,
  `mui_bay_tam` datetime DEFAULT NULL,
  `lo_vac_xin_mui_mot` varchar(250) DEFAULT NULL,
  `lo_vac_xin_mui_hai` varchar(250) DEFAULT NULL,
  `lo_vac_xin_mui_ba` varchar(250) DEFAULT NULL,
  `lo_vac_xin_mui_bon` varchar(250) DEFAULT NULL,
  `lo_vac_xin_mui_nam` varchar(250) DEFAULT NULL,
  `lo_vac_xin_mui_mot_hai` varchar(250) DEFAULT NULL,
  `lo_vac_xin_mui_ba_bon` varchar(250) DEFAULT NULL,
  `lo_vac_xin_mui_nam_sau` varchar(250) DEFAULT NULL,
  `lo_vac_xin_mui_bay_tam` varchar(250) DEFAULT NULL,
  `dau` int(2) DEFAULT '0',
  `quang_do` int(2) DEFAULT '0',
  `ngay_tiem` datetime DEFAULT NULL,
  `tu_mau` int(2) DEFAULT '0',
  `phu_ne_sot_cung` int(2) DEFAULT '0',
  `sot` int(2) DEFAULT '0',
  `kho_chiu` int(2) DEFAULT '0',
  `ngua` int(2) DEFAULT '0',
  `man_do` int(2) DEFAULT '0',
  `dau_co_khop` int(2) DEFAULT '0',
  `roi_loan_tieu_hoa` int(2) DEFAULT '0',
  `pu_khac` varchar(250) DEFAULT NULL,
  `ten_huyet_thanh` varchar(250) DEFAULT NULL,
  `tiem_tai_vet_thuong` float DEFAULT '0',
  `tiem_bap` float DEFAULT '0',
  `di_ung` int(2) DEFAULT '0',
  `soc_phan_ve` int(2) DEFAULT '0',
  `khac_ghi_ro` varchar(250) DEFAULT NULL,
  `ghi_chu` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table qlbc-ttksbt.qlbc_kiem_soat_benh_tat: ~12 rows (approximately)
/*!40000 ALTER TABLE `qlbc_kiem_soat_benh_tat` DISABLE KEYS */;
INSERT INTO `qlbc_kiem_soat_benh_tat` (`id`, `ma_benh_nhan`, `ten_benh_nhan`, `dia_chi`, `tuoi`, `gioi_tinh`, `ngay_dong_vat_can`, `muc_do_vet_thuong`, `cho`, `meo`, `doi`, `dv_khac`, `dau_mat_co`, `than`, `tay`, `chan`, `binh_thuong`, `om`, `mat_tich`, `chay_rong`, `len_con_dai`, `mui_mot`, `mui_hai`, `mui_ba`, `mui_bon`, `mui_nam`, `mui_mot_hai`, `mui_ba_bon`, `mui_nam_sau`, `mui_bay_tam`, `lo_vac_xin_mui_mot`, `lo_vac_xin_mui_hai`, `lo_vac_xin_mui_ba`, `lo_vac_xin_mui_bon`, `lo_vac_xin_mui_nam`, `lo_vac_xin_mui_mot_hai`, `lo_vac_xin_mui_ba_bon`, `lo_vac_xin_mui_nam_sau`, `lo_vac_xin_mui_bay_tam`, `dau`, `quang_do`, `ngay_tiem`, `tu_mau`, `phu_ne_sot_cung`, `sot`, `kho_chiu`, `ngua`, `man_do`, `dau_co_khop`, `roi_loan_tieu_hoa`, `pu_khac`, `ten_huyet_thanh`, `tiem_tai_vet_thuong`, `tiem_bap`, `di_ung`, `soc_phan_ve`, `khac_ghi_ro`, `ghi_chu`) VALUES
	(12, '20032410142012', 'Phan Văn Thanh', 'Cầu Kè', '1992-03-24 00:00:00', 1, '2020-03-24 00:00:00', 1, 1, 1, 1, 'Người', 1, 1, 1, 1, 1, 1, 1, 1, 1, '2020-03-01 00:00:00', '2020-03-02 00:00:00', '2020-03-03 00:00:00', '2020-03-04 00:00:00', '2020-03-05 00:00:00', '2020-03-06 00:00:00', '2020-03-07 00:00:00', '2020-03-08 00:00:00', '2020-03-09 00:00:00', '1', '2', '3', '4', '5', '12', '34', '56', '78', 1, 1, '2020-03-10 00:00:00', 1, 1, 1, 1, 1, 1, 1, 1, NULL, '1', 1, 1, 1, 1, 'Khác ghi rõ', 'Ghi chú'),
	(16, '20032410303716', 'Nguyễn Chí Thanh', 'Cầu Kè', '1945-03-22 00:00:00', 1, '2020-03-24 00:00:00', 1, 1, 1, 1, 'Người', 1, 1, 1, 1, 1, 1, 1, 1, 1, '2020-03-01 00:00:00', '2020-03-02 00:00:00', '2020-03-03 00:00:00', '2020-03-04 00:00:00', '2020-03-05 00:00:00', '2020-03-06 00:00:00', '2020-03-07 00:00:00', '2020-03-08 00:00:00', '2020-03-09 00:00:00', '1', '2', '3', '4', '5', '12', '34', '56', '78', 1, 1, '2020-03-10 00:00:00', 1, 1, 1, 1, 1, 1, 1, 1, NULL, '1', 1, 1, 1, 1, 'Khác ghi rõ', 'Ghi chú'),
	(17, '20032410392317', 'Trương Thái Bảo Ngọc', 'Cầu Kè', '2004-03-22 00:00:00', 1, '2020-03-24 00:00:00', 1, 1, 1, 1, 'Người', 1, 1, 1, 1, 1, 1, 1, 1, 1, '2020-03-01 00:00:00', '2020-03-02 00:00:00', '2020-03-03 00:00:00', '2020-03-04 00:00:00', '2020-03-05 00:00:00', '2020-03-06 00:00:00', '2020-03-07 00:00:00', '2020-03-08 00:00:00', '2020-03-09 00:00:00', '1', '2', '3', '4', '5', '12', '34', '56', '78', 1, 1, '2020-03-10 00:00:00', 1, 1, 1, 1, 1, 1, 1, 1, NULL, '1', 1, 1, 1, 1, 'Khác ghi rõ', 'Ghi chú'),
	(18, '20032410394318', 'Bùi Văn Tín', 'Cầu Kè', '1996-03-22 00:00:00', 1, '2020-03-01 00:00:00', 1, 1, 1, 1, 'Người', 1, 1, 1, 1, 1, 1, 1, 1, 1, '2020-03-01 00:00:00', '2020-03-02 00:00:00', '2020-03-03 00:00:00', '2020-03-04 00:00:00', '2020-03-05 00:00:00', '2020-03-06 00:00:00', '2020-03-07 00:00:00', '2020-03-08 00:00:00', '2020-03-09 00:00:00', '1', '2', '3', '4', '5', '12', '34', '56', '78', 1, 1, '2020-03-10 00:00:00', 1, 1, 1, 1, 1, 1, 1, 1, NULL, '1', 1, 1, 1, 1, 'Khác ghi rõ', 'Ghi chú'),
	(19, '20032410401319', 'Nguyễn Thanh Tùng', 'Cầu Kè', '1996-03-22 00:00:00', 1, '2020-03-01 00:00:00', 2, 1, 1, 1, 'Người', 1, 1, 1, 1, 1, 1, 1, 1, 1, '2020-03-01 00:00:00', '2020-03-02 00:00:00', '2020-03-03 00:00:00', '2020-03-04 00:00:00', '2020-03-05 00:00:00', '2020-03-06 00:00:00', '2020-03-07 00:00:00', '2020-03-08 00:00:00', '2020-03-09 00:00:00', '1', '2', '3', '4', '5', '12', '34', '56', '78', 1, 1, '2020-03-10 00:00:00', 1, 1, 1, 1, 1, 1, 1, 1, NULL, '1', 1, 1, 1, 1, 'Khác ghi rõ', 'Ghi chú'),
	(20, '20032410402220', 'Nguyễn Văn Tín', 'Cầu Kè', '1996-03-22 00:00:00', 1, '2020-03-01 00:00:00', 3, 1, 1, 1, 'Người', 1, 1, 1, 1, 1, 1, 1, 1, 1, '2020-03-01 00:00:00', '2020-03-02 00:00:00', '2020-03-03 00:00:00', '2020-03-04 00:00:00', '2020-03-05 00:00:00', '2020-03-06 00:00:00', '2020-03-07 00:00:00', '2020-03-08 00:00:00', '2020-03-09 00:00:00', '1', '2', '3', '4', '5', '12', '34', '56', '78', 1, 1, '2020-03-10 00:00:00', 1, 1, 1, 1, 1, 1, 1, 1, NULL, '1', 1, 1, 1, 1, 'Khác ghi rõ', 'Ghi chú'),
	(21, '20032410403921', 'Võ Duy Hưng', 'Cầu Kè', '1996-03-22 00:00:00', 1, '2020-03-01 00:00:00', 3, 1, 1, 1, 'Người', 1, 1, 1, 1, 1, 1, 1, 1, 1, '2020-03-01 00:00:00', '2020-03-02 00:00:00', '2020-03-03 00:00:00', '2020-03-04 00:00:00', '2020-03-05 00:00:00', '2020-03-06 00:00:00', '2020-03-07 00:00:00', '2020-03-08 00:00:00', '2020-03-09 00:00:00', '1', '2', '3', '4', '5', '12', '34', '56', '78', 1, 1, '2020-03-10 00:00:00', 1, 1, 1, 1, 1, 1, 1, 1, NULL, '1', 1, 1, 1, 1, 'Khác ghi rõ', 'Ghi chú'),
	(22, '20032410410822', 'Nguyễn Thị Kim Xa', 'Cầu Kè', '1996-03-22 00:00:00', 0, '2020-03-01 00:00:00', 3, 1, 1, 1, 'Người', 1, 1, 1, 1, 1, 1, 1, 1, 1, '2020-03-01 00:00:00', '2020-03-02 00:00:00', '2020-03-03 00:00:00', '2020-03-04 00:00:00', '2020-03-05 00:00:00', '2020-03-06 00:00:00', '2020-03-07 00:00:00', '2020-03-08 00:00:00', '2020-03-09 00:00:00', '1', '2', '3', '4', '5', '12', '34', '56', '78', 1, 1, '2020-03-10 00:00:00', 1, 1, 1, 1, 1, 1, 1, 1, NULL, '1', 1, 1, 1, 1, 'Khác ghi rõ', 'Ghi chú'),
	(23, '20032410414023', 'Trần Thị Thanh Mỹ', 'Cầu Kè', '2016-03-22 00:00:00', 0, '2020-03-01 00:00:00', 3, 1, 1, 1, 'Người', 1, 1, 1, 1, 1, 1, 1, 1, 1, '2020-03-01 00:00:00', '2020-03-02 00:00:00', '2020-03-03 00:00:00', '2020-03-04 00:00:00', '2020-03-05 00:00:00', '2020-03-06 00:00:00', '2020-03-07 00:00:00', '2020-03-08 00:00:00', '2020-03-09 00:00:00', '1', '2', '3', '4', '5', '12', '34', '56', '78', 1, 1, '2020-03-10 00:00:00', 1, 1, 1, 1, 1, 1, 1, 1, NULL, '1', 1, 1, 1, 1, 'Khác ghi rõ', 'Ghi chú'),
	(24, '20032410510724', 'Trần Quốc Việt', 'Cầu Kè', '2016-03-22 00:00:00', 1, '2020-03-01 00:00:00', 3, 1, 1, 1, 'Người', 1, 1, 1, 1, 1, 1, 1, 1, 1, '2020-03-01 00:00:00', '2020-03-02 00:00:00', '2020-03-03 00:00:00', '2020-03-04 00:00:00', '2020-03-05 00:00:00', '2020-03-06 00:00:00', '2020-03-07 00:00:00', '2020-03-08 00:00:00', '2020-03-09 00:00:00', '1', '2', '3', '4', '5', '12', '34', '56', '78', 1, 1, NULL, 1, 1, 1, 1, 1, 1, 1, 1, NULL, '1', 1, 1, 1, 1, 'Khác ghi rõ', 'Ghi chú'),
	(25, '20032410510724', 'Lê Quốc', 'Cầu Kè', '2020-02-22 00:00:00', 1, '2020-03-01 00:00:00', 3, 1, 1, 1, 'Người', 1, 1, 1, 1, 1, 1, 1, 1, 1, '2020-03-01 00:00:00', '2020-03-02 00:00:00', '2020-03-03 00:00:00', '2020-03-04 00:00:00', '2020-03-05 00:00:00', '2020-03-06 00:00:00', '2020-03-07 00:00:00', '2020-03-08 00:00:00', '2020-03-09 00:00:00', '1', '2', '3', '4', '5', '12', '34', '56', '78', 1, 1, NULL, 1, 1, 1, 1, 1, 1, 1, 1, NULL, '1', 1, 1, 1, 1, 'Khác ghi rõ', 'Ghi chú'),
	(26, '20032402373626', 'tesst', 't', '2020-03-01 00:00:00', 1, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL);
/*!40000 ALTER TABLE `qlbc_kiem_soat_benh_tat` ENABLE KEYS */;

-- Dumping structure for table qlbc-ttksbt.qlbc_ngay_kham
CREATE TABLE IF NOT EXISTS `qlbc_ngay_kham` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_benh_nhan` int(11) unsigned NOT NULL DEFAULT '1',
  `ngay_kham` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `la_ngay_tiep_nhan` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_qlbc_ngay_kham_qlbc_kiem_soat_benh_tat` (`id_benh_nhan`),
  CONSTRAINT `FK_qlbc_ngay_kham_qlbc_kiem_soat_benh_tat` FOREIGN KEY (`id_benh_nhan`) REFERENCES `qlbc_kiem_soat_benh_tat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- Dumping data for table qlbc-ttksbt.qlbc_ngay_kham: ~13 rows (approximately)
/*!40000 ALTER TABLE `qlbc_ngay_kham` DISABLE KEYS */;
INSERT INTO `qlbc_ngay_kham` (`id`, `id_benh_nhan`, `ngay_kham`, `la_ngay_tiep_nhan`) VALUES
	(12, 12, '2020-03-24 00:00:00', 0),
	(17, 16, '2020-03-23 00:00:00', 1),
	(18, 17, '2020-03-24 00:00:00', 1),
	(19, 18, '2020-03-24 00:00:00', 1),
	(20, 19, '2020-03-24 00:00:00', 1),
	(21, 20, '2020-03-24 00:00:00', 1),
	(22, 21, '2020-03-24 00:00:00', 1),
	(23, 22, '2020-03-24 00:00:00', 1),
	(24, 23, '2020-03-24 00:00:00', 1),
	(25, 24, '2020-03-24 00:00:00', 1),
	(26, 25, '2020-03-24 00:00:00', 1),
	(27, 12, '2020-03-23 00:00:00', 1),
	(28, 26, '2020-03-24 00:00:00', 1);
/*!40000 ALTER TABLE `qlbc_ngay_kham` ENABLE KEYS */;

-- Dumping structure for table qlbc-ttksbt.test
CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hinh` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table qlbc-ttksbt.test: ~0 rows (approximately)
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` (`id`, `hinh`) VALUES
	(1, NULL);
/*!40000 ALTER TABLE `test` ENABLE KEYS */;

-- Dumping structure for table qlbc-ttksbt.tham_so_don_vi
CREATE TABLE IF NOT EXISTS `tham_so_don_vi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_users` int(11) unsigned NOT NULL DEFAULT '1' COMMENT 'id người tạo',
  `ten_tham_so` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mo_ta` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gia_tri_mac_dinh` int(11) DEFAULT '1' COMMENT '0: không kích hoạt; 1: kích hoạt',
  `state` int(11) DEFAULT '1' COMMENT '0: ko hoạt động; 1: hoạt động',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table qlbc-ttksbt.tham_so_don_vi: ~0 rows (approximately)
/*!40000 ALTER TABLE `tham_so_don_vi` DISABLE KEYS */;
/*!40000 ALTER TABLE `tham_so_don_vi` ENABLE KEYS */;

-- Dumping structure for table qlbc-ttksbt.thong_tin_ho_tro
CREATE TABLE IF NOT EXISTS `thong_tin_ho_tro` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_dm_loi` int(11) unsigned NOT NULL COMMENT 'id lỗi đã hỗ trợ',
  `id_users` int(11) unsigned NOT NULL COMMENT 'id người hỗ trợ',
  `id_dm_don_vi_yeu_cau` int(11) unsigned NOT NULL COMMENT 'id đơn vị nhờ hỗ trợ',
  `so_lan_ho_tro` int(11) NOT NULL DEFAULT '1',
  `ngay_ho_tro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ghi_chu` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `FK_thong_tin_ho_tro_dm_loi` (`id_dm_loi`),
  KEY `FK_thong_tin_ho_tro_users` (`id_users`),
  KEY `FK_thong_tin_ho_tro_dm_don_vi_yeu_cau` (`id_dm_don_vi_yeu_cau`),
  CONSTRAINT `FK_thong_tin_ho_tro_dm_don_vi_yeu_cau` FOREIGN KEY (`id_dm_don_vi_yeu_cau`) REFERENCES `dm_don_vi_yeu_cau` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_thong_tin_ho_tro_dm_loi` FOREIGN KEY (`id_dm_loi`) REFERENCES `dm_loi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_thong_tin_ho_tro_users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table qlbc-ttksbt.thong_tin_ho_tro: ~0 rows (approximately)
/*!40000 ALTER TABLE `thong_tin_ho_tro` DISABLE KEYS */;
/*!40000 ALTER TABLE `thong_tin_ho_tro` ENABLE KEYS */;

-- Dumping structure for table qlbc-ttksbt.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) unsigned NOT NULL DEFAULT '1',
  `id_don_vi` int(11) unsigned NOT NULL DEFAULT '1' COMMENT 'id đơn vị cha có level = 0',
  `hinh_anh` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/user.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `di_dong` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  KEY `FK_users_don_vi` (`id_don_vi`),
  CONSTRAINT `FK_users_don_vi` FOREIGN KEY (`id_don_vi`) REFERENCES `don_vi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `admin_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table qlbc-ttksbt.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `id_don_vi`, `hinh_anh`, `remember_token`, `created_at`, `updated_at`, `di_dong`, `state`) VALUES
	(1, 'admin', 'admin', '$2y$10$uf2ufWj0EwpkoHGSm2gHleiwrP323bg4oU7aeJSjNtqkGdtqnUD7S', 1, 8, '/user.png', 'LVSza3rPaU7qgJ2P2E3xcbAz3w1WUK0RmTLilp0RhBjoUkPP2Yfn8Z1Y5yNQ', NULL, '2019-12-02 09:59:52', '0941138484', 1),
	(32, 'quantri', 'quantri', '$2y$10$/wXLV//n052kP9I13XLGZOcqhHxIh7fBhu3w7wPdW3eJHigqKy/mS', 4, 8, '/user.png', 'Cy63lIIkGQ0Ye0B5GS4tRYNeIodr3LdQ6r43kES6tFnKVPQtRT4ctRWFI52G', '2020-03-25 07:58:07', '2020-03-25 08:09:54', '0941910034', 1),
	(33, 'Nhân viên', 'nhanvien', '$2y$10$WzmPGTWDlxMjcYDuTX6V9eDxUiPcsy78sIvQ3L/Aj.MyD5PdJ2/KW', 3, 8, '/user.png', NULL, '2020-03-25 08:03:18', '2020-03-25 08:09:44', '0941910034', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table qlbc-ttksbt.users_don_vi
CREATE TABLE IF NOT EXISTS `users_don_vi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_don_vi` int(11) unsigned NOT NULL,
  `id_users` int(11) unsigned NOT NULL,
  `ngay_bat_dau_cong_tac` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngay_ket_thuc_cong_tac` datetime DEFAULT NULL,
  `state` int(11) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `FK_users_don_vi_users` (`id_users`),
  KEY `FK_users_don_vi_don_vi` (`id_don_vi`),
  CONSTRAINT `FK_users_don_vi_don_vi` FOREIGN KEY (`id_don_vi`) REFERENCES `don_vi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_users_don_vi_users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table qlbc-ttksbt.users_don_vi: ~20 rows (approximately)
/*!40000 ALTER TABLE `users_don_vi` DISABLE KEYS */;
INSERT INTO `users_don_vi` (`id`, `id_don_vi`, `id_users`, `ngay_bat_dau_cong_tac`, `ngay_ket_thuc_cong_tac`, `state`) VALUES
	(1, 8, 1, '2019-07-28 16:07:32', NULL, 1),
	(2, 8, 32, '2020-03-25 07:58:58', NULL, 1),
	(3, 8, 33, '2020-03-25 08:06:55', NULL, 1);
/*!40000 ALTER TABLE `users_don_vi` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
