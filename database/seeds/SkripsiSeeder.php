<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class SkripsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create ('id_ID');

    
        //membuat data dummy sebanyak 100 data
        for($a = 1;$a<=50; $a++ ){

            //insert data dummy ke dalam database (table) dengan data faker
            DB::table('pengirim')->insert([
                'id_pengirim'=> $faker->numberBetween,
                'nama_pengirim'=>$faker->name,
                'no_telpon'=>$faker->phoneNumber,
                'alamat'=>$faker->address,
            ]);

            DB::table('penerima')->insert([
                'id_penerima'=> $faker->numberBetween,
                'nama_penerima'=>$faker->name,
                'no_telpon'=>$faker->phoneNumber,
                'alamat'=>$faker->address,
            ]);

            DB::table('barang')->insert([
                'id_barang'=> $faker->numberBetween,
                'nama_barang'=>$faker->name,
                'no_telpon'=>$faker->phoneNumber,
                'alamat'=>$faker->address,
            ]);

        }
    }
}
