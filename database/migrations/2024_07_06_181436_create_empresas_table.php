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
            $table->unsignedBigInteger('id_empresa')->unique();
            $table->string('nombre');
            $table->string('direccion');
            $table->string('correo')->unique();
            $table->string('telefono');
            $table->timestamps();
    
            $table->primary('id_empresa');
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
