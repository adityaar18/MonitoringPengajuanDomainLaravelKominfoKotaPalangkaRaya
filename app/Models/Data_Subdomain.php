<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Data_Subdomain extends Model
{
    protected $fillable = [
        'id','nama_PerangkatDaerah','kategori','nama_subdomain','nama_WebAplikasi','deskripsi','hosting','domain','ip_address','metode','keterangan','update_web',
        'versi_mobile','catatan'
     ];
 
     protected $hidden = [
        
     ];

     public function pengajuan(){
        return $this->belongsTo(Pengajuan::class);
    }

    static function getSubdomain()
    {
      $return = DB::table('data__subdomains');
      return $return;  
    }
}
