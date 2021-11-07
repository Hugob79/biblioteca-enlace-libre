@extends('layouts.app')
@section('contenido_app')
<div class="container mt-4">
    <h1>Estás en la sección del usuario</h1>
    <a href="/ingresarLibro"><i class="fas fa-pen-alt"></i> Ingresar un libro nuevo</a>

    <table class="table table-info table-bordered table-hover" id="tabla_resultados">
        <thead>
            <tr>
                <th>Fecha Alta:</th>
                <th>Título</th>
                <th>Género</th>
                <th>Descripción</th>
                <td>Autor</td>
                <th>Tapa</th>
                <th>Descargar</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro )
            <tr>
                <td>{{date("d/m/Y", strtotime($libro->created_at))}}</td>
                <td>{{$libro->titulo}}</td>
                <td>{{$libro->genero}}</td>
                <td>{{$libro->descripcion}}</td>
                <td>{{$libro->autor}}</td>
                <td><img src="{{$libro->imagen}}" width="200px" alt="Libro"></td>
                <td><a href="{{$libro->enlace_libro}}"></a><button class="btn btn-danger">Descargar</button></td>
                <td><button>Modifica (próximamente)</button></td>
                <td>Elimina (próximamente)</td>
            </tr>
            @endforeach
        </tbody>
    
    </table>
</div>
@endsection
