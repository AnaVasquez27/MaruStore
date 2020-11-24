<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class prenda_tl
 * @package App\Models
 * @version October 29, 2020, 10:26 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $tiposDePrendas
 * @property \Illuminate\Database\Eloquent\Collection $tallasEnLetras
 * @property integer $id_prendas
 * @property integer $id_tl
 */
class prenda_tl extends Model
{

    public $table = 'prenda_tl';
    



    public $fillable = [
        'id_prendas',
        'id_tl'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_prendas' => 'integer',
        'id_tl' => 'integer'
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
    public function tallasEnLetras()
    {
        return $this->hasMany(\App\Models\tallas_en_letras::class, 'id', 'id_tl');
    }
}
