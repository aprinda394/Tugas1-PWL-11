<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $data = [];
        $usedNpm = [];

        while (count($data) < 30) {

            $angkatan = rand(21, 25);
            $urutan = str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);

            $npm = "55201" . $angkatan . $urutan;

            // biar npm tidak duplikat
            if (in_array($npm, $usedNpm)) {
                continue;
            }

            $usedNpm[] = $npm;

            $data[] = [
                'npm' => $npm,
                'username' => $faker->unique()->userName,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('users')->insert($data);
    }
}