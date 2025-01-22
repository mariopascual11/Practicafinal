<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index()
    {
        return response()->json(Evento::with('conferencista', 'sala', 'participantes', 'temas')->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha' => 'required|date',
            'lugar' => 'required|string',
            'sala_id' => 'required|exists:salas,id',
            'conferencista_id' => 'nullable|exists:conferencistas,id'
        ]);

        $evento = Evento::create($request->all());
        return response()->json($evento, 201);
    }

    public function show($id)
    {
        $evento = Evento::with('conferencista', 'sala', 'participantes', 'temas')->findOrFail($id);
        return response()->json($evento);
    }

    public function update(Request $request, $id)
    {
        $evento = Evento::findOrFail($id);

        $request->validate([
            'nombre' => 'string|max:255',
            'fecha' => 'date',
            'lugar' => 'string',
            'sala_id' => 'exists:salas,id',
            'conferencista_id' => 'nullable|exists:conferencistas,id'
        ]);

        $evento->update($request->all());
        return response()->json($evento);
    }

    public function destroy($id)
    {
        Evento::destroy($id);
        return response()->json(null, 204);
    }

    public function inscribirParticipante(Request $request, $eventoId)
{
    $request->validate([
        'participante_id' => 'required|exists:participantes,id'
    ]);

    $evento = Evento::find($eventoId);

    if (!$evento) {
        return response()->json(['message' => 'Evento no encontrado'], 404);
    }

    if ($evento->participantes()->where('participante_id', $request->participante_id)->exists()) {
        return response()->json(['message' => 'El participante ya está inscrito en este evento'], 409);
    }

    $evento->participantes()->attach($request->participante_id);

    return response()->json(['message' => 'Participante inscrito con éxito'], 200);
}

public function listarParticipantes($eventoId)
    {
        // Buscar el evento con los participantes relacionados
        $evento = Evento::with('participantes')->find($eventoId);

        if (!$evento) {
            return response()->json(['message' => 'Evento no encontrado'], 404);
        }

        return response()->json($evento->participantes);
    }

    public function asignarTema(Request $request, Evento $evento)
    {
        $request->validate([
            'tema_id' => 'required|exists:temas,id'
        ]);
    
        $evento->temas()->attach($request->tema_id);
    
        return response()->json(['message' => 'Tema asignado con éxito']);
    }
    
    public function listarTemas($eventoId)
    {
        $evento = Evento::with('temas')->find($eventoId);
    
        if (!$evento) {
            return response()->json(['message' => 'Evento no encontrado'], 404);
        }
    
        return response()->json($evento->temas);
    }

}
