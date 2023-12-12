<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pengajuan extends Model
{
    protected $fillable = [
        'id','instansi','kategori','jenis_pemohon','no_surat','tgl_surat','upload_surat','nama_domain','nama_webapk','dsk_webapk',
        'spk_hosting','hosting','domain','ip_address','metode','spek_webapp','nama_pengaju','kontak','email','keterangan'
     ];
 
     protected $hidden = [
        
     ];

     public function SitusWebsite(){
        return $this->hasMany(SitusWebsete::class);
    }
   
    static function getPengajuan()
    {
      $return = DB::table('pengajuans');
      return $return;  
    }
}
