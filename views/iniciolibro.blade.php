@extends('layout/plantilla')

@section('tituloPagina', 'Biblioteca Virtual')
    
@section('contenido')

<div class="card">
    <h5 class="card-header">Biblioteca Virtual</h5>
    <div class="card-body">
      <div class="row">
        <div class="col-sm-12">
          @if ($mensaje = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{$mensaje}}
          </div>  
          @endif
          
        </div>
      </div>
      <h5 class="card-title">Listado de Libros</h5>
      <p>
        <a href="{{route("libro.create")}}" class="btn btn-primary">
         <span class="fas fa-user-plus"></span> Agregar nuevo libro
        </a>
        <nav class="navbar bg-body-tertiary">
          <div class="container-fluid">
            <form class="d-flex" role="search" action="{{route('libro.index')}}" method="GET">
              <input class="form-control me-2" type="text" name="busqueda" placeholder="Buscar" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Buscar</button>
              <a href="{{route("libro.index")}}" class="btn btn-outline-warning">
                <span class="fas fa-undo-alt"></span> Restablecer
            </a>
            </form>
          </div>
        </nav>
      </p>
      <p class="card-text">
        <div class="table table-responsive">
            <table class="table table-sm table-bordered">
                <thead>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Año de Publicacion</th>
                    <th>Cantidad Disponible</th>
                    <th>Fecha de Creacion</th>
                    <th>Ultima actualizacion</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                   @foreach ($datos as $item)
                     <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->título}}</td>
                        <td>{{$item->autor}}</td>
                        <td>{{$item->editorial}}</td>
                        <td>{{$item->año_publicación}}</td>
                        <td>{{$item->cantidad_disponible}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td>
                          <form action="{{route("libro.edit", $item->id)}}" method="GET">
                            <button class="btn btn-warning btn-sm">
                              <span class="fas fa-user-edit"></span>
                            </button>
                          </form>
                        </td>
                        <td>
                          <form action="{{route("libro.show", $item->id)}}" method="GET">
                            <button class="btn btn-danger btn-sm">
                              <span class="fas fa-user-times"></span>
                            </button>
                          </form>
                        </td>
                    </tr>  
                   @endforeach 
                </tbody>
            </table>
            <hr>
            <div class="row">
              <div class="col-sm-12">
                {{ $datos->appends(['busqueda'=>$busqueda]) }}
              </div>
            </div>
        </div>
      </p>
      <a href="{{route("inicio.index")}}" class="btn btn-info">
        <span class="fas fa-undo-alt"></span> Regresar
    </a>
    </div>
  </div>

@endsection