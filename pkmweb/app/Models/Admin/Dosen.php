<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $fillable= [
        'nidn_dosen',
        'slug',
        'nama_dosen',
        'no_hp'
    ];

    protected $hidden= [
        
    ];
}
