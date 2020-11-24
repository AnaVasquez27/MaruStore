<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class prenda_tn
 * @package App\Models
 * @version October 29, 2020, 10:28 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $tiposDePrendas
 * @property \Illuminate\Database\Eloquent\Collection $tallasEnNumeros
 * @property integer $id_prendas
 * @property integer $id_tn
 */
class prenda_tn extends Model
{

    public $table = 'prenda_tn';
    



    public $fillable = [
        'id_prendas',
        'id_tn'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_prendas' => 'integer',
        'id_tn' => 'integer'
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
    public function tallasEnNumeros()
    {
        return $this->hasMany(\App\Models\tallas_en_numeros::class, 'id', 'id_tn');
    }
}
