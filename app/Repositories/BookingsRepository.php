<?php

namespace App\Repositories;

use App\Models\Bookings;
use App\Repositories\BaseRepository;

/**
 * Class BookingsRepository
 * @package App\Repositories
 * @version April 11, 2022, 10:27 am UTC
*/

class BookingsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'operator',
        'bus_name',
        'point_of_origin',
        'start_time',
        'destination',
        'drop_time',
        'ticket_no',
        'passenger_name',
        'age',
        'contact_no'
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
        return Bookings::class;
    }
}
