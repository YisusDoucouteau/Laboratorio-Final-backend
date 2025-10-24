<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
          return response()->json(
    Producto::with('categoria')->orderBy('nombre')->paginate(10), 200
    );
    }

     public function store(Request $r)
    {
        $data = $r->validate([
            'nombre'       => 'required|string|max:150',
            'precio'       => 'required|numeric|min:0',
            'categoria_id' => 'nullable|exists:categorias,id',
        ]);

        $producto = Producto::create($data)->load('categoria');

        return response()->json($producto, 201); // 201 Created
    }
 public function show(string $id)
{
    $producto = Producto::with('categoria')->findOrFail($id); // 404 automático si no existe
    return response()->json($producto, 200);
}

   public function update(Request $request, string $id)
{
    $data = $request->validate([
        'nombre'       => 'sometimes|required|string|max:150',
        'precio'       => 'sometimes|required|numeric|min:0',
        'categoria_id' => 'nullable|exists:categorias,id',
    ]);

    $producto = Producto::findOrFail($id);
    $producto->update($data);

    return response()->json($producto->load('categoria'), 200);
}

public function destroy(string $id)
{
    $producto = Producto::findOrFail($id);
    $producto->delete();

    return response()->json(null, 204);
}
}
