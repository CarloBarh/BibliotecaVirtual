@extends('layout/plantilla')

@section('tituloPagina', 'Biblioteca Virtual')
    
@section('contenido')

<div class="container">
    <div class="row">
      <h2 style="text-align: center">Biblioteca <span class="badge bg-secondary">Virtual</span></h2>
      <br>
      <br>
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="https://www.4webs.es/blog/wp-content/uploads/2016/10/usuarios-nuevos-vs-recurrentes.jpg" class="card-img-top" alt="...">
          <div class="card-body" style="background-color: indianred">
            <h5 class="card-title">Usuarios</h5>
            <p class="card-text">Aqui podrás administrar todos los usuarios.</p>
            <a href="{{route("usuario.index")}}" class="btn btn-primary">Ver</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="https://www.upb.edu.co/es/imagenes/imgtipod-blgleyendosinseparador-megustarialeer-1464204951973.jpg" class="card-img-top" alt="...">
          <div class="card-body" style="background-color: teal">
            <h5 class="card-title">Libros</h5>
            <p class="card-text">Aqui podrás administrar los libros de la biblioteca.</p>
            <a href="{{route("libro.index")}}" class="btn btn-primary">Ver</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="https://www.comunidadbaratz.com/wp-content/uploads/Hay-muchisimos-libros-en-las-bibliotecas-pero-solamente-unos-pocos-comparten-el-privilegio-de-ser-los-mas-prestados-1.jpg" class="card-img-top" alt="...">
          <div class="card-body" style="background-color: goldenrod">
            <h5 class="card-title">Prestamos</h5>
            <p class="card-text">Aqui encontrarás los prestamos de libros registrados.</p>
            <a href="{{route("prestamo.index")}}" class="btn btn-primary">Ver</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  

@endsection