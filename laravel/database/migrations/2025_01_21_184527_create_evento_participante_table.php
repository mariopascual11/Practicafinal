<?php

// database/migrations/xxxx_xx_xx_create_evento_participante_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventoParticipanteTable extends Migration {
    public function up() {
        Schema::create('evento_participante', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evento_id')->constrained('eventos')->onDelete('cascade');
            $table->foreignId('participante_id')->constrained('participantes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('evento_participante');
    }
}
