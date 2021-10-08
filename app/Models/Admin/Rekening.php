<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    use HasFactory;

    protected $table = 'rekening';
    public $timestamps = true;

    protected $fillable = [
        'id_user',
        'bank',
        'no_hp',
        'no_rek',
        'an_rek',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    public function Usulan()
    {
        return $this->hasOne(Usulan::class, 'id_usulan', 'id');
    }
    
}