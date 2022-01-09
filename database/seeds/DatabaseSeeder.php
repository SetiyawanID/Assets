<?php

use App\Department;
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
            UserSeeder::class,
            LocationSeeder::class,
            TypeSeeder::class,
            BrandSeeder::class,
            DepartmentSeeder::class
        ]);
    }
}
