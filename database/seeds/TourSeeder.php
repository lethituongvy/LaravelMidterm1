<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('tours')->insert(
                [
                    'name' => $faker->name,
                    'image' => 'public/0Wd2hIstU6KvCOIQ1F9aCRdHYpTfNYqGvL9jbxuT.jpeg',
                    'typetour' => Str::random(10),
                    'schedule' => Str::random(10),
                    'depart' => $faker->numberBetween(1, 200),
                    'numberPeople' => $faker->numberBetween(1, 20),
                    'price' => $faker->numberBetween(150000, 2000000)
                ]
            );
        }
    }
}
