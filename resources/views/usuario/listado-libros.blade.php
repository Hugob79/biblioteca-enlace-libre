@extends('layouts.app')
@section('contenido_app')
<div class="container mt-4">
    <h1>Estas en la seccion del usuario</h1>
    <a href="/ingresarLibro"><i class="fas fa-pen-alt"></i> Ingresar un libro nuevo</a>

    <table class="table table-info table-bordered table-hover">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Genero</th>
                <th>Descripcion</th>
                <th>Tapa</th>
                <th>Descargar</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro )
            <tr>
                <td>{{$libro->titulo}}</td>
                <td>{{$libro->genero}}</td>
                <td>{{$libro->descripcion}}</td>
                <td><img src="{{$libro->imagen}}" width="200px" alt="Libro"></td>
                <td><a href="{{$libro->enlace_libro}}"></a><button class="btn btn-danger">Descargar</button></td>
            </tr>
            @endforeach
        </tbody>
    
    </table>
</div>
@endsection