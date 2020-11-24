<?php

namespace App\Repositories;

use App\Models\tallas_en_numeros;
use App\Repositories\BaseRepository;

/**
 * Class tallas_en_numerosRepository
 * @package App\Repositories
 * @version October 29, 2020, 9:57 pm UTC
*/

class tallas_en_numerosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'numero'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return tallas_en_numeros::class;
    }
}
