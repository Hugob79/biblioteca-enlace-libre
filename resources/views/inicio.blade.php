@extends('layouts.app')
@section('contenido_app')
    <div class="alert-warning m-3 p-3">
        <h5 align="center">Bienvenido a la Biblioteca de publicaciones con licenias libres</h5>
    </div>
<div class="fondo_principal">
<img src="/imagenes/vaguito.png" alt="Hombre Leyendo...">
</div>
    <div class="m-3 p-3">
    <h4>Últimos libros añadidos</h4>
    
        @foreach ($libros as $libro )
        <div class="card p-3 m-1" style="width: 18rem; float:left; border: solid 2px green;">
            <img src="{{$libro->imagen}}" class="card-img-top" width="250px" alt="Tapa Libro">
            <div class="card-body">
                <h5 class="card-title">{{$libro->titulo}}</h5>
                <h6 class="card-title">{{$libro->autor}}</h6>
                <p class="card-text">{{$libro->descripcion}}</p>
                <a href="{{$libro->enlace_libro}}" target="_blank" class="btn btn-success">Descargar</a>
            </div>
        </div>

        @endforeach

    </div>
    <div id="paginacion" class="container mt-3">
        {{$libros->links()}}
    </div>

@endsection