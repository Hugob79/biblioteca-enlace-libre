@extends('layouts.app')
@section('contenido_app')

<div class="container mt-4">
    <h3>Ingresar libro nuevo</h3>
    <form action="/recibeLibro" class="form-group" method="POST" enctype="multipart/form-data">
    @csrf

        <label for="titulo" class="mt-4">Título del libro</label>
        <input type="text" id="titulo" name="titulo" class="form-control" required>

        <label for="genero" class="mt-4">Seleccione el genero del libro</label>
        <select name="genero" id="genero" class="form-control">
            <option value="novela">Novela</option>
            <option value="cuento">Cuento</option>
            <option value="ensayo">Ensayo</option>
            <option value="poesia">Poesia</option>
        </select>

        <label for="autor" class="mt-4">Autor del libro</label>
        <input type="text" id="autor" name="autor" class="form-control" required>

        <label for="descripcion" class="mt-4">Breve reseña:</label>
        <textarea name="descripcion" id="descripcion" cols="5" rows="3" class="form-control" required></textarea>

        <label for="imagen" class="mt-4">Imagen de Tapa</label>
        <input type="file" name="imagen" id="imagen" class="alert-success form-control" value="Subir imagen">
        @error('imagen') <span class="error text-danger">{{ $message }}</span> @enderror

        <label for="enlace_libro" class="mt-4">Subir Libro en PDF</label>
        <input type="file" accept="application/pdf" name="enlace_libro" id="enlace_libro" class="alert-success form-control" required>
        @error('enlace_libro') <span class="error text-danger">{{ $message }}</span> @enderror
        <input type="submit" value="Enviar" class="mt-3 btn btn-lg btn-info">
    </form>

</div>
@endsection