<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\Libro_CategoriaController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\ReseñaController;
use App\Http\Controllers\UsuarioController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('autores',[AutorController::class,'index']); 

Route::get('autores/{id}',[AutorController::class,'show']); 

Route::post('autores',[AutorController::class,'store']); 

Route::patch('autores/{id}',[AutorController::class,'update']); 

Route::delete('autores/{id}',[AutorController::class,'destroy']); 


Route::get('categorias',[CategoriaController::class,'index']); 

Route::get('categorias/{id}',[CategoriaController::class,'show']); 

Route::post('categorias',[CategoriaController::class,'store']); 

Route::patch('categorias/{id}',[CategoriaController::class,'update']); 

Route::delete('categorias/{id}',[CategoriaController::class,'destroy']); 



Route::get('libros_categorias',[Libro_CategoriaController::class,'index']); 

Route::get('libros_categorias/{id}',[Libro_CategoriaController::class,'show']); 

Route::post('libros_categorias',[Libro_CategoriaController::class,'store']); 

Route::patch('libros_categorias/{id}',[Libro_CategoriaController::class,'update']); 

Route::delete('libros_categorias/{id}',[Libro_CategoriaController::class,'destroy']); 




Route::get('libros',[LibroController::class,'index']); 

Route::get('libros/{id}',[LibroController::class,'show']); 

Route::post('libros',[LibroController::class,'store']); 

Route::patch('libros/{id}',[LibroController::class,'update']); 

Route::delete('libros/{id}',[LibroController::class,'destroy']); 



Route::get('reseñas',[ReseñaController::class,'index']); 

Route::get('reseñas/{id}',[ReseñaController::class,'show']); 

Route::post('reseñas',[ReseñaController::class,'store']); 

Route::patch('reseñas/{id}',[ReseñaController::class,'update']); 

Route::delete('reseñas/{id}',[ReseñaController::class,'destroy']); 




Route::get('usuarios',[UsuarioController::class,'index']); 

Route::get('usuarios/{id}',[UsuarioController::class,'show']); 

Route::post('usuarios',[UsuarioController::class,'store']); 

Route::patch('usuarios/{id}',[UsuarioController::class,'update']); 

Route::delete('usuarios/{id}',[UsuarioController::class,'destroy']); 