<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->create('empresas', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('rfc')->unique();
            $table->string('nombre_empresa')->unique();
            $table->string('contribuyente');
            $table->string('domicilio');
            $table->string('telefono')->unique();
            $table->string('giro_actividad');
            $table->text('concepto_general');
            $table->bigInteger('ims');
            $table->string('curp')->nullable();
            $table->string('registro1')->nullable();
            $table->bigInteger('no_registro1')->nullable();
            $table->string('registro2')->nullable();
            $table->bigInteger('no_registro2')->nullable();
            $table->string('registro3')->nullable();
            $table->bigInteger('no_registro3')->nullable();
            $table->string('logo_empresa', 1000)->nullable();
            $table->string('db')->unique();
            $table->rememberToken();
            $table->timestamps();
            //datos de sesión
            $table->string('password');
            $table->string('email')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->dropIfExists('empresas');
    }
}
