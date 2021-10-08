<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternalDetail extends Model
{
    use HasFactory;
    protected $table = "internal_details";
    protected  $primaryKey="id";

    protected $fillable =[
       'id_usulan'
        
       ];

       public function usulan(){
           return $this->belongsTo(Usulan::class, 'id_usulan','id');
       }
     
       
    
      

}
