<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class colores
 * @package App\Models
 * @version October 29, 2020, 9:50 pm UTC
 *
 * @property string $color
 */
class colores extends Model
{

    public $table = 'colores';
    



    public $fillable = [
        'color'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'color' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
