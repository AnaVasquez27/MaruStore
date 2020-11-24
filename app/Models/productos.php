<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class productos
 * @package App\Models
 * @version October 29, 2020, 10:11 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $tiposDePrendas
 * @property \Illuminate\Database\Eloquent\Collection $colores
 * @property integer $id_prendas
 * @property integer $id_color
 * @property integer $precio_unitario
 * @property integer $existencias
 */
class productos extends Model
{

    public $table = 'productos';
    



    public $fillable = [
        'id_prendas',
        'id_color',
        'precio_unitario',
        'existencias'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_prendas' => 'integer',
        'id_color' => 'integer',
        'precio_unitario' => 'integer',
        'existencias' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function tiposDePrendas()
    {
        return $this->hasMany(\App\Models\tipos_de_prendas::class, 'id', 'id_prendas');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function colores()
    {
        return $this->hasMany(\App\Models\colores::class, 'id', 'id_color');
    }
}
