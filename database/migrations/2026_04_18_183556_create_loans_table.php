<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
    Schema::create('loans', function (Blueprint $table) {
    $table->id();

    $table->string('user_npm', 15);

    $table->date('loan_at');
    $table->date('return_at')->nullable();

    $table->timestamps();
});
    }

    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};