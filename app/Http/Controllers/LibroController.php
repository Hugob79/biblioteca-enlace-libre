<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::all();
        return view('inicio', ['libros'=>$libros]);
    }

    public function novela()
    {
        return view('libros.novela');
    }

    public function cuento()
    {
        return view('libros.cuento');
    }

    public function ensayo()
    {
        return view('libros.ensayo');
    }

    public function poesia()
    {
        return view('libros.poesia');
    }


}
