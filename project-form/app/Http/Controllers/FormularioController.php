<?php

namespace App\Http\Controllers;

use App\Formularios;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function retornaIndex(){

        $resultado = Formularios::all();
        return view('resultado',compact('resultado'));
    }

    public function index(){

        return view('index');
    }

    
    public function recebe(Request $request){

        $form = Formularios::create($request->all());
        $form->save();

        session()->flash('formulario-enviado', true);
        return view('/home',compact('form'));
    }
}
