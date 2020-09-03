<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


/*-- Auth --*/
Route::get('/login','AuthController@login');
Route::get('/registro','AuthController@register');
Route::get('/recuperar-contraseña','AuthController@password');


/*-- Corporativo --*/
Route::get('/quienes-somos','HomeController@quienes');
Route::get('/preguntas-frecuentes','HomeController@preguntas');
Route::get('/condiciones-de-servicio','HomeController@servicio');
Route::get('/privacidad','HomeController@privacidad');


/*-- eCommerce --*/
Route::get('/buscar','EcommerceController@buscar');