<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->year('year');
            $table->string('publisher');
            $table->string('city');
            $table->string('cover')->nullable();

            // SAMAKAN TIPE DENGAN id()
            $table->unsignedBigInteger('bookshelf_id')->nullable();
            $table->unsignedBigInteger('category_id');

            $table->timestamps();
        });

        // FK dibuat SETELAH table (lebih aman)
        Schema::table('books', function (Blueprint $table) {
            $table->foreign('bookshelf_id')
                  ->references('id')
                  ->on('bookshelves')
                  ->nullOnDelete();

            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};