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
        //IT Infrastructure
        //0
        User::create([
            'name' => 'IT Support Internal',
            'email' => 'itsupportthamrin@gmail.com',
            'email_verified_at' => now(),
            'role' => 1,
            'department_id' => 6,
            'job_title' => 'IT Support',
            'password' => bcrypt('12345678')
        ]);
        //1
        User::create([
            'name' => 'Ahmad Ari Setiyawan',
            'email' => 'kangari.id@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 6,
            'job_title' => 'IT Support',
            'password' => bcrypt('ari12345')
        ]);
        //2
        User::create([
            'name' => 'Gilang Ramadhan',
            'email' => 'gilangramadhan20@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 6,
            'job_title' => 'System Engineer',
            'password' => bcrypt('gilang12345')
        ]);
        //3
        User::create([
            'name' => 'Anggi Muhammad Saputra',
            'email' => 'masanggiputra@gmail.com',
            'email_verified_at' => now(),
            'role' => 1,
            'department_id' => 6,
            'job_title' => 'IT Infra Leader',
            'password' => bcrypt('anggi12345')
        ]);
        //4
        User::create([
            'name' => 'Mahesa Dongoran',
            'email' => 'mahesa@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 6,
            'job_title' => 'IT Support',
            'password' => bcrypt('mahesa12345')
        ]);
        //5
        User::create([
            'name' => 'Saiful Saragih',
            'email' => 'saifulsaragih1@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 6,
            'job_title' => 'IT Support',
            'password' => bcrypt('saiful12345')
        ]);
        //6
        User::create([
            'name' => 'Galar Gunarto',
            'email' => 'galar26@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 6,
            'job_title' => 'IT Support',
            'password' => bcrypt('galar12345')
        ]);
        //7
        User::create([
            'name' => 'Darmana Hutasoit',
            'email' => 'darmanahutasoit17@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 6,
            'job_title' => 'Network Engineer',
            'password' => bcrypt('darmana12345')
        ]);
        //8
        User::create([
            'name' => 'Mulya Pratama',
            'email' => 'mulyapratama10@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 6,
            'job_title' => 'Network Engineer',
            'password' => bcrypt('mulya12345')
        ]);
        //9
        User::create([
            'name' => 'Yosef Kurniawan',
            'email' => 'yosefkurniawan10@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 6,
            'job_title' => 'Network Engineer',
            'password' => bcrypt('yosef12345')
        ]);
        //10
        User::create([
            'name' => 'Warji Suryono',
            'email' => 'warjiindo@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 6,
            'job_title' => 'Network Engineer',
            'password' => bcrypt('warji12345')
        ]);
        //11
        User::create([
            'name' => 'Kambali Budiyanto',
            'email' => 'budiyanto256@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 6,
            'job_title' => 'System Engineer',
            'password' => bcrypt('kambali12345')
        ]);
        //12
        User::create([
            'name' => 'Perkasa Irawan',
            'email' => 'perkasarirawan1@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 6,
            'job_title' => 'System Engineer',
            'password' => bcrypt('perkasa12345')
        ]);
        //13
        User::create([
            'name' => 'Jaswadi Situmorang',
            'email' => 'jaswadi45@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 6,
            'job_title' => 'System Engineer',
            'password' => bcrypt('jaswadi12345')
        ]);

        //Finance & Purchasing
        //1
        User::create([
            'name' => 'Kiandra Anggraini',
            'email' => 'kiandraanggraini@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 7,
            'job_title' => 'Finance and Puchasing Leader',
            'password' => bcrypt('kiandra12345')
        ]);
        //2
        User::create([
            'name' => 'Laras Hasanah',
            'email' => 'hasanahlaras@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 7,
            'job_title' => 'Finance Admin',
            'password' => bcrypt('laras12345')
        ]);
        //3
        User::create([
            'name' => 'Mila Utami',
            'email' => 'milautami34@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 7,
            'job_title' => 'Finance Admin',
            'password' => bcrypt('mila12345')
        ]);
        //4
        User::create([
            'name' => 'Paulin Haryanti',
            'email' => 'paulin345@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 7,
            'job_title' => 'Finance Admin',
            'password' => bcrypt('paulin12345')
        ]);
        //5
        User::create([
            'name' => 'Diah Rahmawati',
            'email' => 'diahrahma23@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 7,
            'job_title' => 'Finance Admin',
            'password' => bcrypt('diah12345')
        ]);
        //6
        User::create([
            'name' => 'Rahayu Anggraini',
            'email' => 'rahayuanggraini@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 7,
            'job_title' => 'Finance Admin',
            'password' => bcrypt('rahayu12345')
        ]);
        //7
        User::create([
            'name' => 'Sarah Pertiwi',
            'email' => 'sarahpertiwii@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 7,
            'job_title' => 'Finance Admin',
            'password' => bcrypt('sarah12345')
        ]);
        //8
        User::create([
            'name' => 'Jasmin Purwanti',
            'email' => 'jasminnti@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 7,
            'job_title' => 'Purchasing Staff',
            'password' => bcrypt('jasmin12345')
        ]);
        //9
        User::create([
            'name' => 'Artanto Mustofa',
            'email' => 'artantotofa@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 7,
            'job_title' => 'Purchasing Staff',
            'password' => bcrypt('artanto12345')
        ]);
        
        //Business Development
        //1
        User::create([
            'name' => 'Candrakanta Pranowo',
            'email' => 'pranowocandra@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 5,
            'job_title' => 'Business Development Leader',
            'password' => bcrypt('candrakanta12345')
        ]);
        //2
        User::create([
            'name' => 'Luhung Utama',
            'email' => 'luhung76@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 5,
            'job_title' => 'Business Analyst',
            'password' => bcrypt('luhung12345')
        ]);
        //3
        User::create([
            'name' => 'Dariati Samosir',
            'email' => 'dariatisam@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 5,
            'job_title' => 'Business Analyst',
            'password' => bcrypt('dariati12345')
        ]);
        //4
        User::create([
            'name' => 'Balapati Marbun',
            'email' => 'balapati23@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 5,
            'job_title' => 'System Analyst',
            'password' => bcrypt('balapati12345')
        ]);
        //5
        User::create([
            'name' => 'Patricia Haryanti',
            'email' => 'particia@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 5,
            'job_title' => 'System Analyst',
            'password' => bcrypt('patricia12345')
        ]);
        //6
        User::create([
            'name' => 'Amelia Rahimah',
            'email' => 'ameliarahimah@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 5,
            'job_title' => 'HR',
            'password' => bcrypt('amelia12345')
        ]);
        //7
        User::create([
            'name' => 'Rahmi Halimah',
            'email' => 'rahmihalimah@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 5,
            'job_title' => 'HR',
            'password' => bcrypt('rahmi12345')
        ]);
        //8
        User::create([
            'name' => 'Henry Budiprakoso',
            'email' => 'henrypraks@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 5,
            'job_title' => 'HR',
            'password' => bcrypt('henry12345')
        ]);

        //Business Development
        //1
        User::create([
            'name' => 'Margana Irawan',
            'email' => 'margana@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 4,
            'job_title' => 'IT Strategy and Planning Leader',
            'password' => bcrypt('margana12345')
        ]);
        //2
        User::create([
            'name' => 'Gara Firmansyah',
            'email' => 'firmansyahgara@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 4,
            'job_title' => 'Sales',
            'password' => bcrypt('gara12345')
        ]);
        //3
        User::create([
            'name' => 'Malika Namaga',
            'email' => 'malika12@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 4,
            'job_title' => 'Sales',
            'password' => bcrypt('malika12345')
        ]);
        //4
        User::create([
            'name' => 'Shakila Novitasari',
            'email' => 'shakila11@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 4,
            'job_title' => 'Sales',
            'password' => bcrypt('shakila12345')
        ]);
        //5
        User::create([
            'name' => 'Balapati Mustofa',
            'email' => 'balapati@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 4,
            'job_title' => 'Project Manager',
            'password' => bcrypt('balapati12345')
        ]);
        //6
        User::create([
            'name' => 'Prasetyo Mangunsong',
            'email' => 'm_prasetyo@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 4,
            'job_title' => 'Project Manager',
            'password' => bcrypt('prasetyo12345')
        ]);
        //7
        User::create([
            'name' => 'Harsana Gunawan',
            'email' => 'harsanag@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 4,
            'job_title' => 'Project Manager',
            'password' => bcrypt('harsana12345')
        ]);
        //Manajer
        //1
        User::create([
            'name' => 'Petty',
            'email' => 'petty@gmail.com',
            'email_verified_at' => now(),
            'role' => 3,
            'department_id' => 3,
            'job_title' => 'IT Manager',
            'password' => bcrypt('petty12345')
        ]);
        //2
        User::create([
            'name' => 'Murni Sinaga',
            'email' => 'murnisng@gmail.com',
            'email_verified_at' => now(),
            'role' => 2,
            'department_id' => 3,
            'job_title' => 'Finance & Purchasing Manager',
            'password' => bcrypt('murni12345')
        ]);

    }
}
