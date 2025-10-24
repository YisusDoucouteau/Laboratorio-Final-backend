<?php

namespace App\Http\Controllers;

use App\Models\Categoria;            // <-- importa el modelo
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index() {
        return response()->json(
            Categoria::orderBy('nombre')->paginate(10)   // <-- Clase, no $categoria
        , 200);
    }

    public function store(Request $r) {
        $data = $r->validate(['nombre'=>'required|string|max:100|unique:categorias,nombre']);
        return response()->json(Categoria::create($data), 201);
    }

    public function show(Categoria $categoria) {
        return response()->json($categoria, 200);
    }

    public function update(Request $r, Categoria $categoria) {
        $data = $r->validate(['nombre'=>"required|string|max:100|unique:categorias,nombre,{$categoria->id}"]);
        $categoria->update($data);
        return response()->json($categoria, 200);
    }

    public function destroy(Categoria $categoria) {
        $categoria->delete();
        return response()->json(null, 204);
    }
}
