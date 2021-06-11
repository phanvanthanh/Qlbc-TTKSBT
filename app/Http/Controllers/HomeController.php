<?php

    namespace App\Http\Controllers;

    use App\DanhMucLoi;
    use App\LoaiDanhMuc;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Storage;
    use DB;
    use Auth;
    use Request as RequestAjax;
    class HomeController extends Controller
    {      
        public function home(Request $request){
            $loaiDanhMucs=LoaiDanhMuc::getLoaiDanhMuc();
            return view('welcome',compact('loaiDanhMucs'));
           
        }

        public function loadDmLoiPublic(){
            $tenDmLoi=RequestAjax::get('ten_dm_loi');
            $idLoaiDanhMuc=RequestAjax::get('id_loai_danh_muc');
            
            $danhMucLois=DanhMucLoi::select('dm_loi.id', 'dm_loi.ten_dm_loi', 'huong_xu_ly.ten_huong_xu_ly', 'loai_danh_muc.ten_loai_danh_muc', 'users.name', 'dm_loi.state', 'dm_loi.cach_khac_phuc')
            ->join('users','dm_loi.id_user','=','users.id')
            ->join('huong_xu_ly','dm_loi.id_huong_xu_ly','huong_xu_ly.id')
            ->join('loai_danh_muc','dm_loi.id_loai_danh_muc','=','loai_danh_muc.id')
            ->where('dm_loi.id_huong_xu_ly','=',1);
            if($tenDmLoi){
                $danhMucLois=$danhMucLois->where('dm_loi.ten_dm_loi','like',"%$tenDmLoi%");
            }
            if($idLoaiDanhMuc){
                $danhMucLois=$danhMucLois->where('loai_danh_muc.id','=',$idLoaiDanhMuc);
            }            
            $danhMucLois=$danhMucLois->get()->toArray();
            $view=view('load-welcome', compact('danhMucLois'))->render();             
            return response()->json(['html'=>$view]);
        }


        public function chiTietDmLoi(Request $request){
            $id=$request->id;
            $danhMucLoi=DanhMucLoi::select('dm_loi.id', 'dm_loi.ten_dm_loi', 'huong_xu_ly.ten_huong_xu_ly', 'loai_danh_muc.ten_loai_danh_muc', 'dm_loi.state', 'dm_loi.mo_ta', 'dm_loi.hinh_anh', 'dm_loi.file', 'dm_loi.yeu_cau', 'dm_loi.cach_khac_phuc', 'ma_yeu_cau')
            ->join('huong_xu_ly','dm_loi.id_huong_xu_ly','huong_xu_ly.id')
            ->join('loai_danh_muc','dm_loi.id_loai_danh_muc','=','loai_danh_muc.id')
            ->where('dm_loi.id','=',$id)
            ->where('id_huong_xu_ly','=',1)
            ->get()->toArray();
            if($danhMucLoi){
                $danhMucLoi=$danhMucLoi[0];    
            }
            else{
                $danhMucLoi=array(); 
            }
            return view('chi-tiet-dm-loi',compact('danhMucLoi'));
        }

        
        
    }
?>