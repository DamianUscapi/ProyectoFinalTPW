<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class infoController extends Controller
{
    public function nosotros(){
        return view('info.nosotros');
    }
    public function contactos(){
        return view('info.contactos');
    }
}
