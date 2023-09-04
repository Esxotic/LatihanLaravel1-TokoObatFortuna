<?php

namespace Database\Seeders;

use App\Models\Umur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UmurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Umur::create([
            'name' => 'Anak-anak'
        ]);
        Umur::create([
            'name' => 'Dewasa'
        ]);
        Umur::create([
            'name' => 'Lansia'
        ]);
    }
}
