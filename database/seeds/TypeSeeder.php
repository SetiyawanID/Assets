<?php

use App\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'name' => 'Laptop',
            'description' => 'Laptop Karyawan HQ/Project'
        ]);

        Type::create([
            'name' => 'Desktop Computer',
            'description' => 'PC Karyawan HQ/Project'
        ]);

        Type::create([
            'name' => 'Router',
            'description' => 'Network Peripheral di HQ'
        ]);

        Type::create([
            'name' => 'Server',
            'description' => 'Di HQ dan Gedung Cyber'
        ]);

        Type::create([
            'name' => 'Access Point',
            'description' => 'Network Peripheral di HQ'
        ]);

        Type::create([
            'name' => 'Hub',
            'description' => 'Network Peripheral di HQ'
        ]);

        Type::create([
            'name' => 'Mouse',
            'description' => 'Laptop/PC Peripheral User'
        ]);

        Type::create([
            'name' => 'Keyboard',
            'description' => 'Laptop/PC Peripheral User'
        ]);

        Type::create([
            'name' => 'Smart TV',
            'description' => 'Untuk Monitoring Server'
        ]);
    }
}
