<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simchanges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('activated');
            $table->string('tecnico');
            $table->string('nombre');
            $table->string('placa');
            $table->string('lugar');
            $table->string('simanterior');
            $table->string('simnuevo');
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
        Schema::dropIfExists('simchanges');
    }
}
