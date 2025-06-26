<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('credenciales', function (Blueprint $table) {
            $table->string('nombreUsuario')->primary();
            $table->string('contrasena');
            $table->string('usuario_idUsuario');
            $table->foreign('usuario_idUsuario')->references('idUsuario')->on('usuarios');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credenciales');
    }
};