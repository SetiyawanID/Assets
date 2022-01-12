<?php

use App\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::create([
            'name' => 'Ruang Direktur',
            'description' => 'Thamrin Telekomunikasi Network HQ Lt.2'
        ]);
        
        Location::create([
            'name' => 'Area Sekretaris',
            'description' => 'Thamrin Telekomunikasi Network HQ Lt.2 (Depan Ruang Direktur)'
        ]);

        Location::create([
            'name' => 'Ruang Manajer IT',
            'description' => 'Thamrin Telekomunikasi Network HQ Lt.2'
        ]);

        Location::create([
            'name' => 'Ruang Manajer Finance',
            'description' => 'Thamrin Telekomunikasi Network HQ Lt.2'
        ]);

        Location::create([
            'name' => 'Ruang Finance',
            'description' => 'Thamrin Telekomunikasi Network HQ Lt.1'
        ]);

        Location::create([
            'name' => 'Ruang Purchasing',
            'description' => 'Thamrin Telekomunikasi Network HQ Lt.1'
        ]);

        Location::create([
            'name' => 'Ruang HR',
            'description' => 'Thamrin Telekomunikasi Network HQ Lt.1'
        ]);

        Location::create([
            'name' => 'Ruang HR',
            'description' => 'Thamrin Telekomunikasi Network HQ Lt.1'
        ]);

        Location::create([
            'name' => 'Ruang Business dan System Analyst',
            'description' => 'Thamrin Telekomunikasi Network HQ Lt.1'
        ]);

        Location::create([
            'name' => 'Ruang PM dan Sales',
            'description' => 'Thamrin Telekomunikasi Network HQ Lt.2'
        ]);

        Location::create([
            'name' => 'Ruang IT infra',
            'description' => 'Thamrin Telekomunikasi Network HQ Lt.3'
        ]);

        Location::create([
            'name' => 'Modular (Data Center)',
            'description' => 'Thamrin Telekomunikasi Network HQ Lt.3'
        ]);

        Location::create([
            'name' => 'Gudang IT Infra',
            'description' => 'Thamrin Telekomunikasi Network HQ Lt.3'
        ]);

        Location::create([
            'name' => 'Menara Cyber Lt. 2',
            'description' => 'Jl. Kuningan Barat Raya No.8, RT.1/RW.3, Mampang Prapatan, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, 12910'
        ]);
    }
}
