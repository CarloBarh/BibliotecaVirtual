@extends('layout/plantilla')

@section("tituloPagina", "Eliminar registro")

@section('contenido')
    <div class="card">
    <h5 class="card-header">Eliminar persona</h5>
    <div class="card-body">
      <p class="card-text">
        <div class="alert alert-danger" role="alert">
            Estas seguro de eliminar este registro!
            <table class="table table-sm table-hover">
                <thead>
                    <th>Nombre</th>
                    <th>Correo Electronico</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$personas-> nombre}}</td>
                        <td>{{$personas-> correo_electronico}}</td>
                        <td>{{$personas-> teléfono}}</td>
                        <td>{{$personas-> dirección}}</td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <form action="{{route("usuario.destroy", $personas->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{route("usuario.index")}}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-danger">Eliminar</button>
            </form>
          </div>
      </p>
    </div>
  </div>
@endsection