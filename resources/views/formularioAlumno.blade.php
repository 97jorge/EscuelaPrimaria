@extends('plantillas.Madre')
@section('titulo','Formulario de alumnos')


@section('contenido')

<h1>Matricular Alumno </h1>

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
  <th scope="col">grado_id</th>
      <th scope="col">nombre</th>
      <th scope="col">edad</th>
      <th scope="col">direccion</th>
      <th scope="col">telefono</th>
      <th scope="col">ciudad</th>


      
<div class="form-group">
  <label for="Grado_id">Grado_id</label>
  <input type="number" class="form-control" name="Grado_id" id="Grado_id" placeholder="grado_id">
</div>

<div class="form-group">
  <label for="nombre">Nombre</label>
  <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre">
</div>

<div class="form-group">
  <label for="edad">Edad</label>
  <input type="number" class="form-control" name="edad" id="edad" placeholder="edad">
</div>

<div class="form-group">
  <label for="direccion">Direccion</label>
  <input type="text" class="form-control" name="direccion" id="direccion" placeholder="direccion">
</div>

<div class="form-group">
  <label for="telefono">Telefono</label>
  <input type="number" class="form-control" name="telefono" id="telefono" placeholder="#########">
</div>

<div class="form-group">
  <label for="ciudad">Ciudad</label>
  <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="ciudad">
</div>



<button type="submit" class="btn btn-primary"> Guardar</button>
<input type="reset" class="btn btn-danger">

</form>




@endsection
 