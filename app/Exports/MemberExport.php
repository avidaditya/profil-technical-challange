<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class MemberExport implements FromCollection, WithMapping, WithHeadings, WithColumnFormatting, ShouldAutoSize
{
    protected $data;
    protected $number = 1;

    /**
     * @param \Illuminate\Support\Collection $data
     */
    public function __construct(Collection $data)
    {
        $this->data = $data;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $this->data;
    }

    /**
     * @param \Illuminate\Support\Collection $item
     * @return array
     */
    public function map($item): array
    {
        return [
            $this->number++,
            $item['name'],
            $item['email'],
            $item['occupation'],
            $item['created_at'] ? Date::dateTimeToExcel($item['created_at']) : null,
            $item['email_verified_at'] ? Date::dateTimeToExcel($item['email_verified_at']) : null,
            $item['consent_date'] ? Date::dateTimeToExcel($item['consent_date']) : null,
            $item['marketing_consent'] ? 'Setuju' : 'Tidak Setuju',
            $item->solutions->count(),
            $item->comments->count(),
        ];
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'No',
            'Nama Peserta',
            'Email',
            'Pekerjaan',
            'Tanggal Daftar',
            'Tanggal Verifikasi Email',
            'Tanggal Setuju',
            'Persetujuan Marketing',
            'Jumlah Solusi',
            'Jumlah Komentar',
        ];
    }

    /**
     * @return array
     */
    public function columnFormats(): array
    {
        return [
            'E' => 'dd mmm yyyy',
            'F' => 'dd mmm yyyy',
            'G' => 'dd mmm yyyy',
        ];
    }
}
