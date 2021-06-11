<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QlbcNgayKham extends Model
{
    protected $table='qlbc_ngay_kham';
    protected $fillable=['id','id_benh_nhan', 'ngay_kham', 'la_ngay_tiep_nhan'];
    //protected $hidden=[''] // danh sách các trường muốn ẩn
    public $timestamps=false;
}
