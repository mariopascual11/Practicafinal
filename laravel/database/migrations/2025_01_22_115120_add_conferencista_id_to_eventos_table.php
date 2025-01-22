<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('eventos', function (Blueprint $table) {
            $table->foreignId('conferencista_id')
                  ->nullable()
                  ->constrained('conferencistas')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('eventos', function (Blueprint $table) {
            $table->dropForeign(['conferencista_id']);
            $table->dropColumn('conferencista_id');
        });
    }
};
