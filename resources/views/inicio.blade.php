@extends('layouts.app')
@section('contenido_app')
    <div class="alert-warning m-3 p-3">
        <h5 align="center">Bienvenido a la Biblioteca de publicaciones con licenias libres</h5>
    </div>
<div class="fondo_principal">
<img src="/imagenes/vaguito.png" alt="Hombre Leyendo...">
</div>
    <div class="m-3 p-3 alert-success">
    <h4>Últimos libros añadidos</h4>
    
        @foreach ($libros as $libro )
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        @endforeach

    </div>

@endsection