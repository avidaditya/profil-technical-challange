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

class SolusiExport implements FromCollection, WithMapping, WithHeadings, WithColumnFormatting, ShouldAutoSize
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
            $item->user->name,
            $item->user->email,
            $item->title,
            $item->sektor->sektor,
            $item->solution,
            $item->comment->count(),
            $item->vote->count(),
            $item->type == 0 ? 'Open' : 'Advance',
            $item->location->name,
            $item->created_at ? Date::dateTimeToExcel($item->created_at) : null,
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
            'Judul Ide',
            'Sektor',
            'Konten',
            'Jumlah Komentar',
            'Jumlah Vote',
            'Kategori',
            'Lokasi',
            'Waktu',
        ];
    }

    /**
     * @return array
     */
    public function columnFormats(): array
    {
        return [
            'K' => 'dd mmm yyyy',
        ];
    }
}
