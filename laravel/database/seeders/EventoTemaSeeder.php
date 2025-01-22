<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EventoTema;

class EventoTemaSeeder extends Seeder {
    public function run() {
        EventoTema::insert([
            ['evento_id' => 1, 'tema_id' => 1],
            ['evento_id' => 2, 'tema_id' => 2],
            ['evento_id' => 3, 'tema_id' => 3],
        ]);
    }
}
