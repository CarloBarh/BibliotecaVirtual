@extends('layout/plantilla')

@section("tituloPagina", "Eliminar registro")

@section('contenido')
    <div class="card">
    <h5 class="card-header">Eliminar libro</h5>
    <div class="card-body">
      <p class="card-text">
        <div class="alert alert-danger" role="alert">
            Estas seguro de eliminar este registro!
            <table class="table table-sm table-hover">
                <thead>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Año de Publicacion</th>
                    <th>Cantidad Disponible</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$personas-> título}}</td>
                        <td>{{$personas-> autor}}</td>
                        <td>{{$personas-> editorial}}</td>
                        <td>{{$personas-> año_publicación}}</td>
                        <td>{{$personas-> cantidad_disponible}}</td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <form action="{{route("libro.destroy", $personas->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{route("libro.index")}}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-danger">Eliminar</button>
            </form>
          </div>
      </p>
    </div>
  </div>
@endsection