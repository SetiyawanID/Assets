<?php

use App\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'name' => 'IT Operation',
            'description' => 'Divisi IT'
        ]);

        Department::create([
            'name' => 'Finance & Accounting',
            'description' => 'Divisi Finance dan Accounting'
        ]);
    }
}
