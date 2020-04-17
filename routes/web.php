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
    return view('welcome');
});

Route::get('/saludo', function(){
    echo "Saludo desde Las rutas de laravel";
});

Route::get("/saludo2", function(){
    return "Saludo 2";
});

Route::get("/nombres", function(){
    return ["Juan", "Pedro", "Ana", "Simon"];
});

Route::get("/nombre/{nombre}", function($n){
    return ["nombre" => $n, "edad" => 30];
});

Route::get("/nombre/{nombre}/edad/{ed}", function($nombre, $e){
    return ["nombre" => $nombre, "edad" => $e];
});

Route::get("/contacto", function(){
    return view("contactenos");
});

Route::get("/acerca", function(){
    return view("nosotros");
})->name("acerca_de_nosotros");

Route::get("/persona", "PersonaController@listar");

Route::get("/persona/crear", "PersonaController@nuevo");

Route::get("/persona/{id}", "PersonaController@mostrar");

Route::get("/persona/{id}/editar", "PersonaController@editar");

Route::resource("/categoria", "CategoriaController");
