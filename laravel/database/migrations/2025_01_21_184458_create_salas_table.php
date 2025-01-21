<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalasTable extends Migration {
    public function up() {
        Schema::create('salas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('capacidad');
            $table->string('ubicacion');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('salas');
    }
}
