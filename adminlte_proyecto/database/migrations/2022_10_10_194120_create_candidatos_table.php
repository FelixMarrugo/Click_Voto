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
        Schema::create('candidatos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("estudiante_id")->unique();
            $table->foreign("estudiante_id")->references("id")->on("estudiantes");

            $table->unsignedBigInteger("cargo_id")->unique();
            $table->foreign("cargo_id")->references("id")->on("cargos");

            $table->unsignedBigInteger("tarjeton_id");
            $table->foreign("tarjeton_id")->references("id")->on("tarjetons");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidatos');
    }
};
