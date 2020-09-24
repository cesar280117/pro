<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJornadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('jornadas', function (Blueprint $table) {
            $table->id();
            $table->string('id_empresa');
            $table->string('turno');
            $table->string('hora_inicial');
            $table->string('hora_final');
            $table->string('jornada');
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
        Schema::connection('mysql')->dropIfExists('jornadas');
    }
}
