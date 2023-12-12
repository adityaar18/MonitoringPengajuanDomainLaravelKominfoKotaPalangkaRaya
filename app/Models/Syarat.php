<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Syarat extends Model
{
    protected $fillable = [
        'id','admin','judul','deskripsi','prosedur','syarat'
     ];
 
     protected $hidden = [
        
     ];

     public function admin(){
        return $this->belongsTo(User::class);
    }

    static function getSyarat()
    {
      $return = DB::table('syarats');
      return $return;  
    }
}
