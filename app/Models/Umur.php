<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umur extends Model
{
    use HasFactory;

    public function obats()
    {
        return $this->hasMany(obat::class);
    }
}
