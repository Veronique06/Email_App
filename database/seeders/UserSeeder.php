<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

         for ($i=1; $i <= 100 ; $i++) {

            DB::table('users')->insert([
                'firstname'=> "User_".$i."_name",
                'lastname' => "User_".$i."_prenoms",
                'email' => 'user'.$i.'@gmail.com',
                'password' => Hash::make('12345678'),
            ]);

        }
    }
}
