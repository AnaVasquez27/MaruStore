<?php

namespace App\Repositories;

use App\Models\productos_vendidos;
use App\Repositories\BaseRepository;

/**
 * Class productos_vendidosRepository
 * @package App\Repositories
 * @version October 29, 2020, 10:18 pm UTC
*/

class productos_vendidosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_factura',
        'id_producto'
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
        return productos_vendidos::class;
    }
}
