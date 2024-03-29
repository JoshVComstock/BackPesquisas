<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateCentrosinfoTable extends Migration
{
    public function up()
    {
        Schema::create('centrosinfo', function (Blueprint $table) {

            $table->id();
            $table->string('centro_diagnostico');
            $table->string('sede');
            $table->string('centro');
            $table->binary('foto')->nullable();
            $table->integer('telefono');
            $table->string('dirreccion');
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
        Schema::dropIfExists('centros');
    }
}
