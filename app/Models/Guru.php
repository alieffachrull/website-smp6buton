<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Guru extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nip',
        'nama',
        'username',
        'password',
    ];

    protected $hidden = ['password'];

    public function presensis()
    {
        return $this->hasMany(Presensi::class);
    }
}

