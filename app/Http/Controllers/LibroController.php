<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Libro;


class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::Paginate(2);
        return view('inicio', ['libros'=>$libros]);
    }

    public function listadoLibros (Request $request) //esta funcion es para listar los libros
    {
        $genero = $request->get('genero');
        
        //$libros = Libro::where('genero', $genero)->get();
        $libros = DB::table('libros as lib')
        ->join('users AS usu', 'lib.usuario', '=', 'usu.id')
        ->select('lib.titulo AS titulo', 'lib.genero AS genero', 'lib.descripcion AS descripcion', 
        'lib.imagen AS imagen', 'lib.enlace_libro AS enlace_libro', 'usu.name AS autor')
        ->where('lib.genero', $genero)
        ->get();

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
            $genero = "Sin resultados";
        }
        return view('libros.listadoPorGenero', ["libros"=>$libros, "genero"=>$genero]);
        //return response()->json('hola');
    }


}