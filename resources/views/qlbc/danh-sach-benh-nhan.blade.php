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
                    <div class="col-xs-12 col-md-4">
                        <label for="tu_ngay">Từ ngày<span class="text-danger"></span></label>
                        <input class="form-control tu-ngay" type="Date" name="tu_ngay" id="tu_ngay" value="{{$tuNgay}}">
                    </div>

                    <div class="col-xs-12 col-md-4">
                        <label for="den_ngay">Đến ngày<span class="text-danger"></span></label>
                        <input class="form-control den-ngay" type="Date" name="den_ngay" id="den_ngay" value="{{$denNgay}}">
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <label for="btn-xem" style="color: white;"><br><br><span class="text-danger"></span></label>
                        <button type="button" class="btn btn-success waves-effect waves-light btn-xem"><i class="fa fa-search"></i> Xem</button> 
                        <button type="button" class="btn btn-success waves-effect waves-light btn-xuat-excel"><i class="fa fa-file-excel-o"></i> Xuất báo cáo</button>
                    </div>    
                </div>
            
        </div> <!-- end card-box -->

        

    </div>
</div>

<div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="card-box table-responsive">
                <table border="1" id="datatable-buttons" class="table table-hover table-bordered datatable-buttons" cellspacing="0" width="100%">'
                    <thead>

                           
                        <tr>
                            <th class="text-center"><center>STT</center></th>
                            <th class="text-center"><center>Ngày tiếp nhận</center></th>
                            <th class="text-center"><center>Tên bệnh nhân</center></th>
                            <th class="text-center"><center>Địa chỉ</center></th>
                            <th class="text-center"><center>Tuổi</center></th>
                            <th class="text-center"><center>Giới tính</center></th>
                            <th class="text-center"><center>Ngày động vật cắn/tiếp xúc</center></th>
                            <th colspan="4"><center>Động vật phơi nhiễm</center></th>
                            <th class="text-center">Mức độ vết thương</th>
                            <th colspan="4"><center>Vị trí vết cắn</center></th>
                            <th colspan="5"><center>Tình trạng con vật lúc cắn người</center></th>
                            <th colspan="5"><center>Phác đồ tiêm bắp</center></th>              
                            <th colspan="4"><center>Phác đồ tiêm da</center></th>
                            <th colspan="11"><center>Phản ứng sau tiêm vắc xin</center></th>
                            <th colspan="7"><center>Huyết thanh kháng dại</center></th>
                            <th class="text-center">Ghi chú</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Chó</th>
                            <th>Mèo</th>
                            <th>Dơi</th>
                            <th>Khác</th>
                            <th></th>
                            <th>Đầu, mặt, cổ</th>
                            <th>Thân</th>
                            <th>Tay</th>
                            <th>Chân</th>
                            <th>Bình thường</th>
                            <th>Ốm</th>
                            <th>Mất tích</th>
                            <th>Chạy rong</th>
                            <th>Lên cơn dại</th>
                            <th>Mũi 1-Ngày 0</th>
                            <th>Mũi 2-Ngày 3</th>
                            <th>Mũi 3-Ngày 7</th>
                            <th>Mũi 4-Ngày 14</th>
                            <th>Mũi 5-Ngày 28</th>
                            <th>Mũi 1,2-Ngày 0</th>
                            <th>Mũi 3,4-Ngày 3</th>
                            <th>Mũi 5,6-Ngày 7</th>
                            <th>Mũi 7,8-Ngày 28</th>
                            <th>Đau</th>
                            <th>Quầng đỏ</th>
                            <th>Tụ máu</th>
                            <th>Phù nề, sốt cứng</th>
                            <th>Sốt</th>
                            <th>Khó chịu</th>
                            <th>Ngứa</th>
                            <th>Mẩn đỏ</th>
                            <th>Đau cơ, khớp</th>
                            <th>Rối loạn tiêu hóa</th>
                            <th>Phản ứng khác</th>
                            <th>Ngày tiêm huyết thanh</th>
                            <th>Tên/ký hiệu lô HTKD</th>
                            <th>Tiêm tại vết thương(ml)</th>
                            <th>Tiêm bắp(ml)</th>
                            <th>Dị ứng</th>
                            <th>Sốc phản vệ</th>
                            <th>Khác(ghi rõ)</th>
                            <th>Ghi chú</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $stt=0; ?>
                        @foreach($danhSachBenhNhan as $benhNhan)
                        <?php $stt++; ?>
                        <tr>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>{{$stt}}</center></td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg">
                            <?php
                                $ngayKham = $benhNhan->ngay_kham;
                                $ngayKham = date("d-m-Y", strtotime($ngayKham));
                                echo $ngayKham;

                            ?>
                            </td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua name" data-toggle="modal" data-target=".bs-example-modal-lg" style="white-space: nowrap;">{{$benhNhan->ten_benh_nhan}}</td>                       
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg">{{$benhNhan->dia_chi}}</td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center class="js-tuoi"  style="white-space: nowrap;">
                                <?php

                                    if($benhNhan->tuoi!=null){
                                        $ngay = $benhNhan->tuoi;
                                        $ngay = date("Y-m-d", strtotime($ngay));
                                        echo $ngay.'<br>';
                                        $tuoi=\Helper::getAge($ngay);
                                        echo '<b>'.$tuoi.'</b>';
                                        
                                    }    


                                ?>
                                
                            </center></td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                    @if ($benhNhan->gioi_tinh==1)
                                        Nam
                                    @else
                                        Nữ
                                    @endif
                                </center>
                            </td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                            <?php
                                if($benhNhan->ngay_dong_vat_can!=null){
                                    $ngay = $benhNhan->ngay_dong_vat_can;
                                    $ngay = date("d-m-Y", strtotime($ngay));
                                    echo $ngay;
                                }                                    
                            ?>
                            </center></td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                    @if($benhNhan->cho==1)
                                        X
                                    @else
                                    @endif
                                </center>
                            </td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                    @if($benhNhan->meo==1)
                                        X
                                    @else
                                    @endif
                                </center>
                            </td> 
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                    @if($benhNhan->doi==1)
                                        X
                                    @else
                                    @endif
                                </center>
                            </td>                            
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>{{$benhNhan->dv_khac}}</center></td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                    @if($benhNhan->muc_do_vet_thuong==1)
                                        Mức độ 1
                                    @elseif($benhNhan->muc_do_vet_thuong==2)
                                        Mức độ 2
                                    @elseif($benhNhan->muc_do_vet_thuong==3)
                                        Mức độ 3
                                    @endif
                                </center>
                            </td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>{{$benhNhan->dau_mat_co}}</center></td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>{{$benhNhan->than}}</center></td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>{{$benhNhan->tay}}</center></td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>{{$benhNhan->chan}}</center></td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                    @if($benhNhan->binh_thuong==1)
                                        X
                                    @else
                                    @endif
                                </center>
                            </td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                    @if($benhNhan->om==1)
                                        X
                                    @else
                                    @endif
                                </center>
                            </td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                    @if($benhNhan->mat_tich==1)
                                        X
                                    @else
                                    @endif
                                </center>
                            </td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                    @if($benhNhan->chay_rong==1)
                                        X
                                    @else
                                    @endif
                                </center>
                            </td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                    @if($benhNhan->len_con_dai==1)
                                        X
                                    @else
                                    @endif
                                </center>
                            </td>     
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                <?php
                                    if($benhNhan->mui_mot!=null){
                                        $ngay = $benhNhan->mui_mot;
                                        $ngay = date("d-m-Y", strtotime($ngay));
                                        echo $ngay;
                                    }                                    
                                ?>
                                </center></td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                <?php
                                    if($benhNhan->mui_hai!=null){
                                        $ngay = $benhNhan->mui_hai;
                                        $ngay = date("d-m-Y", strtotime($ngay));
                                        echo $ngay;
                                    }                                    
                                ?>
                            </center></td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                <?php
                                    if($benhNhan->mui_ba!=null){
                                        $ngay = $benhNhan->mui_ba;
                                        $ngay = date("d-m-Y", strtotime($ngay));
                                        echo $ngay;
                                    }                                    
                                ?>
                            </center></td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                <?php
                                    if($benhNhan->mui_bon!=null){
                                        $ngay = $benhNhan->mui_bon;
                                        $ngay = date("d-m-Y", strtotime($ngay));
                                        echo $ngay;
                                    }                                    
                                ?>
                            </center></td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                <?php
                                    if($benhNhan->mui_nam!=null){
                                        $ngay = $benhNhan->mui_nam;
                                        $ngay = date("d-m-Y", strtotime($ngay));
                                        echo $ngay;
                                    }                                    
                                ?>
                            </center></td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                <?php
                                    if($benhNhan->mui_mot_hai!=null){
                                        $ngay = $benhNhan->mui_mot_hai;
                                        $ngay = date("d-m-Y", strtotime($ngay));
                                        echo $ngay;
                                    }                                    
                                ?>
                            </center></td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                <?php
                                    if($benhNhan->mui_ba_bon!=null){
                                        $ngay = $benhNhan->mui_ba_bon;
                                        $ngay = date("d-m-Y", strtotime($ngay));
                                        echo $ngay;
                                    }                                    
                                ?>
                            </center></td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                <?php
                                    if($benhNhan->mui_nam_sau!=null){
                                        $ngay = $benhNhan->mui_nam_sau;
                                        $ngay = date("d-m-Y", strtotime($ngay));
                                        echo $ngay;
                                    }                                    
                                ?>
                            </center></td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                <?php
                                    if($benhNhan->mui_bay_tam!=null){
                                        $ngay = $benhNhan->mui_bay_tam;
                                        $ngay = date("d-m-Y", strtotime($ngay));
                                        echo $ngay;
                                    }                                    
                                ?>
                            </center></td>
                             <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                    @if($benhNhan->dau==1)
                                        X
                                    @else
                                    @endif
                                </center>
                            </td> 
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                    @if($benhNhan->quang_do==1)
                                        X
                                    @else
                                    @endif
                                </center>
                            </td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                    @if($benhNhan->tu_mau==1)
                                        X
                                    @else
                                    @endif
                                </center>
                            </td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                    @if($benhNhan->phu_ne_sot_cung==1)
                                        X
                                    @else
                                    @endif
                                </center>
                            </td>    
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                    @if($benhNhan->sot==1)
                                        X
                                    @else
                                    @endif
                                </center>
                            </td> 
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                    @if($benhNhan->kho_chiu==1)
                                        X
                                    @else
                                    @endif
                                </center>
                            </td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                    @if($benhNhan->ngua==1)
                                        X
                                    @else
                                    @endif
                                </center>
                            </td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                    @if($benhNhan->man_do==1)
                                        X
                                    @else
                                    @endif
                                </center>
                            </td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                    @if($benhNhan->dau_co_khop==1)
                                        X
                                    @else
                                    @endif
                                </center>
                            </td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                    @if($benhNhan->roi_loan_tieu_hoa==1)
                                        X
                                    @else
                                    @endif
                                </center>
                            </td>      
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>{{$benhNhan->pu_khac}}</center></td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                <?php
                                    if($benhNhan->ngay_tiem!=null){
                                        $ngay = $benhNhan->ngay_tiem;
                                        $ngay = date("d-m-Y", strtotime($ngay));
                                        echo $ngay;
                                    }                                    
                                ?>
                            </center></td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>{{$benhNhan->ten_huyet_thanh}}</center></td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>{{$benhNhan->tiem_tai_vet_thuong}}</center></td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>{{$benhNhan->tiem_bap}}</center></td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                    @if($benhNhan->di_ung==1)
                                        X
                                    @else
                                    @endif
                                </center>
                            </td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>
                                    @if($benhNhan->soc_phan_ve==1)
                                        X
                                    @else
                                    @endif
                                </center>
                            </td> 
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>{{$benhNhan->khac_ghi_ro}}</center></td>
                            <td data="{{$benhNhan['id_ngay_kham']}}" class="btnSua" data-toggle="modal" data-target=".bs-example-modal-lg"><center>{{$benhNhan->ghi_chu}}</center></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>



                <!-- popup -->
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h5 class="modal-title" id="myLargeModalLabel">SỬA THÔNG TIN BỆNH NHÂN</h5>
                            </div>
                            <div class="modal-body">
                                <div class="row add-form">    
                                    <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-6">
                                                        <b><h5>Thông tin bệnh nhân</h5></b><br>
                                                    </div>
                                                    <div class="col-xs-12 col-md-6 text-right" >
                                                        
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-3">
                                                        <label for="ten_benh_nhan">Tên bệnh nhân <span class="text-danger">*</span></label>

                                                        <input class="id" type="hidden" name="id" id="id" value="">
                                                        <input class="form-control ten-benh-nhan" type="Text" name="ten_benh_nhan" id="ten_benh_nhan" value="">
                                                        <label for="ngay_kham">Ngày khám<span class="text-danger">*</span></label>
                                                            <input class="form-control ngay-kham" type="Date" name="ngay_kham" id="ngay_kham" value="">  
                                                      
                                                        

                                                    </div>

                                                    <div class="col-xs-12 col-md-3">
                                                        <div class="form-group">
                                                            <label for="gioi_tinh">Giới tính<span class="text-danger">*</span></label>
                                                            <select class="form-control select2 gioi-tinh" name="gioi_tinh" id="gioi_tinh">
                                                                <option value="">---Chọn giới tính---</option>
                                                                <option value="1">Nam</option>
                                                                <option value="0">Nữ</option>                              
                                                            </select>
                                                        <label for="tuoi">Ngày sinh<span class="text-danger"></span></label>
                                                        <input class="form-control tuoi" type="Date" name="tuoi" id="tuoi" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-3">
                                                        <label for="dia_chi">Địa chỉ<span class="text-danger">*</span></label>
                                                        <input class="form-control dia-chi" type="Text" name="dia_chi" id="dia_chi" value="">
                                                        <div class="form-group">
                                                            <label for="muc_do_vet_thuong">Mức độ vết thương<span class="text-danger"></span></label>
                                                            <select class="form-control select2 muc-do-vet-thuong" name="muc_do_vet_thuong" id="muc_do_vet_thuong">
                                                            <option value="0">---Chọn mức độ---</option>
                                                            <option value="1">Mức độ I</option>
                                                            <option value="2">Mức độ II</option>
                                                            <option value="3">Mức độ III</option>
                                                            </select>   
                                                        </div>
                                                            
                                                    </div>
                                                    <div class="col-xs-12 col-md-3">
                                                            <label for="ngay_dong_vat_can">Ngày bị ĐV cắn/tiếp xúc<span class="text-danger"></span></label>
                                                            <input class="form-control ngay-dong-vat-can" type="Date" name="ngay_dong_vat_can" id="ngay_dong_vat_can" value="">  
                                                            <label for="ghi_chu">Ghi chú<span class="text-danger"></span></label><br>     
                                                            <input class="form-control ghi-chu" type="Text" name="ghi_chu" id="ghi_chu" value=""> 
                                                    </div>        
                                                </div>

                                        
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-4">
                                                        <b><h5>Loại động vật phơi nhiễm</h5></b><br>
                                                    </div>
                                                    <div class="col-xs-12 col-md-4">
                                                        <b><h5>SL vết thương</h5></b><br>
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
                                            
                                                      
                                            <p class="text-muted font-14 m-b-20"></p>
                                           
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-6">
                                                        <b><h5>Phác đồ tiêm bắp</h5></b>
                                                    </div>

                                                    <div class="col-xs-12 col-md-6">
                                                        <b><h5>Phác đồ tiêm da</h5></b>
                                                    </div>
                                                    <div class="col-xs-12 col-md-3">
                                                        <label for="mui_mot">Mũi 1 - Ngày 0 <span class="text-danger"></span></label>
                                                        <input class="form-control lo-vac-xin-mui-mot" type="Text" name="lo_vac_xin_mui_mot" id="lo_vac_xin_mui_mot" placeholder="Tên/Lô vắc xin mũi 1" value="" style="margin-bottom: 5px;">
                                                        <input class="form-control mui-mot" type="Date" name="mui_mot" id="mui_mot" value="">
                                                        <label for="mui_hai">Mũi 2 - Ngày 3 <span class="text-danger"></span></label>
                                                        <input class="form-control lo-vac-xin-mui-hai" type="Text" name="lo_vac_xin_mui_hai" id="lo_vac_xin_mui_hai" placeholder="Tên/Lô vắc xin mũi 2" value="" style="margin-bottom: 5px;">
                                                        <input class="form-control mui-hai" type="Date" name="mui_hai" id="mui_hai" value="">
                                                        <label for="mui_ba">Mũi 3 - Ngày 7 <span class="text-danger"></span></label>
                                                        <input class="form-control lo-vac-xin-mui-ba" type="Text" name="lo_vac_xin_mui_ba" id="lo_vac_xin_mui_ba" placeholder="Tên/Lô vắc xin mũi 3" value="" style="margin-bottom: 5px;">
                                                        
                                                    </div>

                                                    <div class="col-xs-12 col-md-3">
                                                        <label for="mui_ba">Mũi 3 - Ngày 7 <span class="text-danger"></span></label>
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
                                        

                                        
                                            <p class="text-muted font-14 m-b-20"></p>
                                          
                                            
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-3">
                                                        <b><h5>PƯ tại chỗ sau tiêm vắc xin</h5></b><br>
                                                    </div>
                                                    <div class="col-xs-12 col-md-3">
                                                        <b><h5>PƯ toàn thân sau tiêm vắc xin</h5></b><br>
                                                    </div>

                                                    <div class="col-xs-12 col-md-3">
                                                        <b><h5>Huyết thanh kháng dại</h5></b><br>
                                                    </div>
                                                    <div class="col-xs-12 col-md-3">
                                                        <b><h5>PƯ sau tiêm huyết thanh kháng dại</h5></b><br>
                                                    </div>
                                                    <div class="col-xs-12 col-md-12">
                                                        
                                                    </div>

                                                    <div class="col-xs-12 col-md-3">
                                                        
                                                        <div class="form-group">
                                                            <input class="checkbox dau" type="checkbox" name="dau" id="dau" value="">
                                                            <label for="dau">Đau<span class="text-danger"></span></label><br> 
                                                            <input class="checkbox quang-do" type="checkbox" name="quang_do" value="quang_do">  <label for="quang_do">Quầng đỏ<span class="text-danger"></span></label><br>     
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
                                                            <label for="tiem_tai_vet_thuong">Tiêm tại vết thương(ml)<span class="text-danger"></span></label>
                                                            <input class="form-control tiem-tai-vet-thuong" type="Number" name="tiem_tai_vet_thuong" id="tiem_tai_vet_thuong" value="">
                                                            <label for="tiem_bap">Tiêm bắp(ml)<span class="text-danger"></span></label>
                                                            <input class="form-control tiem-bap" type="Number" name="tiem_bap" id="tiem_bap" value="">
                                                    </div>
                                                    
                                                    <div class="col-xs-12 col-md-3">
                                                        <input class="checkbox di-ung" type="checkbox" name="di_ung" id="di_ung" value="">
                                                        <label for="di_ung">Dị ứng<span class="text-danger"></span></label><br> 
                                                        <input class="checkbox soc-phan-ve" type="checkbox" name="soc_phan_ve" id="soc_phan_ve" value="">         
                                                        <label for="soc_phan_ve">Sốc phản vệ<span class="text-danger"></span></label><br>

                                                        <label for="khac_ghi_ro">Khác(ghi rõ)<span class="text-danger"></span></label><br>     
                                                        <input class="form-control khac-ghi-ro" type="Text" name="khac_ghi_ro" id="khac_ghi_ro" value=""><br><br>
                                                        
                                                        
                                                    </div>

                                                    <div class="col-xs-12 col-md-6 text-right">

                                                    </div>
                                                     <div class="col-xs-12 col-md-6 text-right">
                                                        
                                                    </div>
                                                                 
                                                </div>   
                                    </div>   
                                </div>
                                        
                            </div>
                            <div class="modal-footer">
                                <div class="form-group text-right m-b-0">
                                    <button type="button" class="btn btn-primary waves-light waves-effect w-md btn-luu" data="CAP_NHAT"><i class="fa fa-check-square-o"></i> Lưu Lại</button>
                                    <button type="button" data="" class="btn btn-danger waves-effect waves-light btnXoa btnXoa2"><i class="dripicons-document-delete"></i> Xóa</button>
                                    <button type="button" class="btn btn-light waves-effect w-md"  data-dismiss="modal" aria-hidden="true">Hủy</button>
                                </div>
                            </div>

                        </div>
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->



                <script src="{{ asset('public/template/default/assets/js/jquery.min.js') }}"></script>
                <script type="text/javascript">
                jQuery(document).ready(function() {

                    var _token=jQuery('form[name="frm_benh_nhan"]').find("input[name='_token']").val();
                        
               
                        jQuery('.btn-luu').on('click', function(){

                            var loaiCapNhat=jQuery(this).attr('data');

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
                            var id=jQuery('.id').val();
                            console.log(id);
                            var tenBenhNhan=jQuery('.ten-benh-nhan').val();
                            console.log(tenBenhNhan);
                            var diaChi=jQuery('.dia-chi').val();
                            console.log(diaChi);
                            var gioiTinh=jQuery('.gioi-tinh').val();
                            console.log(gioiTinh);
                            var tuoi=jQuery('.tuoi').val();
                            console.log(tuoi);
                            var mucDoVetThuong=jQuery('.muc-do-vet-thuong').val();
                            console.log('muc-do-vet-thuong'+mucDoVetThuong);

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
                            
                            update(
                                _token, id, tenBenhNhan,diaChi,gioiTinh,tuoi,mucDoVetThuong,ngayKham,ngayDongVatCan,ghiChu,cho,meo,doi,dvKhac,dauMatCo,than,tay,chan,binhThuong,om,matTich,chayRong,lenConDai, loVacXinMuiMot, loVacXinMuiHai, loVacXinMuiBa, loVacXinMuiBon, loVacXinMuiNam,muiMot,muiHai,muiBa,muiBon,muiNam,loVacXinMuiMotHai, loVacXinMuiBaBon, loVacXinMuiNamSau, loVacXinMuiBayTam,muiMotHai,muiBaBon,muiNamSau,muiBayTam,dau,quangDo,tuMau,phuNeSotCung,sot,khoChiu,ngua,manDo,dauCoKhop,roiLoanTieuHoa,puKhac,ngayTiem,tenHuyetThanh,tiemTaiVetThuong,tiemBap,diUng,socPhanVe,khacGhiRo, loaiCapNhat

                            );

                        });
                        
                        function update(
                            _token, id, tenBenhNhan,diaChi,gioiTinh,tuoi,mucDoVetThuong,ngayKham,ngayDongVatCan,ghiChu,cho,meo,doi,dvKhac,dauMatCo,than,tay,chan,binhThuong,om,matTich,chayRong,lenConDai, loVacXinMuiMot, loVacXinMuiHai, loVacXinMuiBa, loVacXinMuiBon, loVacXinMuiNam,muiMot,muiHai,muiBa,muiBon,muiNam,loVacXinMuiMotHai, loVacXinMuiBaBon, loVacXinMuiNamSau, loVacXinMuiBayTam,muiMotHai,muiBaBon,muiNamSau,muiBayTam,dau,quangDo,tuMau,phuNeSotCung,sot,khoChiu,ngua,manDo,dauCoKhop,roiLoanTieuHoa,puKhac,ngayTiem,tenHuyetThanh,tiemTaiVetThuong,tiemBap,diUng,socPhanVe,khacGhiRo, loaiCapNhat
                           
                           
                        ){

                            if(id==''|| tenBenhNhan=='' || diaChi=='' ||gioiTinh=='' || tuoi=='' || ngayKham==''){
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
                            var url="{{ route('capNhatBenhNhan') }}";
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
                                    "id":id,
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
                                    "khac_ghi_ro":khacGhiRo,
                                    "loai_cap_nhat": loaiCapNhat

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
                                        window.location.href = "/admin/danh-sach-benh-nhan"; 
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
                

                    function del(id, _token){
                        var xhr1;   
                        var url="{{ route('xoaBenhNhan') }}";
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
                                "id":id,
                            },
                            error:function(){
                            },
                            success:function(data){
                                if(data.error==0){                            
                                    $.toast({
                                        heading: 'Chúc mừng!',
                                        text: 'Bạn đã xóa dữ liệu thành công.',
                                        position: 'top-right',
                                        loaderBg: '#5ba035',
                                        icon: 'success',
                                        hideAfter: 3000,
                                        stack: 1
                                    });
                                    window.location.href = "/admin/danh-sach-benh-nhan";   
                                }
                                else{
                                    $.toast({
                                        heading: 'Lỗi!',
                                        text: 'Bạn không thể xóa dữ liệu này, xin vui lòng kiểm tra lại.',
                                        position: 'top-right',
                                        loaderBg: '#bf441d',
                                        icon: 'error',
                                        hideAfter: 3000,
                                        stack: 1
                                    });
                                }
                            }
                        });
                    }

                    //nút này là nút sửa dữ liệu
                    jQuery('.btnSua').on('click',function(){
                        var _token=jQuery('form[name="frm_benh_nhan"]').find("input[name='_token']").val();
                        var id=jQuery(this).attr('data');
                        load(id, _token)
                    });

                    function load(id, _token){
                        var xhr1;   
                        var url="{{ route('loadBenhNhan') }}";
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
                                "id":id,
                            },
                            error:function(){
                            },
                            success:function(data){
                                if(data.error==0){   
                                    jQuery('.btnXoa2').attr('data',data.thongTinBenhNhan[0].id_ngay_kham); 
                                    jQuery('.id').val(data.thongTinBenhNhan[0].id);
                                    jQuery('.ten-benh-nhan').val(data.thongTinBenhNhan[0].ten_benh_nhan);
                                    jQuery('.dia-chi').val(data.thongTinBenhNhan[0].dia_chi);
                                    
                                    jQuery('#gioi_tinh').val(data.thongTinBenhNhan[0].gioi_tinh);

                                    $("#gioi_tinh > option").each(function() {
                                        if(this.value==data.thongTinBenhNhan[0].gioi_tinh){
                                          jQuery('#select2-gioi_tinh-container').text(this.text);
                                        }
                                    });
                                    jQuery('#muc_do_vet_thuong').val(data.thongTinBenhNhan[0].muc_do_vet_thuong); 
                                    $("#muc_do_vet_thuong > option").each(function() {
                                        if(this.value==data.thongTinBenhNhan[0].muc_do_vet_thuong){
                                          jQuery('#select2-muc_do_vet_thuong-container').text(this.text);
                                        }
                                    });
                                    jQuery('.ghi-chu').val(data.thongTinBenhNhan[0].ghi_chu);
                                    jQuery('.dau-mat-co').val(data.thongTinBenhNhan[0].dau_mat_co);
                                    jQuery('.than').val(data.thongTinBenhNhan[0].than);
                                    jQuery('.tay').val(data.thongTinBenhNhan[0].tay);
                                    jQuery('.chan').val(data.thongTinBenhNhan[0].chan);
                                    jQuery('.dv-khac').val(data.thongTinBenhNhan[0].dv_khac);
                                    jQuery('.ten-vac-xin-bap').val(data.thongTinBenhNhan[0].ten_vac_xin_bap);
                                    jQuery('.ten-vac-xin-da').val(data.thongTinBenhNhan[0].ten_vac_xin_da);
                                    jQuery('.pu-khac').val(data.thongTinBenhNhan[0].pu_khac);
                                    jQuery('.ten-huyet-thanh').val(data.thongTinBenhNhan[0].ten_huyet_thanh);
                                    jQuery('.tiem-tai-vet-thuong').val(data.thongTinBenhNhan[0].tiem_tai_vet_thuong);
                                    jQuery('.tiem-bap').val(data.thongTinBenhNhan[0].tiem_bap);
                                    jQuery('.khac-ghi-ro').val(data.thongTinBenhNhan[0].khac_ghi_ro); 
                                
                                    if(data.thongTinBenhNhan[0].cho==1){
                                        jQuery('.cho').prop('checked', true);
                                    }
                                    else{
                                        jQuery('.cho').prop('checked', false);
                                    }

                                    if(data.thongTinBenhNhan[0].meo==1){
                                        jQuery('.meo').prop('checked', true);
                                    }
                                    else{
                                        jQuery('.meo').prop('checked', false);
                                    }

                                    if(data.thongTinBenhNhan[0].doi==1){
                                        jQuery('.doi').prop('checked', true);
                                    }
                                    else{
                                        jQuery('.doi').prop('checked', false);
                                    }

                                    if(data.thongTinBenhNhan[0].binh_thuong==1){
                                        jQuery('.binh-thuong').prop('checked', true);
                                    }
                                    else{
                                        jQuery('.binh-thuong').prop('checked', false);
                                    }

                                    if(data.thongTinBenhNhan[0].om==1){
                                        jQuery('.om').prop('checked', true);
                                    }
                                    else{
                                        jQuery('.om').prop('checked', false);
                                    }
                                    if(data.thongTinBenhNhan[0].mat_tich==1){
                                        jQuery('.mat-tich').prop('checked', true);
                                    }
                                    else{
                                        jQuery('.mat-tich').prop('checked', false);
                                    }
                                     if(data.thongTinBenhNhan[0].chay_rong==1){
                                        jQuery('.chay-rong').prop('checked', true);
                                    }
                                    else{
                                        jQuery('.chay-rong').prop('checked', false);
                                    }
                                    if(data.thongTinBenhNhan[0].len_con_dai==1){
                                        jQuery('.len-con-dai').prop('checked', true);
                                    }
                                    else{
                                        jQuery('.len-con-dai').prop('checked', false);
                                    }
                                    if(data.thongTinBenhNhan[0].dau==1){
                                        jQuery('.dau').prop('checked', true);
                                    }
                                    else{
                                        jQuery('.dau').prop('checked', false);
                                    }
                                    if(data.thongTinBenhNhan[0].quang_do==1){
                                        jQuery('.quang-do').prop('checked', true);
                                    }
                                    else{
                                        jQuery('.quang-do').prop('checked', false);
                                    }
                                    if(data.thongTinBenhNhan[0].tu_mau==1){
                                        jQuery('.tu-mau').prop('checked', true);
                                    }
                                    else{
                                        jQuery('.tu-mau').prop('checked', false);
                                    }
                                    if(data.thongTinBenhNhan[0].phu_ne_sot_cung==1){
                                        jQuery('.phu-ne-sot-cung').prop('checked', true);
                                    }
                                    else{
                                        jQuery('.phu-ne-sot-cung').prop('checked', false);
                                    }
                                     if(data.thongTinBenhNhan[0].sot==1){
                                        jQuery('.sot').prop('checked', true);
                                    }
                                    else{
                                        jQuery('.sot').prop('checked', false);
                                    }
                                    if(data.thongTinBenhNhan[0].kho_chiu==1){
                                        jQuery('.kho-chiu').prop('checked', true);
                                    }
                                    else{
                                        jQuery('.kho-chiu').prop('checked', false);
                                    }
                                     if(data.thongTinBenhNhan[0].ngua==1){
                                        jQuery('.ngua').prop('checked', true);
                                    }
                                    else{
                                        jQuery('.ngua').prop('checked', false);
                                    }
                                    if(data.thongTinBenhNhan[0].man_do==1){
                                        jQuery('.man-do').prop('checked', true);
                                    }
                                    else{
                                        jQuery('.man-do').prop('checked', false);
                                    }
                                    if(data.thongTinBenhNhan[0].dau_co_khop==1){
                                        jQuery('.dau-co-khop').prop('checked', true);
                                    }
                                    else{
                                        jQuery('.dau-co-khop').prop('checked', false);
                                    }
                                    if(data.thongTinBenhNhan[0].roi_loan_tieu_hoa==1){
                                        jQuery('.roi-loan-tieu-hoa').prop('checked', true);
                                    }
                                    else{
                                        jQuery('.roi-loan-tieu-hoa').prop('checked', false);
                                    }
                                     if(data.thongTinBenhNhan[0].di_ung==1){
                                        jQuery('.di-ung').prop('checked', true);
                                    }
                                    else{
                                        jQuery('.di-ung').prop('checked', false);
                                    }
                                    if(data.thongTinBenhNhan[0].soc_phan_ve==1){
                                        jQuery('.soc-phan-ve').prop('checked', true);
                                    }
                                    else{
                                        jQuery('.soc-phan-ve').prop('checked', false);
                                    }
                                    if(data.thongTinBenhNhan[0].ngay_kham!=null){
                                        jQuery('.ngay-kham').val(data.thongTinBenhNhan[0].ngay_kham.substr(0, 10));
                                    }
                                    
                                    if(data.thongTinBenhNhan[0].ngay_dong_vat_can!=null){
                                        jQuery('.ngay-dong-vat-can').val(data.thongTinBenhNhan[0].ngay_dong_vat_can.substr(0, 10));
                                    }
                                    
                                    if(data.thongTinBenhNhan[0].mui_mot!=null){
                                        jQuery('.mui-mot').val(data.thongTinBenhNhan[0].mui_mot.substr(0, 10));
                                    }
                                    if(data.thongTinBenhNhan[0].mui_hai!=null){
                                        jQuery('.mui-hai').val(data.thongTinBenhNhan[0].mui_hai.substr(0, 10));
                                    }
                                    
                                    if(data.thongTinBenhNhan[0].mui_ba!=null){
                                        jQuery('.mui-ba').val(data.thongTinBenhNhan[0].mui_ba.substr(0, 10));
                                    }
                                    
                                    if(data.thongTinBenhNhan[0].mui_bon!=null){
                                        jQuery('.mui-bon').val(data.thongTinBenhNhan[0].mui_bon.substr(0, 10));
                                    }
                                    
                                    if(data.thongTinBenhNhan[0].mui_nam!=null){
                                        jQuery('.mui-nam').val(data.thongTinBenhNhan[0].mui_nam.substr(0, 10));
                                    }
                                    
                                    if(data.thongTinBenhNhan[0].mui_mot_hai!=null){
                                        jQuery('.mui-mot-hai').val(data.thongTinBenhNhan[0].mui_mot_hai.substr(0, 10));
                                    }
                                    if(data.thongTinBenhNhan[0].mui_ba_bon!=null){
                                        jQuery('.mui-ba-bon').val(data.thongTinBenhNhan[0].mui_ba_bon.substr(0, 10));
                                    }
                                    
                                    if(data.thongTinBenhNhan[0].mui_nam_sau!=null){
                                        jQuery('.mui-nam-sau').val(data.thongTinBenhNhan[0].mui_nam_sau.substr(0, 10));
                                    }
                                    
                                    if(data.thongTinBenhNhan[0].mui_bay_tam!=null){
                                        jQuery('.mui-bay-tam').val(data.thongTinBenhNhan[0].mui_bay_tam.substr(0, 10));
                                    }
                                    
                                    if(data.thongTinBenhNhan[0].ngay_tiem!=null){
                                        jQuery('.ngay-tiem').val(data.thongTinBenhNhan[0].ngay_tiem.substr(0, 10));
                                    }
                                    jQuery('.tuoi').val(data.thongTinBenhNhan[0].tuoi.substr(0, 10));
                                    jQuery('.lo-vac-xin-mui-mot').val(data.thongTinBenhNhan[0].lo_vac_xin_mui_mot);
                                    jQuery('.lo-vac-xin-mui-hai').val(data.thongTinBenhNhan[0].lo_vac_xin_mui_hai);
                                    jQuery('.lo-vac-xin-mui-ba').val(data.thongTinBenhNhan[0].lo_vac_xin_mui_ba);
                                    jQuery('.lo-vac-xin-mui-bon').val(data.thongTinBenhNhan[0].lo_vac_xin_mui_bon);
                                    jQuery('.lo-vac-xin-mui-nam').val(data.thongTinBenhNhan[0].lo_vac_xin_mui_nam);

                                    jQuery('.lo-vac-xin-mui-mot-hai').val(data.thongTinBenhNhan[0].lo_vac_xin_mui_mot_hai);
                                    jQuery('.lo-vac-xin-mui-ba-bon').val(data.thongTinBenhNhan[0].lo_vac_xin_mui_ba_bon);
                                    jQuery('.lo-vac-xin-mui-nam-sau').val(data.thongTinBenhNhan[0].lo_vac_xin_mui_nam_sau);
                                    jQuery('.lo-vac-xin-mui-bay-tam').val(data.thongTinBenhNhan[0].lo_vac_xin_mui_bay_tam);
                                    
      
                                }
                                else{
                                    $.toast({
                                        heading: 'Lỗi!',
                                        text: 'Bạn không lấy được thông tin, xin vui lòng kiểm tra lại.',
                                        position: 'top-right',
                                        loaderBg: '#bf441d',
                                        icon: 'error',
                                        hideAfter: 3000,
                                        stack: 1
                                    });
                                }
                            }
                        });
                    }

                    // nút này là nút xóa dữ liệu
                    jQuery('.btnXoa').on('click',function(){
                        var _token=jQuery('form[name="frm_benh_nhan"]').find("input[name='_token']").val();
                        var id=jQuery(this).attr('data');

                        swal({
                            title: 'Bạn thật sự muốn xóa dữ liệu?',
                            text: "Xóa mất sẽ không thể khôi phục lại được!",
                            type: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Tiếp tục xóa!',
                            cancelButtonText: 'Không xóa!',
                            confirmButtonClass: 'btn btn-success',
                            cancelButtonClass: 'btn btn-danger m-l-10',
                            buttonsStyling: false
                        }).then(function () {
                            del(id, _token)
                        }, function (dismiss) {
                            if (dismiss === 'cancel') {
                                swal(
                                    'Đã hủy!',
                                    'Hành động đã bị hủy :)',
                                    'error'
                                )
                            }
                        })   
                    });

                    jQuery('.btn-xem').on('click',function(){
                        var tuNgay=jQuery('.tu-ngay').val();
                        var denNgay=jQuery('.den-ngay').val();
                        if(tuNgay=='' || denNgay==''){
                            window.location.href = "/admin/danh-sach-benh-nhan";
                        }else{
                            window.location.href = "/admin/danh-sach-benh-nhan/"+tuNgay+"/"+denNgay; 
                        }
                    });

                    jQuery('.btn-xuat-excel').on('click',function(){
                        var tuNgay=jQuery('.tu-ngay').val();
                        var denNgay=jQuery('.den-ngay').val();
                        if(tuNgay=='' || denNgay==''){
                            window.location.href = "/admin/xuat-excel";
                            //window.location.href = "/admin/danh-sach-benh-nhan"; 
                        }else{
                            window.location.href = "/admin/xuat-excel/"+tuNgay+"/"+denNgay; 
                            //window.location.href = "/admin/danh-sach-benh-nhan/"+tuNgay+"/"+denNgay; 
                        }
                    });


                });

                

               
                </script>

            </div>
        </div>
</div>
  
@endsection
