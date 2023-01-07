<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->integer("dniD");
            $table->string('gradoD');
            $table->string('nombresD');
            $table->string('apellidosD');
            $table->enum("tipoD", ["Investigador", "Docente"]);
            $table->string('cargoD');
            $table->enum("categoriaD", ["Principal", "Asociado", "Auxiliar"]);
            $table->integer('celularD');
            $table->string('correoD');
            //$table->time("HorasLectivas");
            //$table->time("HorasNoLectivas");
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
        Schema::dropIfExists('docentes');
    }
}

