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
                'acess' => "admin",
                'morada' => "Helder Neto Lubango",
                'phone' => 946216795,
                'online' => "off",
                'status' => "on",
            ], [
                'name' => "Arminda Dores",
                'email' => "armindadores@gmail.com",
                'password' => Hash::make("olaola"),
                'acess' => "user",
                'morada' => "Chioco Lubango",
                'phone' => 934106583,
                'online' => "off",
                'status' => "on",
            ],
        ]);
    }
}