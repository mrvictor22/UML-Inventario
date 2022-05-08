<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_tbl', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('prod_cod');
            $table->string('marca');
            $table->double('costo', 8, 2);
            $table->double('precio', 8, 2);
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
        Schema::dropIfExists('producto_tbl');
    }
}
