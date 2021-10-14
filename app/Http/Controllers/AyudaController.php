<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AyudaController extends Controller
{
    public function index()
    {
        return view('ayuda.proyecto');
    }

    public function edita()
    {
        return view('ayuda.edita');
    }

    public function colabora()
    {
        return view('ayuda.colabora');
    }
}
