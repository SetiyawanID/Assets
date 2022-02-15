<?php

use App\Department;
use App\Vendor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            LocationSeeder::class,
            DepartmentSeeder::class,
            TypeSeeder::class,
            BrandSeeder::class,
            VendorSeeder::class,
            UserSeeder::class,
            AssetSeeder::class
        ]);
    }
}
