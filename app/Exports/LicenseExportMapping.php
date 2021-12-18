<?php

namespace App\Exports;

use App\License;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class LicenseExportMapping implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return License::with(['user', 'brand'])->get();
    }

    public function map($license): array
    {
        return [
            $license->id,
            $license->name,
            $license->user->name,
            $license->brand->name,
            $license->license_number,
            Carbon::parse($license->purchase_date)->toFormattedDateString(),
            Carbon::parse($license->created_at)->toFormattedDateString(),
        ];
    }

    public function headings(): array
    {
        return [
            '#',
            'Nama Lisensi',
            'Owner',
            'Brand',
            'License Number',
            'Tanggal Pembelian',
            'Tanggal Input',
        ];
    }
}
