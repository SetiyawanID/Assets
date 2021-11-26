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
            'name' => 'Router',
            'description' => 'Perangkat jaringan yang digunakan untuk menyambungkan 2 jaringan atau lebih'
        ]);
    }
}
