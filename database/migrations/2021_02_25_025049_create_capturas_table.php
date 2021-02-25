<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_denuncia');
            $table->binary('imagen');
            $table->foreign('id_denuncia')->references('id')->on('denuncias');
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
        Schema::dropIfExists('capturas');
    }
}
