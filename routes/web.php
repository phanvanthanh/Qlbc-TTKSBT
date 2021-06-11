<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Auth::routes();

Route::get('/',['as'=>'home','uses'=>'HomeController@home']);
Route::get('/chi-tiet-dm-loi/{id}',['as'=>'chiTietDmLoi','uses'=>'HomeController@chiTietDmLoi']);

Route::post('/load-dm-loi-public',['as'=>'loadDmLoiPublic','uses'=>'HomeController@loadDmLoiPublic']); // có thể bỏ bạn này trong view wellcome


// phải đăng nhập mới vào được các link bên 
Route::group(['middleware' => 'auth'], function () {

	// kiểm tra có quyền truy cập không nếu không thì không cho truy cập
	Route::group(['middleware' => 'check-role'], function () {
		

		// trang chủ khi mới đăng nhập xong	
		// nếu có quyền truy cập url thì cho truy cập
		Route::group(['prefix'=>'admin'],function(){
			// trang cập nhật tất cả các action có trong project
			Route::resource('resource', 'AdminResourceRefullController');
			// tạo nhóm quyền
			Route::get('/tao-nhom-quyen',['as'=>'taoNhomQuyen','uses'=>'AdminRoleController@taoNhomQuyenView']);
			Route::post('/tao-nhom-quyen',['as'=>'taoNhomQuyen','uses'=>'AdminRoleController@taoNhomQuyenPost']);
			Route::delete('/xoa-nhom-quyen/{id}',['as'=>'xoaNhomQuyen','uses'=>'AdminRoleController@xoaNhomQuyen']);
			Route::post('/sua-nhom-quyen',['as'=>'suaNhomQuyen','uses'=>'AdminRoleController@suaNhomQuyen']);
			Route::post('/get-thong-tin-nhom-quyen',['as'=>'getThongTinNhomQuyen','uses'=>'AdminRoleController@getThongTinNhomQuyen']);	

			// Phân quyền
			Route::get('/phan-quyen',['as'=>'phanQuyen','uses'=>'AdminRuleController@phanQuyenGet']);
			Route::post('/phan-quyen',['as'=>'phanQuyen','uses'=>'AdminRuleController@phanQuyenPost']);
			Route::post('/danh-sach-quyen',['as'=>'danhSachQuyen','uses'=>'AdminRuleController@danhSachQuyenPost']);


			

			// Nhân viên
			Route::get('/nhan-vien',['as'=>'nhanVien','uses'=>'NhanVienController@NhanVien']);
			Route::post('/tao-nhan-vien',['as'=>'taoNhanVien','uses'=>'NhanVienController@TaoNhanVien']);
			Route::post('/sua-nhan-vien',['as'=>'suaNhanVien','uses'=>'NhanVienController@suaNhanVien']);			
			Route::delete('/xoa-nhan-vien/{id}',['as'=>'xoaNhanVien','uses'=>'NhanVienController@XoaNhanVien']);
			Route::post('/get-thong-tin-nhan-vien',['as'=>'getThongTinNhanVien','uses'=>'NhanVienController@getThongTinNhanVien']);		

			// Đơn Vị
			Route::get('/don-vi',['as'=>'donVi','uses'=>'DonViController@donVi']);
			Route::post('/them-don-vi',['as'=>'themDonVi','uses'=>'DonViController@themDonVi']);
			Route::post('/sua-don-vi',['as'=>'suaDonVi','uses'=>'DonViController@suaDonVi']);			
			Route::delete('/xoa-don-vi/{id}',['as'=>'xoaDonVi','uses'=>'DonViController@xoaDonVi']);
			Route::post('/get-thong-tin-don-vi',['as'=>'getThongTinDonVi','uses'=>'DonViController@getThongTinDonVi']);	
			

			// Danh mục lỗi
			Route::get('/danh-muc-loi',['as'=>'danhMucLoi','uses'=>'DanhMucLoiController@danhMucLoi']);
			Route::post('/them-danh-muc-loi',['as'=>'themDanhMucLoi','uses'=>'DanhMucLoiController@themDanhMucLoi']);
			Route::post('/sua-danh-muc-loi',['as'=>'suaDanhMucLoi','uses'=>'DanhMucLoiController@suaDanhMucLoi']);			
			Route::delete('/xoa-danh-muc-loi/{id}',['as'=>'xoaDanhMucLoi','uses'=>'DanhMucLoiController@xoaDanhMucLoi']);
			Route::post('/get-thong-tin-danh-muc-loi',['as'=>'getThongTinDanhMucLoi','uses'=>'DanhMucLoiController@getThongTinDanhMucLoi']);
			Route::get('/urd-danh-muc-loi-word/{id}',['as'=>'urdDanhMucLoiWord','uses'=>'DanhMucLoiController@urdDanhMucLoiWord']);
			Route::post('/get-danh-muc-loi-by-id',['as'=>'getDanhMucLoiById','uses'=>'DanhMucLoiController@getDanhMucLoiById']);


			Route::get('/danh-muc-module-chuc-nang',['as'=>'danhMucModuleChucNang','uses'=>'DanhMucLoiController@danhMucModuleChucNang']);
			Route::post('/them-danh-muc-module-chuc-nang',['as'=>'themDanhMucModuleChucNang','uses'=>'DanhMucLoiController@themDanhMucModuleChucNang']);
			Route::post('/sua-danh-muc-module-chuc-nang',['as'=>'suaDanhMucModuleChucNang','uses'=>'DanhMucLoiController@suaDanhMucModuleChucNang']);			
			Route::post('/xoa-danh-muc-module-chuc-nang',['as'=>'xoaDanhMucModuleChucNang','uses'=>'DanhMucLoiController@xoaDanhMucModuleChucNang']);
			Route::post('/get-danh-muc-module-chuc-nang-by-id',['as'=>'getDanhMucModuleChucNangById','uses'=>'DanhMucLoiController@getDanhMucModuleChucNangById']);
			Route::post('/load-danh-muc-module-chuc-nang',['as'=>'loadDanhMucModuleChucNang','uses'=>'DanhMucLoiController@loadDanhMucModuleChucNang']);






			// Báo cáo công tác hỗ trợ
			Route::get('/cong-tac-ho-tro',['as'=>'congTacHoTro','uses'=>'HoTroController@congTacHoTro']);
			Route::post('/get-danh-muc-loi-theo-loai-danh-muc',['as'=>'getDanhMucLoiTheoLoaiDanhMuc','uses'=>'HoTroController@getDanhMucLoiTheoLoaiDanhMuc']);
			Route::post('/get-danh-cong-tac-ho-tro',['as'=>'getCongTacHoTro','uses'=>'HoTroController@getCongTacHoTro']);
			Route::post('/them-thong-tin-ho-tro',['as'=>'themThongTinHoTro','uses'=>'HoTroController@themThongTinHoTro']);
			Route::get('/bao-cao-cong-tac-ho-tro-tuan-word&nam={nam}&tuan={tuan}&dv={dv}',['as'=>'baoCaoCongTacHoTroTuanWord','uses'=>'HoTroController@baoCaoCongTacHoTroTuanWord']);

			Route::post('/xoa-thong-tin-ho-tro',['as'=>'xoaThongTinHoTro','uses'=>'HoTroController@xoaThongTinHoTro']);
			Route::post('/get-tuan',['as'=>'getTuan','uses'=>'HoTroController@getTuan']);


			// Quản lý lịch upcode
			Route::get('/lich-upcode',['as'=>'lichUpcode','uses'=>'LichUpcodeController@lichUpcode']);
			Route::post('/tao-lich-upcode',['as'=>'taoLichUpcode','uses'=>'LichUpcodeController@taoLichUpcode']);
			Route::post('/sua-lich-upcode',['as'=>'suaLichUpcode','uses'=>'LichUpcodeController@suaLichUpcode']);
			Route::post('/xoa-lich-upcode',['as'=>'xoaLichUpcode','uses'=>'LichUpcodeController@xoaLichUpcode']);
			Route::post('/load-lich-upcode',['as'=>'loadLichUpcode','uses'=>'LichUpcodeController@loadLichUpcode']);
			Route::post('/get-lich-upcode-by-id',['as'=>'getLichUpcodeById','uses'=>'LichUpcodeController@getLichUpcodeById']);
			Route::post('/load-danh-muc-loi',['as'=>'loadDanhMucLoi','uses'=>'LichUpcodeController@loadDanhMucLoi']);
			
			Route::post('/load-ds-nhan-su-upcode',['as'=>'loadDsNhanSuUpcode','uses'=>'LichUpcodeController@loadDsNhanSuUpcode']);
			Route::post('/them-nhan-su-upcode',['as'=>'themNhanSuUpcode','uses'=>'LichUpcodeController@themNhanSuUpcode']);
			Route::post('/xoa-nhan-su-upcode',['as'=>'xoaNhanSuUpcode','uses'=>'LichUpcodeController@xoaNhanSuUpcode']);
			
			Route::post('/load-chi-tiet-upcode',['as'=>'loadChiTietUpcode','uses'=>'LichUpcodeController@loadChiTietUpcode']);
			Route::post('/them-chi-tiet-upcode',['as'=>'themChiTietUpcode','uses'=>'LichUpcodeController@themChiTietUpcode']);
			Route::post('/xoa-chi-tiet-upcode',['as'=>'xoaChiTietUpcode','uses'=>'LichUpcodeController@xoaChiTietUpcode']);
			Route::post('/sua-trang-thai-chi-tiet-upcode',['as'=>'suaTrangThaiChiTietUpcode','uses'=>'LichUpcodeController@suaTrangThaiChiTietUpcode']);

			Route::get('/lich-upcode-ca-nhan',['as'=>'lichUpcodeCaNhan','uses'=>'LichUpcodeController@lichUpcodeCaNhan']);
			Route::post('/load-lich-upcode-ca-nhan',['as'=>'loadLichUpcodeCaNhan','uses'=>'LichUpcodeController@loadLichUpcodeCaNhan']);
			Route::post('/load-chi-tiet-upcode-ca-nhan',['as'=>'loadChiTietUpcodeCaNhan','uses'=>'LichUpcodeController@loadChiTietUpcodeCaNhan']);
			Route::post('/them-chi-tiet-upcode-ca-nhan',['as'=>'themChiTietUpcodeCaNhan','uses'=>'LichUpcodeController@themChiTietUpcodeCaNhan']);

			Route::post('/load-chi-tiet-upcode-ca-nhan-by-id',['as'=>'loadChiTietUpcodeCaNhanById','uses'=>'LichUpcodeController@loadChiTietUpcodeCaNhanById']);
			Route::post('/sua-chi-tiet-upcode-ca-nhan-by-id',['as'=>'suaChiTietUpcodeCaNhanById','uses'=>'LichUpcodeController@suaChiTietUpcodeCaNhanById']);


				
			// phân công chăm sóc khách hàng (phan_cong và chi_tiet_phan_cong)
			Route::get('/bang-phan-cong',['as'=>'bangPhanCong','uses'=>'PhanCongController@bangPhanCong']);
			Route::post('/tao-bang-phan-cong',['as'=>'taoBangPhanCong','uses'=>'PhanCongController@taoBangPhanCong']);
			Route::post('/load-bang-phan-cong',['as'=>'loadBangPhanCong','uses'=>'PhanCongController@loadBangPhanCong']);
			Route::post('/get-bang-phan-cong-by-id',['as'=>'getBangPhanCongById','uses'=>'PhanCongController@getBangPhanCongById']);
			Route::post('/sua-bang-phan-cong',['as'=>'suaBangPhanCong','uses'=>'PhanCongController@suaBangPhanCong']);
			Route::post('/xoa-bang-phan-cong',['as'=>'xoaBangPhanCong','uses'=>'PhanCongController@xoaBangPhanCong']);

			Route::post('/load-chi-tiet-bang-phan-cong',['as'=>'loadChiTietBangPhanCong','uses'=>'PhanCongController@loadChiTietBangPhanCong']);
			Route::post('/them-chi-tiet-bang-phan-cong',['as'=>'themChiTietBangPhanCong','uses'=>'PhanCongController@themChiTietBangPhanCong']);
			Route::post('/xoa-chi-tiet-bang-phan-cong',['as'=>'xoaChiTietBangPhanCong','uses'=>'PhanCongController@xoaChiTietBangPhanCong']);

			
		




			// can_bo
			Route::get('/can-bo',['as'=>'canBo','uses'=>'CanBoController@canBo']);
			Route::post('/load-can-bo',['as'=>'loadCanBo','uses'=>'CanBoController@loadCanBo']);
			Route::post('/them-can-bo',['as'=>'themCanBo','uses'=>'CanBoController@themCanBo']);
			Route::post('/xoa-can-bo',['as'=>'xoaCanBo','uses'=>'CanBoController@xoaCanBo']);
			Route::post('/sua-can-bo',['as'=>'suaCanBo','uses'=>'CanBoController@suaCanBo']);
			Route::post('/get-can-bo-by-id',['as'=>'getCanBoById','uses'=>'CanBoController@getCanBoById']);
			
			// dm_don_vi_yeu_cau
			Route::get('/dm-don-vi-yeu-cau',['as'=>'dmDonViYeuCau','uses'=>'DmDonViYeuCauController@dmDonViYeuCau']);
			Route::post('/load-dm-don-vi-yeu-cau',['as'=>'loadDmDonViYeuCau','uses'=>'DmDonViYeuCauController@loadDmDonViYeuCau']);
			Route::post('/them-dm-don-vi-yeu-cau',['as'=>'themDmDonViYeuCau','uses'=>'DmDonViYeuCauController@themDmDonViYeuCau']);
			Route::post('/xoa-dm-don-vi-yeu-cau',['as'=>'xoaDmDonViYeuCau','uses'=>'DmDonViYeuCauController@xoaDmDonViYeuCau']);
			Route::post('/sua-dm-don-vi-yeu-cau',['as'=>'suaDmDonViYeuCau','uses'=>'DmDonViYeuCauController@suaDmDonViYeuCau']);
			Route::post('/get-dm-don-vi-yeu-cau-by-id',['as'=>'getDmDonViYeuCauById','uses'=>'DmDonViYeuCauController@getDmDonViYeuCauById']);


			// loai_danh_muc
			Route::get('/loai-danh-muc',['as'=>'loaiDanhMuc','uses'=>'LoaiDanhMucController@loaiDanhMuc']);
			Route::post('/load-loai-danh-muc',['as'=>'loadLoaiDanhMuc','uses'=>'LoaiDanhMucController@loadLoaiDanhMuc']);
			Route::post('/them-loai-danh-muc',['as'=>'themLoaiDanhMuc','uses'=>'LoaiDanhMucController@themLoaiDanhMuc']);
			Route::post('/xoa-loai-danh-muc',['as'=>'xoaLoaiDanhMuc','uses'=>'LoaiDanhMucController@xoaLoaiDanhMuc']);
			Route::post('/sua-loai-danh-muc',['as'=>'suaLoaiDanhMuc','uses'=>'LoaiDanhMucController@suaLoaiDanhMuc']);
			Route::post('/get-loai-danh-muc-by-id',['as'=>'getLoaiDanhMucById','uses'=>'LoaiDanhMucController@getLoaiDanhMucById']);

			// users_don_vi	(phân đơn vị cho user) ************************
			Route::get('/phan-don-vi-cho-can-bo',['as'=>'phanDonViChoCanBo','uses'=>'PhanCongCanBoController@phanDonViChoCanBo']);
			Route::post('/load-user-chua-phan-don-vi',['as'=>'loadUserChuaPhanDonVi','uses'=>'PhanCongCanBoController@loadUserChuaPhanDonVi']);
			Route::post('/load-dm-don-vi-can-phan',['as'=>'loadDmDonViCanPhan','uses'=>'PhanCongCanBoController@loadDmDonViCanPhan']);
			Route::post('/cap-nhat-phan-don-vi-cho-can-bo',['as'=>'capNhatPhanDonViChoCanBo','uses'=>'PhanCongCanBoController@capNhatPhanDonViChoCanBo']);
			


			// Báo bù
			Route::get('/bao-cao-nghi-bu',['as'=>'baoCaoNghiBu','uses'=>'BaoBuController@baoCaoNghiBu']);
			Route::post('/load-bao-cao-nghi-bu',['as'=>'loadBaoCaoNghiBu','uses'=>'BaoBuController@loadBaoCaoNghiBu']);
			Route::post('/them-bao-cao-nghi-bu',['as'=>'themBaoCaoNghiBu','uses'=>'BaoBuController@themBaoCaoNghiBu']);
			Route::post('/sua-bao-cao-nghi-bu',['as'=>'suaBaoCaoNghiBu','uses'=>'BaoBuController@suaBaoCaoNghiBu']);
			Route::post('/xoa-bao-cao-nghi-bu',['as'=>'xoaBaoCaoNghiBu','uses'=>'BaoBuController@xoaBaoCaoNghiBu']);
			Route::get('/duyet-bao-cao-nghi-bu',['as'=>'duyetBaoCaoNghiBu','uses'=>'BaoBuController@duyetBaoCaoNghiBu']);
			Route::post('/get-bao-cao-nghi-bu-by-id',['as'=>'getBaoCaoNghiBuById','uses'=>'BaoBuController@getBaoCaoNghiBuById']);

			Route::post('/duyet-bao-cao-nghi-bu-by-id',['as'=>'duyetBaoCaoNghiBuById','uses'=>'BaoBuController@duyetBaoCaoNghiBuById']);
			Route::post('/load-duyet-bao-cao-nghi-bu',['as'=>'loadDuyetBaoCaoNghiBu','uses'=>'BaoBuController@loadDuyetBaoCaoNghiBu']);




			// Báo bù
			Route::get('/dm-link-quan-tri',['as'=>'dmLinkQuanTri','uses'=>'DmLinkQuanTriController@dmLinkQuanTri']);
			Route::post('/load-dm-link-quan-tri',['as'=>'loadDmLinkQuanTri','uses'=>'DmLinkQuanTriController@loadDmLinkQuanTri']);
			Route::post('/them-dm-link-quan-tri',['as'=>'themDmLinkQuanTri','uses'=>'DmLinkQuanTriController@themDmLinkQuanTri']);
			Route::post('/sua-dm-link-quan-tri',['as'=>'suaDmLinkQuanTri','uses'=>'DmLinkQuanTriController@suaDmLinkQuanTri']);
			Route::post('/xoa-dm-link-quan-tri',['as'=>'xoaDmLinkQuanTri','uses'=>'DmLinkQuanTriController@xoaDmLinkQuanTri']);
			Route::post('/get-dm-link-quan-tri-by-id',['as'=>'getDmLinkQuanTriById','uses'=>'DmLinkQuanTriController@getDmLinkQuanTriById']);

	
			
			// Cập nhật mẫu báo cáo tuần
			// Thêm chức năng show lịch upcode cho nhân viên cập nhật những thông tin vào


			// Thêm nút xóa trong quản lý lịch biểu
			// sửa phân công chưa làm
			// set lịch chăm sóc khách hàng
			// dm_chuc_vu (đã thêm trực tiếp trên db)
			// tham_so_don_vi (chưa sử dụng đến)
			// don_vi_tham_so_don_vi (chưa sử dụng đến)
			// huong_xu_ly (đúng ra là dm_huong_xu_ly) (đã thêm trực tiếp trên db)

			//Route QLBC 

			Route::get('/nhap-lieu',['as'=>'nhapLieu','uses'=>'QlbcController@nhapLieu']);
			Route::post('/luu-benh-nhan',['as'=>'luuBenhNhan','uses'=>'QlbcController@luuBenhNhan']);
			Route::get('/danh-sach-benh-nhan/{tuNgay?}/{denNgay?}',['as'=>'danhSachBenhNhan','uses'=>'QlbcController@danhSachBenhNhan']);
			Route::post('/load-benh-nhan',['as'=>'loadBenhNhan','uses'=>'QlbcController@loadBenhNhan']);
			Route::post('/xoa-benh-nhan',['as'=>'xoaBenhNhan','uses'=>'QlbcController@xoaBenhNhan']);
			Route::post('/sua-benh-nhan',['as'=>'suaBenhNhan','uses'=>'QlbcController@suaBenhNhan']);

			Route::post('/cap-nhat-benh-nhan',['as'=>'capNhatBenhNhan','uses'=>'QlbcController@capNhatBenhNhan']);
			
			Route::get('/xuat-excel/{tuNgay?}/{denNgay?}',['as'=>'xuatExcel','uses'=>'QlbcController@xuatExcel']);

			
		});
	});	
});
	
 