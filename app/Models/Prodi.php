<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $guarded = [];

    public function dosens()
    {
        return $this->hasMany(Dosen::class);
    }
}
