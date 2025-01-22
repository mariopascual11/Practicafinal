<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EventoParticipante;

class EventoParticipanteSeeder extends Seeder {
    public function run() {
        EventoParticipante::insert([
            ['evento_id' => 1, 'participante_id' => 1],
            ['evento_id' => 1, 'participante_id' => 2],
            ['evento_id' => 2, 'participante_id' => 3],
        ]);
    }
}

