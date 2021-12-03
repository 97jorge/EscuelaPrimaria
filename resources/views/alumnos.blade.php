@extends('plantillas.Madre')
@section('titulo','Alumnos')


@section('contenido')


@if( session('mensaje'))
<div class="alert alert-success">
{{ session('mensaje')}}
</div>
@endif


<h2> Lista De Los Alumnos Matriculados </h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Grado_id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Edad</th>
      <th scope="col">Direccion</th>
      <th scope="col">Telefono</th>
      <th scope="col">Ciudad</th>
      <th scope="col">ver</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>

  @forelse($alumnos as $alumno)
 
  <tr>
      <th scope="row">{{$alumno->id}}</th>
      <td>{{$alumno->grado_id}}</td>
      <td>{{$alumno->nombre}}</td>
      <td>{{$alumno->edad}}</td>
      <td>{{$alumno->direccion}}</td>
      <td>{{$alumno->telefono}}</td>
      <td>{{$alumno->ciudad}}</td>
     

      <td><a  class="btn btn-info" href="{{route('alumno.mostrar', ['id' => $alumno->id])}} "> Ver </a></td>
      <td><a  class="btn btn-warning" href="{{route('alumno.editA', ['id' => $alumno->id])}}"> Editar </a></td>
      
      <td>
        <form  method="post" action="{{route('alumno.borrar', ['id' => $alumno->id])}}">
        @csrf
        @method('delete')
        <input  type="submit" value="Eliminar" class="btn btn-danger">
        </form>
      </td>
    </tr>

@empty
<tr>
      <td colspan="4"> No hay alumnos  </td>
    
    </tr>
  
   @endforelse
   
  </tbody>
</table>
{{$alumnos->links()}}



@endsection