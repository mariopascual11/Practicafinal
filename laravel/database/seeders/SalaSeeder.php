<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Sala;

class SalaSeeder extends Seeder {
    public function run() {
        Sala::insert([
            ['nombre' => 'Auditorio A', 'capacidad' => 200, 'ubicacion' => 'Planta baja'],
            ['nombre' => 'Sala B', 'capacidad' => 150, 'ubicacion' => 'Piso 1'],
            ['nombre' => 'Sala C', 'capacidad' => 100, 'ubicacion' => 'Piso 2'],
        ]);
    }
}

