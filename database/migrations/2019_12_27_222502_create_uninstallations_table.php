<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUninstallationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uninstallations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('activated');
            $table->string('tecnico');
            $table->string('nombre');
            $table->string('placa');
            $table->string('lugar');
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
        Schema::dropIfExists('uninstallations');
    }
}
