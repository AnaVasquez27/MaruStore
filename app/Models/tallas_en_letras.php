<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class tallas_en_letras
 * @package App\Models
 * @version October 29, 2020, 9:54 pm UTC
 *
 * @property string $letra
 */
class tallas_en_letras extends Model
{

    public $table = 'tallas_en_letras';
    



    public $fillable = [
        'letra'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'letra' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
