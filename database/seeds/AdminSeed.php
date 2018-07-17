<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            'first_name' => 'Juan',
            'last_name' => 'Pedroza',
            'email' => 'admin@entrevista.com',
            'password' => \Hash::make('123456'),
            'type' => 'admin'
        ));
    }
}
