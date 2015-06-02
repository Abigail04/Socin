<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductosTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        $faker = Faker::create();

        for($i=0; $i<50; $i++)
        {
            $id=DB::table('productos')->insertGetId([

                'idproduct'    =>  $faker->Text(8),
                'descripcion'   =>  $faker->Text(rand(20,30)),
                'unidad'        =>  $faker->Text(rand(5,15)),
                'precioc'       =>  $faker->numberBetween(100,300),
                'preciov'       =>  $faker->numberBetween(200,700),
                'cantidad'      =>  $faker->numberBetween(1,300),
                'created_at'    =>  $faker->dateTimeThisCentury($max = 'now'),
                'updated_at'    =>  $faker->dateTimeThisCentury($max = 'now'),
            ]);

            DB::table('producto_users')->insert(array(

                'producto_id'   =>  $id,
                'user_id'       =>  $faker->randomElement($array = array ('1','2')),
                'created_at'    =>  $faker->dateTimeThisCentury($max = 'now'),
                'updated_at'    =>  $faker->dateTimeThisCentury($max = 'now'),
            ));
        }






	}

}
