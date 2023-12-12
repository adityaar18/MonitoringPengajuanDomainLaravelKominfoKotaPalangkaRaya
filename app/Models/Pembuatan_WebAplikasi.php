<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pembuatan_WebAplikasi extends Model
{
    protected $fillable = [
        'id','nama_PerangkatDaerah','kategori','nama_subdomain','nama_WebAplikasi','deskripsi','spek_web','status','catatan','data_dukung'
     ];
 
     protected $hidden = [
        
     ];
     
     public function pengajuan(){
        return $this->belongsTo(Pengajuan::class);
    }

    static function getPengembang()
    {
      $return = DB::table('pembuatan__web_aplikasis');
      return $return;  
    }
}
