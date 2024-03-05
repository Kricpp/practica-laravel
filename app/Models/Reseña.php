<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Reseña extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'reseñas';
    protected $fillable = [
        'calificacion',
        'descripcion',
        'id_libro',
        'id_usuario'
    ];


    public function Usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function Libro()
    {
        return $this->belongsTo(Libro::class, 'id_libro');
    }







}

