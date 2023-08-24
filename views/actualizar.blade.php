@extends('layout/plantilla')

@section("tituloPagina", "Actualizar registro")

@section('contenido')
    <div class="card">
    <h5 class="card-header">Actualizar persona</h5>
    <div class="card-body">
      <p class="card-text">
        <form action="{{route('usuario.update', $personas->id)}}" method="POST">
          @csrf
          @method("PUT")
            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" required value="{{$personas->nombre}}">
            <label for="">Correo Electronico</label>
            <input type="text" name="correo_electronico" class="form-control" required value="{{$personas->correo_electronico}}">
            <label for="">Telefono</label>
            <input type="text" name="teléfono" class="form-control" required value="{{$personas->teléfono}}">
            <label for="">Direccion</label>
            <input type="text" name="dirección" class="form-control" required value="{{$personas->dirección}}">
            <br>
            <button class="btn btn-warning">Actualizar</button>
            <a href="{{route("usuario.index")}}" class="btn btn-info">
                <span class="fas fa-undo-alt"></span> Regresar
            </a>
            
        </form>
      </p>
    </div>
  </div>
@endsection