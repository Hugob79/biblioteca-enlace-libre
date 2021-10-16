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

    public function listadoLibros (Request $request) //esta funcion es para listar los libros
    {
        $genero = $request->get('genero');
        
        $libros = Libro::where('genero', $genero)->get();

        if ($genero == 'novela')
        {
            $genero = "Novela";
        }
        elseif ($genero == 'cuento')
        {
            $genero = "Cuento";
        }
        elseif ($genero == 'ensayo')
        {
            $genero = "Ensayo";
        }
        elseif ($genero == 'poesia')
        {
            $genero = "Poesía";
        }
        else
        {
            $genero = "Sin resuldados";
        }
        return view('libros.listadoPorGenero', ["libros"=>$libros, "genero"=>$genero]);
        //return response()->json('hola');
    }


}