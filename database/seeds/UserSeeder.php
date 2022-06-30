<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            [
                'name' => "Nicolau NP",
                'email' => "nic340k@gmail.com",
                'password' => Hash::make("babaca"),
                'morada' => "Helder Neto Lubango",
                'phone' => 946216795,
                'status' => "on",
            ], [
                'name' => "Arminda Dores",
                'email' => "armindadores@gmail.com",
                'password' => Hash::make("olaola"),
                'morada' => "Chioco Lubango",
                'phone' => 934106583,
                'status' => "on",
            ],
        ]);
    }
}