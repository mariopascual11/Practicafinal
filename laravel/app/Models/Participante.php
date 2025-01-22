<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model {
    use HasFactory;
    protected $fillable = ['nombre', 'correo'];

    public function eventos() {
        return $this->belongsToMany(Evento::class, 'evento_participante');
    }
}
