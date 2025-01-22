<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tema;

class TemaSeeder extends Seeder {
    public function run() {
        Tema::insert([
            ['nombre' => 'Inteligencia Artificial', 'descripcion' => 'Explorando las tendencias en IA.'],
            ['nombre' => 'Ciberseguridad en la nube', 'descripcion' => 'Protección de datos en entornos cloud.'],
            ['nombre' => 'Automatización de procesos', 'descripcion' => 'Cómo la automatización está revolucionando las industrias.'],
        ]);
    }
}
