@extends('layout/plantilla')

@section("tituloPagina", "Actualizar registro")

@section('contenido')
    <div class="card">
    <h5 class="card-header">Actualizar libro</h5>
    <div class="card-body">
      <p class="card-text">
        <form action="{{route('libro.update', $personas->id)}}" method="POST">
          @csrf
          @method("PUT")
            <label for="">Titulo</label>
            <input type="text" name="título" class="form-control" required value="{{$personas->título}}">
            <label for="">Autor</label>
            <input type="text" name="autor" class="form-control" required value="{{$personas->autor}}">
            <label for="">Editorial</label>
            <input type="text" name="editorial" class="form-control" required value="{{$personas->editorial}}">
            <label for="">Año de Publicacion</label>
            <input type="text" name="año_publicación" class="form-control" required value="{{$personas->año_publicación}}">
            <label for="">Cantidad Disponible</label>
            <input type="number" name="cantidad_disponible" class="form-control" required value="{{$personas->cantidad_disponible}}">
            <br>
            <button class="btn btn-warning">Actualizar</button>
            <a href="{{route("libro.index")}}" class="btn btn-info">
                <span class="fas fa-undo-alt"></span> Regresar
            </a>
            
        </form>
      </p>
    </div>
  </div>
@endsection