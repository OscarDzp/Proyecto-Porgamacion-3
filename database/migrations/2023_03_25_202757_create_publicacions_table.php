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
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->id();
            $table->string('tiutlo');
            $table->string('descripcion');
            $table->string('imagen')-> nullable();
            $table->foreignId('idUsuario')->references('id')->on("usuarios");
            $table->foreignId('idReaccion')->references('id')->on("reaccions");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicacions');
    }
};
