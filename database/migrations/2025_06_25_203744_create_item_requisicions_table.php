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
        Schema::create('item_requisicion', function (Blueprint $table) {
            $table->id('idItemRequisicion');
            $table->unsignedBigInteger('idRequisicion');
            $table->unsignedBigInteger('idMaterial');
            $table->integer('cantidad');
            $table->integer('cantidadAprobada');
            $table->timestamps();
            $table->foreign('idRequisicion')->references('idRequisicion')->on('requisiciones')->onDelete('cascade');
            $table->foreign('idMaterial')->references('codigo')->on('materiales')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_requisicion');
    }
};