<?php

namespace App\Http\Controllers;
use App\Models\Categoria;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibrosController extends Controller
{
    public function create()
    {
        $categorias = Categoria::all();
        return view('libros.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'isbn' => 'required|string|max:100',
            'autor' => 'required|string|max:255',
            'editorial' => 'required|string|max:255',
            'categoria' => 'required|exists:categorias,id',
        ]);

        $libro = new Libro();
        $libro->nombre = $request->nombre;
        $libro->isbn = $request->isbn;
        $libro->autor = $request->autor;
        $libro->editorial = $request->editorial;
        $libro->categoria_id = $request->categoria;
        $libro->save();

        return redirect()->route('home')->with('success', 'Libro creado exitosamente.');
    }
}
