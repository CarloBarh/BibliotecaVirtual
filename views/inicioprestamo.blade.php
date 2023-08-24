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
      <h5 class="card-title">Listado de Prestamos</h5>
      <p>
        <a href="{{route("prestamo.create")}}" class="btn btn-primary">
         <span class="fas fa-user-plus"></span> Agregar nuevo prestamo
        </a>
        <nav class="navbar bg-body-tertiary">
          <div class="container-fluid">
            <form class="d-flex" role="search" action="{{route('prestamo.index')}}" method="GET">
              <input class="form-control me-2" type="text" name="busqueda" placeholder="Buscar" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Buscar</button>
              <a href="{{route("prestamo.index")}}" class="btn btn-outline-warning">
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
                    <th>Fecha de solicitud</th>
                    <th>Fecha de prestamo</th>
                    <th>Fecha de devolucion</th>
                    <th>Nombre de libro</th>
                    <th>Nombre de usuario</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                   @foreach ($datos as $item)
                     <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->fecha_solicitud}}</td>
                        <td>{{$item->fecha_prestamo}}</td>
                        <td>{{$item->fecha_devolución}}</td>
                        <td>{{$item->libro->título}}</td>
                        <td>{{$item->usuario->nombre}}</td>
                        <td>
                          <form action="{{route("prestamo.edit", $item->id)}}" method="GET">
                            <button class="btn btn-warning btn-sm">
                              <span class="fas fa-user-edit"></span>
                            </button>
                          </form>
                        </td>
                        <td>
                          <form action="{{route("prestamo.show", $item->id)}}" method="GET">
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