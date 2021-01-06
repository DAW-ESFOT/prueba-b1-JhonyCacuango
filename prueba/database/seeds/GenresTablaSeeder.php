<?php

use App\Genre;

use Illuminate\Database\Seeder;

class GenresTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Genre::truncate();
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 50; $i++) {
            Genre::create([
                'name'=> $faker->sentence,

            ]);
        }

    }
}
