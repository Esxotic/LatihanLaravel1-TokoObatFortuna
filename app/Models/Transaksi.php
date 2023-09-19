<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\MassPrunable;

class Transaksi extends Model
{
    use HasFactory, MassPrunable;

    protected $guarded = ['id'];

    public function obat()
    {
        return $this->belongsTo(Obat::class);
    }
    public function prunable()
    {
        return static::where('created_at', '<=', now()->subDay());
    }
}
