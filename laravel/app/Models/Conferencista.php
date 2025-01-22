<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conferencista extends Model {
    use HasFactory;
    
    protected $fillable = ['nombre', 'biografia'];

    // Relación 1:N (Un conferencista tiene muchos eventos)
    public function eventos() {
        return $this->hasMany(Evento::class);
    }

    // Relación de conferencista a temas a través de eventos
    public function temas() {
        return $this->hasManyThrough(Tema::class, Evento::class);
    }
}
