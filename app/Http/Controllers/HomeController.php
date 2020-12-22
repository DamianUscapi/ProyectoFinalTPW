<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;
use App\Models\categoria;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Suppoc|rt\Renderable
     */

    public function __invoke()
    {
        $productos= productos::all();
        return view('home' , compact('productos'));

        return view('home');
    }
    public function validor(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        return view('homeAdminU');  
    }

}
