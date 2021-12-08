@extends('plantillas.Madre')
@section('titulo','Form Editar Profesor')


@section('contenido')

<h1>Profesor</h1>

@if($errors->any())

<div class="alert alert-danger">
<ul> @foreach($errors->all() as $error) 
<li> {{$error}}  </li>
  @endforeach
          </ul>
</div>
@endif




<form  method="post" action="{{route('profesor.update',['id'=>$profesor->id])}}">
@method('put')
  @csrf


      
  <div class="form-group">
  <label for="grado_id">  Grado_id</label>
  <input type="number" class="form-control" name="grado_id" id="grado_id" 
  placeholder="grado_id" value="{{$profesor->grado_id}}">
</div>

<div class="form-group">
  <label for="nombre">  Nombre</label>
  <input type="text" class="form-control" name="nombre" id="nombre" 
  placeholder="nombre del profesor" value="{{$profesor->nombre}}">
</div>

<div class="form-group">
  <label for="edad"> Edad</label>
  <input type="number" class="form-control" name="edad" id="edad"
   placeholder="edad del profesor"value="{{$profesor->edad}}">
</div>

<div class="form-group">
  <label for="identidad"> Identidad</label>
  <input type="text" class="form-control" name="identidad" id="identidad" 
  placeholder="####-####-#####"value="{{$profesor->identidad}}">
</div>

<div class="form-group">
  <label for="telefono"> Telefono</label>
  <input type="number" class="form-control" name="telefono" id="telefono"
  value="{{$profesor->telefono}}">
</div>

<div class="form-group">
  <label for="ciudad">  Ciudad</label>
  <input type="text" class="form-control" name="ciudad" id="ciudad"
   placeholder="ciudad"value="{{$profesor->ciudad}}">
</div>







<button type="submit" class="btn btn-primary"> Actualizar</button>
<input type="reset" class="btn btn-danger">

<a  class="btn btn-primary" href="{{ route('profesor.inicio')}}"> Volver</a>

</form>


@endsection