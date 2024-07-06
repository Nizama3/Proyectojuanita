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
    Schema::create('pedidos', function (Blueprint $table) {
        $table->id('id_pedido'); // Clave primaria autoincremental
        $table->date('fecha_pedido');
        $table->unsignedBigInteger('id_cliente'); // Clave foránea
        $table->unsignedBigInteger('id_empleado'); // Clave foránea
        $table->timestamps();

        // Definir id_cliente como clave foránea
        $table->foreign('id_cliente')->references('id_cliente')->on('clientes')->onDelete('cascade');

        // Definir id_empleado como clave foránea
        $table->foreign('id_empleado')->references('id_empleado')->on('empleados')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
