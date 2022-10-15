<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_types')->delete();

        $data = [
            ['name' => 'Petite maternelle', 'code' => 'PM'],
            ['name' => 'Grande maternelle', 'code' => 'GM'],
            ['name' => 'Cours Initial', 'code' => 'CI'],
            ['name' => 'Cours Préparatoire', 'code' => 'CP'],
            ['name' => 'Cours Elémentaire 1', 'code' => 'CE1'],
            ['name' => 'Cours Elémentaire 2', 'code' => 'CE2'],
            ['name' => 'Cours Moyen 1', 'code' => 'CM1'],
            ['name' => 'Cours Moyen 2', 'code' => 'CM2'],
            ['name' => '6ème', 'code' => '6E'],
            ['name' => '5ème', 'code' => '5E'],
            ['name' => '4ème', 'code' => '4E'],
            ['name' => '3ème', 'code' => '3E'],
            ['name' => '2nd', 'code' => '2ND'],
            ['name' => '1ère', 'code' => '1ERE'],
            ['name' => 'Terminale', 'code' => 'TLE'],
        ];

        DB::table('class_types')->insert($data);

    }
}
