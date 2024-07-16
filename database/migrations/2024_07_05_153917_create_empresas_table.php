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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id('empresas_id');
            //$table->integer('provincia_id');
            $table->string('nombre_empresa', 100);
            $table->string('direccion', 200);
            $table->string('telefono')->default('telefono');
            $table->string('celular')->nullable('celular');
            $table->string('extension')->nullable('extension');
            $table->string('correo_electronico',100);
            $table->string('url')->default('url');
            $table->string('rnc',20)->nullable();
            $table->text('observaciones')->nullable();
            $table->datetime('fecha_registro')->nullable();
            $table->enum('estatus', ['ACTIVO', 'INACTIVO'])->default('ACTIVO');
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
        Schema::dropIfExists('empresas');
    }
};
