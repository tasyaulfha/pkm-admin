<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Dosen extends Model
{
    use HasFactory;

    protected $table = "dosens";
    protected  $primaryKey="id";
        
    protected $fillable= [
        'nidn_dosen',
        'nama_dosen',
        'slug',
        'no_hp'
    ];
   

    protected $hidden= [
        
    ];
}
