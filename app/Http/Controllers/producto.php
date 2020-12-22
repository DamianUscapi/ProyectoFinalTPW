<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class producto extends Controller
{
    public function listar()
    {
        $productos = productos::all();
        /*$productos=DB::table('productos')
        ->join('categoria','categoria.id','=','productos.categoria')
        ->select('productos.id','productos.nombre','categoria.nombre as categoria');*/
        return view('producto.listar' , compact('productos'));
    }

    public function create()
    {
        return view('producto.create');
    }
    public function viewP(productos $producto)
    {
        return view('producto.view',compact('producto'));
    }
    public function saveP(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
            'categoria' => 'required',
            'ruta' => 'required'
        ]);
        if($request->hasFile('ruta'))
        {
            $file = $request->file('ruta');
            $nombre = time().$file->getClientOriginalName();
            $file->move(\public_path().'/imgP/',$nombre);
        }
        $producto = new productos();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->cantidad = $request->cantidad;
        $producto->precio = $request->precio;
        $producto->ruta = $nombre;
        $producto->categoria = $request->categoria;
        $producto->save();
        //$producto = productos::create($request->all());
        return redirect()->route('producto.view',$producto);
    }

    public function edit(productos $producto)
    {
        return view('producto.edit',compact('producto'));
    }

    public function editU(Request $request ,productos $producto)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
            'categoria' => 'required'
        ]);
        if($request->hasFile('ruta'))
        {
            $file = $request->file('ruta');
            $nombre = time().$file->getClientOriginalName();
            $file->move(\public_path().'/imgP/',$nombre);
        }
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->cantidad = $request->cantidad;
        $producto->precio = $request->precio;
        $producto->ruta = $nombre;
        $producto->categoria = $request->categoria;
        $producto->update();
        //$producto->update($request->all());
        return redirect()->route('producto.view',$producto);
    }

    public function eliminar(productos $producto)
    {
        $producto->delete();
        return redirect()->route('producto.listado');
    }
    /*--------------------------------------------------------- */
    public function tortas(){
        return view('productos.tortas');
    }
    public function panes(){
        return view('productos.panes');
    }
}
