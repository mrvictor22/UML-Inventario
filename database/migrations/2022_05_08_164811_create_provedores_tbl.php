<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvedoresTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provedores_tbl', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('nombre_empresa');
            $table->string('email');
            $table->string('numer_telefono');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('pais');
            $table->date('provedor_desde')->nullable();
            $table->boolean('enabled')->default(true);
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
        Schema::dropIfExists('provedores_tbl');
    }
}
