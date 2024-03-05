<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reseña;

class ReseñaController extends Controller
{
    
    public function store (Request $request) 

    { 
    
      $params = $request->all(); 
      $reseña = Reseña::create([ 
    
       'calificacion' =>$params['calificacion'], 
    
       'descripcion' =>$params['descripcion'],
       'id_libro' =>$params['id_libro'],
       'id_usuario' =>$params['id_usuario'],
       

       ] ); 
    
       return $reseña;
    }
    
    public function index (Request $request) 
    
    { 
    
       $params = $request->all(); 
    
       $size = isset($params['size']) ? $params['size'] : 5 ; 
    
        $reseñas = Reseña::where('calificacion','>=', $params['calificacion']) 
    
          ->limit($size)->get(); 
    
      
    
        return $reseñas; 
    
      
    
    } 
    
    public function show ($id) 
    
    { 
    
    $reseña = Reseña::find($id); 
    
    return $reseña; 
    
    } 
    
    
    public function update ($id,Request $request) 
    
    { 
    
      $params = $request->all(); 
    
       Reseña::find($id)->update([ 
    
        'calificacion' =>$params['calificacion'], 
    
       'descripcion' =>$params['descripcion'],
       'id_libro' =>$params['id_libro'],
       'id_usuario' =>$params['id_usuario'],
    
        ]); 
    
      return 'Registro actualizado'; 
    
    
    } 
    
    public function destroy ($id) 
    
    { 
    
       Reseña::find($id)->delete(); 
    
      return 'Registro eliminado'; 
    
      
    
    } 











}
