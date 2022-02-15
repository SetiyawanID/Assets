<?php

use App\Asset;
use Illuminate\Database\Seeder;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Asset::create([
            'name' => 'Zenbook UX333FN',
            'asset_tag' => 'TTN/ASSETS/2022/IT/YOJTO',
            'user_id' => 2,
            'brand_id' => 2,
            'location_id' => 11,
            'serial_number' => 'PX65SRDF',
            'type_id' => 1,
            'cost' => '13500000',
            'purchase_date' => '2019-12-09',
            'warranty' => '2021-12-08',
            'description' => 'Laptop aset pertama Ahmad Ari Setiyawan',
        ]);

        Asset::create([
            'name' => 'Lenovo V310-3QID',
            'asset_tag' => 'TTN/ASSETS/2017/IT/PMCNR',
            'user_id' => 3,
            'brand_id' => 1,
            'location_id' => 11,
            'serial_number' => 'LR077XN0',
            'type_id' => 1,
            'cost' => '11862728',
            'purchase_date' => '2017-01-31',
            'warranty' => '2018-01-30',
            'description' => 'Laptop aset Gilang Ramadhan',
        ]);

        Asset::create([
            'name' => 'Macbook Pro 2019',
            'asset_tag' => 'TTN/ASSETS/2019/IT/WWIXL',
            'user_id' => 39,
            'brand_id' => 6,
            'location_id' => 3,
            'serial_number' => 'C02ZP0NZLVDG',
            'type_id' => 1,
            'cost' => '23886000',
            'purchase_date' => '2020-03-13',
            'warranty' => '2021-03-12',
            'description' => 'Laptop aset Pak Petty (Manajer IT)',
        ]);

        Asset::create([
            'name' => 'ThinkPad E470',
            'asset_tag' => 'TTN/ASSETS/2017/IT/LMFUD',
            'user_id' => 38,
            'brand_id' => 1,
            'location_id' => 10,
            'serial_number' => 'PF0G14G7',
            'type_id' => 1,
            'cost' => '14795456',
            'purchase_date' => '2017-03-31',
            'warranty' => '2018-03-30',
            'description' => 'Laptop aset Harsana Gunawan',
        ]);

        Asset::create([
            'name' => 'Macbook Pro 2019 Touchbar',
            'asset_tag' => 'TTN/ASSETS/2019/IT/IQAQZ',
            'user_id' => 40,
            'brand_id' => 6,
            'location_id' => 4,
            'serial_number' => 'FVFYQ2MSHV29',
            'type_id' => 1,
            'cost' => '20850000',
            'purchase_date' => '2019-07-19',
            'warranty' => '2020-07-18',
            'description' => 'Laptop aset Murni Sinaga (Manajer Finance)',
        ]);

        Asset::create([
            'name' => 'Lenovo Ideapad C340',
            'asset_tag' => 'TTN/ASSETS/2019/IT/WDULM',
            'user_id' => 4,
            'brand_id' => 1,
            'location_id' => 11,
            'serial_number' => 'MP1Q44DT',
            'type_id' => 1,
            'cost' => '14907273',
            'purchase_date' => '2019-12-28',
            'warranty' => '2022-12-27',
            'description' => 'Laptop aset Anggi M. Saputra (IT Infra Leader)',
        ]);

        Asset::create([
            'name' => 'HP Envy X360 13',
            'asset_tag' => 'TTN/ASSETS/2020/IT/LLDMH',
            'user_id' => 15,
            'brand_id' => 3,
            'location_id' => 5,
            'serial_number' => 'CND0310J04',
            'type_id' => 1,
            'cost' => '16362727',
            'purchase_date' => '2020-09-18',
            'warranty' => '2022-09-17',
            'description' => 'Laptop aset Kiandra (Finance Leader)',
        ]);
    }
}
