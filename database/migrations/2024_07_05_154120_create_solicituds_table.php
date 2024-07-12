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
        Schema::create('solicituds', function (Blueprint $table) {
            $table->id();
            $table->datetime('fecha_registro')->nullable();
            $table->dateTime('fecha_confirmacion')->nullable();
            $table->enum('empleado', ['Si', 'No'])->default('No');
            $table->text('observaciones')->nullable();
            $table->text('observacion_publica')->nullable();
            $table->enum('estatus', ['Nuevo', 'Rechazada', 'Pendiente', 'Revision', 'Seleccionada', 'Inscripcion', 'Modificada'])->default('Nuevo');
            $table->enum('tipo', ['Empresa', 'Publica', 'Internal', 'Diapora'])->default('publica');
            $table->text('cambios')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicituds');
    }
};
