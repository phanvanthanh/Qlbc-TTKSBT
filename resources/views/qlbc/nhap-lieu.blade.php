@extends('layouts.template.index')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="row">
                <div class="col-lg-6"><h5>TRUNG TÂM KIỂM SOÁT BỆNH TẬT TỈNH TRÀ VINH</h5></div>  
                <div class="col-lg-6 float-right text-right d-add-form" style="cursor: pointer;"><i class="mdi mdi-library-plus"></i><span class="text-danger">(*)</span></div>              
            </div>               
        </div>
    </div>       
</div>
<form  class="frm-benh-nhan" id="frm_benh_nhan" name="frm_benh_nhan">
    {{ csrf_field() }}
</form>
<div class="row add-form">    
    <div class="col-lg-12">
        <div class="card-box">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <b><h5>Thông tin bệnh nhân</h5></b><br>
                    </div>
                    <div class="col-xs-12 col-md-6 text-right" >
                         <label for="btn-luu" style="color: white;">Lưu lại<span class="text-danger"></span></label>
                        <button type="button" class="btn btn-success waves-effect waves-light btn-luu"><i class="mdi mdi-library-plus"></i>Lưu lại</button> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-3">
                        <label for="ten_benh_nhan">Tên bệnh nhân <span class="text-danger">*</span></label>
                        <input class="form-control ten-benh-nhan" type="Text" name="ten_benh_nhan" id="ten_benh_nhan" value="">
                        <label for="ngay_kham">Ngày tiếp nhận<span class="text-danger">*</span></label>
                        <input class="form-control ngay-kham" type="Date" name="ngay_kham" id="ngay_kham" value="<?php echo date("Y-m-d"); ?>">
                        
                      
                        

                    </div>

                    <div class="col-xs-12 col-md-3">
                        <div class="form-group">
                            <label for="gioi_tinh">Giới tính<span class="text-danger">*</span></label>
                            <select class="form-control select2 gioi-tinh" name="gioi_tinh" id="gioi_tinh">
                                <option value="">---Chọn giới tính---</option>
                                <option value="1">Nam</option>
                                <option value="0">Nữ</option>                              
                            </select>
                        <label for="tuoi">Ngày sinh<span class="text-danger">*</span></label>
                        <input class="form-control tuoi" type="Date" name="tuoi" id="tuoi" value="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <label for="dia_chi">Địa chỉ<span class="text-danger">*</span></label>
                        <input class="form-control dia-chi" type="Text" name="dia_chi" id="dia_chi" value="">
                        <div class="form-group">
                            <label for="muc_do_vet_thuong">Mức độ vết thương<span class="text-danger"></span></label>
                            <select class="form-control select2 muc-do-vet-thuong" name="muc_do_vet_thuong" id="muc_do_vet_thuong">
                            <option value="">---Chọn mức độ---</option>
                            <option value="1">Mức độ I</option>
                            <option value="2">Mức độ II</option>
                            <option value="3">Mức độ III</option>
                            </select>     
                        </div>
                             
                    </div>
                    <div class="col-xs-12 col-md-3">
                            <label for="ngay_dong_vat_can">Ngày bị động vật cắn/tiếp xúc</label>
                            <input class="form-control ngay-dong-vat-can" type="Date" name="ngay_dong_vat_can" id="ngay_dong_vat_can" value=""> 
                            <label for="ghi_chu">Ghi chú<span class="text-danger"></span></label><br>     
                            <input class="form-control ghi-chu" type="Text" name="ghi_chu" id="ghi_chu" value=""> 
                    </div>        
                </div>
            
        </div> <!-- end card-box -->

        <div class="card-box" style="margin-bottom: 1px;">
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <b><h5>Loại động vật phơi nhiễm</h5></b><br>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <b><h5>Số lượng vết thương theo vị trí cắn</h5></b><br>
                    </div>

                    <div class="col-xs-12 col-md-4">
                        <b><h5>Tình trạng con vật lúc cắn</h5></b><br>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        
                        <input class="checkbox cho" type="checkbox" name="cho" id="cho" value="">
                        <label for="cho">Chó<span class="text-danger"></span></label><br>               
                        <input class="checkbox meo" type="checkbox" name="meo" id="meo" value="">
                        <label for="meo">Mèo<span class="text-danger"></span></label><br>
                        <input class="checkbox doi" type="checkbox" name="doi" id="doi" value="">  
                        <label for="dia_chi">Dơi<span class="text-danger"></span></label><br><br>          
                        <label for="dv_khac">Động vật khác<span class="text-danger"></span></label><br>
                        <input class="form-control dv-khac" type="Text" name="dv_khac" id="dv_khac" value=""><br>
                       
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="form-group"> 
                            <label for="dau_mat_co">Đầu, mặt, cổ<span class="text-danger"></span></label>  
                            <input class="form-control dau-mat-co" type="Number" name="dau_mat_co" id="dau_mat_co" value="">     
                            <label for="than">Thân<span class="text-danger"></span></label><br> 
                            <input class="form-control than" type="Number" name="than" id="than" value="">     
                            <label for="tay">Tay<span class="text-danger"></span></label><br>
                            <input class="form-control tay" type="Number" name="tay" id="tay" value="">
                            <label for="chan">Chân<span class="text-danger"></span></label>
                            <input class="form-control chan" type="Number" name="chan" id="chan" value="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="form-group">
                            <input class="checkbox binh-thuong" type="checkbox" name="binh_thuong" id="binh_thuong" value="">
                            <label for="binh_thuong">Bình thường<span class="text-danger"></span></label><br>
                            <input class="checkbox om" type="checkbox" name="om" id="om">         
                            <label for="om">Ốm<span class="text-danger"></span></label><br>     
                            <input class="checkbox mat-tich" type="checkbox" name="mat_tich" id="mat_tich" value="">
                            <label for="mat_tich">Mất tích<span class="text-danger"></span></label><br> 
                            <input class="checkbox chay-rong" type="checkbox" name="chay_rong" id="chay_rong" value="">            
                            <label for="chay_rong">Chạy rong<span class="text-danger"></span></label><br>
                            <input class="checkbox len-con-dai" type="checkbox" name="len_con_dai" id="len_con_dai">        
                            <label for="len_con_dai">Lên cơn dại<span class="text-danger"></span></label>          
                        </div>
                    </div>
                    
                </div>
            
        </div>
             
        <div class="card-box" style="margin-bottom: 1px;">
            <p class="text-muted font-14 m-b-20"></p>
           
                <div class="row">
                    <div class="col-xs-12 col-md-3">
                        <b><h5>Phác đồ tiêm bắp</h5></b>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        
                    </div>

                    <div class="col-xs-12 col-md-3">
                        <b><h5>Phác đồ tiêm da</h5></b>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <label for="mui_mot">Mũi 1 - Ngày 0 <span class="text-danger"></span></label>
                        <input class="form-control lo-vac-xin-mui-mot" type="Text" name="lo_vac_xin_mui_mot" id="lo_vac_xin_mui_mot" placeholder="Tên/Lô vắc xin mũi 1" value="" style="margin-bottom: 5px;">
                        <input class="form-control mui-mot" type="Date" name="mui_mot" id="mui_mot" value="">
                        <label for="mui_hai">Mũi 2 - Ngày 3 <span class="text-danger"></span></label>
                        <input class="form-control lo-vac-xin-mui-hai" type="Text" name="lo_vac_xin_mui_hai" id="lo_vac_xin_mui_hai" placeholder="Tên/Lô vắc xin mũi 2" value="" style="margin-bottom: 5px;">
                        <input class="form-control mui-hai" type="Date" name="mui_hai" id="mui_hai" value="">
                        
                    </div>

                    <div class="col-xs-12 col-md-3">
                        <label for="mui_ba">Mũi 3 - Ngày 7 <span class="text-danger"></span></label>
                        <input class="form-control lo-vac-xin-mui-ba" type="Text" name="lo_vac_xin_mui_ba" id="lo_vac_xin_mui_ba" placeholder="Tên/Lô vắc xin mũi 3" value="" style="margin-bottom: 5px;">
                        <input class="form-control mui-ba" type="Date" name="mui_ba" id="mui_ba" value="">
                        <label for="mui_bon">Mũi 4 - Ngày 14 <span class="text-danger"></span></label>
                        <input class="form-control lo-vac-xin-mui-bon" type="Text" name="lo_vac_xin_mui_bon" id="lo_vac_xin_mui_bon" placeholder="Tên/Lô vắc xin mũi 4" value="" style="margin-bottom: 5px;">
                         <input class="form-control mui-bon" type="Date" name="mui_bon" id="mui_bon" value="">
                        <label for="mui_nam">Mũi 5 - Ngày 28 <span class="text-danger"></span></label>
                        <input class="form-control lo-vac-xin-mui-nam" type="Text" name="lo_vac_xin_mui_nam" id="lo_vac_xin_mui_nam" placeholder="Tên/Lô vắc xin mũi 5" value="" style="margin-bottom: 5px;">
                         <input class="form-control mui-nam" type="Date" name="mui_nam" id="mui_nam" value="">
                    </div>

                    <div class="col-xs-12 col-md-3">
                        <label for="mui_mot_hai">Mũi 1,2 - Ngày 0 <span class="text-danger"></span></label>
                        <input class="form-control lo-vac-xin-mui-mot-hai" type="Text" name="lo_vac_xin_mui_mot_hai" id="lo_vac_xin_mui_mot_hai" placeholder="Tên/Lô vắc xin mũi 1,2" value="" style="margin-bottom: 5px;">
                        <input class="form-control mui-mot-hai" type="Date" name="mui_mot_hai" id="mui_mot_hai" value="">
                        <label for="mui_ba_bon">Mũi 3,4 - Ngày 3 <span class="text-danger"></span></label>
                        <input class="form-control lo-vac-xin-mui-ba-bon" type="Text" name="lo_vac_xin_mui_ba_bon" id="lo_vac_xin_mui_ba_bon" placeholder="Tên/Lô vắc xin mũi 3,4" value="" style="margin-bottom: 5px;">
                         <input class="form-control mui-ba-bon" type="Date" name="mui_ba_bon" id="mui_ba_bon" value="">
                    </div>                  
                    <div class="col-xs-12 col-md-3">
                        <label for="mui_nam_sau">Mũi 5,6 - Ngày 7 <span class="text-danger"></span></label>
                        <input class="form-control lo-vac-xin-mui-nam-sau" type="Text" name="lo_vac_xin_mui_nam_sau" id="lo_vac_xin_mui_nam_sau" placeholder="Tên/Lô vắc xin mũi 5,6" value="" style="margin-bottom: 5px;">
                        <input class="form-control mui-nam-sau" type="Date" name="mui_nam_sau" id="mui_nam_sau" value="">
                        <label for="mui_bay_tam">Mũi 7,8 - Ngày 28 <span class="text-danger"></span></label>
                        <input class="form-control lo-vac-xin-mui-bay-tam" type="Text" name="lo_vac_xin_mui_bay_tam" id="lo_vac_xin_mui_bay_tam" placeholder="Tên/Lô vắc xin mũi 7,8" value="" style="margin-bottom: 5px;">
                        <input class="form-control mui-bay-tam" type="Date" name="mui_bay_tam" id="mui_bay_tam" value="">

                    </div>
                </div>
        </div>  <!-- end col -->

        <div class="card-box">
            <p class="text-muted font-14 m-b-20"></p>
          
            
                <div class="row">
                    <div class="col-xs-12 col-md-3">
                        <b><h5>PỨ tại chỗ sau tiêm vắc xin</h5></b><br>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <b><h5>PỨ toàn thân sau tiêm vắc xin</h5></b><br>
                    </div>

                    <div class="col-xs-12 col-md-3">
                        <b><h5>Huyết thanh kháng dại</h5></b><br>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <b><h5>PỨ huyết thanh kháng dại</h5></b><br>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        
                        <div class="form-group">
                            <input class="checkbox dau" type="checkbox" name="dau" id="dau" value="">
                            <label for="dau">Đau<span class="text-danger"></span></label><br> 
                            <input class="checkbox quang-do" type="checkbox" name="quang_do" id="quang_do">  <label for="quang_do">Quầng đỏ<span class="text-danger"></span></label><br>     
                            <input class="checkbox tu-mau" type="checkbox" name="tu_mau" id="tu_mau">
                            <label for="tu_mau">Tụ máu<span class="text-danger"></span></label><br> 
                            <input class="checkbox phu-ne-sot-cung" type="checkbox" name="phu_ne_sot_cung" value="">            
                            <label for="phu_ne_sot_cung">Phù nề, sốt cứng<span class="text-danger"></span></label><br>
                            <input class="checkbox sot" type="checkbox" name="sot" id="sot" value="">        
                            <label for="sot">Sốt<span class="text-danger"></span></label> 
                                                
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3">
                        <div class="form-group">       
                            <input class="checkbox kho-chiu" type="checkbox" name="kho_chiu" id="kho_chiu" value="">        
                            <label for="kho_chiu">Khó chịu<span class="text-danger"></span></label><br> 
                            <input class="checkbox ngua" type="checkbox" name="ngua" id="ngua" value="">        
                            <label for="ngua">Ngứa<span class="text-danger"></span></label><br>  
                            <input class="checkbox man-do" type="checkbox" name="man_do" id="man_do" value="">
                            <label for="man_do">Mẩn đỏ<span class="text-danger"></span></label><br> 
                            <input class="checkbox dau-co-khop" type="checkbox" name="dau_co_khop" id="dau_co_khop" value="">        
                            <label for="dau_co_khop">Đau cơ, khớp<span class="text-danger"></span></label><br>  
                            <input class="checkbox roi-loan-tieu-hoa" type="checkbox" name="roi_loan_tieu_hoa" id="roi_loan_tieu_hoa">        
                            <label for="roi_loan_tieu_hoa">Rối loạn tiêu hóa<span class="text-danger"></span></label><br> 
                            <label for="pu_khac">Phản ứng khác<span class="text-danger"></span></label><br>     <input class="form-control pu-khac" type="Text" name="pu_khac" id="pu_khac" value="">  
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3">
                            <label for="ngay_tiem">Ngày tiêm<span class="text-danger"></span></label>
                            <input class="form-control ngay-tiem" type="Date" name="ngay_tiem" id="ngay_tiem" value="">
                            <label for="ten_huyet_thanh">Tên/ký hiệu lô huyết thanh<span class="text-danger"></span></label>
                            <input class="form-control ten-huyet-thanh" type="Text" name="ten_huyet_thanh" id="ten_huyet_thanh" value="">
                            <label for="tiem_tai_vet_thuong">Tiêm tại vị trí vết thương(ml)<span class="text-danger"></span></label>
                            <input class="form-control tiem-tai-vet-thuong" type="Number" name="tiem_tai_vet_thuong" id="tiem_tai_vet_thuong" value="">
                            <label for="tiem_bap">Tiêm bắp(ml)<span class="text-danger"></span></label>
                            <input class="form-control tiem-bap" type="Number" name="tiem_bap" id="tiem_bap" value="">
                    </div>
                    
                    <div class="col-xs-12 col-md-3">
                        <input class="checkbox di-ung" type="checkbox" name="di_ung" id="di_ung" value="">
                        <label for="di_ung">Dị ứng<span class="text-danger"></span></label><br> 
                        <input class="checkbox soc-phan-ve" type="checkbox" name="soc_phan_ve" id="soc-phan-ve" value="">         
                        <label for="soc_phan_ve">Sốc phản vệ<span class="text-danger"></span></label><br>

                        <label for="khac_ghi_ro">Khác(ghi rõ)<span class="text-danger"></span></label><br>     
                        <input class="form-control khac-ghi-ro" type="Text" name="khac_ghi_ro" id="khac_ghi_ro" value=""><br><br>
                        
                         <div class="col-xs-12 col-md-12 text-right">

                            <label for="btn-luu" style="color: white;">Lưu lại<span class="text-danger"></span></label><br>
                            
                            <button type="button" class="btn btn-success waves-effect waves-light btn-luu"><i class="mdi mdi-library-plus"></i>Lưu lại</button> 
                        </div>
                        
                    </div>
                        
                          
                </div>
        </div>  <!-- end col -->

    </div>
