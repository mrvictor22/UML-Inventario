<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoBodegaTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_bodega_tbl', function (Blueprint $table) {
            $table->id();
            $table->integer('producto_id')->nullable();
            $table->foreign('producto_id')->references('id')->on('producto_tbl');
            $table->integer('bodega_id');
            $table->foreign('bodega_id')->references('id')->on('bodega_tbl');
            $table->string('ubicacion_codigo');
            $table->integer('cantidad');
            $table->text('nota')->nullable();
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
        Schema::dropIfExists('producto_bodega_tbl');
    }
}
