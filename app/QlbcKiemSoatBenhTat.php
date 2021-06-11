<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QlbcKiemSoatBenhTat extends Model
{
    protected $table='qlbc_kiem_soat_benh_tat';
    protected $fillable=['id','ten_benh_nhan','dia_chi','tuoi', 'gioi_tinh','ma_benh_nhan','ngay_dong_vat_can','muc_do_vet_thuong','cho','meo','doi','dv_khac','dau_mat_co','than','tay','chan','binh_thuong','om','mat_tich','chay_rong','len_con_dai','mui_mot','mui_hai','mui_ba','mui_bon','mui_nam','mui_mot_hai','mui_ba_bon','mui_nam_sau','mui_bay_tam','lo_vac_xin_mui_mot','lo_vac_xin_mui_hai','lo_vac_xin_mui_ba','lo_vac_xin_mui_bon','lo_vac_xin_mui_nam','lo_vac_xin_mui_mot_hai','lo_vac_xin_mui_ba_bon','lo_vac_xin_mui_nam_sau','lo_vac_xin_mui_bay_tam','dau','quang_do','ngay_tiem','tu_mau','phu_ne_sot_cung','sot','kho_chiu','ngua','man_do','dau_co_khop','roi_loan_tieu_hoa','pu_khac','ten_huyet_thanh','tiem_tai_vet_thuong','tiem_bap','di_ung','soc_phan_ve','khac_ghi_ro','ghi_chu'];
    //protected $hidden=[''] // danh sách các trường muốn ẩn
    public $timestamps=false;
}
