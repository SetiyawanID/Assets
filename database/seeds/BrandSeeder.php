<?php

use App\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name' => 'Lenovo',
            'description' => 'Terbatas pada tipe Thinkpad'
        ]);
        Brand::create([
            'name' => 'Asus',
            'description' => 'Terbatas pada tipe ROG (Developer)'
        ]);
        Brand::create([
            'name' => 'HP',
            'description' => 'Terbatas pada tipe Envy dan Spectre'
        ]);
        Brand::create([
            'name' => 'Acer',
            'description' => 'Terbatas pada tipe Nitro (Developer)'
        ]);
        Brand::create([
            'name' => 'MSI',
            'description' => 'Terbatas pada tipe GL dan Modern'
        ]);
        Brand::create([
            'name' => 'Apple',
            'description' => 'Terbatas pada tipe Macbook'
        ]);
    }
}
