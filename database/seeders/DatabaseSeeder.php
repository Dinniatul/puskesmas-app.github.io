<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pasien;
use App\Models\User;
use App\Models\Dokter;
use App\Models\PoliAnak;
use App\Models\PoliUmum;
use App\Models\Spesialis;
use App\Models\Kategori;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        Spesialis::create([
            'nama' => 'Spesialis Anak'
        ]);

        Spesialis::create([
            'nama' => 'Dokter Gigi'
        ]);

        Spesialis::create([
            'nama' => 'Spesialis Kulit'
        ]);

        Spesialis::create([
            'nama' => 'Spesialis Penyakit Dalam'
        ]);

        Spesialis::create([
            'nama' => 'Spesialis Kandungan'
        ]);

        Spesialis::create([
            'nama' => 'Spesialis THT'
        ]);

        Spesialis::create([
            'nama' => 'Spesialis Mata'
        ]);

        Spesialis::create([
            'nama' => 'Spesialis Gizi'
        ]);

        Spesialis::create([
            'nama' => 'Spesialis Bedah'
        ]);

        Spesialis::create([
            'nama' => 'Dokter Umum'
        ]);

        Kategori::create([
            'nama' => 'Poli Anak'
        ]);

        Kategori::create([
            'nama' => 'Poli Umum'
        ]);

        Kategori::create([
            'nama' => 'Poli Lansia'
        ]);

        Spesialis::create([
            'nama' => 'Poli Ibu Hamil'
        ]);

        Dokter::factory(3)->create();
        Pasien::factory(3)->create();
        PoliAnak::factory(3)->create();
        PoliUmum::factory(3)->create();
        
        

    }
}
