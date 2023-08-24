@extends('layout/plantilla')

@section("tituloPagina", "Crear nuevo registro")

@section('contenido')
    <div class="card">
    <h5 class="card-header">Agregar nuevo libro</h5>
    <div class="card-body">
      <p class="card-text">
        <form action="{{route('libro.store')}}" method="POST">
          @csrf
          <label for="">Titulo</label>
          <input type="text" name="título" class="form-control" required>
          <label for="">Autor</label>
          <input type="text" name="autor" class="form-control" required>
          <label for="">Editorial</label>
          <input type="text" name="editorial" class="form-control" required>
          <label for="">Año de Publicacion</label>
          <input type="text" name="año_publicación" class="form-control" required>
          <label for="">Cantidad Disponible</label>
          <input type="number" name="cantidad_disponible" class="form-control" required>
            <br>
            <button class="btn btn-primary">Agregar</button>
            <a href="{{route("libro.index")}}" class="btn btn-info">
                <span class="fas fa-undo-alt"></span> Regresar
            </a>
        </form>
      </p>
    </div>
  </div>
@endsection