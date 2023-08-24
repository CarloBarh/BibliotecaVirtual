@extends('layout/plantilla')

@section("tituloPagina", "Actualizar registro")

@section('contenido')
    <div class="card">
    <h5 class="card-header">Actualizar prestamo</h5>
    <div class="card-body">
      <p class="card-text">
        <form action="{{route('prestamo.update', $personas->id)}}" method="POST">
          @csrf
          @method("PUT")
          <label for="">Fecha de solicitud</label>
          <input type="date" name="fecha_solicitud" class="form-control" required value="{{$personas->fecha_solicitud}}">
          <label for="">Fecha de prestamo</label>
          <input type="date" name="fecha_prestamo" class="form-control" required value="{{$personas->fecha_prestamo}}">
          <label for="">Fecha de devolucion</label>
          <input type="date" name="fecha_devolución" class="form-control" required value="{{$personas->fecha_devolución}}">
          <label for="">Id de libro</label>
          <input type="number" name="libro_id" class="form-control" required value="{{$personas->libro_id}}">
          <label for="">Id de usuario</label>
          <input type="number" name="usuario_id" class="form-control" required value="{{$personas->usuario_id}}">
            <br>
            <button class="btn btn-warning">Actualizar</button>
            <a href="{{route("prestamo.index")}}" class="btn btn-info">
                <span class="fas fa-undo-alt"></span> Regresar
            </a>
            
        </form>
      </p>
    </div>
  </div>
@endsection