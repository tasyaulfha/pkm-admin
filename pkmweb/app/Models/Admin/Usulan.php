<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usulan extends Model
{
    use HasFactory;

    protected $table = 'usulans';
    public $timestamps = true;

    protected $fillable = [
        'id_user',
        'judul_usulan',
        'skema_usulan',
        'abstrak',
        'url_usulan',
        'nidn_dosen',
        'status_usulan',
        'type'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function details(){
        return $this->hasMany(InternalDetail::class,'id_usulan','id');
    }

    public function dosen(){
        return $this->belongsTo(Dosen::class, 'nidn_dosen','nidn_dosen');
    }
    public function rekening(){
        return $this->belongsTo(Rekening::class, 'id_rekening','id');
    }
    public function usulanMahasiswa()
    {
        return $this->belongsTo(UsulanMahasiswa::class, 'id_usulan_mahasiswa','id');
    }
       
       


}
