@extends('layouts.app')
@section('contenido_app')

<div class="container">
    <form action="/recibeLibro" class="form-group" method="POST">
    @csrf

        <label for="titulo" class="mt-4">Título del libro</label>
        <input type="text" id="titulo" name="titulo" class="form-control">

        <label for="descripcion" class="mt-4">Breve reseña:</label>
        <textarea name="descripcion" id="descripcion" cols="5" rows="3" class="form-control"></textarea>

        <label for="imagen" class="mt-4">Imagen de Tapa</label>
        <input type="file" name="imagen" id="imagen" class="alert-success form-control" value="Subir imagen">

        <label for="enlace_libro" class="mt-4">Subir Libro en PDF</label>
        <input type="file" name="enlace_libro" id="enlace_libro" class="alert-success form-control">

        <input type="submit" value="Enviar" class="btn btn-info">
    </form>
</div>
@endsection