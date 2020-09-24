<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesucursalesTable extends Migration
{

    public function up()
    {
        Schema::connection('mysql2')->create('sucursales', function (Blueprint $table) {
            $table->id();
            $table->string('id_empresa');
            $table->string('nombre_sucursal')->unique();
            $table->string('contribuyente');
            $table->string('domicilio');
            $table->string('telefono')->unique();
            $table->string('giro_actividad');
            $table->string('concepto_general');
            $table->bigInteger('ims');
            $table->string('curp')->nullable();
            $table->string('registro1')->nullable();
            $table->bigInteger('no_registro1')->nullable();
            $table->string('registro2')->nullable();
            $table->bigInteger('no_registro2')->nullable();
            $table->string('registro3')->nullable();
            $table->bigInteger('no_registro3')->nullable();
            $table->string('logo_sucursal', 1000)->nullable();
            $table->timestamps();
            $table->rememberToken();
            //datos de sesión
            $table->string('email')->unique();
            $table->string('password');

            $table->foreign('id_empresa')->references('id')->on('empresas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->dropIfExists('sucursales');
    }
}
