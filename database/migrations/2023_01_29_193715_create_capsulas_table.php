<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapsulasTable extends Migration
{
 
    public function up()
    {
        Schema::create('capsulas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->binary('foto')->nullable();
            $table->string('descripcion');
            $table->string('mas_detalles');
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
        Schema::dropIfExists('capsulas');
    }
}
