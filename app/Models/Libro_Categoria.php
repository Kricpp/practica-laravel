<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Libro_Categoria extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $table = 'libros_categorias';
    protected $fillable = [
        'id_libro',
        'id_categoria'
    ];

    public function libro()
    {
        return $this->belongsTo(Libro::class, 'id_libro');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
}


