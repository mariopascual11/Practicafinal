<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use Illuminate\Http\Request;

class SalaController extends Controller
{
    public function index()
    {
        return response()->json(Sala::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'capacidad' => 'required|integer',
            'ubicacion' => 'required|string',
        ]);

        $sala = Sala::create($request->all());
        return response()->json($sala, 201);
    }

    public function show($id)
    {
        return response()->json(Sala::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $sala = Sala::findOrFail($id);
        $sala->update($request->all());
        return response()->json($sala);
    }

    public function destroy($id)
    {
        Sala::destroy($id);
        return response()->json(null, 204);
    }
}
