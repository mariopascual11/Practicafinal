<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Participante;

class ParticipanteSeeder extends Seeder {
    public function run() {
        Participante::insert([
            ['nombre' => 'Carlos López', 'correo' => 'carlos@example.com'],
            ['nombre' => 'Maria García', 'correo' => 'maria@example.com'],
            ['nombre' => 'Juan Pérez', 'correo' => 'juan@example.com'],
        ]);
    }
}
