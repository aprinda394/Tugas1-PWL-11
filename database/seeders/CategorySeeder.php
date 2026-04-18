<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            ['category' => 'Teknologi'],
            ['category' => 'Pemrograman'],
            ['category' => 'Database'],
            ['category' => 'Jaringan'],
            ['category' => 'Kecerdasan Buatan'],
            ['category' => 'Sistem Informasi'],
            ['category' => 'Bisnis'],
            ['category' => 'Manajemen'],
            ['category' => 'Novel'],
            ['category' => 'Pendidikan'],
        ]);
    }
}