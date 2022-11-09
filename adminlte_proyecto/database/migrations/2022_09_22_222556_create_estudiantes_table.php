<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->String('identificacion');
            $table->String('nombre');
            $table->String('apellido');
            $table->unsignedBigInteger('cursos_id');
            $table->String('estado');
            $table->foreign('cursos_id')->references('id')->on('cursos');
            $table->String('voto_representante')->nullable();
            $table->String('voto_personeria')->nullable();
            $table->String('voto_contraloria')->nullable();
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
        Schema::dropIfExists('estudiantes');
    }
};
