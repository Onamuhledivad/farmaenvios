<?php
namespace App\Http\Controllers;
class HomeController extends Controller
{

  /*-- Paginas fuera del login --*/

	  public function quienes()
    {
       return view('corporativo.quienes'); 
    }

    public function preguntas()
    {
       return view('corporativo.preguntas'); 
    }
    public function servicio()
    {
       return view('corporativo.servicio'); 
    }

    public function privacidad()
    {
       return view('corporativo.privacidad'); 
    }

}
?>