<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //
    }



        public function lista(Request $request){

            // $alumnos = Alumno::paginate(5);
            // return view('alumnos')->with('alumnos',$alumnos);
 
             $texto= trim($request->get('texto'));
             $alumnos =DB::table('alumnos')
                        ->select('alumnos.*')
                        ->where('nombre','LIKE','%'.$texto.'%')
                        ->orwhere('ciudad','LIKE','%'.$texto.'%')
                        ->orderBy('id', 'asc')
                       -> paginate(10);
                       return view('alumnos',compact('alumnos','texto'));
             
 
         }





   /*funcion para ver alumno individual */
   public function mostrar($id){
    $alumnos= Alumno::findOrFail($id);
     return view('alumnoIndividual')->with('alumno',$alumnos);
}





   /*funcion para  formulario crear los estudiantes */
   public function matricular(){
 
    return view('formularioAlumno');
}


/*  crear y guardar  los estudiantes */

public function guardarA(request $request){
   //validar los datos a ingresar 
   $request->validate([
          'Grado_id'=>'required',
          'nombre'=>'required',
          'edad'=>'required',
          'direccion'=>'required',
          'telefono'=>'required',
          'ciudad'=>'required'
      
   ]);


      $nuevoAlumno = new Alumno();

      $nuevoAlumno->grado_id = $request->input('Grado_id');
      $nuevoAlumno->nombre = $request->input('nombre');
      $nuevoAlumno->edad= $request->input('edad');
      $nuevoAlumno->direccion= $request->input('direccion');
      $nuevoAlumno->telefono= $request->input('telefono');
      $nuevoAlumno->ciudad= $request->input('ciudad');
   
//fuente externa
  /* $nuevoEstudiante->fechaNacimiento=('20000512');*/

 $creado=$nuevoAlumno->save();

 if ($creado) {
     return redirect()->route('profesor.inicio')->with('mensaje','El alumno fue matriculado exitosamente.');
 }
else {
   // todo retornar con un mensaje de error 
}                                     
}




/*Actualisar */


public function editA($id){
    $alumnos= Alumno::findOrFail($id);
    return view('formularioEditarAlumno')->with('alumno',$alumnos);

}

public function updateA(request $request,$id){

 //validar los datos a ingresar 
 $request->validate([
    'id'=>'required',
    'grado_id'=>'required',
          'nombre'=>'required',
          'edad'=>'required',
          'direccion'=>'required',
          'telefono'=>'required',
          'ciudad'=>'required'
      
]);

  $alumnos= Alumno::findOrFail($id);


  $alumnos->id = $request->input('id');
  $alumnos->grado_id = $request->input('grado_id');
  $alumnos->nombre = $request->input('nombre');
  $alumnos->edad= $request->input('edad');
  $alumnos->direccion= $request->input('direccion');
  $alumnos->telefono= $request->input('telefono');
  $alumnos->ciudad= $request->input('ciudad');

 //fuente externa


$creado=$alumnos->save();

if ($creado) {
    return redirect()->route('alumno.lista')->with('mensaje','El Alumno fue editado exitosamente.');
}
else {
  // todo retornar con un mensaje de error 
}    

  
}

public function destroy($id) {
    Alumno::destroy($id);
  
    //redirect
    return redirect('/Escuelas/')->with('mensaje','El Alumno fue borrado completamente ');
  
  }
    




}







