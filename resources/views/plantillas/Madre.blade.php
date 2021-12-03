<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('titulo')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 500px}
    
    /* Set gray background color and 100% height */
    .container {
      background-color: #f1f1f1;
      height: 200%;
    
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: cadetblue;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }

  </style>
</head>
<body color="white">

<div class="container">
<img src="https://us.123rf.com/450wm/bubululu/bubululu1708/bubululu170800010/84617913-estudiantes-frente-escuela-caricatura.jpg?ver=6" 
class="img-rounded" alt="Cinque Terre"
 height='150' > 
  <img src="https://cdn5.dibujos.net/dibujos/pintados/201710/escuela-primaria-edificios-otros-edificios-10953345.jpg" 
class="img-rounded" alt="Cinque Terre"
 height='150' >
<div class="container">
  <h1>Escuela República de Tangamandapio<img src=" https://www3.gobiernodecanarias.org/medusa/edublog/ieselmayorazgo/wp-content/uploads/sites/116/2020/07/fa676d2df9fe4213b3fdf6321669bc96.jpg" 
class="img-rounded" alt="Cinque Terre"
 height="100" >  </h1>
 
  <p>Realiza tu matricula ya:</p>
  <div class="btn-group btn-group-justified">
    <a href="{{ route('alumno.lista')}} " class="btn btn-primary">Alumnos</a>
    <a href="{{ route('alumno.matricular')}}" class="btn btn-success ">Matricular Alumnos</a>
    <a href="{{ route('profesor.inicio')}}" class="btn btn-info">Profesores</a>
    <a href="{{ route('grado.listaG')}}" class="btn btn-primary">Grados</a>
    
  </div>
</div>
    <br><br>
         @yield('contenido')

   <br><br><br><br>
</div>

<footer class="container-fluid">
  <p>Aprender Haciendo</p>
</footer>

</body>
</html>