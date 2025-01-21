<?php

// database/migrations/xxxx_xx_xx_create_participantes_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantesTable extends Migration {
    public function up() {
        Schema::create('participantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('correo')->unique();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('participantes');
    }
}
