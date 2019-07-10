<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            'name' => Str::random(10),
            'cpf' => rand(00000000000, mt_getrandmax()),
            'age' => mt_rand(00, 99),
        ]);

         DB::table('patients')->insert([
            'name' => Str::random(10),
            'cpf' => rand(00000000000, mt_getrandmax()),
            'age' => mt_rand(00, 99),
        ]);

          DB::table('patients')->insert([
            'name' => Str::random(10),
            'cpf' => rand(00000000000, mt_getrandmax()),
            'age' => mt_rand(00, 99),
        ]);

           DB::table('patients')->insert([
            'name' => Str::random(10),
            'cpf' => rand(00000000000, mt_getrandmax()),
            'age' => mt_rand(00, 99),
        ]);

            DB::table('patients')->insert([
            'name' => Str::random(10),
           'cpf' => rand(00000000000, mt_getrandmax()),
            'age' => mt_rand(00, 99),
        ]);

             DB::table('patients')->insert([
            'name' => Str::random(10),
            'cpf' => rand(00000000000, mt_getrandmax()),
            'age' => mt_rand(00, 99),
        ]);
    }
}
