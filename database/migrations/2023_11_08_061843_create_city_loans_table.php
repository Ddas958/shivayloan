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
        Schema::create('city_loans', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable();
            $table->foreignId('loan_id')->nullable()->constrained('loans')->onUpdate('SET NULL')->onDelete('CASCADE');
            $table->foreignId('city_id')->nullable()->constrained('cities')->onUpdate('SET NULL')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('city_loans');
    }
};
