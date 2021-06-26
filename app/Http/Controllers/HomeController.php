<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $usuario = "Mateus Cibelli";
        $perfil = "Programador";
        $empresa = "Home-Office";

        $dados = [
        
        'usuario'=>$usuario,
        'perfil'=>$perfil,
        'empresa'=>$empresa    

        ];

        return view('home', $dados);
    }
}
