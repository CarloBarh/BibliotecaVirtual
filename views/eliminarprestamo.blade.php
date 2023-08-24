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
                    <th>Id</th>
                    <th>Fecha de solicitud</th>
                    <th>Fecha de prestamo</th>
                    <th>Fecha de devolucion</th>
                    <th>Nombre de libro</th>
                    <th>Nombre de usuario</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$personas-> id}}</td>
                        <td>{{$personas-> fecha_solicitud}}</td>
                        <td>{{$personas-> fecha_prestamo}}</td>
                        <td>{{$personas-> fecha_devolución}}</td>
                        <td>{{$personas-> libro-> título}}</td>
                        <td>{{$personas-> usuario-> nombre}}</td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <form action="{{route("prestamo.destroy", $personas->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{route("prestamo.index")}}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-danger">Eliminar</button>
            </form>
          </div>
      </p>
    </div>
  </div>
@endsection