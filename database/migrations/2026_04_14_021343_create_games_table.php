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
    Schema::create('games', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('platform'); // Ex: Steam, PlayStation, Xbox
        $table->integer('active_players'); // Para o "mais jogados"
        $table->integer('weekly_points'); // Simulando pontuação de ranking
        $table->integer('monthly_points');
        $table->integer('yearly_points');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
