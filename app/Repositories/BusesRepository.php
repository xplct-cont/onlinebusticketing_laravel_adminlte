<?php

namespace App\Repositories;

use App\Models\Buses;
use App\Repositories\BaseRepository;

/**
 * Class BusesRepository
 * @package App\Repositories
 * @version April 11, 2022, 9:59 am UTC
*/

class BusesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'bus_name',
        'maximum_seats',
        'plate_no',
        'franchise_no'
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
        return Buses::class;
    }
}
