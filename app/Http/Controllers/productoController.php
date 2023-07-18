<?php

namespace App\Http\Controllers;

use App\Models\producto; //importa data de modelo
use Illuminate\Http\Request;
use DB;
use App;

class productoController extends Controller
{
  public function index(){
    $producto = producto::all();
    return view('producto',compact('producto'));
  }
    
  public function create(){
    return view('agregarproducto');
  }

  public function store(Request $productos)
  {

      $producto =  new producto();
      $producto->nombre_producto = $productos->post('nombre_producto');
      $producto->formato_producto = $productos->post('formato_producto');
      $producto->precio = $productos->post('precio');
      $producto->sabor_producto = $productos->post('sabor_producto');
      $producto->save();

      return redirect()->route('producto.index')->with("success","Agregado con Exito");
  }

  public function show($id){
    $producto = producto::find($id);
    return view('eliminarproducto', compact('producto'));
    
  }


  public function edit($id)
  {      
      $producto = producto::find($id);
     return view('actualizarproducto', compact('producto'));
     
  }

  public function update(Request $request, $id)
  {
          $producto=producto::find($id);
          $producto->nombre_producto = $request->post('nombre_producto');
          $producto->formato_producto = $request->post('formato_producto');
          $producto->precio = $request->post('precio');
          $producto->sabor_producto = $request->post('sabor_producto');
          $producto->save();

          return redirect()->route('producto.index')->with("success","Actualizado con Exito");


  }
  public function destroy($id)
  {
      $producto = producto::find($id);
      $producto->delete();
      return redirect()->route('producto.index')->with("success","Eliminado con Exito");
  }


}
