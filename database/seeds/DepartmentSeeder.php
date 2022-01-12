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
            'name' => 'Board of Director',
            'description' => 'Director of PT Thamrin Telekomunikasi Network'
        ]);

        Department::create([
            'name' => 'Executive Secretary',
            'description' => 'BOD Secretary Team'
        ]);

        Department::create([
            'name' => 'Board of Manager',
            'description' => 'Manajers of PT Thamrin Telekomunikasi Network'
        ]);

        Department::create([
            'name' => 'IT Strategy and Planning',
            'description' => 'R&D, IT Sales, Project Manager'
        ]);

        Department::create([
            'name' => 'Business Development',
            'description' => 'Business Analyst, System Analyst, HR'
        ]);

        Department::create([
            'name' => 'IT Infrastructure',
            'description' => 'Network Engineer, System Engineer, IT Support'
        ]);

        Department::create([
            'name' => 'Finance and Purchasing',
            'description' => 'Finance Admin, Purchasing Admin'
        ]);
    }
}
