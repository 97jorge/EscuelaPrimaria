@extends('plantillas.Madre')
@section('titulo','Grados')


@section('contenido')


@if( session('mensaje'))
<div class="alert alert-success">
{{ session('mensaje')}}
</div>
@endif


<h2> Lista de grados</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Profesor_id</th>
      <th scope="col">Nombre del Grado</th>
      <th scope="col">Clases impartidas</th>
      <th scope="col">Cantidad De Alumnos matriculados</th>
      
    </tr>
  </thead>
  <tbody>

  @forelse($grados as $grado)
 
  <tr>
      <th scope="row">{{$grado->id}}</th>
      <td>{{$grado->Profesor_id}}</td>
      <td>{{$grado->nombreGrado}}</td>
      <td>{{$grado->clases}}</td>
      <td>{{$grado->cantidadAlumnos}}</td>
     
     

      
      <td><a  class="btn btn-info" href=""> Ver </a></td>
      <td><a  class="btn btn-warning" href=""> Editar </a></td>
      
      <td>
        <form  method="post" action="">
        @csrf
        @method('delete')
        <input  type="submit" value="Eliminar" class="btn btn-danger">
        </form>
      </td>
  </tr>
@empty
<tr>
      <td colspan="4"> No hay grados </td>
    
    </tr>
  
   @endforelse
  
  </tbody>
 
</table>

{{$grados->links()}}


@endsection