<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camion', function (Blueprint $table) {
            $table->id();
            $table->string('placa_camion',6);
            $table->string('marca',25);
            $table->string('color',25);
            $table->string('modelo');
            $table->integer('capacidad_toneladas');
            $table->unsignedBigInteger('transporte_id')->nullable();
            $table->foreign('transporte_id')->references('id')->on('transporte')->onDelete('no action');

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
        Schema::dropIfExists('camion');
    }
}
