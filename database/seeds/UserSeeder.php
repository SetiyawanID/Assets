<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ari Setiyawan',
            'email' => 'kangari.id@gmail.com',
            'email_verified_at' => now(),
            'role' => 1,
            'job_title' => 'IT Support',
            'password' => bcrypt('ari12345')
        ]);
    
        User::create([
            'name' => 'Gilang',
            'email' => 'gilang@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'job_title' => 'Finance Staff',
            'password' => bcrypt('gilang12345')
        ]);

        User::create([
            'name' => 'Anggi',
            'email' => 'anggi@gmail.com',
            'email_verified_at' => now(),
            'role' => 3,
            'job_title' => 'IT Manajer',
            'password' => bcrypt('anggi12345')
        ]);
        
    }
}
