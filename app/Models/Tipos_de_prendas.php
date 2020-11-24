<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Tipos_de_prendas
 * @package App\Models
 * @version October 29, 2020, 9:49 pm UTC
 *
 * @property string $nombre
 */
class Tipos_de_prendas extends Model
{

    public $table = 'Tipos_de_prendas';
    



    public $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
