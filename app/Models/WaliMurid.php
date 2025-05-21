<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
class WaliMurid extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['username', 'password', 'email'];

    protected $hidden = ['password'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'wali_murid_id');
    }
}
