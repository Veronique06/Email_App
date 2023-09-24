<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('packs')->insert([
            'title'=> "Gratuit",
            'price' => 1500,
            'nombre_jours' => 7,
            'nombre_contact'=> 3,
        ]);

        DB::table('packs')->insert([
            'title'=> "Prenium",
            'price' => 2500,
            'nombre_jours' => 20,
            'nombre_contact'=> 7,
        ]);

        DB::table('packs')->insert([
            'title'=> "Diamond",
            'price' =>7000,
            'nombre_jours' => 40,
            'nombre_contact'=> 15
        ]);
    }
}
