<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrincipalesTable extends Migration
{

    public function up()
    {
        Schema::create('principales', function (Blueprint $table) {
            $table->id(); 
            $table->string('titulo');
            $table->string('descripcion');
            $table->binary('foto')->nullable();
            $table->timestamps();
        });
    }
  
    public function down()
    {
        Schema::dropIfExists('principales');
    }
}
