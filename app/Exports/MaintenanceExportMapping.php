<?php

namespace App\Exports;

use App\Maintenance;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class MaintenanceExportMapping implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Maintenance::with(['asset', 'vendor'])->get();
    }

    public function map($maintenance) : array 
    {
        return [
            $maintenance->id,
            $maintenance->asset->asset_tag,
            $maintenance->vendor->name,
            $maintenance->problem,
            $maintenance->status,
            Carbon::parse($maintenance->created_at)->toFormattedDateString()
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Asset Tag',
            'Vendor',
            'Problem',
            'Status (1 = Pending, 2 = On-going, 3 = Done)',
            'Tanggal Input'
        ];
    }
}
