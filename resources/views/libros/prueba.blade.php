@if ($libros->hasMorePages())
<section>
    <div class="botonera_y_paginacion">
        {{$libros->links()}}
    </div>
</section>
@endif