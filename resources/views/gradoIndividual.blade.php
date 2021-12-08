@extends('plantillas.Madre')
@section('titulo','Grado Individual')


@section('contenido')


<h1> Detalle De {{$grado->nombre}}</h1>
<td><a  class="btn btn-warning" href="{{route('grado.editG', ['id' => $grado->id])}}"> Editar </a></td>
<table class="table">
  <thead>
    <tr>
      <th scope="col">campos</th>
      <th scope="col">valor</th>
      
    </tr>
  </thead>
  <tbody>

     
 
  
   <tr>
    <th scope="row">profesor_id</th>
      <td>{{$grado->Profesor_id}}</td>
    </tr>
   
    <th scope="row">nombre del Grado</th>
      <td>{{$grado->nombreGrado}}</td>
    </tr>
    
    <th scope="row">clases</th>
      <td>{{$grado->clases}}</td>
    </tr>

    <th scope="row">cantidad de Alumnos</th>
      <td>{{$grado->cantidadAlumnos}}</td>
    </tr>
   
  </tbody>
</table>

<a  class="btn btn-primary" href="{{ route('grado.listaG')}}"> Volver</a>

@endsection