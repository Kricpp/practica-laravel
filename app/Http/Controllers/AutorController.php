<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    public function store (Request $request) 

{ 

  $params = $request->all(); 
  $autor = Autor::create([ 

   'nombre_autor' =>$params['nombre_autor'], 

   'nacionalidad' =>$params['nacionalidad'], 

    'edad' =>$params['edad'],     

   ] ); 

   return $autor;
}

public function index (Request $request) 

{ 

   $params = $request->all(); 

   $size = isset($params['size']) ? $params['size'] : 5 ; 

    $autores = Autor::where('edad','>=', $params['edad']) 

      ->limit($size)->get(); 

  

    return $autores; 

  

} 


public function show ($id) 

{ 

$autor = Autor::find($id); 

return $autor; 

} 


public function update ($id,Request $request) 

{ 

  $params = $request->all(); 

   Autor::find($id)->update([ 

   
    'nombre_autor' =>$params['nombre_autor'], 

    'nacionalidad' =>$params['nacionalidad'], 
 
     'edad' =>$params['edad'],     
 

    ]); 

  return 'Registro actualizado'; 

} 


public function destroy ($id) 

{ 

   Autor::find($id)->delete(); 

  return 'Registro eliminado'; 

} 









}

