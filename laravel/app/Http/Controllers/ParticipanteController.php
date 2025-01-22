<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use Illuminate\Http\Request;

class ParticipanteController extends Controller
{
    public function index()
    {
        return response()->json(Participante::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|unique:participantes,correo'
        ]);

        $participante = Participante::create($request->all());

        return response()->json($participante, 201);
    }

    public function show($id)
    {
        $participante = Participante::find($id);

        if (!$participante) {
            return response()->json(['message' => 'Participante no encontrado'], 404);
        }

        return response()->json($participante, 200);
    }

    public function update(Request $request, $id)
    {
        $participante = Participante::findOrFail($id);
        $participante->update($request->all());

        return response()->json($participante, 200);
    }

    public function destroy($id)
    {
        Participante::destroy($id);

        return response()->json(null, 204);
    }
}
