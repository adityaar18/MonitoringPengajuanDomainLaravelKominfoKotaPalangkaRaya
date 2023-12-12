<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Data_SubdomainHosting extends Model
{
    protected $fillable = [
        'id','nama_PerangkatDaerah','kategori','nama_subdomain','nama_WebAplikasi','deskripsi','spek_hosting','keterangan','update_web','versi_mobile','catatan'
     ];
 
     protected $hidden = [
        
     ];

     public function pengajuan(){
        return $this->belongsTo(Pengajuan::class);
    }

    static function getSubdomainHosting()
    {
      $return = DB::table('data__subdomain_hostings');
      return $return;  
    }
}
