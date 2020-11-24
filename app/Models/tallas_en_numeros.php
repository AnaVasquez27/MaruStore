<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class tallas_en_numeros
 * @package App\Models
 * @version October 29, 2020, 9:57 pm UTC
 *
 * @property integer $numero
 */
class tallas_en_numeros extends Model
{

    public $table = 'tallas_en_numeros';
    



    public $fillable = [
        'numero'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'numero' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
