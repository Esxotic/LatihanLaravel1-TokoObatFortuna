<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Jenis;
use App\Models\Obat;
use App\Models\Umur;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();
        User::create([
            'email' => 'wayanjerman@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        ]);

        Obat::create([
            'nama_obat' => 'Imodium',
            'jenis_id' => 1,
            'umur_id' => 2,
            'harga' => 25000,
            'stok' => 24,
        ]);

        Umur::create([
            'nama' => 'Anak-anak'
        ]);
        Umur::create([
            'nama' => 'Dewasa'
        ]);
        Umur::create([
            'nama' => 'Lansia'
        ]);

        Jenis::create([
            'nama' => 'Obat Bebas'
        ]);
        Jenis::create([
            'nama' => 'Obat Bebas Terbatas'
        ]);
        Jenis::create([
            'nama' => 'Obat Keras'
        ]);
        Jenis::create([
            'nama' => 'Obat Herbal'
        ]);
        Jenis::create([
            'nama' => 'Obat Wajib Apotek'
        ]);
        Jenis::create([
            'nama' => 'Obat Golongan Narkotika'
        ]);
    }
}
