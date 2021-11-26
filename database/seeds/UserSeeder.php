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
            'password' => bcrypt('ari12345'),
        ]);
    }
}
