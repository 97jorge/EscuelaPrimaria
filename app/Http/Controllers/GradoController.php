<?php

namespace App\Http\Controllers;

use App\Models\Grado;
use App\Http\Requests\StoreGradoRequest;
use App\Http\Requests\UpdateGradoRequest;

class GradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listaG(){

    $grados = Grado::paginate(10);
    return view('grados')->with('grados',$grados);
      
      
        //
    }


   /*funcion para ver grado individual */
   public function mostrar($id){
    $grados= Grado::findOrFail($id);
     return view('gradoIndividual')->with('grado',$grados);
}




   /*funcion para  formulario crear los estudiantes */
   public function crear(){
 
    return view('formularioGrado');
}


/*  crear y guardar  los estudiantes */

public function guardarG(request $request){
   //validar los datos a ingresar 
   $request->validate([
          
          'Profesor_id'=>'required',
          'nombreGrado'=>'required',
          'clases'=>'required',
          'cantidadAlumnos'=>'required',
          
      
   ]);
 
      $nuevoGrado = new Grado();

 
      $nuevoGrado->Profesor_id = $request->input('Profesor_id');
      $nuevoGrado->nombreGrado= $request->input('nombreGrado');
      $nuevoGrado->clases= $request->input('clases');
      $nuevoGrado->cantidadAlumnos= $request->input('cantidadAlumnos');
     
   
//fuente externa
  /* $nuevoEstudiante->fechaNacimiento=('20000512');*/

 $creado=$nuevoGrado->save();

 if ($creado) {
     return redirect()->route('grado.listaG')->with('mensaje','El grado fue Agredado exitosamente.');
 }
else {
   // todo retornar con un mensaje de error 
}                                     
}



/*Actualisar */


public function editG($id){
    $grados= Grado::findOrFail($id);
    return view('formularioEditarGrado')->with('grado',$grados);

}

public function updateG(request $request,$id){

 //validar los datos a ingresar 
 $request->validate([
    'Profesor_id'=>'required',
    'nombreGrado'=>'required',
    'clases'=>'required',
    'cantidadAlumnos'=>'required',
    
]);

  $grados= Grado::findOrFail($id);


  $grados->Profesor_id = $request->input('Profesor_id');
  $grados->nombreGrado= $request->input('nombreGrado');
  $grados->clases= $request->input('clases');
  $grados->cantidadAlumnos= $request->input('cantidadAlumnos');
 

 //fuente externa


$creado=$grados->save();

if ($creado) {
    return redirect()->route('grado.listaG')->with('mensaje','El Grado fue editado exitosamente.');
}
else {
  // todo retornar con un mensaje de error 
}    

  
}



public function destroy($id) {
    Grado::destroy($id);
  
    //redirect
    return redirect('/Escuelas/listaG/')->with('mensaje','El Grado fue borrado completamente ');
  
  }
    


    
}
