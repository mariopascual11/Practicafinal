<?php
namespace App\Http\Controllers;

use App\Models\Tema;
use Illuminate\Http\Request;

class TemaController extends Controller
{
    public function index()
    {
        return response()->json(Tema::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
        ]);

        $tema = Tema::create($request->all());
        return response()->json($tema, 201);
    }

    public function show($id)
    {
        return response()->json(Tema::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $tema = Tema::findOrFail($id);
        $tema->update($request->all());
        return response()->json($tema);
    }

    public function destroy($id)
    {
        Tema::destroy($id);
        return response()->json(null, 204);
    }
}
