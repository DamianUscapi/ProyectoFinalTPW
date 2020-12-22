<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'cantidad',
        'precio',
        'ruta',
        'categoria',
    ];
    public function usuario()
    {
        return $this->belongsTo('App/Models/categorias');
    }
}
