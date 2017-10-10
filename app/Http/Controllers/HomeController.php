<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    //return view('home'); //Original
	    return view('dashboard'); //Modificado
    }

    public function perfil_usuario(){
    //carga el formulario para agregar un nuevo usuario
   //$roles=Role::all();
    return view("layouts.usperfil");

        }    

}
