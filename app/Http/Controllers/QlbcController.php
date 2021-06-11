<?php

    namespace App\Http\Controllers;

    use App\DanhMucLoi;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Storage;
    use App\QlbcKiemSoatBenhTat;
    use App\QlbcNgayKham;
    use DB;
    use Auth;
    use Request as RequestAjax;
    class QlbcController extends Controller
    {      
        public function nhapLieu(Request $request){
            return view('qlbc.nhap-lieu');
           
        }

         public function danhSachBenhNhan($tuNgay=null, $denNgay=null){
            $danhSachBenhNhan=array();

            if($tuNgay!=null && $denNgay!=null){
                $tuNgay2 = date("Y-m-d", strtotime($tuNgay));
                $denNgay2 = date("Y-m-d", strtotime($denNgay));
                $danhSachBenhNhan=QlbcKiemSoatBenhTat::select('qlbc_kiem_soat_benh_tat.id','qlbc_kiem_soat_benh_tat.ten_benh_nhan','qlbc_kiem_soat_benh_tat.dia_chi','qlbc_kiem_soat_benh_tat.tuoi', 'gioi_tinh','qlbc_kiem_soat_benh_tat.ma_benh_nhan','qlbc_kiem_soat_benh_tat.ngay_dong_vat_can','qlbc_kiem_soat_benh_tat.muc_do_vet_thuong','qlbc_kiem_soat_benh_tat.cho','qlbc_kiem_soat_benh_tat.meo','qlbc_kiem_soat_benh_tat.doi','qlbc_kiem_soat_benh_tat.dv_khac','qlbc_kiem_soat_benh_tat.dau_mat_co','qlbc_kiem_soat_benh_tat.than','qlbc_kiem_soat_benh_tat.tay','qlbc_kiem_soat_benh_tat.chan','qlbc_kiem_soat_benh_tat.binh_thuong','qlbc_kiem_soat_benh_tat.om','qlbc_kiem_soat_benh_tat.mat_tich','qlbc_kiem_soat_benh_tat.chay_rong','qlbc_kiem_soat_benh_tat.len_con_dai','qlbc_kiem_soat_benh_tat.mui_mot','qlbc_kiem_soat_benh_tat.mui_hai','qlbc_kiem_soat_benh_tat.mui_ba','qlbc_kiem_soat_benh_tat.mui_bon','qlbc_kiem_soat_benh_tat.mui_nam','qlbc_kiem_soat_benh_tat.mui_mot_hai','qlbc_kiem_soat_benh_tat.mui_ba_bon','qlbc_kiem_soat_benh_tat.mui_nam_sau','qlbc_kiem_soat_benh_tat.mui_bay_tam','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_mot','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_hai','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_ba','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_bon','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_nam','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_mot_hai','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_ba_bon','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_nam_sau','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_bay_tam','qlbc_kiem_soat_benh_tat.dau','qlbc_kiem_soat_benh_tat.quang_do','qlbc_kiem_soat_benh_tat.ngay_tiem','qlbc_kiem_soat_benh_tat.tu_mau','qlbc_kiem_soat_benh_tat.phu_ne_sot_cung','qlbc_kiem_soat_benh_tat.sot','qlbc_kiem_soat_benh_tat.kho_chiu','qlbc_kiem_soat_benh_tat.ngua','qlbc_kiem_soat_benh_tat.man_do','qlbc_kiem_soat_benh_tat.dau_co_khop','qlbc_kiem_soat_benh_tat.roi_loan_tieu_hoa','qlbc_kiem_soat_benh_tat.pu_khac','qlbc_kiem_soat_benh_tat.ten_huyet_thanh','qlbc_kiem_soat_benh_tat.tiem_tai_vet_thuong','qlbc_kiem_soat_benh_tat.tiem_bap','qlbc_kiem_soat_benh_tat.di_ung','qlbc_kiem_soat_benh_tat.soc_phan_ve','qlbc_kiem_soat_benh_tat.khac_ghi_ro','qlbc_kiem_soat_benh_tat.ghi_chu', 'qlbc_ngay_kham.id as id_ngay_kham', 'qlbc_ngay_kham.ngay_kham', 'qlbc_ngay_kham.id as la_ngay_tiep_nhan')
                ->rightJoin('qlbc_ngay_kham','qlbc_kiem_soat_benh_tat.id','qlbc_ngay_kham.id_benh_nhan')
                ->where('qlbc_ngay_kham.ngay_kham','>=',$tuNgay2)
                ->where('qlbc_ngay_kham.ngay_kham','<=',$denNgay2)
                ->where('qlbc_ngay_kham.la_ngay_tiep_nhan','=',1)
                ->orderBy('qlbc_kiem_soat_benh_tat.id')
                ->get();

            }else{
                $danhSachBenhNhan=QlbcKiemSoatBenhTat::select('qlbc_kiem_soat_benh_tat.id','qlbc_kiem_soat_benh_tat.ten_benh_nhan','qlbc_kiem_soat_benh_tat.dia_chi','qlbc_kiem_soat_benh_tat.tuoi', 'gioi_tinh','qlbc_kiem_soat_benh_tat.ma_benh_nhan','qlbc_kiem_soat_benh_tat.ngay_dong_vat_can','qlbc_kiem_soat_benh_tat.muc_do_vet_thuong','qlbc_kiem_soat_benh_tat.cho','qlbc_kiem_soat_benh_tat.meo','qlbc_kiem_soat_benh_tat.doi','qlbc_kiem_soat_benh_tat.dv_khac','qlbc_kiem_soat_benh_tat.dau_mat_co','qlbc_kiem_soat_benh_tat.than','qlbc_kiem_soat_benh_tat.tay','qlbc_kiem_soat_benh_tat.chan','qlbc_kiem_soat_benh_tat.binh_thuong','qlbc_kiem_soat_benh_tat.om','qlbc_kiem_soat_benh_tat.mat_tich','qlbc_kiem_soat_benh_tat.chay_rong','qlbc_kiem_soat_benh_tat.len_con_dai','qlbc_kiem_soat_benh_tat.mui_mot','qlbc_kiem_soat_benh_tat.mui_hai','qlbc_kiem_soat_benh_tat.mui_ba','qlbc_kiem_soat_benh_tat.mui_bon','qlbc_kiem_soat_benh_tat.mui_nam','qlbc_kiem_soat_benh_tat.mui_mot_hai','qlbc_kiem_soat_benh_tat.mui_ba_bon','qlbc_kiem_soat_benh_tat.mui_nam_sau','qlbc_kiem_soat_benh_tat.mui_bay_tam','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_mot','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_hai','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_ba','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_bon','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_nam','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_mot_hai','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_ba_bon','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_nam_sau','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_bay_tam','qlbc_kiem_soat_benh_tat.dau','qlbc_kiem_soat_benh_tat.quang_do','qlbc_kiem_soat_benh_tat.ngay_tiem','qlbc_kiem_soat_benh_tat.tu_mau','qlbc_kiem_soat_benh_tat.phu_ne_sot_cung','qlbc_kiem_soat_benh_tat.sot','qlbc_kiem_soat_benh_tat.kho_chiu','qlbc_kiem_soat_benh_tat.ngua','qlbc_kiem_soat_benh_tat.man_do','qlbc_kiem_soat_benh_tat.dau_co_khop','qlbc_kiem_soat_benh_tat.roi_loan_tieu_hoa','qlbc_kiem_soat_benh_tat.pu_khac','qlbc_kiem_soat_benh_tat.ten_huyet_thanh','qlbc_kiem_soat_benh_tat.tiem_tai_vet_thuong','qlbc_kiem_soat_benh_tat.tiem_bap','qlbc_kiem_soat_benh_tat.di_ung','qlbc_kiem_soat_benh_tat.soc_phan_ve','qlbc_kiem_soat_benh_tat.khac_ghi_ro','qlbc_kiem_soat_benh_tat.ghi_chu', 'qlbc_ngay_kham.id as id_ngay_kham', 'qlbc_ngay_kham.ngay_kham', 'qlbc_ngay_kham.id as la_ngay_tiep_nhan')
                ->rightJoin('qlbc_ngay_kham','qlbc_kiem_soat_benh_tat.id','qlbc_ngay_kham.id_benh_nhan')
                ->where('qlbc_ngay_kham.la_ngay_tiep_nhan','=',1)
                ->orderBy('qlbc_kiem_soat_benh_tat.id')
                ->get();
            }
            return view('qlbc.danh-sach-benh-nhan',compact("danhSachBenhNhan",'tuNgay','denNgay')); 
        }

        public function thongKeBaoCao(Request $request){
            $thongKeBaoCao=QlbcKiemSoatBenhTat::all();
            return view('qlbc.thong-ke-bao-cao',compact("thongKeBaoCao")); 
        }

        public function luuBenhNhan(Request $request){
            if($request->ajax()){
                 $data=RequestAjax::all();
                 $luu=QlbcKiemSoatBenhTat::create($data);
                 $luu->ma_benh_nhan=date('ymdhis').$luu->id;
                 $luu->update();

                 $dataNgayKham=array(
                    'id_benh_nhan'=>$luu->id,
                    'ngay_kham'   =>$data['ngay_kham'],
                    'la_ngay_tiep_nhan'=>1
                 );
                 $ngayKham=QlbcNgayKham::create($dataNgayKham);

                 return array('error'=>0);  

            }else{
                return array('error'=>'Phương thức gửi dữ liệu không đúng');
            }  
        }

        public function xoaBenhNhan(Request $request){
            if($request->ajax()){
                 $id=RequestAjax::get("id");
                 $ngayKham=QlbcNgayKham::findOrFail($id);
                 $idBenhNhan=$ngayKham->id_benh_nhan;
                 $nk=$ngayKham->ngay_kham;
                 $laNgayTiepNhan=$ngayKham->la_ngay_tiep_nhan;
                 $ngayKham->delete();
                 // xóa luôn khỏi lưu vết ngày khám....
                 $benhNhan=QlbcKiemSoatBenhTat::findOrFail($idBenhNhan);
                 $benhNhan->delete();
                 return array('error'=>0); 

                 // Bỏ dòng trên thì lưu vết ngày khám
                 /*// trường hợp xóa hết ngày khám của 1 bệnh nhân thì xóa luôn bệnh nhân
                 $checkNgayKham=QlbcNgayKham::where('id_benh_nhan','=',$idBenhNhan)->get()->toArray();
                 if(count($checkNgayKham)<=0){
                    $benhNhan=QlbcKiemSoatBenhTat::findOrFail($idBenhNhan);
                    $benhNhan->delete();
                 }else{
                    if($laNgayTiepNhan==1){
                        $ngayKham2=QlbcNgayKham::findOrFail($checkNgayKham[0]->id);
                        $ngayKham2->la_ngay_tiep_nhan=1;
                        $ngayKham2->update();

                    }
                    $benhNhan=QlbcKiemSoatBenhTat::findOrFail($idBenhNhan);
                    if($benhNhan->mui_mot==$nk){
                        $benhNhan->mui_mot=null;
                    }
                    if($benhNhan->mui_hai==$nk){
                        $benhNhan->mui_hai=null;
                    }
                    if($benhNhan->mui_ba==$nk){
                        $benhNhan->mui_ba=null;
                    }
                    if($benhNhan->mui_bon==$nk){
                        $benhNhan->mui_bon=null;
                    }
                    if($benhNhan->mui_nam==$nk){
                        $benhNhan->mui_nam=null;
                    }


                    if($benhNhan->mui_mot_hai==$nk){
                        $benhNhan->mui_mot_hai=null;
                    }
                    if($benhNhan->mui_ba_bon==$nk){
                        $benhNhan->mui_ba_bon=null;
                    }
                    if($benhNhan->mui_nam_sau==$nk){
                        $benhNhan->mui_nam_sau=null;
                    }
                    if($benhNhan->mui_bay_tam==$nk){
                        $benhNhan->mui_bay_tam=null;
                    }

                    if($benhNhan->ngay_tiem==$nk){
                        $benhNhan->ngay_tiem=null;
                    }

                    $benhNhan->update();
                 }
                 return array('error'=>0);  */
            }else{
                return array('error'=>'Phương thức gửi dữ liệu không đúng');
            }
              
        }
        
        public function loadBenhNhan(Request $request){
            if($request->ajax()){
                 $id=RequestAjax::get("id");
                 $benhNhan=QlbcKiemSoatBenhTat::select('qlbc_kiem_soat_benh_tat.id','qlbc_kiem_soat_benh_tat.ten_benh_nhan','qlbc_kiem_soat_benh_tat.dia_chi','qlbc_kiem_soat_benh_tat.tuoi', 'gioi_tinh','qlbc_kiem_soat_benh_tat.ma_benh_nhan','qlbc_kiem_soat_benh_tat.ngay_dong_vat_can','qlbc_kiem_soat_benh_tat.muc_do_vet_thuong','qlbc_kiem_soat_benh_tat.cho','qlbc_kiem_soat_benh_tat.meo','qlbc_kiem_soat_benh_tat.doi','qlbc_kiem_soat_benh_tat.dv_khac','qlbc_kiem_soat_benh_tat.dau_mat_co','qlbc_kiem_soat_benh_tat.than','qlbc_kiem_soat_benh_tat.tay','qlbc_kiem_soat_benh_tat.chan','qlbc_kiem_soat_benh_tat.binh_thuong','qlbc_kiem_soat_benh_tat.om','qlbc_kiem_soat_benh_tat.mat_tich','qlbc_kiem_soat_benh_tat.chay_rong','qlbc_kiem_soat_benh_tat.len_con_dai','qlbc_kiem_soat_benh_tat.mui_mot','qlbc_kiem_soat_benh_tat.mui_hai','qlbc_kiem_soat_benh_tat.mui_ba','qlbc_kiem_soat_benh_tat.mui_bon','qlbc_kiem_soat_benh_tat.mui_nam','qlbc_kiem_soat_benh_tat.mui_mot_hai','qlbc_kiem_soat_benh_tat.mui_ba_bon','qlbc_kiem_soat_benh_tat.mui_nam_sau','qlbc_kiem_soat_benh_tat.mui_bay_tam','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_mot','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_hai','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_ba','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_bon','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_nam','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_mot_hai','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_ba_bon','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_nam_sau','qlbc_kiem_soat_benh_tat.lo_vac_xin_mui_bay_tam','qlbc_kiem_soat_benh_tat.dau','qlbc_kiem_soat_benh_tat.quang_do','qlbc_kiem_soat_benh_tat.ngay_tiem','qlbc_kiem_soat_benh_tat.tu_mau','qlbc_kiem_soat_benh_tat.phu_ne_sot_cung','qlbc_kiem_soat_benh_tat.sot','qlbc_kiem_soat_benh_tat.kho_chiu','qlbc_kiem_soat_benh_tat.ngua','qlbc_kiem_soat_benh_tat.man_do','qlbc_kiem_soat_benh_tat.dau_co_khop','qlbc_kiem_soat_benh_tat.roi_loan_tieu_hoa','qlbc_kiem_soat_benh_tat.pu_khac','qlbc_kiem_soat_benh_tat.ten_huyet_thanh','qlbc_kiem_soat_benh_tat.tiem_tai_vet_thuong','qlbc_kiem_soat_benh_tat.tiem_bap','qlbc_kiem_soat_benh_tat.di_ung','qlbc_kiem_soat_benh_tat.soc_phan_ve','qlbc_kiem_soat_benh_tat.khac_ghi_ro','qlbc_kiem_soat_benh_tat.ghi_chu', 'qlbc_ngay_kham.id as id_ngay_kham', 'qlbc_ngay_kham.ngay_kham')
                ->rightJoin('qlbc_ngay_kham','qlbc_kiem_soat_benh_tat.id','qlbc_ngay_kham.id_benh_nhan')
                ->where('qlbc_ngay_kham.id','=',$id)
                ->get();
                
                 return array('error'=>0,'thongTinBenhNhan'=>$benhNhan);  
            }else{
                return array('error'=>'Phương thức gửi dữ liệu không đúng');
            }
              
        }


        public function capNhatBenhNhan(RequestAjax $request){
            if(RequestAjax::ajax()){
                $data=RequestAjax::all();
                $id=RequestAjax::get('id');
                $benhNhan=QlbcKiemSoatBenhTat::findOrFail($id);
                $benhNhan->update($data);

                $dataNgayKham=array(
                    'id_benh_nhan'=>$data['id'],
                    'ngay_kham'   =>$data['ngay_kham'],
                    'la_ngay_tiep_nhan'=>1
                );

                QlbcNgayKham::where('id_benh_nhan','=',$data['id'])->update(['la_ngay_tiep_nhan' => 0]);
                $ngayKham=QlbcNgayKham::where('id_benh_nhan','=',$data['id'])->where('ngay_kham','=',$data['ngay_kham'])->get();
                if(count($ngayKham)>0){
                    $ngayKham=$ngayKham[0];
                    $ngayKham->update($dataNgayKham);
                }else{
                    $ngayKham=QlbcNgayKham::create($dataNgayKham);
                }


                return array('error'=>0);
            }
            return array('error'=>"Lỗi!Không đúng phương thức truyền dữ liệu!");
            
         }


        public function xuatExcel($tuNgay=null, $denNgay=null){

            $fileType = \PHPExcel_IOFactory::identify('public/export/excel/excel.xlsx'); // đọc loại file template
            $objReader = \PHPExcel_IOFactory::createReader($fileType);
            $objPHPExcel = $objReader->load('public/export/excel/excel.xlsx'); //load dữ liệu từ file excel luu vao bien $objPHPExcel
            $sqlNgayKham='';
            if($tuNgay!=null && $denNgay!=null){
                $sqlNgayKham= ' and t1.ngay_kham >= "'.$tuNgay.' 00:00:00" and t1.ngay_kham <= "'.$denNgay.' 00:00:00"';
            }
            $data = array();


            $benhNhans=DB::select('select * from qlbc_ngay_kham t1
                left join qlbc_kiem_soat_benh_tat t2 on t1.id_benh_nhan=t2.id where t1.la_ngay_tiep_nhan=1'.$sqlNgayKham);

            $soLuongNam=0;
            $soLuongNu=0;
            $tuoiNhoHon15=0;
            $tuoiTu15den24=0;
            $tuoiTu25den49=0;
            $tuoiLonHon50=0;
            $soNgayNhoHon10=0;
            $soNgayLonHon10=0;
            $cho=0;
            $meo=0;
            $doi=0;
            $dvKhac=0;

            $dauMatCo=0;
            $than=0;
            $tay=0;
            $chan=0;
            $do_1=0;
            $do_2=0;
            $do_3=0;

            $tinhTrangBinhThuong=0;
            $tinhTrangOm=0;
            $tinhTrangChayRongMatTich=0;
            $tinhTrangLenConDai=0;
            $tiemBap=0;
            $tiemTaiVetThuong=0;
            $soLuongTiemHuyetThanh=0;
            foreach ($benhNhans as $key => $benhNhan) {

                // Tính số lượng nam nữ
                if($benhNhan->gioi_tinh==1){
                    $soLuongNam++;
                }
                if($benhNhan->gioi_tinh==0){
                    $soLuongNu++;
                }
                // Tính tuổi
                $ngaySinh = $benhNhan->tuoi;
                $ngaySinh = date("Y-m-d", strtotime($ngaySinh));
                $soTuoi=\Helper::getAge($ngaySinh);
                if($soTuoi<15){
                    $tuoiNhoHon15++;
                }
                if($soTuoi>=15 && $soTuoi<25){
                    $tuoiTu15den24++;
                }
                if($soTuoi>=25 && $soTuoi<50){
                    $tuoiTu25den49++;
                }
                if($soTuoi>=50){
                    $tuoiLonHon50++;
                }

                // Số lượng bệnh nhân <10. hoặc >=10
                $soNgay=\Helper::getDiffDate(substr($benhNhan->ngay_dong_vat_can, 0, 10), substr($benhNhan->ngay_kham, 0, 10));
                $soNgay=$soNgay+1;
                if($soNgay<10){
                    $soNgayNhoHon10++;
                }elseif ($soNgay>=10) {
                    $soNgayLonHon10++;
                }

                if($benhNhan->cho==1){
                    $cho++;
                }
                if ($benhNhan->meo==1) {
                    $meo++;
                }
                if ($benhNhan->doi) {
                    $doi++;
                }
                if($benhNhan->dv_khac!=null){
                    $dvKhac++;
                }

                if($benhNhan->dau_mat_co!=null && $benhNhan->dau_mat_co>0){
                    $dauMatCo++;
                }
                if($benhNhan->than!=null && $benhNhan->than>0){
                    $than++;
                }
                if($benhNhan->tay!=null && $benhNhan->tay>0){
                    $tay++;
                }
                if($benhNhan->chan!=null && $benhNhan->chan>0){
                    $chan++;
                }

                if($benhNhan->muc_do_vet_thuong==1){
                    $do_1++;
                }
                if($benhNhan->muc_do_vet_thuong==2){
                    $do_2++;
                }
                if($benhNhan->muc_do_vet_thuong==3){
                    $do_3++;
                }

                if($benhNhan->binh_thuong==1){
                    $tinhTrangBinhThuong++;
                }
                if($benhNhan->om==1){
                    $tinhTrangOm++;
                }
                if($benhNhan->chay_rong==1 || $benhNhan->mat_tich==1){
                    $tinhTrangChayRongMatTich++;
                }
                if($benhNhan->len_con_dai==1){
                    $tinhTrangLenConDai++;
                }

                if($benhNhan->tiem_bap!=null && $benhNhan->tiem_bap>0){
                    $tiemBap++;
                }
                if($benhNhan->tiem_tai_vet_thuong!=null && $benhNhan->tiem_tai_vet_thuong>0){
                    $tiemTaiVetThuong++;
                }

                if($benhNhan->ngay_tiem!=null){
                    $soLuongTiemHuyetThanh++;
                }


            }
            $data['so_luong_nam']=$soLuongNam;
            $data['so_luong_nu']=$soLuongNu;
            $data['tuoi_nho_hon_15']=$tuoiNhoHon15;
            $data['tuoi_tu_15_24']=$tuoiTu15den24;
            $data['tuoi_tu_25_49']=$tuoiTu25den49;
            $data['tuoi_lon_hon_50']=$tuoiLonHon50;
            $data['so_ngay_nho_hon_10']=$soNgayNhoHon10;
            $data['so_ngay_lon_hon_10']=$soNgayLonHon10;
            $data['cho']=$cho;
            $data['meo']=$meo;
            $data['doi']=$doi;
            $data['dv_khac']=$dvKhac;
            $data['dau_mat_co']=$dauMatCo;
            $data['than']=$than;
            $data['tay']=$tay;
            $data['chan']=$chan;
            $data['do_1']=$do_1;
            $data['do_2']=$do_2;
            $data['do_3']=$do_3;
            $data['binh_thuong']=$tinhTrangBinhThuong;
            $data['om']=$tinhTrangOm;
            $data['chay_rong_mat_tich']=$tinhTrangChayRongMatTich;
            $data['len_con_dai']=$tinhTrangLenConDai;
            $data['tiem_bap']=$tiemBap;
            $data['tiem_tai_vet_thuong']=$tiemTaiVetThuong;
            $data['so_luong_tiem_huyet_thanh']=$tiemTaiVetThuong;

            $this->addDataToExcelFile($objPHPExcel->setActiveSheetIndex(0), $data); //chay ham them du lieu vao excel
         
            $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); //Ham tao moi file excel
         
            //Kiem tra thu muc co ton tai khong, neu khong co thi tao moi
         
            if (!is_dir(public_path('export'))) {
                mkdir(public_path('export'));
            }
         
            if (!is_dir(public_path('export/excel'))) {
                mkdir(public_path('export/excel'));
            }
            //-----------------------------------------------------------
         
            $path = 'export/excel/export.xlsx'; //dat ten cho file excel
         
            $objWriter->save(public_path($path)); //luu file excel vao thu muc
         
            $file = public_path($path);
            return response()->download($file);     
           
        }

        private function addDataToExcelFile ($setCell, $data) //HAM THEM DU LIEU VAO FILE EXCEL        
        {
            $setCell->mergeCells('A1:N1');
            $setCell->mergeCells('A2:N2');
            $setCell->setCellValue('A1',"TRUNG TÂM KIỂM SOÁT BỆNH TẬT TỈNH TRÀ VINH");
            $setCell->setCellValue('A2',"PHÒNG KTV & ĐTDP");  //them du lieu vao cot B

            $setCell->mergeCells('O1:AB1');
            $setCell->setCellValue('O1',"CỘNG HÒA XÃ HỘI CHŨ NGHĨA VIỆT NAM");

            $setCell->mergeCells('O2:AB2');
            $setCell->setCellValue('O2',"Độc lập - Tự do - Hạnh phúc");
            $setCell->mergeCells('O3:AB3');
            $setCell->setCellValue('O3',"Trà Vinh, ngày ".date('d')." tháng ".date('m')." năm  ".date('Y'));

            $setCell->mergeCells('A5:AB5');
            $setCell->setCellValue('A5',"BÁO CÁO TIÊM VẮC XIN PHÒNG DẠI VÀ HUYẾT THANH KHÁNG DẠI");
            $setCell->mergeCells('A6:AB6');
            $setCell->setCellValue('A6',"THÁNG           NĂM     ");

            $setCell->mergeCells('A7:A8');
            $setCell->setCellValue('A7',"STT");
            $setCell->mergeCells('B7:B8');
            $setCell->setCellValue('B7',"Điểm tiêm");
            $setCell->mergeCells('C7:D7');
            $setCell->setCellValue('C7',"Giới");
            $setCell->setCellValue('C8',"Nam");
            $setCell->setCellValue('D8',"Nữ");

            $setCell->mergeCells('E7:H7');
            $setCell->setCellValue('E7',"Tuổi");    
            $setCell->setCellValue('E8',"<15 tuổi");    
            $setCell->setCellValue('F8',"Từ 15 - 24 tuổi");    
            $setCell->setCellValue('G8',"Từ 25 - 49 tuổi");    
            $setCell->setCellValue('H8',">=50 tuổi");    
            $setCell->mergeCells('I7:J7');
            $setCell->setCellValue('I7',"Thời gian");    
            $setCell->setCellValue('I8',"<10 ngày");    
            $setCell->setCellValue('J8',">10 ngày");    

            $setCell->mergeCells('K7:N7');
            $setCell->setCellValue('K7',"Loài động vật"); 
            $setCell->setCellValue('K8',"Chó"); 
            $setCell->setCellValue('L8',"Mèo"); 
            $setCell->setCellValue('M8',"Dơi"); 
            $setCell->setCellValue('N8',"Khác"); 

            $setCell->mergeCells('O7:R7');
            $setCell->setCellValue('O7',"Số người có"); 
            $setCell->setCellValue('O8',"Đầu, mặt, cổ"); 
            $setCell->setCellValue('P8',"Thân"); 
            $setCell->setCellValue('Q8',"Tay"); 
            $setCell->setCellValue('R8',"Chân"); 

            $setCell->mergeCells('S7:U7');
            $setCell->setCellValue('S7',"Số người"); 

            $setCell->setCellValue('S8',"Độ I"); 
            $setCell->setCellValue('T8',"Độ II"); 
            $setCell->setCellValue('U8',"Độ III"); 


            $setCell->mergeCells('V7:Y7');
            $setCell->setCellValue('V7',"Tình trạng"); 

            $setCell->setCellValue('V8',"Bình thường"); 
            $setCell->setCellValue('W8',"Ốm"); 
            $setCell->setCellValue('X8',"Chạy rông"); 
            $setCell->setCellValue('Y8',"Lên cơn dại"); 


            $setCell->mergeCells('Z7:AA7');
            $setCell->setCellValue('Z7',"Số"); 

            $setCell->setCellValue('Z8',"Tiêm bắp"); 
            $setCell->setCellValue('AA8',"Tiêm trong da"); 

            $setCell->mergeCells('AB7:AB8');
            $setCell->setCellValue('AB7',"Số người tiêm HTKD"); 





            $style = array(
                'alignment' => array(
                    'horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                    'vertical' => \PHPExcel_Style_Alignment::VERTICAL_CENTER,
                )
            );

            $setCell->getStyle("A1:H1")->applyFromArray($style);
            $setCell->getStyle("A2:H2")->applyFromArray($style);
            $setCell->getStyle("S1:Z1")->applyFromArray($style);
            $setCell->getStyle("S2:Z2")->applyFromArray($style);
            $setCell->getStyle("S3:Z3")->applyFromArray($style);
            $setCell->getStyle("A5")->applyFromArray($style);
            $setCell->getStyle("A6")->applyFromArray($style);
            $setCell->getStyle("C7")->applyFromArray($style);
            $setCell->getStyle("E7")->applyFromArray($style);
            $setCell->getStyle("I7")->applyFromArray($style);
            $setCell->getStyle("O1")->applyFromArray($style);
            $setCell->getStyle("O2")->applyFromArray($style);
            $setCell->getStyle("O3")->applyFromArray($style);

            $setCell->getStyle("K7")->applyFromArray($style);
            $setCell->getStyle("O7")->applyFromArray($style);
            $setCell->getStyle("S7")->applyFromArray($style);
            $setCell->getStyle("V7")->applyFromArray($style);
            $setCell->getStyle("Z7")->applyFromArray($style);
            $setCell->getStyle("AB7")->applyFromArray($style);

            $setCell->getStyle('C8:AA8')->getAlignment()->setTextRotation(90);
            $setCell->getStyle('A7')->getAlignment()->setTextRotation(90);
            $setCell->getStyle('AB7')->getAlignment()->setTextRotation(90);
            
            foreach(range('A','Z') as $columnID) {
                $setCell->getColumnDimension($columnID)->setWidth(5);
            }

            $setCell->getColumnDimension('AA')->setWidth(5);
            $setCell->getColumnDimension('AB')->setWidth(5);
            $setCell->getColumnDimension('I')->setWidth(5);
            $setCell->getColumnDimension('B')->setWidth(18);

            $setCell->mergeCells('B9:B11');
            $setCell->setCellValue('B9',"TT KSBT TRÀ VINH"); 
            $setCell->setCellValue('B20',"Tổng cộng"); 
            
            /*
            // auto size column
            foreach(range('B','G') as $columnID) {
                $setCell->getColumnDimension($columnID)
                    ->setAutoSize(true);
            }*/
         
            //them duong vien cho du lieu trong file excel         
            $setCell->getStyle("A7:AB20")->applyFromArray(array(
                'borders' => array(
                    'outline' => array(
                        'style' => \PHPExcel_Style_Border::BORDER_THIN,
                        'color' => array('argb' => '000000'),
                        'size' => 1,
                    ),
                    'inside' => array(
                        'style' => \PHPExcel_Style_Border::BORDER_THIN,
                        'color' => array('argb' => '000000'),
                        'size' => 1,
                    ),
                ),
            ));
            $setCell->getStyle("A7:AB7")->getFont()->setBold( true );
            $setCell->getStyle("B9")->getFont()->setBold( true );
            $setCell->getStyle("B20")->getFont()->setBold( true );
            $setCell->getStyle("A1")->getFont()->setBold( true );
            $setCell->getStyle("A2")->getFont()->setBold( true );
            $setCell->getStyle("O1")->getFont()->setBold( true );
            $setCell->getStyle("O2")->getFont()->setBold( true );
            $setCell->getStyle("A5")->getFont()->setBold( true );
            $setCell->getStyle("A6")->getFont()->setBold( true );

            $setCell->getStyle("B9")->applyFromArray($style);
            $setCell->getStyle("B20")->applyFromArray($style);
            $setCell->getStyle("A7")->applyFromArray($style);
            $setCell->getStyle("B7")->applyFromArray($style);



            $setCell->setCellValue('C9',$data['so_luong_nam']);
            $setCell->setCellValue('D9',$data['so_luong_nu']);
            $setCell->setCellValue('E9',$data['tuoi_nho_hon_15']);
            $setCell->setCellValue('F9',$data['tuoi_tu_15_24']);
            $setCell->setCellValue('G9',$data['tuoi_tu_25_49']);
            $setCell->setCellValue('H9',$data['tuoi_lon_hon_50']);
            $setCell->setCellValue('I9',$data['so_ngay_nho_hon_10']);
            $setCell->setCellValue('J9',$data['so_ngay_lon_hon_10']);
            $setCell->setCellValue('K9',$data['cho']);
            $setCell->setCellValue('L9',$data['meo']);
            $setCell->setCellValue('M9',$data['doi']);
            $setCell->setCellValue('N9',$data['dv_khac']);
            $setCell->setCellValue('O9',$data['dau_mat_co']);
            $setCell->setCellValue('P9',$data['than']);
            $setCell->setCellValue('Q9',$data['tay']);
            $setCell->setCellValue('R9',$data['chan']);
            $setCell->setCellValue('S9',$data['do_1']);
            $setCell->setCellValue('T9',$data['do_2']);
            $setCell->setCellValue('U9',$data['do_3']);
            $setCell->setCellValue('V9',$data['binh_thuong']);
            $setCell->setCellValue('W9',$data['om']);
            $setCell->setCellValue('X9',$data['chay_rong_mat_tich']);
            $setCell->setCellValue('Y9',$data['len_con_dai']);
            $setCell->setCellValue('Z9',$data['tiem_bap']);
            $setCell->setCellValue('AA9',$data['tiem_tai_vet_thuong']);
            $setCell->setCellValue('AB9',$data['so_luong_tiem_huyet_thanh']);


            $setCell->setCellValue('C20',$data['so_luong_nam']);
            $setCell->setCellValue('D20',$data['so_luong_nu']);
            $setCell->setCellValue('E20',$data['tuoi_nho_hon_15']);
            $setCell->setCellValue('F20',$data['tuoi_tu_15_24']);
            $setCell->setCellValue('G20',$data['tuoi_tu_25_49']);
            $setCell->setCellValue('H20',$data['tuoi_lon_hon_50']);
            $setCell->setCellValue('I20',$data['so_ngay_nho_hon_10']);
            $setCell->setCellValue('J20',$data['so_ngay_lon_hon_10']);
            $setCell->setCellValue('K20',$data['cho']);
            $setCell->setCellValue('L20',$data['meo']);
            $setCell->setCellValue('M20',$data['doi']);
            $setCell->setCellValue('N20',$data['dv_khac']);
            $setCell->setCellValue('O20',$data['dau_mat_co']);
            $setCell->setCellValue('P20',$data['than']);
            $setCell->setCellValue('Q20',$data['tay']);
            $setCell->setCellValue('R20',$data['chan']);
            $setCell->setCellValue('S20',$data['do_1']);
            $setCell->setCellValue('T20',$data['do_2']);
            $setCell->setCellValue('U20',$data['do_3']);
            $setCell->setCellValue('V20',$data['binh_thuong']);
            $setCell->setCellValue('W20',$data['om']);
            $setCell->setCellValue('X20',$data['chay_rong_mat_tich']);
            $setCell->setCellValue('Y20',$data['len_con_dai']);
            $setCell->setCellValue('Z20',$data['tiem_bap']);
            $setCell->setCellValue('AA20',$data['tiem_tai_vet_thuong']);
            $setCell->setCellValue('AB20',$data['so_luong_tiem_huyet_thanh']);


            $setCell->mergeCells('A22:N22');
            $setCell->setCellValue('A22',"Người Báo Cáo");
            $setCell->mergeCells('O22:AB22');
            $setCell->setCellValue('O22',"TM. PKTV & ĐTDP ");
            $setCell->getStyle("A22")->applyFromArray($style);
            $setCell->getStyle("O22")->applyFromArray($style);

            $setCell->mergeCells('A23:N25');
            $setCell->mergeCells('O23:AB25');
            $setCell->getStyle("A22")->getFont()->setBold( true );
            $setCell->getStyle("o22")->getFont()->setBold( true );
            //------------------------------------------------------------------
         
            return $this;
        }


    }

?>