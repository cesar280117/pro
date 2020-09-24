<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuias2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guias2', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_empleado');
            for ($i = 1; $i <= 36; $i++) {
                $table->string('p'.$i,20)->nullable();
            }
            $table->timestamps();
            $table->foreign('id_empleado')->references('id')->on('empleados')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guias2');
    }
}
