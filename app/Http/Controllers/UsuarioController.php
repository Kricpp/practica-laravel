<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    
    public function store (Request $request) 

    { 
    
      $params = $request->all(); 
      $usuario = Usuario::create([ 
    
       'nombre_usuario' =>$params['nombre_usuario'], 
    
       'correo' =>$params['correo'],
       'telefono' =>$params['telefono'],

       ] ); 
    
       return $usuario;
    }
    
    public function index (Request $request) 

{ 

   $params = $request->all(); 

   $size = isset($params['size']) ? $params['size'] : 5 ; 

    $usuarios = Usuario::where('nombre_usuario','=', $params['nombre_usuario']) 

      ->limit($size)->get(); 

  

    return $usuarios; 

  

} 
    
    public function show ($id) 
    
    { 
    
    $usuario = Usuario::find($id); 
    
    return $usuario; 
    
    } 
    
    
    public function update ($id,Request $request) 
    
    { 
    
      $params = $request->all(); 
    
       Usuario::find($id)->update([ 
    
        'nombre_usuario' =>$params['nombre_usuario'], 
    
        'correo' =>$params['correo'],
        'telefono' =>$params['telefono'],
 
    
        ]); 
    
      return 'Registro actualizado'; 
    
    
    } 
    
    public function destroy ($id) 
    
    { 
    
       Usuario::find($id)->delete(); 
    
      return 'Registro eliminado'; 
    
      
    
    } 







}
