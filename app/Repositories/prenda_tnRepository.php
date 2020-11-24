<?php

namespace App\Repositories;

use App\Models\prenda_tn;
use App\Repositories\BaseRepository;

/**
 * Class prenda_tnRepository
 * @package App\Repositories
 * @version October 29, 2020, 10:28 pm UTC
*/

class prenda_tnRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_prendas',
        'id_tn'
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
        return prenda_tn::class;
    }
}
