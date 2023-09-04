<?php

namespace Database\Seeders;

use App\Models\JenisObat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JenisObat::create([
            'name' => 'Bebas'
        ]);
        JenisObat::create([
            'name' => 'Bebas Terbatas'
        ]);
        JenisObat::create([
            'name' => 'Keras'
        ]);
        JenisObat::create([
            'name' => 'Herbal'
        ]);
        JenisObat::create([
            'name' => 'Wajib Apotek'
        ]);
        JenisObat::create([
            'name' => 'Golongan Narkotika'
        ]);
    }
}
