@extends('plantillas.Madre')
@section('titulo','Form Editar Alumno')


@section('contenido')

<h1>Editar Alumno</h1>

@if($errors->any())

<div class="alert alert-danger">
<ul> @foreach($errors->all() as $error) 
<li> {{$error}}  </li>
  @endforeach
          </ul>
</div>
@endif




<form  method="post" action="{{route('alumno.updateA',['id'=>$alumno->id])}}">
@method('put')
  @csrf


      
  <div class="form-group">
  <label for="id"> id</label>
  <input type="number" class="form-control" name="id" id="id" 
  placeholder="id" value="{{$alumno->id}}">
      
  <div class="form-group">
  <label for="grado_id">  Grado_id</label>
  <input type="number" class="form-control" name="grado_id" id="grado_id" 
  placeholder="grado_id" value="{{$alumno->grado_id}}">
</div>

<div class="form-group">
  <label for="nombre">  Nombre</label>
  <input type="text" class="form-control" name="nombre" id="nombre" 
  placeholder="nombre del profesor" value="{{$alumno->nombre}}">
</div>

<div class="form-group">
  <label for="edad"> Edad</label>
  <input type="number" class="form-control" name="edad" id="edad"
   placeholder="edad del profesor"value="{{$alumno->edad}}">
</div>

<div class="form-group">
  <label for="direccion"> Direccion</label>
  <input type="text" class="form-control" name="direccion" id="direccion" 
  placeholder="####-####-#####"value="{{$alumno->direccion}}">
</div>

<div class="form-group">
  <label for="telefono"> Telefono</label>
  <input type="number" class="form-control" name="telefono" id="telefono"
   placeholder="########" value="{{$alumno->telefono}}">
</div>

<div class="form-group">
  <label for="ciudad">  Ciudad</label>
  <input type="text" class="form-control" name="ciudad" id="ciudad"
   placeholder="ciudad"value="{{$alumno->ciudad}}">
</div>







<button type="submit" class="btn btn-primary"> Actualizar</button>
<input type="reset" class="btn btn-danger">

<a  class="btn btn-primary" href="{{ route('alumno.lista')}}"> Volver</a>

</form>


@endsection