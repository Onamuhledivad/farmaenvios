<?php
namespace App\Http\Controllers;
class HomeController extends Controller
{

	public function quienes()
    {
       return view('quienes'); 
    }

    public function preguntas()
    {
       return view('preguntas'); 
    }
    public function servicio()
    {
       return view('servicio'); 
    }

    public function privacidad()
    {
       return view('privacidad'); 
    }






}
?>