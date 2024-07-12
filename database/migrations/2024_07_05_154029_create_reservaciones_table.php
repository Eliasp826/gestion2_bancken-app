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
        Schema::create('reservaciones', function (Blueprint $table) {
            $table->id('reservacion_id');
            $table->smallInteger('empresas_id')->unsigned();
            $table->tinyInteger('cupo');
            $table->smallInteger('solicitado');
            $table->smallInteger('disponible');
            $table->dateTime('fecha_registro')->nullable();
            $table->dateTime('fecha_vencimiento')->nullable();
            $table->enum('estatus',['Activo','Inactivo','Suspendido'])->default('Activo');
            $table->string('cambios')->nullable();
            $table->text('observaciones')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservaciones');
    }
};
