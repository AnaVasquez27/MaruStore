<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class productos_vendidos
 * @package App\Models
 * @version October 29, 2020, 10:18 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $facturacions
 * @property \Illuminate\Database\Eloquent\Collection $productos
 * @property integer $id_factura
 * @property integer $id_producto
 */
class productos_vendidos extends Model
{

    public $table = 'productos_vendidos';
    



    public $fillable = [
        'id_factura',
        'id_producto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_factura' => 'integer',
        'id_producto' => 'integer'
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
    public function facturacions()
    {
        return $this->hasMany(\App\Models\facturacion::class, 'id', 'id_factura');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function productos()
    {
        return $this->hasMany(\App\Models\productos::class, 'id', 'id_producto');
    }
}
