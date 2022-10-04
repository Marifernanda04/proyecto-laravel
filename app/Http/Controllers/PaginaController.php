<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function contacto($codigo=null) {
        if($codigo==1234){
            $nombre='Hola';
            $correo='automatico@hotmail.com';
        }
        else{
            $nombre='';
            $correo='';
        }
        return view('/contacto',compact('nombre','correo'));
    }

    public function landingpage(){
        return view('/landingpage');
    }

    public function guardar(Request $request){
        dd($request-> all());

        $request->validate([
            'nombre' => 'required [max:255|min:5]',
            'correo' => ['required', 'email'],
            'comentario' => 'required',
        ]);
    }
}
