<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;

class categorias extends Controller
{
    public function listar()
    {
        $categorias = categoria::all();
        return view('categoria.listado' , compact('categorias'));
    }

    public function create()
    {
        return view('categoria.create');
    }

    public function showC(categoria $categoria)
    {
        return view('categoria.show',compact('categoria'));
    }

    public function saveC(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);
        /*$categoria = new categoria();
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->save();*/
        $categoria = categoria::create($request->all());
        return redirect()->route('categoria.listado',$categoria);
    }

    public function edit(categoria $categoria)
    {
        return view('categoria.edit',compact('categoria'));
    }

    public function editC(Request $request,categoria $categoria)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);
        $categoria->update($request->all());
        return redirect()->route('categoria.show',$categoria);
    }

    public function eliminar(categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categoria.listado');
    }
}
