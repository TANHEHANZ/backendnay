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
        Schema::create('juego', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_juego');
            $table->string('descripcion');
            $table->string('nivel_dificultad');
            $table->string('imagen');
            $table->string('puntuacion');
            $table->foreignId('id_categorias')->constrained('categorias')
            ->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juego');
    }
};
