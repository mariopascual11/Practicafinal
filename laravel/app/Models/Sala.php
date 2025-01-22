<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model {
    use HasFactory;
    protected $fillable = ['nombre', 'capacidad', 'ubicacion'];

    public function evento() {
        return $this->hasOne(Evento::class);
    }
}
