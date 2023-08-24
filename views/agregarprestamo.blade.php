@extends('layout/plantilla')

@section("tituloPagina", "Crear nuevo registro")

@section('contenido')
    <div class="card">
    <h5 class="card-header">Agregar nuevo prestamo</h5>
    <div class="card-body">
      <p class="card-text">
        <form action="{{route('prestamo.store')}}" method="POST">
          @csrf
          <label for="">Fecha de solicitud</label>
          <input type="date" name="fecha_solicitud" class="form-control" required>
          <label for="">Fecha de prestamo</label>
          <input type="date" name="fecha_prestamo" class="form-control" required>
          <label for="">Fecha de devolucion</label>
          <input type="date" name="fecha_devolución" class="form-control" required>
          <label for="">Id de libro</label>
          <input type="number" name="libro_id" class="form-control" required>
          <label for="">Id de usuario</label>
          <input type="number" name="usuario_id" class="form-control" required>
            <br>
            <button class="btn btn-primary">Agregar</button>
            <a href="{{route("prestamo.index")}}" class="btn btn-info">
                <span class="fas fa-undo-alt"></span> Regresar
            </a>
        </form>
      </p>
    </div>
  </div>
@endsection