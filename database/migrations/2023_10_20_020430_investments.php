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
        Schema::create('investments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user');
            $table->bigInteger('capital');
            $table->float('profit')->default(0);
            $table->string('plan');
            $table->string('status')->default('active');
            $table->timestamp('due_at')->nullable(); // New column for due date/time
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("investments");
    }
};
