@extends('plantillas.Madre')
@section('titulo','Formulario Grado')


@section('contenido')

<h1>Agregar un grado </h1>

@if($errors->any())

<div class="alert alert-danger">
<ul> @foreach($errors->all() as $error) 
<li> {{$error}}  </li>
  @endforeach
          </ul>
</div>
@endif




<form  method="post" action="">

  @csrf

      <th scope="col">Profesor id </th>
      <th scope="col">Nombre del grado </th>
      <th scope="col">Numero de Clases</th>
      <th scope="col">Cantidad de alumnos</th>
     

      


<div class="form-group">
  <label for="Profesor_id">Profesor id</label>
  <input type="number" class="form-control" name="Profesor_id" id="Profesor_id" placeholder="Profesor id">
</div>

<div class="form-group">
  <label for="nombreGrado">Nombre del Grado</label>
  <input type="text" class="form-control" name="nombreGrado" id="nombreGrado" placeholder="nombre del Grado">
</div>

<div class="form-group">
  <label for="clases"> Cantidad de Clases que tiene el grado</label>
  <input type="number" class="form-control" name="clases" id="clases" placeholder="clases">
</div>

<div class="form-group">
  <label for="cantidadAlumnos">Cantidad de Alumnos</label>
  <input type="number" class="form-control" name="cantidadAlumnos" id="cantidadAlumnos" placeholder="cantidad">
</div>


<button type="submit" class="btn btn-primary"> Guardar</button>
<input type="reset" class="btn btn-danger">

<a  class="btn btn-primary" href="{{ route('grado.listaG')}}"> Volver</a>

</form>




@endsection
 