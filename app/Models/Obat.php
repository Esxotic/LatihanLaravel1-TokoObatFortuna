<?php

namespace App\Models;

use Brick\Math\BigInteger;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Type\Integer;

class Obat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['jenis', 'umur'];

    public function jenis()
    {
        return $this->belongsTo(Jenis::class);
    }
    public function umur()
    {
        return $this->belongsTo(Umur::class);
    }
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
}
