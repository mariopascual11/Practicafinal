<?php

// database/migrations/xxxx_xx_xx_create_temas_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemasTable extends Migration {
    public function up() {
        Schema::create('temas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('temas');
    }
}
