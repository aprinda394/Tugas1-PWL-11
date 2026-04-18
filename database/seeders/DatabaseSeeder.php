<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\BookshelfSeeder;
use Database\Seeders\BookSeeder;
use Database\Seeders\LoanSeeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
    AdminSeeder::class,
    BookshelfSeeder::class,
    CategorySeeder::class,
    BookSeeder::class,
    LoanSeeder::class,
]);
    }
}