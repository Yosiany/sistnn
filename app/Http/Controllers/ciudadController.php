<?php

namespace App\Http\Controllers;

use App\Models\ciudad;
use Illuminate\Http\Request;
use DB;
use App;



class ciudadController extends Controller
{
    public function index(){
        $ciudad = ciudad::all();
        return view('ciudad',compact('ciudad'));
      }
    
    public function create(){
        return view('agregarciudad');
      }

      public function store(Request $ciudads)
      {

          $ciudad =  new ciudad();
          $ciudad->nombre = $ciudads->post('nombre');
          $ciudad->save();
  
          return redirect()->route('ciudad.index')->with("success","Agregado con Exito");
      }

      public function show($id){
        $ciudad = ciudad::find($id);
        return view('eliminarciudad', compact('ciudad'));
        
      }

      public function edit($id)
      {      
          $ciudad = ciudad::find($id);
         return view('actualizarciudad', compact('ciudad'));
      }

      public function update(Request $request, $id)
      {
              $ciudad=ciudad::find($id);
              $ciudad->nombre = $request->post('nombre');
              $ciudad->save();
              return redirect()->route('ciudad.index')->with("success","Actualizado con Exito");
      }
      
      public function destroy($id)
      {
          $ciudad = ciudad::find($id);
          $ciudad->delete();
          return redirect()->route('ciudad.index')->with("success","Eliminado con Exito");
      }

}
