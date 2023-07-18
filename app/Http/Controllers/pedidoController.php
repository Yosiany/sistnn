<?php

namespace App\Http\Controllers;

use App\Models\pedido;
use Illuminate\Http\Request;
use DB;
use App;

class pedidoController extends Controller
{
    public function index(){
        $pedido = pedido::all();
        return view('pedido',compact('pedido'));
      }

      public function create(){
        return view('agregarpedido');
      }
    
      public function store(Request $pedidos)
      {
    
          $pedido =  new pedido();
          $pedido->cantidad = $pedidos->post('cantidad');
          $pedido->fec_pedido = $pedidos->post('fec_pedido');
          $pedido->id_producto = $pedidos->post('id_producto');
          $pedido->id_ciudad = $pedidos->post('id_ciudad');
          $pedido->save();
    
          return redirect()->route('pedido.index')->with("success","Agregado con Exito");
      }
    
      public function show($id){
        $pedido = pedido::find($id);
        return view('eliminarpedido', compact('pedido'));
        
      }
    
    
      public function edit($id)
      {      
          $pedido = pedido::find($id);
         return view('actualizarpedido', compact('pedido'));
         
      }
    
      public function update(Request $request, $id)
      {
              $pedido=pedido::find($id);
              $pedido->cantidad = $request->post('cantidad');
              $pedido->fec_pedido = $request->post('fec_pedido');
              $pedido->id_producto = $request->post('id_producto');
              $pedido->id_ciudad = $request->post('id_ciudad');
              $pedido->save();
    
              return redirect()->route('pedido.index')->with("success","Actualizado con Exito");
    
    
      }
      public function destroy($id)
      {
          $pedido = pedido::find($id);
          $pedido->delete();
          return redirect()->route('pedido.index')->with("success","Eliminado con Exito");
      }
    

}
