<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    use HasFactory;

    // Si tu tabla no sigue la convención plural, puedes especificar el nombre de la tabla
    protected $table = 'prueba'; // Esto es necesario si no es la tabla plural 'pruebas'

    // Los campos que se pueden asignar masivamente
    protected $fillable = ['nombre', 'descripcion'];
}


/**(3)
 * 
 * creo los modelos en este caso solo uno 
 * 
*/