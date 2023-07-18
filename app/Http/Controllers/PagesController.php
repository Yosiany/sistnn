<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;


class PagesController extends Controller
{
    
    public function inicio(){
        return view('index');
    }

    public function ciudad(){
        return view('ciudad');
    }

    public function producto(){
        return view('producto');
    }

    public function pedido(){
        return view('pedido')->name('pedido');
    }

    public function vencimiento(){
        return view('vencimiento')->name('vencimiento');
    }


}
