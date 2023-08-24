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
      <h5 class="card-title">Listado de Usuarios</h5>
      <p>
        <a href="{{route("usuario.create")}}" class="btn btn-primary">
         <span class="fas fa-user-plus"></span> Agregar nueva persona
        </a>
        <nav class="navbar bg-body-tertiary">
          <div class="container-fluid">
            <form class="d-flex" role="search" action="{{route('usuario.index')}}" method="GET">
              <input class="form-control me-2" type="text" name="busqueda" placeholder="Buscar" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Buscar</button>
              <a href="{{route("usuario.index")}}" class="btn btn-outline-warning">
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
                    <th>Nombre</th>
                    <th>Correo Electronico</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Fecha de Creacion</th>
                    <th>Ultima actualizacion</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                   @foreach ($datos as $item)
                     <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->correo_electronico}}</td>
                        <td>{{$item->teléfono}}</td>
                        <td>{{$item->dirección}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td>
                          <form action="{{route("usuario.edit", $item->id)}}" method="GET">
                            <button class="btn btn-warning btn-sm">
                              <span class="fas fa-user-edit"></span>
                            </button>
                          </form>
                        </td>
                        <td>
                          <form action="{{route("usuario.show", $item->id)}}" method="GET">
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