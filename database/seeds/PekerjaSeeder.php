<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PekerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //data faker indonesia
        $faker = Faker::create ('id_ID');

    
        //membuat data dummy sebanyak 100 data
        for($a = 1;$a<=100; $a++ ){

            //insert data dummy ke dalam database (table) dengan data faker
            DB::table ('pekerja')->insert([
                'nama'=> $faker ->name,
                'alamat'=>$faker->address,
            ]);

        }
    }
}
