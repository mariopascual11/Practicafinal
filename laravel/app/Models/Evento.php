<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model {
    use HasFactory;
    
    protected $fillable = ['nombre', 'fecha', 'lugar', 'sala_id', 'conferencista_id'];

    // Relación 1:N con Sala
    public function sala() {
        return $this->belongsTo(Sala::class);
    }

    // Relación N:M con Participantes
    public function participantes() {
        return $this->belongsToMany(Participante::class, 'evento_participante');
    }

    // Relación N:M con Temas
    public function temas() {
        return $this->belongsToMany(Tema::class, 'evento_tema');
    }

    // Relación 1:N con Conferencista
    public function conferencista() {
        return $this->belongsTo(Conferencista::class);
    }
}

