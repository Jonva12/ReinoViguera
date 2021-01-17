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
    return view('index');
})->name('inicio');

Route::get('somos',function(){
  return view('pages/QuienesSomos');
})->name('somos');

Route::get('historia',function(){
  return view('pages/historia');
})->name('historia');

Route::get('contacto',function(){
  return view('pages/contacto');
})->name('contacto');

Route::get('organigrama',function(){
  return view('pages/organigrama');
})->name('organigrama');

Route::get('eso',function(){
  return view('pages/ESO');
})->name('eso');

Route::get('bachillerato',function(){
  return view('pages/bachillerato');
})->name('bachillerato');

Route::get('pemar',function(){
  return view('pages/pemar');
})->name('pemar');

Route::get('documentos',function(){
  return view('pages/documentos');
})->name('documentos');