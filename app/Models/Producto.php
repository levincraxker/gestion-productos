<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Producto extends Model
{
    use HasFactory; //Esto es para poder usar el factory y crear datos de prueba

    protected $fillable = ['nombre', 'descripcion', 'cantidad', 'precio_unitario', 'categoria_id']; //Nombres de los campos que se pueden asignar masivamente

    protected $casts = [
        'precio_unitario' => 'decimal:2', //Esto es para que el campo precio_unitario se muestre con 2 decimales
        'cantidad' => 'integer'
    ];

    public function categoria(): BelongsTo //Relacion muchos a uno con el modelo Categoria
    {
        return $this->belongsTo(Categoria::class); //Relacion muchos a uno con el modelo Categoria
    }
}
