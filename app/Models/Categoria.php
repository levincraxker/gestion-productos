<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    use HasFactory; //Esto es para poder usar el factory y crear datos de prueba

    protected $fillable = ['nombre', 'descripcion']; //Nombres de los campos que se pueden asignar masivamente

    public function productos(): HasMany //Relacion uno a muchos con el modelo Producto
    {
        return $this->hasMany(Producto::class); //Relacion uno a muchos con el modelo Producto
    }
}
