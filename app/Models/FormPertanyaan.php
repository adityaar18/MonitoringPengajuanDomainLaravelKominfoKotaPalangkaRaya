<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormPertanyaan extends Model
{
    protected $fillable = [
        'id','instansi','nama_penanya','email','pertanyaan'
     ];
 
     protected $hidden = [
        
     ];
}
