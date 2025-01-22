<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Evento;

class EventoSeeder extends Seeder {
    public function run() {
        Evento::insert([
            ['nombre' => 'Tech Conference', 'fecha' => '2025-06-15', 'lugar' => 'Madrid', 'sala_id' => 1],
            ['nombre' => 'AI Summit', 'fecha' => '2025-08-20', 'lugar' => 'Barcelona', 'sala_id' => 2],
            ['nombre' => 'Cybersecurity Forum', 'fecha' => '2025-09-10', 'lugar' => 'Sevilla', 'sala_id' => 3],
        ]);
    }
}

