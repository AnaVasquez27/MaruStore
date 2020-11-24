<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class clientes
 * @package App\Models
 * @version October 29, 2020, 9:43 pm UTC
 *
 * @property string $nombre
 * @property string $apellido
 * @property integer $telefono
 * @property string $correo
 * @property string $direccion
 */
class clientes extends Model
{

    public $table = 'clientes';
    



    public $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'correo',
        'direccion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'apellido' => 'string',
        'telefono' => 'integer',
        'correo' => 'string',
        'direccion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
