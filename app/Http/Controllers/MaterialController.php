<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class MaterialController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'unidadMedida' => 'required|string',
            'descripcion' => 'required|string',
            'ubicacion' => 'required|string',
            'idCategoria' => 'required|exists:categorias,idCategoria',
        ]);

        $material = Material::create($validated);

        return response()->json([
            'message' => 'Material creado correctamente.',
            'material' => $material,
        ], 201);
    }

     public function index()
    {
        $materiales = Material::with('categoria')->get();

        return response()->json([
            'materiales' => $materiales
        ]);
    }


    public function update(Request $request, $id)
    {
        $material = Material::findOrFail($id);

        $validated = $request->validate([
            'unidadMedida' => 'sometimes|string',
            'descripcion' => 'sometimes|string',
            'ubicacion' => 'sometimes|string',
            'idCategoria' => 'sometimes|exists:categorias,idCategoria',
        ]);

        $material->update($validated);

        return response()->json([
            'message' => 'Material actualizado correctamente.',
            'material' => $material
        ]);
    }


}