<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\KartuRencanaStudi;
class KartuRencanaStudiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kartu_rencana_studi')->insert([
        [
            'id' => 1,
            'mataKuliah' => 'Kewarganegaraan',
            'semester' => 4,
            'sks' => 2,
            'jam' => 2,
        ],
        [
            'id' => 2,
            'mataKuliah' => 'Analisis dan Desain Berorientasi Objek',
            'semester' => 4,
            'sks' => 2,
            'jam' => 4,
        ],
        [
            'id' => 3,
            'mataKuliah' => 'Manajemen Proyek',
            'semester' => 4,
            'sks' => 2,
            'jam' => 3,
        ],
        [
            'id' => 4,
            'mataKuliah' => 'Proyek 1',
            'semester' => 4,
            'sks' => 3,
            'jam' => 6,
        ],
        [
            'id' => 5,
            'mataKuliah' => 'Business Intelligence',
            'semester' => 4,
            'sks' => 2,
            'jam' => 4,
        ],
        [
            'id' => 6,
            'mataKuliah' => 'Jaringan Komputer',
            'semester' => 4,
            'sks' => 2,
            'jam' => 4,
        ],
        [
            'id' => 7,
            'mataKuliah' => 'Praktikum Jaringan Komputer',
            'semester' => 4,
            'sks' => 2,
            'jam' => 4,
        ],
        [
            'id' => 8,
            'mataKuliah' => 'Pemrograman Web Lanjut',
            'semester' => 4,
            'sks' => 3,
            'jam' => 6,
        ],
        [
            'id' => 9,
            'mataKuliah' => 'Statistik Komputasi',
            'semester' => 4,
            'sks' => 2,
            'jam' => 4,
        ]       
        ]);
    }
}
