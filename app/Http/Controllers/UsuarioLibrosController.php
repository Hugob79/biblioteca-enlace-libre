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
        //dd($usuarioID);
        $libros = Libro::where('usuario', $usuarioID);
        
        return view('usuario.listado-libros');
    }

    public function ingresarLibro()
    {
        return view ('usuario.ingresarLibro');
    }

    public function recibeLibro(Request $request)
    {
        $libroNuevo = request()->except('_token');
        if ($request->hasFile('imagen')){
            $libroNuevo['imagen']=$request->file('imagen')->store('uploads', 'public');
        }else{
            $libroNuevo['imagen']="/imagenes/sin-imagen.jpg";
        }

        if ($request->hasFile('enlace_libro'))
        {
            $libroNuevo['enlace_libro']=$request->file('enlace_libro')->store('uploads', 'public');
        }else{
            return "El libro es obligatorio!";
        }

        Libro::insert($libroNuevo);
        return response()->json($libroNuevo);

        //return view ('usuario.datosCargados');
    }
}
