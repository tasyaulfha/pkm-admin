<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Dosen extends Model
{
    use HasFactory;

    protected $table = "dosens";
    protected  $primaryKey="nidn_dosen";
        
    protected $fillable= [
        'nidn_dosen',
        'nama_dosen',
        'slug',
        'no_hp'
    ];
   

    protected $hidden= [
        
    ];

    public function usulan(){
        return $this->hasMany(Usulan::class, 'id_usulan');
    }
}
