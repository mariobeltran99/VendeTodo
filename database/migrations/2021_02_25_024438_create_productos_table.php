<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_telefono');
            $table->unsignedBigInteger('id_categoria');
            $table->string('nombre', 150);
            $table->double('precio', 10, 2);
            $table->char('negociable');
            $table->text('descripcion');
            $table->integer('existencia');
            $table->string('foto', 250);
            $table->foreign('id_telefono')->references('id')->on('telefonos');
            $table->foreign('id_categoria')->references('id')->on('categorias');
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
        Schema::dropIfExists('productos');
    }
}
