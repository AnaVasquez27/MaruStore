<?php

namespace App\Repositories;

use App\Models\Tipos_de_prendas;
use App\Repositories\BaseRepository;

/**
 * Class Tipos_de_prendasRepository
 * @package App\Repositories
 * @version October 29, 2020, 9:49 pm UTC
*/

class Tipos_de_prendasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
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
        return Tipos_de_prendas::class;
    }
}
