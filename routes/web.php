<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   //return view('welcome');
   return "Leticia Michelle Bates Estrella";
 
})->name('vista_inicio');
 
Route::get('/principal', function () {
  $datos=["titulo"=>"Tienda Virtual -Vista Principal",
  "mensaje"=>"Bienvenido
  a la vista principal",
  "Autor"=>"Leticia"];
   return view ('principal',$datos);
})->name('principal');

Route::get('/elyucateco', function () {
    return view('elyucateco', [
        "titulo" => "Tienda Virtual - Vista Principal de El Yucateco",
        "mensaje" => "Bienvenido a la vista principal",
        "Autor" => "Equipo de El Yucateco"
    ]);
})->name('elyucateco');
 