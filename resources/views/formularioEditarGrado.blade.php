@extends('plantillas.Madre')
@section('titulo','Form Editar Grado')


@section('contenido')

<h1>Editar Grado</h1>

@if($errors->any())

<div class="alert alert-danger">
<ul> @foreach($errors->all() as $error) 
<li> {{$error}}  </li>
  @endforeach
          </ul>
</div>
@endif




<form  method="post" action="{{route('grado.updateG',['id'=>$grado->id])}}">
@method('put')
  @csrf


      
  
 
  <div class="form-group">
  <label for="Profesor_id">Profesor id</label>
  <input type="number" class="form-control" name="Profesor_id" id="Profesor_id" 
  placeholder="Profesor id" value="{{$grado->Profesor_id}}">
</div>

<div class="form-group">
  <label for="nombreGrado">Nombre del Grado</label>
  <input type="text" class="form-control" name="nombreGrado" id="nombreGrado" 
  placeholder="nombre del Grado" value="{{$grado->nombreGrado}}">
</div>

<div class="form-group">
  <label for="clases"> Cantidad de Clases que tiene el grado</label>
  <input type="number" class="form-control" name="clases" id="clases"
   placeholder="clases" value="{{$grado->clases}}">
</div>

<div class="form-group">
  <label for="cantidadAlumnos">Cantidad de Alumnos</label>
  <input type="number" class="form-control" name="cantidadAlumnos" id="cantidadAlumnos"
   placeholder="cantidad" value="{{$grado->cantidadAlumnos}}">
</div>




<button type="submit" class="btn btn-primary"> Actualizar</button>
<input type="reset" class="btn btn-danger">

<a  class="btn btn-primary" href="{{ route('grado.listaG')}}"> Volver</a>

</form>


@endsection