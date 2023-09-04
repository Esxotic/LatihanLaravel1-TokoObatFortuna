<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function jenis()
    {
        return $this->belongsTo(JenisObat::class);
    }
    public function umur()
    {
        return $this->belongsTo(Umur::class);
    }
}
