<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;

class productosController extends Controller
{
    public function tortas(){
        $productos= productos::all();
        return view('productos.tortas' , compact('productos'));
        return view('productos.tortas');
    }
    public function panes(){
        $productos= productos::all();
        return view('productos.panes' , compact('productos'));
        return view('productos.panes');
    }

    /*public function productosCard(){
        $productos= productos::all();
        return view('productos.productosCard' , compact('productos'));
    }*/
}