</div>

    <!--Wysiwig js-->
    
    <script src="{{ asset('public/template/default/assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            var _token=jQuery('form[name="frm_benh_nhan"]').find("input[name='_token']").val();
            
   
            jQuery('.btn-luu').on('click', function(){

                // Nếu check vào checkbox
                var cho=0;
                if($('.cho').prop('checked')==true){
                    cho=1;
                }else{ // ngược lại
                    cho=0;
                }
               console.log(cho);

                var meo=0;
                if($('.meo').prop('checked')==true){
                    meo=1;
                }else{ // ngược lại
                    meo=0;
                }
                console.log(meo);

                var doi=0;
                if($('.doi').prop('checked')==true){
                    doi=1;
                }else{ // ngược lại
                    doi=0;
                }
                console.log(doi);

                var binhThuong=0;
                if($('.binh-thuong').prop('checked')==true){
                    binhThuong=1;
                }else{ // ngược lại
                    binhThuong=0;
                }
                console.log(binhThuong);

                var om=0;
                if($('.om').prop('checked')==true){
                    om=1;
                }else{ // ngược lại
                    om=0;
                }
                console.log(om);

                var matTich=0;
                if($('.mat-tich').prop('checked')==true){
                    matTich=1;
                }else{ // ngược lại
                    matTich=0;
                }
                console.log(matTich);

                var chayRong=0;
                if($('.chay-rong').prop('checked')==true){
                    chayRong=1;
                }else{ // ngược lại
                    chayRong=0;
                }
                console.log(chayRong);

                var lenConDai=0;
                if($('.len-con-dai').prop('checked')==true){
                    lenConDai=1;
                }else{ // ngược lại
                    lenConDai=0;
                }
                console.log(lenConDai);

                var dau=0;
                if($('.dau').prop('checked')==true){
                    dau=1;
                }else{ // ngược lại
                    dau=0;
                }
                console.log(dau);

                var quangDo=0;
                if($('.quang-do').prop('checked')==true){
                    quangDo=1;
                }else{ // ngược lại
                    quangDo=0;
                }
                console.log(quangDo);

                var tuMau=0;
                if($('.tu-mau').prop('checked')==true){
                    tuMau=1;
                }else{ // ngược lại
                    tuMau=0;
                }
                console.log(tuMau);

                var phuNeSotCung=0;
                if($('.phu-ne-sot-cung').prop('checked')==true){
                    phuNeSotCung=1;
                }else{ // ngược lại
                    phuNeSotCung=0;
                }
                console.log(phuNeSotCung);

                var sot=0;
                if($('.sot').prop('checked')==true){
                    sot=1;
                }else{ // ngược lại
                    sot=0;
                }
                console.log(sot);

                var khoChiu=0;
                if($('.kho-chiu').prop('checked')==true){
                    khoChiu=1;
                }else{ // ngược lại
                    khoChiu=0;
                }
                console.log(khoChiu);

                var ngua=0;
                if($('.ngua').prop('checked')==true){
                    ngua=1;
                }else{ // ngược lại
                    ngua=0;
                }
                console.log(ngua);

                var manDo=0;
                if($('.man-do').prop('checked')==true){
                    manDo=1;
                }else{ // ngược lại
                    manDo=0;
                }
                console.log(manDo);

                var dauCoKhop=0;
                if($('.dau-co-khop').prop('checked')==true){
                    dauCoKhop=1;
                }else{ // ngược lại
                    dauCoKhop=0;
                }
                console.log(dauCoKhop);

                var roiLoanTieuHoa=0;
                if($('.roi-loan-tieu-hoa').prop('checked')==true){
                    roiLoanTieuHoa=1;
                }else{ // ngược lại
                    roiLoanTieuHoa=0;
                }
                console.log(roiLoanTieuHoa);

                var diUng=0;
                if($('.di-ung').prop('checked')==true){
                    diUng=1;
                }else{ // ngược lại
                    diUng=0;
                }
                console.log(diUng);

                var socPhanVe=0;
                if($('.soc-phan-ve').prop('checked')==true){
                    socPhanVe=1;
                }else{ // ngược lại
                    socPhanVe=0;
                }
                console.log(socPhanVe);

                // Input (Text và Number và Select) 
                var tenBenhNhan=jQuery('.ten-benh-nhan').val();
                console.log(tenBenhNhan);
                var diaChi=jQuery('.dia-chi').val();
                console.log(diaChi);
                var gioiTinh=jQuery('.gioi-tinh').val();
                console.log(gioiTinh);
                var tuoi=jQuery('.tuoi').val();
                console.log(tuoi);
                var mucDoVetThuong=jQuery('.muc-do-vet-thuong').val();
                console.log(mucDoVetThuong);
                var ngayKham=jQuery('.ngay-kham').val();
                console.log(ngayKham); 
                var ngayDongVatCan=jQuery('.ngay-dong-vat-can').val();
                console.log(ngayDongVatCan);   
                var ghiChu=jQuery('.ghi-chu').val();
                console.log(ghiChu);
                var dvKhac=jQuery('.dv-khac').val();
                console.log(dvKhac);
                var dauMatCo=jQuery('.dau-mat-co').val();
                console.log(dauMatCo);
                var than=jQuery('.than').val();
                console.log(than);
                var tay=jQuery('.tay').val();
                console.log(tay);
                var chan=jQuery('.chan').val();
                console.log(chan);
                var loVacXinMuiMot=jQuery('.lo-vac-xin-mui-mot').val();
                var loVacXinMuiHai=jQuery('.lo-vac-xin-mui-hai').val();
                var loVacXinMuiBa=jQuery('.lo-vac-xin-mui-ba').val();
                var loVacXinMuiBon=jQuery('.lo-vac-xin-mui-bon').val();
                var loVacXinMuiNam=jQuery('.lo-vac-xin-mui-nam').val();
                var loVacXinMuiMotHai=jQuery('.lo-vac-xin-mui-mot-hai').val();
                var loVacXinMuiBaBon=jQuery('.lo-vac-xin-mui-ba-bon').val();
                var loVacXinMuiNamSau=jQuery('.lo-vac-xin-mui-nam-sau').val();
                var loVacXinMuiBayTam=jQuery('.lo-vac-xin-mui-bay-tam').val();
                var muiMot=jQuery('.mui-mot').val();
                console.log(muiMot);
                var muiHai=jQuery('.mui-hai').val();
                console.log(muiHai);
                var muiBa=jQuery('.mui-ba').val();
                console.log(muiBa);
                var muiBon=jQuery('.mui-bon').val();
                console.log(muiBon);
                var muiNam=jQuery('.mui-nam').val();
                console.log(muiNam);
                var muiMotHai=jQuery('.mui-mot-hai').val();
                console.log(muiMotHai);
                var muiBaBon=jQuery('.mui-ba-bon').val();
                console.log(muiBaBon);
                var muiNamSau=jQuery('.mui-nam-sau').val();
                console.log(muiNamSau);
                var muiBayTam=jQuery('.mui-bay-tam').val();
                console.log(muiBayTam);
                /* tiem huyet thanh khang dai*/
                var puKhac=jQuery('.pu-khac').val();
                console.log(puKhac);
                var ngayTiem=jQuery('.ngay-tiem').val();
                console.log(ngayTiem);
                var tenHuyetThanh=jQuery('.ten-huyet-thanh').val();
                console.log(tenHuyetThanh);
                var tiemTaiVetThuong=jQuery('.tiem-tai-vet-thuong').val();
                console.log(tiemTaiVetThuong);
                var tiemBap=jQuery('.tiem-bap').val();
                console.log(tiemBap);
                var khacGhiRo=jQuery('.khac-ghi-ro').val();
                console.log(khacGhiRo);
                

            create(
                _token,
                tenBenhNhan,diaChi,gioiTinh,tuoi,mucDoVetThuong,ngayKham,ngayDongVatCan,ghiChu,cho,meo,doi,
                dvKhac,dauMatCo,than,tay,chan,binhThuong,om,matTich,chayRong,lenConDai, 
                loVacXinMuiMot, loVacXinMuiHai, loVacXinMuiBa, loVacXinMuiBon, loVacXinMuiNam,muiMot,muiHai,muiBa,muiBon,muiNam,loVacXinMuiMotHai, loVacXinMuiBaBon, loVacXinMuiNamSau, loVacXinMuiBayTam,muiMotHai,muiBaBon,muiNamSau,
                muiBayTam,dau,quangDo,tuMau,phuNeSotCung,sot,khoChiu,ngua,manDo,dauCoKhop,
                roiLoanTieuHoa,puKhac,ngayTiem,tenHuyetThanh,tiemTaiVetThuong,tiemBap,diUng,socPhanVe,khacGhiRo

            );

            });
            
            function create(
                _token,
                tenBenhNhan,diaChi,gioiTinh,tuoi,mucDoVetThuong,ngayKham,ngayDongVatCan,ghiChu,cho,meo,doi,
                dvKhac,dauMatCo,than,tay,chan,binhThuong,om,matTich,chayRong,lenConDai, 
                loVacXinMuiMot, loVacXinMuiHai, loVacXinMuiBa, loVacXinMuiBon, loVacXinMuiNam,muiMot,muiHai,muiBa,muiBon,muiNam,loVacXinMuiMotHai, loVacXinMuiBaBon, loVacXinMuiNamSau, loVacXinMuiBayTam,muiMotHai,muiBaBon,muiNamSau,
                muiBayTam,dau,quangDo,tuMau,phuNeSotCung,sot,khoChiu,ngua,manDo,dauCoKhop,
                roiLoanTieuHoa,puKhac,ngayTiem,tenHuyetThanh,tiemTaiVetThuong,tiemBap,diUng,socPhanVe,khacGhiRo
               
               
            ){

                if(tenBenhNhan=='' || diaChi=='' ||gioiTinh=='' || tuoi=='' || ngayKham==''){
                    $.toast({
                        heading: 'Lỗi!',
                        text: 'Các thông tin không thể để trống.',
                        position: 'top-right',
                        loaderBg: '#bf441d',
                        icon: 'error',
                        hideAfter: 3000,
                        stack: 1
                    });
                    return false;
                }
                var xhr1;   
                var url="{{ route('luuBenhNhan') }}";
                if(xhr1 && xhr1.readyState != 4){
                    xhr1.abort(); //huy lenh ajax truoc do
                }
                xhr1 = $.ajax({
                    url:url,
                    type:'POST',
                    dataType:'json',
                    cache: false,
                    data:{
                        "_token":_token,
                        "ten_benh_nhan":tenBenhNhan,
                        "dia_chi":diaChi,
                        "gioi_tinh":gioiTinh,
                        "tuoi":tuoi,
                        "muc_do_vet_thuong":mucDoVetThuong,
                        "ngay_kham":ngayKham,
                        "ngay_dong_vat_can":ngayDongVatCan,
                        "ghi_chu":ghiChu,
                        "cho":cho,
                        "meo":meo,
                        "doi":doi,

                        "dv_khac":dvKhac,
                        "dau_mat_co":dauMatCo,
                        "than":than,
                        "tay":tay,
                        "chan":chan,
                        "binh_thuong":binhThuong,
                        "om":om,
                        "mat_tich":matTich,
                        "chay_rong":chayRong,
                        "len_con_dai":lenConDai,

                        "lo_vac_xin_mui_mot":loVacXinMuiMot,
                        "lo_vac_xin_mui_hai":loVacXinMuiHai,
                        "lo_vac_xin_mui_ba":loVacXinMuiBa,
                        "lo_vac_xin_mui_bon":loVacXinMuiBon,
                        "lo_vac_xin_mui_nam":loVacXinMuiNam,
                        "mui_mot":muiMot,
                        "mui_hai":muiHai,
                        "mui_ba":muiBa,
                        "mui_bon":muiBon,
                        "mui_nam":muiNam,
                        "lo_vac_xin_mui_mot_hai":loVacXinMuiMotHai,
                        "lo_vac_xin_mui_ba_bon":loVacXinMuiBaBon,
                        "lo_vac_xin_mui_nam_sau":loVacXinMuiNamSau,
                        "lo_vac_xin_mui_bay_tam":loVacXinMuiBayTam,
                        "mui_mot_hai":muiMotHai,
                        "mui_ba_bon" :muiBaBon,
                        "mui_nam_sau":muiNamSau,

                        "mui_bay_tam":muiBayTam,
                        "dau":dau,
                        "quang_do":quangDo,
                        "tu_mau":tuMau,
                        "phu_ne_sot_cung":phuNeSotCung,
                        "sot" :sot,
                        "kho_chiu":khoChiu,
                        "ngua":ngua,
                        "man_do":manDo,
                        "dau_co_khop":dauCoKhop,

                        "roi_loan_tieu_hoa":roiLoanTieuHoa,
                        "pu_khac":puKhac,
                        "ngay_tiem":ngayTiem,
                        "ten_huyet_thanh":tenHuyetThanh,
                        "tiem_tai_vet_thuong":tiemTaiVetThuong,
                        "tiem_bap":tiemBap,
                        "di_ung":diUng,
                        "soc_phan_ve":socPhanVe,
                        "khac_ghi_ro":khacGhiRo

                    },
                    error:function(){
                    },
                    success:function(data){
                        if(data.error==0){                            
                            $.toast({
                                heading: 'Chúc mừng!',
                                text: 'Bạn đã lưu dữ liệu thành công.',
                                position: 'top-right',
                                loaderBg: '#5ba035',
                                icon: 'success',
                                hideAfter: 3000,
                                stack: 1
                            }); 
                        }
                        else{
                            $.toast({
                                heading: 'Lỗi!',
                                text: 'Bạn không thể thêm thông tin, xin vui lòng kiểm tra lại.',
                                position: 'top-right',
                                loaderBg: '#bf441d',
                                icon: 'error',
                                hideAfter: 3000,
                                stack: 1
                            });
                        }
                    },

                });
            }
   
        });

    </script>
@endsection
