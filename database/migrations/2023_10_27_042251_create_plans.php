<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table -> string('name');
            $table -> integer('max_deposit') -> default(0);
            $table -> integer('min_deposit') -> default(0);
            $table -> integer('min_return') -> default(0);
            $table -> integer('max_return') -> default(0);
            $table -> integer('gift_bonus') -> default(0);
            $table -> integer('duration') -> default(4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
