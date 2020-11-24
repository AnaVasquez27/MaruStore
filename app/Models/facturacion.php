<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class facturacion
 * @package App\Models
 * @version October 29, 2020, 10:07 pm UTC
 *
 * @property \App\Models\clientes $id
 * @property integer $id_cliente
 * @property string $fecha
 * @property integer $total_a_pagar
 */
class facturacion extends Model
{

    public $table = 'facturacion';
    



    public $fillable = [
        'id_cliente',
        'fecha',
        'total_a_pagar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_cliente' => 'integer',
        'fecha' => 'datetime',
        'total_a_pagar' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function id()
    {
        return $this->belongsTo(\App\Models\clientes::class, 'id', 'id_cliente');
    }
}
