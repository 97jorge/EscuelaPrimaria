@extends('plantillas.Madre')
@section('titulo','ProfesorIndividual')


@section('contenido')


<h1> Detalle De Profesor {{$profesor->nombre}}</h1>
<td><a  class="btn btn-warning" href="{{route('profesor.edit', ['id' => $profesor->id])}}"> Editar </a></td>
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
      <td>{{$profesor ->id}}</td>
    </tr>
   <tr>
    <th scope="row">grado_id</th>
      <td>{{$profesor ->grado_id}}</td>
    </tr>
   
    <th scope="row">nombre</th>
      <td>{{$profesor ->nombre}}</td>
    </tr>
    
    <th scope="row">edad</th>
      <td>{{$profesor->edad}}</td>
    </tr>

    <th scope="row">identidad</th>
      <td>{{$profesor ->identidad}}</td>
    </tr>
    <th scope="row">telefono</th>
      <td>{{$profesor ->telefono}}</td>
    </tr>
    <th scope="row">ciudad</th>
      <td>{{$profesor ->ciudad}}</td>
    </tr>
   
  </tbody>
</table>

<a  class="btn btn-primary" href="{{ route('profesor.inicio')}}"> Volver</a>

@endsection
 