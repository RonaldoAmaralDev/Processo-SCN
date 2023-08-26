<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UserTableSeeder');

        $this->command->info('Criado usuário na tabela users!');
    }

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array('name' => 'Admin',
                           'email' => 'teste@teste.com.br',
                           'password' => '$2a$12$JNVmjDHfKMMqp0VoPhsUHuOIrnktJ/31PVZoKEecmQvE3Kduotvhm'
                        ));

    }

}
