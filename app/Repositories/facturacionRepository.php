<?php

namespace App\Repositories;

use App\Models\facturacion;
use App\Repositories\BaseRepository;

/**
 * Class facturacionRepository
 * @package App\Repositories
 * @version October 29, 2020, 10:07 pm UTC
*/

class facturacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_cliente',
        'fecha',
        'total_a_pagar'
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
        return facturacion::class;
    }
}
