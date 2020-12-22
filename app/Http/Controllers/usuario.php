<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;

class usuario extends Controller
{
    public function login()
    {
        return view('usuarios.login');
    }

}
