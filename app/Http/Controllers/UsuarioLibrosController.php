<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Libro;

class UsuarioLibrosController extends Controller
{
    public function index()
    {
        $usuarioID = auth()->id();
    
        $libros = Libro::where('usuario', $usuarioID)->get();
        
        return view('usuario.listado-libros', ['libros'=>$libros]);
    }

    public function ingresarLibro()
    {
        return view ('usuario.ingresarLibro');
    }

    public function recibeLibro(Request $request)
    {
        $request->validate([
            'imagen'=>'image|max:1024|mimes:jpeg,png,jpg',
            'enlace_libro'=>'required|file|max:5000|mimes:pdf',
            'descripcion'=> 'max:255'
        ]);

        $usuarioID = auth()->id();
        $libroNuevo = request()->except('_token');
        //dd($libroNuevo);
      
        if (count($libroNuevo) == 6) //esta es la cantidad del array si no esta la imagen
        {
            $nombreImagen = rand (0, 999) . $request->file('imagen')->getClientOriginalName();
            $urlImagen = "/storage/libros_imagenes/". $nombreImagen;
            $request->file('imagen')->storeAs('public/libros_imagenes', $nombreImagen);
            $libroNuevo['imagen']= $urlImagen;
        }else{
            $libroNuevo['imagen']="/imagenes/sin-imagen.jpg";
        }
       
        if ($libroNuevo['enlace_libro'] != null)
        {
            $nombreLibro = rand (0, 999) . $request->file('enlace_libro')->getClientOriginalName();
            $urlLibro = "/storage/libros_pdf/". $nombreLibro;
            $request->file('enlace_libro')->storeAs('public/libros_pdf', $nombreLibro);
            $libroNuevo['enlace_libro']  = $urlLibro;
        }else{
            return "El libro es obligatorio!";
        }
        $libroNuevo['usuario'] = $usuarioID;
        $libroNuevo['created_at'] = date('Y-m-d H:i:s');
        Libro::insert($libroNuevo);
        
        $usuarioID = auth()->id();
        $libros = Libro::where('usuario', $usuarioID)->get();
        
        return view('usuario.listado-libros', ['libros'=>$libros]);
        //return response()->json($libroNuevo);
        //return view ('usuario.datosCargados');

        
    }
}
