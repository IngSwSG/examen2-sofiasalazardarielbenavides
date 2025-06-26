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
        Schema::create('material_unidad', function (Blueprint $table) {
            $table->id('idMaterialUnidad');
            $table->unsignedBigInteger('idUnidad');
            $table->unsignedBigInteger('idMaterial');
            $table->integer('cantidad');
            $table->foreign('idUnidad')->references('idUnidad')->on('unidades');
            $table->foreign('idMaterial')->references('codigo')->on('materiales');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('material_unidad');
    }
};