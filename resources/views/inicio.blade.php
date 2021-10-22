@extends('layouts.app')
@section('contenido_app')
    <div class="alert-warning m-3 p-3">
        <h5 align="center">Bienvenido a la Biblioteca de publicaciones con licenias libres</h5>
    </div>
{{-- <div class="fondo_principal">
<img src="/imagenes/vaguito.png" alt="Hombre Leyendo...">
</div> --}}

    <div class="row m-3 p-3">
        <h4>Últimos libros añadidos</h4>
        <section class="text-center">
            @foreach ($libros as $libro )
            <div class="card p-3 m-1 librosPrincipal">
                <img src="{{$libro->imagen}}" class="card-img-top" width="250px" alt="Tapa Libro">
                <div class="card-body">
                    <h5 class="card-title">{{$libro->titulo}}</h5>
                    <h6 class="card-title">{{$libro->autor}}</h6>
                    <p class="card-text">{{$libro->descripcion}}</p>
                    <a href="{{$libro->enlace_libro}}" target="_blank" class="btn btn-success">Descargar</a>
                </div>

            </div>
            @endforeach
        </section>
    </div>

    <section>
        <div class="botonera_y_paginacion">
            <a href="/novela" class="btn btn-outline-info m-1">Novela</a>
            <a href="/cuento" class="btn btn-outline-info m-1">Cuento</a>
            <a href="/ensayo" class="btn btn-outline-info m-1">Ensayo</a>
            <a href="/poesia" class="btn btn-outline-info m-1">Poesía</a> 
        </div>
    </section>

@endsection