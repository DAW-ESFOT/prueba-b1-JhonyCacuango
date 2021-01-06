<?php

use App\Movie;
use Illuminate\Database\Seeder;

class MoviesTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Movie::truncate();
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 50; $i++) {
            Movie::create([
                'name'=> $faker->sentence,
                'code'=> $faker->sentence,
                'year'=> $faker->year,
                'available'=> $faker->boolean(),

            ]);
        }
    }
}
