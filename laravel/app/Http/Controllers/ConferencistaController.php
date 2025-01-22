<?php

namespace App\Http\Controllers;

use App\Models\Conferencista;
use Illuminate\Http\Request;

class ConferencistaController extends Controller
{
    public function index()
    {
        return response()->json(Conferencista::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'biografia' => 'required|string',
        ]);

        $conferencista = Conferencista::create($request->all());
        return response()->json($conferencista, 201);
    }

    public function show($id)
    {
        return response()->json(Conferencista::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $conferencista = Conferencista::findOrFail($id);
        $conferencista->update($request->all());
        return response()->json($conferencista);
    }

    public function destroy($id)
    {
        Conferencista::destroy($id);
        return response()->json(null, 204);
    }
}
