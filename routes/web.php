<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



/* ruta para motrar todos los profesores */


route::get('/Escuelas','ProfesorController@inicio')->name('profesor.inicio');



/* ruta para mostrar  ver un profesor por id   */
route::get('/Escuelas/{id}','ProfesorController@mostrar')->name('profesor.mostrar')
->where ('id', '[0-9]+') ;




/* crear ruta para crear un profesor */
route::get('/Escuelas/crear','ProfesorController@create')->name('profesor.crear');

/* crear ruta con metodo post  para crear profesor  */
route::post('/Escuelas/crear','ProfesorController@guardar')->name('profesor.guardar');




/*rutas para actualizar*/
route::get('/Escuelas/{id}/editar','ProfesorController@edit')->name('profesor.edit')
->where ('id', '[0-9]+');

/*metodo put para editar */
route::put('/Escuelas/{id}/editar','ProfesorController@update')->name('profesor.update')
->where ('id', '[0-9]+');


/*metodo delete para borrar */
route::delete('/Escuelas/{id}/borrar','ProfesorController@destroy')->name('profesor.borrar')
->where ('id', '[0-9]+');






/*rutas para alumnos*/


/*rutas para ver lista de alumno */
route::get('/Escuelas/lista','AlumnoController@lista')->name('alumno.lista');


/* ruta para ver un alumno  */
route::get('/Escuelas/listaDeAlumnos/{id}','AlumnoController@mostrar')->name('alumno.mostrar')
->where ('id', '[0-9]+') ;


/* crear ruta para crear un alumno */
route::get('/Escuelas/matricular','AlumnoController@matricular')->name('alumno.matricular');

/* crear ruta con metodo post  para crear alumno */
route::post('/Escuelas/matricular','AlumnoController@guardarA')->name('alumno.guardarA');


/*rutas para actualizar*/
route::get('/Escuelas/{id}/editA','AlumnoController@editA')->name('alumno.editA')
->where ('id', '[0-9]+');

/*metodo put para editar */
route::put('/Escuelas/{id}/edita','AlumnoController@updateA')->name('alumno.updateA')
->where ('id', '[0-9]+');


/*metodo delete para borrar */
route::delete('/Escuelas/{id}/borrarA','AlumnoController@destroy')->name('alumno.borrar')
->where ('id', '[0-9]+');



/*ruta para grados*/
route::get('/Escuelas/listaG','GradoController@listaG')->name('grado.listaG');


/* ruta para ver un grado  */
route::get('/Escuelas/listaDeGrados/{id}','GradoController@mostrar')->name('grado.mostrar')
->where ('id', '[0-9]+') ;



/* crear ruta para crear */
route::get('/Escuelas/AgregarG','GradoController@crear')->name('grado.crear');

/* crear ruta con metodo post  para guardar */
route::post('/Escuelas/AgregarG','GradoController@guardarG')->name('grado.guardarG');


/*rutas para actualizar*/
route::get('/Escuelas/{id}/editG','GradoController@editG')->name('grado.editG')
->where ('id', '[0-9]+');

/*metodo put para editar */
route::put('/Escuelas/{id}/editaG','GradoController@updateG')->name('grado.updateG')
->where ('id', '[0-9]+');


/*metodo delete para borrar */
route::delete('/Escuelas/{id}/borrarG','GradoController@destroy')->name('grado.borrar')
->where ('id', '[0-9]+');
