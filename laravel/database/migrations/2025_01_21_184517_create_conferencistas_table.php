<?php

// database/migrations/xxxx_xx_xx_create_conferencistas_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConferencistasTable extends Migration {
    public function up() {
        Schema::create('conferencistas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('biografia');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('conferencistas');
    }
}

