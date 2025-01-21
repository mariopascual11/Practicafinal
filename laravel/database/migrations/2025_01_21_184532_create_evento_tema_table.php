<?php

// database/migrations/xxxx_xx_xx_create_evento_tema_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventoTemaTable extends Migration {
    public function up() {
        Schema::create('evento_tema', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evento_id')->constrained('eventos')->onDelete('cascade');
            $table->foreignId('tema_id')->constrained('temas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('evento_tema');
    }
}
