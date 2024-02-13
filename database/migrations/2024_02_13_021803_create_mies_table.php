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
        Schema::create('mies', function (Blueprint $table) {
            $table->id();
            $table->string('mie_name', 100);
            $table->foreignId('level_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mies');
    }
};
