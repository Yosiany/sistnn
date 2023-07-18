<?php

use App\Http\Controllers;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\pedidoController;
use App\Http\Controllers\productoController;
use App\Http\Controllers\vencimientoController;
use App\Http\Controllers\ciudadController;
use Illuminate\Support\Facades\Route;


Route::get('ciudad', [ciudadController::class,'index'])->name('ciudad.index');
Route::get('/createciudad',[ciudadController::class,'create'])->name('ciudad.create');
Route::post('/storeciudad',[ciudadController::class,'store'])->name('ciudad.store');
Route::get('/editciudad/{id}',[ciudadController::class,'edit'])->name('ciudad.edit');
Route::put('/updateciudad/{id}',[ciudadController::class,'update'])->name('ciudad.update');
Route::get('/showciudad/{id}',[ciudadController::class,'show'])->name('ciudad.show');
Route::delete('/destroyciudad/{id}',[ciudadController::class,'destroy'])->name('ciudad.destroy');

Route::get('producto', [productoController::class,'index'])->name('producto.index');
Route::get('/createproducto', [productoController::class,'create'])->name('producto.create');
Route::post('/storeproducto',[productoController::class,'store'])->name('producto.store');
Route::get('/editproducto/{id}',[productoController::class,'edit'])->name('producto.edit');
Route::put('/updateproducto/{id}',[productoController::class,'update'])->name('producto.update');
Route::get('/showproducto/{id}',[productoController::class,'show'])->name('producto.show');
Route::delete('/destroyproducto/{id}',[productoController::class,'destroy'])->name('producto.destroy');

Route::get('pedido', [pedidoController::class,'index'])->name('pedido.index');
Route::get('/createpedido', [pedidoController::class,'create'])->name('pedido.create');
Route::post('/storepedido',[pedidoController::class,'store'])->name('pedido.store');
Route::get('/editpedido/{id}',[pedidoController::class,'edit'])->name('pedido.edit');
Route::put('/updatepedido/{id}',[pedidoController::class,'update'])->name('pedido.update');
Route::get('/showpedido/{id}',[pedidoController::class,'show'])->name('pedido.show');
Route::delete('/destroypedido/{id}',[pedidoController::class,'destroy'])->name('pedido.destroy');

Route::get('vencimiento', [vencimientoController::class,'index'])->name('vencimiento.index');
Route::get('/createvencimiento', [vencimientoController::class,'create'])->name('vencimiento.create');
Route::post('/storevencimiento',[vencimientoController::class,'store'])->name('vencimiento.store');
Route::get('/editvencimiento/{id}',[vencimientoController::class,'edit'])->name('vencimiento.edit');
Route::put('/updatevencimiento/{id}',[vencimientoController::class,'update'])->name('vencimiento.update');
Route::get('/showvencimiento/{id}',[vencimientoController::class,'show'])->name('vencimiento.show');
Route::delete('/destroyvencimiento/{id}',[vencimientoController::class,'destroy'])->name('vencimiento.destroy');
