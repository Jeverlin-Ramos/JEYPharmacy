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
            $table->id();
            $table->unsignedBigInteger('id_usuario');
            $table->dateTime('Fecha_pedido');
            $table->string('Direccion');
            $table->unsignedBigInteger('Estado_pedido');
            $table->string('Opcion_pago');
            $table->integer('Subtotal');
            $table->float('itbis');
            $table->float('Total');
            $table->string('Titular_tarjeta')->nullable();
            $table->String('Numero_tarjeta')->nullable();
            $table->integer('CVV')->nullable();
            $table->string('Fecha_expiracion')->nullable();
            $table->float('Monto_efectivo')->nullable();
            $table->float('Cambio')->nullable();
            $table->text('Comentarios')->nullable();
            $table->unsignedBigInteger('id_empleado')->nullable();
            $table->timestamps();
            $table->foreign('Estado_pedido')->references('id')->on('estado_pedido');
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_empleado')->references('id')->on('empleados');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }

    public function after(): array
    {
        return ['2023_06_06_041802_create__empleados_table'];
    }
};
