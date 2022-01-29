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
            'name' => 'NETSOLUSI TEKNOLOGI',
            'address' => 'Mangga Dua Square Lt. 2 Blok B.10-12, Jl. Gunung Sahari Raya No. 1, Jakarta Utara, DKI Jakarta',
            'phone_number' => '081299135036',
            'email' => 'cs@netsolusi-teknologi.com'
        ]);

        Vendor::create([
            'name' => 'Wisesa Perkasa Indonesia',
            'address' => 'Jl.Tebet Dalam 8 No 25, Jakarta Selatan, Jakarta',
            'phone_number' => '08113846573',
            'email' => 'wisesaperkasa@gmail.com'
        ]);

        Vendor::create([
            'name' => 'Lenovo Authorized Partner',
            'address' => 'Grand Shopping Arcade, Podomoro City, Jakarta Barat, Jakarta',
            'phone_number' => '02180637037',
            'email' => 'lenovopartnerpodomoro@gmail.com'
        ]);
    }
}
