<?php

use App\Vendor;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vendor::create([
            'name' => 'CV Penguin Importir Merdeka',
            'address' => 'Jl.Kisamaun, Tangerang',
            'phone_number' => '081299135036',
            'email' => 'cs@penguinmerdeka.com'
        ]);
    }
}
