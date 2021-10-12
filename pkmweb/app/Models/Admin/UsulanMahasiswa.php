<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsulanMahasiswa extends Model
{
    use HasFactory;

    protected $table = 'usulan_mahasiswas';
    public $timestamps = true;

    protected $fillable = [
        'id_user',
        'id_usulan',
        'member'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function usulan(){
        return $this->hasOne(Usulan::class, 'id_usulan', 'id');
    }
}
