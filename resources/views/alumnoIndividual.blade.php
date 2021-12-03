@extends('plantillas.Madre')
@section('titulo','Alumno Individual')


@section('contenido')


<h1> Detalle De Profesor {{$alumno->nombre}}</h1>
<td><a  class="btn btn-warning" href=""> Editar </a></td>
<table class="table">
  <thead>
    <tr>
      <th scope="col">campos</th>
      <th scope="col">valor</th>
      
    </tr>
  </thead>
  <tbody>
 
  <tr>
      <th scope="row">id</th>
      <td>{{$alumno ->id}}</td>
    </tr>
   <tr>
    <th scope="row">grado_id</th>
      <td>{{$alumno ->grado_id}}</td>
    </tr>
   
    <th scope="row">nombre</th>
      <td>{{$alumno ->nombre}}</td>
    </tr>
    
    <th scope="row">edad</th>
      <td>{{$alumno ->edad}}</td>
    </tr>

    <th scope="row">direccion</th>
      <td>{{$alumno ->direccion}}</td>
    </tr>
    <th scope="row">telefono</th>
      <td>{{$alumno ->telefono}}</td>
    </tr>
    <th scope="row">ciudad</th>
      <td>{{$alumno ->ciudad}}</td>
    </tr>
   
  </tbody>
</table>

<a  class="btn btn-primary" href="{{ route('alumno.lista')}}"> Volver</a>

@endsection
 