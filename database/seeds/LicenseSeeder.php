<?php

use App\License;
use Illuminate\Database\Seeder;

class LicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        License::create([
            'name' => 'Windows 7 Professional COA',
            'brand_id' => 12,
            'license_number' => 'YKHFT-KW986-GK4PY-FDWFH-7TP9F',
            'user_id' => 4,
            'purchase_date' => '2013-12-09',
            'description' => 'License laptop Pak Anggi untuk kebutuhan upgrade windows 7 Pro'
        ]);
        License::create([
            'name' => 'Windows 10 Pro COA',
            'brand_id' => 12,
            'license_number' => '8N67H-M3CY9-QT6C4-2TR7M-TXYCV',
            'user_id' => 27,
            'purchase_date' => '2019-02-18',
            'description' => 'Upgrade License Windows 10 Home ke Pro Pak Balapati (PM)'
        ]);
        License::create([
            'name' => 'Windows 7 Professional COA',
            'brand_id' => 12,
            'license_number' => '2WCJK-R8B4Y-CWRD2-TRJKB-PV9HW',
            'user_id' => 5,
            'purchase_date' => '2013-02-04',
            'description' => 'Upgrade License Windows 7 Home ke Pro Pak Mahesa (IT Support)'
        ]);
        License::create([
            'name' => 'Windows 7 Professional COA',
            'brand_id' => 12,
            'license_number' => '32KD2-K9CTF-M4DJT-4J3WC-733WD',
            'user_id' => 6,
            'purchase_date' => '2013-01-25',
            'description' => 'Upgrade License Windows 7 Home ke Pro Pak Saiful (IT Support)'
        ]);
        License::create([
            'name' => 'Windows 7 Professional COA',
            'brand_id' => 12,
            'license_number' => 'PT9YK-BC2J9-WZYF9-R9DCR-QB9CK',
            'user_id' => 7,
            'purchase_date' => '2013-01-25',
            'description' => 'Upgrade License Windows 7 Home ke Pro Pak Galar (IT Support)'
        ]);
        License::create([
            'name' => 'Windows 7 Professional COA',
            'brand_id' => 12,
            'license_number' => '237XB-GDJ7C-MV8MH-98QJM-24367',
            'user_id' => 8,
            'purchase_date' => '2013-02-05',
            'description' => 'Upgrade License Windows 7 Home ke Pro Pak Darmana (Network Engineer)'
        ]);
        License::create([
            'name' => 'Windows 10 Pro COA',
            'brand_id' => 12,
            'license_number' => 'W269N-WFGZX-YVC9B-4J6C9-T83GX',
            'user_id' => 37,
            'purchase_date' => '2019-02-25',
            'description' => 'Upgrade License Windows 10 Home ke Pro Pak Prasetyo (PM)'
        ]);
        License::create([
            'name' => 'Windows Server 2012 R2',
            'brand_id' => 12,
            'license_number' => 'G2N9P-3P6X9-2R39C-7RTDD-MDVJX',
            'user_id' => 39,
            'purchase_date' => '2016-05-25',
            'description' => 'Request Pak Petty untuk Server Baru'
        ]);
        License::create([
            'name' => 'Windows Server 2012 R2',
            'brand_id' => 12,
            'license_number' => 'F3GGN-FT7W3-Y5M27-J85CP-Q3VJ9',
            'user_id' => 39,
            'purchase_date' => '2016-05-25',
            'description' => 'Request Pak Petty untuk Server Baru'
        ]);
        License::create([
            'name' => 'Windows 7 Professional COA',
            'brand_id' => 12,
            'license_number' => '74T2M-DKDBC-788W3-H689G-6P6GT',
            'user_id' => 9,
            'purchase_date' => '2013-02-05',
            'description' => 'Upgrade License Windows 10 Home ke Pro Pak Mulya (Network Engineer)'
        ]);
    }
}
