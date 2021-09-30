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
        return $this->hasMany(InternalDetail::class,'transaction_id');
    }

}
