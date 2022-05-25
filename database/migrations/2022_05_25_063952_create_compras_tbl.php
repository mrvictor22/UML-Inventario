<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras_tbl', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_producto')->nullable();
            $table->integer('producto_id')->nullable();
            $table->foreign('producto_id')->references('id')->on('producto_tbl');
            $table->string('nombre_proveedor')->nullable();
            $table->integer('proovedor_id')->nullable();
            $table->foreign('proovedor_id')->references('id')->on('provedores_tbl');
            $table->text('descripcion')->nullable();
            $table->date('fecha_pedido')->nullable();
            $table->date('fecha_entregado')->nullable();
            $table->boolean('enabled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras_tbl');
    }
}
