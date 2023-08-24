@extends('layout/plantilla')

@section("tituloPagina", "Crear nuevo registro")

@section('contenido')
    <div class="card">
    <h5 class="card-header">Agregar nueva persona</h5>
    <div class="card-body">
      <p class="card-text">
        <form action="{{route('usuario.store')}}" method="POST">
          @csrf
            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
            <label for="">Correo Electronico</label>
            <input type="text" name="correo_electronico" class="form-control" required>
            <label for="">Telefono</label>
            <input type="text" name="teléfono" class="form-control" required>
            <label for="">Direccion</label>
            <input type="text" name="dirección" class="form-control" required>
            <br>
            <button class="btn btn-primary">Agregar</button>
            <a href="{{route("usuario.index")}}" class="btn btn-info">
                <span class="fas fa-undo-alt"></span> Regresar
            </a>
        </form>
      </p>
    </div>
  </div>
@endsection