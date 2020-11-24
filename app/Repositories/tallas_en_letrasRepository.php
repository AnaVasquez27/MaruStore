<?php

namespace App\Repositories;

use App\Models\tallas_en_letras;
use App\Repositories\BaseRepository;

/**
 * Class tallas_en_letrasRepository
 * @package App\Repositories
 * @version October 29, 2020, 9:54 pm UTC
*/

class tallas_en_letrasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'letra'
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
        return tallas_en_letras::class;
    }
}
