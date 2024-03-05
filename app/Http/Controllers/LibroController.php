<?php

namespace App\Http\Controllers;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{

    public function store (Request $request) 

    { 
    
      $params = $request->all(); 
      $libro = Libro::create([ 
    
       'año_publicacion' =>$params['año_publicacion'], 
    
       'editorial' =>$params['editorial'],
       'idioma' =>$params['idioma'],
       'id_autor' =>$params['id_autor'],
       'id_usuario' =>$params['id_usuario'],
    
       ] ); 
    
       return $libro;
    }
    
    public function index (Request $request) 
    
    { 
    
       $params = $request->all(); 
    
       $size = isset($params['size']) ? $params['size'] : 5 ; 
    
        $libros = Libro::where('año_publicacion','>=', $params['año_publicacion']) 
    
          ->limit($size)->get(); 
    
      
    
        return $libros; 
    
      
    
    } 
    
    public function show ($id) 
    
    { 
    
    $libro = Libro::find($id); 
    
    return $libro; 
    
    } 
    
    
    public function update ($id,Request $request) 
    
    { 
    
      $params = $request->all(); 
    
       Libro::find($id)->update([ 
    
        'año_publicacion' =>$params['año_publicacion'], 
    
        'editorial' =>$params['editorial'],
        'idioma' =>$params['idioma'],
        'id_autor' =>$params['id_autor'],
        'id_usuario' =>$params['id_usuario'],
    
        ]); 
    
      return 'Registro actualizado'; 
    
    
    } 
    
    public function destroy ($id) 
    
    { 
    
       Libro::find($id)->delete(); 
    
      return 'Registro eliminado'; 
    
      
    
    } 
    
    
    
    
    
    





}
