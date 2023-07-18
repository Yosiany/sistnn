<?php

namespace App\Http\Controllers;

use App\Models\vencimiento; 
use App\Models\producto; 
use App\Models\ciudad; 
use Illuminate\Http\Request;
use DB;
use App;

class vencimientoController extends Controller
{
    public function index(){
        $vencimiento = vencimiento::all();
        return view('vencimiento',compact('vencimiento'));
      }

      public function create(){
      return view('agregarvencimiento');
       

      }
    
      public function store(Request $vencimientos)
      {         
          $vencimiento =  new vencimiento();
          $vencimiento->cantidad = $vencimientos->post('cantidad');
          $vencimiento->fec_vencimiento = $vencimientos->post('fec_vencimiento');
          $vencimiento->detalle = $vencimientos->post('detalle');
          $vencimiento->id_producto = $vencimientos->post('id_producto');
          $vencimiento->id_ciudad = $vencimientos->post('id_ciudad');
          $vencimiento->save();
    
          return redirect()->route('vencimiento.index')->with("success","Agregado con Exito");
      }
    
      public function show($id){
        $vencimiento = vencimiento::find($id);
        return view('eliminarvencimiento', compact('vencimiento'));
        
      }
    
    
      public function edit($id)
      {      
          $vencimiento = vencimiento::find($id);
         return view('actualizarvencimiento', compact('vencimiento'));
         
      }
    
      public function update(Request $request, $id)
      {
              $vencimiento=vencimiento::find($id);
              $vencimiento->cantidad = $request->post('cantidad');
              $vencimiento->fec_vencimiento = $request->post('fec_vencimiento');
              $vencimiento->detalle = $request->post('detalle');
              $vencimiento->id_producto = $request->post('id_producto');
              $vencimiento->id_ciudad = $request->post('id_ciudad');
              $vencimiento->save();
    
              return redirect()->route('vencimiento.index')->with("success","Actualizado con Exito");
    
    
      }
      public function destroy($id)
      {
          $vencimiento = vencimiento::find($id);
          $vencimiento->delete();
          return redirect()->route('vencimiento.index')->with("success","Eliminado con Exito");
      }
    
}
