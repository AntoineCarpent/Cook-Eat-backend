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
        Schema::create('recipe_ingredients', function (Blueprint $table) {
            $table->id();
            $table->foreignId("ingredient_id")
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId("recipe_id")
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->decimal('quantity');
            $table->decimal('unit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipe_ingredients');
    }
};
