@extends('plantillas.Madre')
@section('titulo','profesores')


@section('contenido')


@if( session('mensaje'))
<div class="alert alert-success">
{{ session('mensaje')}}
</div>
@endif



<table class="table">

<h1> Profesores <br><a  class="btn btn-primary" href="{{ route('profesor.crear')}}"> Nuevo Profesor</a></h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">grado_id</th>
      <th scope="col">nombre</th>
      <th scope="col">edad</th>
      <th scope="col">identidad</th>
      <th scope="col">telefono</th>
      <th scope="col">ciudad</th>
      <th scope="col">ver</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>

  @forelse($profesors as $profesor)
 
  <tr>
      <th scope="row">{{$profesor->id}}</th>
      <td>{{$profesor->Grado_id}}</td>
      <td>{{$profesor->nombre}}</td>
      <td>{{$profesor->edad}}</td>
      <td>{{$profesor->identidad}}</td>
      <td>{{$profesor->telefono}}</td>
      <td>{{$profesor->ciudad}}</td>

      <td><a  class="btn btn-info" href="{{route('profesor.mostrar', ['id' => $profesor->id])}}"> Ver </a></td>
      <td><a  class="btn btn-warning" href="{{route('profesor.edit', ['id' => $profesor->id])}}"> Editar </a></td>
      
      <td>
        <form  method="post" action="{{route('profesor.borrar', ['id' => $profesor->id])}}">
        @csrf
        @method('delete')
        <input  type="submit" value="Eliminar" class="btn btn-danger">
        </form>
      </td>
    </tr>

@empty
<tr>
      <td colspan="4"> no hay profesor  </td>
    
    </tr>
  
   @endforelse
   
  </tbody>
</table>
{{$profesors->links()}}



@endsection