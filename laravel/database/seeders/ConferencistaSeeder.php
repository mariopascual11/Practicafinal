<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Conferencista;

class ConferencistaSeeder extends Seeder {
    public function run() {
        Conferencista::insert([
            ['nombre' => 'Dr. Roberto Gomez', 'biografia' => 'Experto en Inteligencia Artificial.'],
            ['nombre' => 'Dra. Ana Martínez', 'biografia' => 'Especialista en Ciberseguridad.'],
            ['nombre' => 'Ing. Pedro Ramírez', 'biografia' => 'Experto en Machine Learning.'],
        ]);
    }
}
