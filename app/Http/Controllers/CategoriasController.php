<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    public function index()
    {
        $categorias = Categoria::query()->orderBy('id')->get();

        return view('categorias.index')->with('categorias', $categorias);
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $caminhoDaCapa = $request->file('capa')->store('categorias_capa', 'public');
        
        $request->caminhoDaCapa = $caminhoDaCapa;
        Categoria::create([
            'peso' => $request->peso,
            'capa' => $request->caminhoDaCapa,
        ]);

        return to_route('categorias.index')
            ->with('mensagem.sucesso', "Categoria criada com sucesso");
    }

    public function edit(Categoria $categoria)
    {
        return view('categorias.edit')->with('categoria', $categoria);
    }

    public function update(Categoria $categoria, Request $request)
    {
        //
    }

    public function destroy()
    {
        //
    }
}
