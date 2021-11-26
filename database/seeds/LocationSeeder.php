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
            'name' => 'Warehouse CC',
            'description' => 'Jl. Iskandar Dinata No. 31, Lenteng Agung, Jakarta Selatan'
        ]);
    }
}
