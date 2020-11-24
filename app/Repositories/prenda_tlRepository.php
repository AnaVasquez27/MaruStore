<?php

namespace App\Repositories;

use App\Models\prenda_tl;
use App\Repositories\BaseRepository;

/**
 * Class prenda_tlRepository
 * @package App\Repositories
 * @version October 29, 2020, 10:26 pm UTC
*/

class prenda_tlRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_prendas',
        'id_tl'
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
        return prenda_tl::class;
    }
}
