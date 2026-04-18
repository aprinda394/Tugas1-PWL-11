<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanSeeder extends Seeder
{
    public function run(): void
    {
        $users = DB::table('users')->pluck('npm')->toArray();
        $books = DB::table('books')->pluck('id')->toArray();

        for ($i = 1; $i <= 10; $i++) {

            $loanId = DB::table('loans')->insertGetId([
                'user_npm' => $users[array_rand($users)],
                'loan_at' => now(),
                'return_at' => now()->addDays(7),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // setiap loan 1-3 buku
            $jumlahBuku = rand(1, 3);

            for ($j = 0; $j < $jumlahBuku; $j++) {
                DB::table('loan_detail')->insert([
                    'loan_id' => $loanId,
                    'book_id' => $books[array_rand($books)],
                    'is_return' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}