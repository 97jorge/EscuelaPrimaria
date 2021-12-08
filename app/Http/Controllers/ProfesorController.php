<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Http\Requests\StoreProfesorRequest;
use App\Http\Requests\UpdateProfesorRequest;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class ProfesorController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function inicio(Request $request){


      $texto= trim($request->get('texto'));
      $profesors =DB::table('profesors')
                 ->select('profesors.*')
                 ->where('nombre','LIKE','%'.$texto.'%')
                 ->orwhere('ciudad','LIKE','%'.$texto.'%')
                 ->orderBy('id', 'asc')
                -> paginate(10);
                return view('profesores',compact('profesors','texto'));

       // $profesors = Profesor::paginate(5);
       // return view('profesores')->with('profesors',$profesors);


    }



   /*funcion para mostrar prof por id */
   public function mostrar($id){
    $profesors = Profesor::findOrFail($id);
     return view('profesorIndividual')->with('profesor',$profesors);
}






   /*funcion para  formulario crear los estudiantes */
   public function create(){
 
    return view('formularioProfesor');
}

/*  crear y guardar  los estudiantes */

public function guardar(request $request){
   //validar los datos a ingresar 
   $request->validate([
          'Grado_id'=>'required',
          'nombre'=>'required',
          'edad'=>'required',
          'identidad'=>'required',
          'telefono'=>'required',
          'ciudad'=>'required'
      
   ]);


      $nuevoProfesor = new profesor();

      $nuevoProfesor->Grado_id = $request->input('Grado_id');
      $nuevoProfesor->nombre = $request->input('nombre');
      $nuevoProfesor->edad= $request->input('edad');
      $nuevoProfesor->identidad= $request->input('identidad');
      $nuevoProfesor->telefono= $request->input('telefono');
      $nuevoProfesor->ciudad= $request->input('ciudad');
   
//fuente externa
  /* $nuevoEstudiante->fechaNacimiento=('20000512');*/

 $creado=$nuevoProfesor->save();

 if ($creado) {
     return redirect()->route('profesor.inicio')->with('mensaje','El profesor fue creado exitosamente.');
 }
else {
   // todo retornar con un mensaje de error 
}                                     
}





/*Actualisar */


public function edit($id){
    $profesors= Profesor::findOrFail($id);
    return view('formularioEditarProfesor')->with('profesor',$profesors);

}

public function update(request $request,$id){

 //validar los datos a ingresar 
 $request->validate([
    'grado_id'=>'required',
          'nombre'=>'required',
          'edad'=>'required',
          'identidad'=>'required',
          'telefono'=>'required',
          'ciudad'=>'required'
      
]);

  $profesors= Profesor::findOrFail($id);



  $profesors->grado_id = $request->input('grado_id');
  $profesors->nombre = $request->input('nombre');
  $profesors->edad= $request->input('edad');
  $profesors->identidad= $request->input('identidad');
  $profesors->telefono= $request->input('telefono');
  $profesors->ciudad= $request->input('ciudad');

 //fuente externa


$creado=$profesors->save();

if ($creado) {
    return redirect()->route('profesor.inicio')->with('mensaje','El profesors fue editado exitosamente.');
}
else {
  // todo retornar con un mensaje de error 
}    

  
}

 
public function destroy($id) {
    Profesor::destroy($id);
  
    //redirect
    return redirect('/Escuelas/')->with('mensaje','El profesor fue borrado completamente ');
  
  }
    




}
