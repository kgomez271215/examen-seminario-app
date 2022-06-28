<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class productosController extends Controller
{
    public function productos(){
        $response= Http::get('http://localhost:3000/api/v1/productos');
        $productos= json_decode( $response->body());
        //dd($productos);
        return view('productos',compact(['productos']));
    }

    public function precios($idProducto){
        $response= Http::get('http://localhost:3000/api/v1/productos/'.$idProducto);
        $precios= json_decode( $response->body());
        //dd($precios);
        return view('precios',compact(['precios']));
    }

}
