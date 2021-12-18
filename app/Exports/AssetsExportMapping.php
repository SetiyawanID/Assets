<?php

namespace App\Exports;

use App\Asset;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class AssetsExportMapping implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // Kembalikan data asse dengan relasinya
        return Asset::with(['user', 'brand', 'location', 'typeAsset'])->get();
    }

    public function map($asset) : array 
    {
        return [
            $asset->id,
            $asset->name,
            $asset->asset_tag,
            $asset->typeAsset->name,
            $asset->brand->name,
            $asset->user->name,
            $asset->serial_number,
            $asset->cost,
            Carbon::parse($asset->purchase_date)->toFormattedDateString(),
            Carbon::parse($asset->warranty_date)->toFormattedDateString(),
            Carbon::parse($asset->created_at)->toFormattedDateString(),
        ];
    }

    public function headings() : array
    {
        return [
            '#',
            'Nama Aset',
            'Asset Tag',
            'Tipe Aset',
            'Merk Aset',
            'Pemilik Aset',
            'Serial Number',
            'Harga',
            'Tanggal Beli',
            'Tanggal Garansi',
            'Tanggal Input',
        ];
    }
}
