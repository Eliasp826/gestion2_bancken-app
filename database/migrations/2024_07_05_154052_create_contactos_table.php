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
        Schema::create('contactos', function (Blueprint $table) {
            $table->id('contacto_id');
            $table->integer('empresas_id');
            $table->string('nombres', 255);
            $table->string('apellidos', 255);
            $table->enum('sexo', ['Masculino','Femenino']);
            $table->string('cargo', 100)->nullable();
            $table->string('correo_electronico', 100);
            $table->string('correo_electronico2', 100)->nullable();
            $table->string('telefono')->default('telefono');
            $table->string('telefono2')->nullable('telefono2');
            $table->string('extension')->nullable('extension');
            $table->string('celular')->nullable('celular');
            $table->date('fecha_nacimiento');
            $table->dateTime('fecha_ingreso')->nullable();
            $table->enum('estatus', ['Activo', 'Inactivo', 'Suspendido'])->default('Activo');
            $table->text('cambios');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactos');
    }
};
