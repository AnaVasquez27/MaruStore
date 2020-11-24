<?php

namespace App\Repositories;

use App\Models\colores;
use App\Repositories\BaseRepository;

/**
 * Class coloresRepository
 * @package App\Repositories
 * @version October 29, 2020, 9:50 pm UTC
*/

class coloresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'color'
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
        return colores::class;
    }
}
