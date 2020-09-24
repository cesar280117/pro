<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuias1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guias1', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_empleado');
            for ($i = 1; $i < 20; $i++) {
                $table->string('p'.$i,2)->nullable();
            }
            $table->string('atencion_medica', 2);
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
        Schema::dropIfExists('guias1');
    }
}
