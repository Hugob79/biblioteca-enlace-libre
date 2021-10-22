<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Libro;


class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::latest()->take(12)->get();
        return view('inicio', ['libros'=>$libros]);
    }

    public function novela()
    {
        $genero = "Novela";

        $libros = DB::table('libros as lib')
        ->join('users AS usu', 'lib.usuario', '=', 'usu.id')
        ->select('lib.titulo AS titulo', 'lib.genero AS genero', 'lib.descripcion AS descripcion', 
        'lib.imagen AS imagen', 'lib.enlace_libro AS enlace_libro', 'lib.autor AS autor', 'usu.name AS subido_por')
        ->where('lib.genero', "novela")
        ->Paginate(15);

        return view('libros.listadoPorGenero', ["libros"=>$libros, "genero"=>$genero]);
    }

    public function cuento()
    {
        $genero = "Cuento";
        
        $libros = DB::table('libros as lib')
        ->join('users AS usu', 'lib.usuario', '=', 'usu.id')
        ->select('lib.titulo AS titulo', 'lib.genero AS genero', 'lib.descripcion AS descripcion', 
        'lib.imagen AS imagen', 'lib.enlace_libro AS enlace_libro', 'lib.autor AS autor', 'usu.name AS subido_por')
        ->where('lib.genero', "cuento")
        ->Paginate(15);

        return view('libros.listadoPorGenero', ["libros"=>$libros, "genero"=>$genero]);
    }

    public function ensayo()
    {
        $genero = "Ensayo";
        
        $libros = DB::table('libros as lib')
        ->join('users AS usu', 'lib.usuario', '=', 'usu.id')
        ->select('lib.titulo AS titulo', 'lib.genero AS genero', 'lib.descripcion AS descripcion', 
        'lib.imagen AS imagen', 'lib.enlace_libro AS enlace_libro', 'lib.autor AS autor', 'usu.name AS subido_por')
        ->where('lib.genero', "ensayo")
        ->Paginate(2);

        return view('libros.listadoPorGenero', ["libros"=>$libros, "genero"=>$genero]);
    }

    public function poesia()
    {
        $genero = "Poesía";
        
        $libros = DB::table('libros as lib')
        ->join('users AS usu', 'lib.usuario', '=', 'usu.id')
        ->select('lib.titulo AS titulo', 'lib.genero AS genero', 'lib.descripcion AS descripcion', 
        'lib.imagen AS imagen', 'lib.enlace_libro AS enlace_libro', 'lib.autor AS autor', 'usu.name AS subido_por')
        ->where('lib.genero', "poesia")
        ->Paginate(15);

        return view('libros.listadoPorGenero', ["libros"=>$libros, "genero"=>$genero]);
        //return response()->json('hola');
    }

}