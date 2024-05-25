<?php

namespace Database\Seeders;

use App\Models\master_sektor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SektorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // master_sektor::truncate();
        //
        $words = [
            'Pertanian dan Perikanan',
            'Lingkungan dan Perubahan Iklim',
            'Pariwisata',
            'Kewirausahaan dan Ketenagakerjaan',
            'Edukasi dan Kesehatan',
            'Kemiskinan dan Ketidaksetaraan',
        ];

        foreach ($words as $word) {
            master_sektor::create([
                'sektor' => $word,
            ]);
        }
    }
}
