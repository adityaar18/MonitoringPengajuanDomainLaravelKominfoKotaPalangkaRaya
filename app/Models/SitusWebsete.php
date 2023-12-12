<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SitusWebsete extends Model
{
    protected $fillable = [
        'id','nama_PerangkatDaerah','kategori','nama_subdomain','keterangan','update_terakhir','identitas','profil','kebijakan','l_publik','kb_produkhukum',
        'pp_kegiatan','l_aspirasi','kontak','catatan'
     ];
 
     protected $hidden = [
        
     ];

     public function pengajuan(){
        return $this->belongsTo(Pengajuan::class);
    }

    static function getPengajuan()
    {
      $return = DB::table('pengajuans');
      return $return;  
    }
}
