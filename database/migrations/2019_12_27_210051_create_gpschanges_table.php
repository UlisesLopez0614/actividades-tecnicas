<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGpschangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gpschanges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('activated');
            $table->string('tecnico');
            $table->string('nombre');
            $table->string('placa');
            $table->string('lugar');
            $table->string('idgpsanterior');
            $table->string('seriegpsanterior');
            $table->string('tipogpsanterior');
            $table->string('idgpsnuevo');
            $table->string('seriegpsnuevo');
            $table->string('imeigpsnuevo');
            $table->string('ipgpsnuevo');
            $table->string('simgpsnuevo');
            $table->string('telefonogpsnuevo');
            $table->string('tipogpsnuevo');
            $table->boolean('posicion')->nullable();
            $table->boolean('panico')->nullable();
            $table->boolean('cortemotor')->nullable();
            $table->string('otros')->nullable();
            $table->date('fecha');
            $table->text('observacion')->nullable();

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
        Schema::dropIfExists('gpschanges');
    }
}
