<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternalDetail extends Model
{
    use HasFactory;
    
    protected $fillable =[
       'id_internal','name','jurusan','fakultas', 'no_hp'
        
       ];
       public function internal(){
           return $this->belongsTo(Internal::class, 'id_internal','id');
       }
       
      

}
