<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshelfSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('bookshelves')->insert([
            ['code' => 'A1', 'name' => 'Rak A'],
            ['code' => 'B1', 'name' => 'Rak B'],
            ['code' => 'C1', 'name' => 'Rak C'],
        ]);
    }
}