<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $data = [];

        for ($i = 1; $i <= 50; $i++) {
            $data[] = [
                'title' => $faker->sentence(3),
                'author' => $faker->name,
                'year' => $faker->numberBetween(2010, 2024),
                'publisher' => $faker->company,
                'city' => $faker->city,
                'bookshelf_id' => rand(1, 3),
                'category_id' => rand(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('books')->insert($data);
    }
}