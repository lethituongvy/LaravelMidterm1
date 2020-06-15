<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('books')->insert(
                [
                    'title' => Str::random(10),
                    'author' => $faker->name,
                    'price' => 100000,
                    'release_year' => $faker->numberBetween(1990, 2020)
                ]
            );
        }
    }
}
