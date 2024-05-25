<?php

namespace Database\Seeders;

use App\Enums\MasterDataTypeEnum;
use App\Models\MasterData;
use Illuminate\Database\Seeder;

class MasterDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->job();
    }

    public function job(): void
    {
        $items = [
            'Mahasiswa',
            'Dosen/Peneliti',
            'Pengusaha',
            'Pegawai Perusahaan',
            'Aktivis/ Anggota organisasi non profit atau komunitas di level nasional',
            'Aktivis/ Anggota organisasi non profit atau komunitas di level lokal',
            'Masyarakat lokal yang tidak terafiliasi dengan organisasi di Belitung, Magelang, Malang, dan Mandalika',
        ];

        foreach ($items as $item) {
            MasterData::create([
                'type' => MasterDataTypeEnum::Job(),
                'name' => $item,
                'value' => $item,
            ]);
        }
    }
}
