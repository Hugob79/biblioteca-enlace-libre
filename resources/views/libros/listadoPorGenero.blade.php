@extends('layouts.app')
@section('contenido_app')

<div class="m-5 p-3">
    <h1>Listado de Libros - Género: <b>{{$genero}}</b></h1>
    <div>
    @if (count($libros) != 0)
        <table class="table table-info table-striped table-bordered table-hover" id="tabla_resultados">
            <thead>
                <tr>
                    <th>Fecha Alta:</th>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Autor</th>
                    <th>Subido por:</th>
                    <th>Tapa</th>
                    <th>Descargar</th>
                </tr>
            </thead>
            <tbody>

            @foreach ($libros as $libro)
                <tr>
                    <td>{{date("d/m/Y", strtotime($libro->created_at))}}</td>
                    <td>{{$libro->titulo}}</td>
                    <td>{{$libro->descripcion}}</td>
                    <td>{{$libro->autor}}</td>
                    <td>{{$libro->subido_por}}</td>
                    <td><img src="{{$libro->imagen}}" width="200px" alt="Libro"></td>
                    <td><a href="{{$libro->enlace_libro}}" target="_blank"><button class="btn btn-danger">Descargar</button></a></td>
                </tr>
                @endforeach
            </tbody>        
        </table>
    @else
    <h4>Sin resultados para la categoria seleccionada</h4>
    @endif
</div>
</div>



<script>
//Esto no esta en uso
let buscaUsuario = async() =>
{
    let usuBuscar = document.getElementById('buscaUsuario').value
   
    let usuarioSubrogante = document.getElementById('usuarioSubrogante')
    usuarioSubrogante.innerHTML =``
    

    const url = '/buscaUsuario'
	const request = new Request(url, 
	{
		method: 'POST',
		body: JSON.stringify({"usuBuscar": usuBuscar}),
		cache: "no-cache",
	    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
       
	});
	const response = await fetch(request);
	const data = await response.json();
	for (var i = 0; i < data[0].length; i++) {
        console.log(data[0][i].usuario)
        usuarioSubrogante.innerHTML +=`
        <option value="${data[0][i].usu_ad}">${data[0][i].usuario} - ${data[0][i].cargo}</option>
        `;
    }

}

</script>

@endsection