<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function store (Request $request) 

{ 

  $params = $request->all(); 
  $categoria = Categoria::create([ 

   'nombre_categoria' =>$params['nombre_categoria'], 

   'descripcion' =>$params['descripcion'],

        

   ] ); 

   return $categoria;
}

public function index (Request $request) 

{ 

   $params = $request->all(); 

   $size = isset($params['size']) ? $params['size'] : 5 ; 

    $categorias = Categoria::where('id','>=', $params['id']) 

      ->limit($size)->get(); 

  

    return $categorias; 

  

} 

public function show ($id) 

{ 

$categoria = Categoria::find($id); 

return $categoria; 

} 


public function update ($id,Request $request) 

{ 

  $params = $request->all(); 

   Categoria::find($id)->update([ 

    'nombre_categoria' =>$params['nombre_categoria'], 

    'descripcion' =>$params['descripcion'],
 

    ]); 

  return 'Registro actualizado'; 


} 

public function destroy ($id) 

{ 

   Categoria::find($id)->delete(); 

  return 'Registro eliminado'; 

  

} 







}
