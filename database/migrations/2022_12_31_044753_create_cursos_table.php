<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('codigoC');
            $table->enum("areaC", ["General", "Especifico", "Especialidad"]);
            $table->string('nombre');
            $table->enum("cicloC", ["I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X"]);
            $table->enum("tipoC", ["Obligatorio", "Electivo"]);
            $table->integer("horasP");
            $table->integer("horasT");
            $table->integer("horasTotales");
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
        Schema::dropIfExists('cursos');
    }
}
