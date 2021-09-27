<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internal extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'id' ,
        'id_users' ,
        'nim_mhs',
        'judul_usulan',
        'id_skema',
        'abstrak',
        'url_usulan' ,
        'id_dosen'   ,      
        'tgl_submit'  , 
        'status_usulan'
        
       ];
       public function details(){
           return $this->hasMany(InternalDetail::class, 'id_internal','id');
       }
       public function dosen(){
        return $this->belongsTo(Dosen::class, 'id_dosen','id');
    }
    public function skema(){
        return $this->belongsTo(Dosen::class, 'id_skema','id');
    }
    public function user(){
        return $this->belongsTo(Dosen::class, 'id_users','id');
    }

}
