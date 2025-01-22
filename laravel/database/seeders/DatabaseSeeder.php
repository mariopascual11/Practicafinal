<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run() {
        $this->call([
            SalaSeeder::class,
            EventoSeeder::class,
            ParticipanteSeeder::class,
            ConferencistaSeeder::class,
            TemaSeeder::class,
            EventoParticipanteSeeder::class,
            EventoTemaSeeder::class,
        ]);
    }
}
