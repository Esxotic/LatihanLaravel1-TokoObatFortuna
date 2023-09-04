<?php

namespace Database\Seeders;

use App\Models\obat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        obat::create([
            'nama_obat' => 'Imodium',
            'jenis_id' => 1,
            'umur_id' => 2,
            'harga' => 25000,
            'stok' => 24
        ]);
    }
}
