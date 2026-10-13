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
            $table->id("Id_Pedido");
            $table->date("FechaPedido");
            $table->enum('Estado', ['Activo', 'Finalizado', 'Cancelado']);
            $table->foreignId('Id_Empleado')->constrained('empleados', 'Id_Empleado');
            $table->foreignId('Id_Cliente')->constrained('clientes', 'Id_Cliente');
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
