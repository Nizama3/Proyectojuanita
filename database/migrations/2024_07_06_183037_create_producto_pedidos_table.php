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
    Schema::create('producto_pedidos', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_pedido'); // Clave foránea
        $table->unsignedBigInteger('id_producto'); // Clave foránea
        $table->integer('cantidad');
        $table->decimal('total_calculado', 10, 2);
        $table->timestamps();

        // Definir id_pedido como clave foránea
        $table->foreign('id_pedido')->references('id_pedido')->on('pedidos')->onDelete('cascade');

        // Definir id_producto como clave foránea
        $table->foreign('id_producto')->references('id_producto')->on('productos')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_pedidos');
    }
};
