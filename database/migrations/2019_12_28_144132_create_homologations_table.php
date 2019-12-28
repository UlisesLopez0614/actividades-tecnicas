<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomologationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homologations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('activated');
            $table->string('tecnico');
            $table->string('equipo');
            $table->string('placa');
            $table->string('idgps');
            $table->string('serie');
            $table->string('imei');
            $table->string('sim');
            $table->string('ip');
            $table->string('telefono');
            $table->string('lugar');
            $table->boolean('posicion')->nullable();
            $table->boolean('panico')->nullable();
            $table->boolean('cortemotor')->nullable();
            $table->string('otros')->nullable();
            $table->date('fecha');
            $table->text('observacion')->nullable();
            $table->string('usuario');
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
        Schema::dropIfExists('homologations');
    }
}
