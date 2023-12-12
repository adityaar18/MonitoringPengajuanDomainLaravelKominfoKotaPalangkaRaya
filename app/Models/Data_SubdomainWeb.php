<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Data_SubdomainWeb extends Model
{
     protected $fillable = [
        'id','Nama_PerangkatDaerah','kategori','nama_domain','keterangan','update_terakhir','identitas','profil','kebijakan','l_publik','kb_produkhukum',
        'pp_kegiatan','l_aspirasi','kontak','catatan'
     ];
 
     protected $hidden = [
        
     ];

     public function pengajuan(){
        return $this->belongsTo(Pengajuan::class);
    }

    static function getPengajuan()
    {
      $return = DB::table('situs_websetes');
      return $return;  
    }
}
