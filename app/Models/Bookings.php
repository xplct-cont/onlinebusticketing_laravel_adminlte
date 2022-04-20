<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Bookings
 * @package App\Models
 * @version April 11, 2022, 10:27 am UTC
 *
 * @property string $operator
 * @property string $bus_name
 * @property string $point_of_origin
 * @property string $start_time
 * @property string $destination
 * @property string $drop_time
 * @property integer $ticket_no
 * @property string $passenger_name
 * @property integer $age
 * @property integer $contact_no
 */
class Bookings extends Model
{
   // use SoftDeletes;

    use HasFactory;

    public $table = 'bookings';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'operator' => 'string',
        'bus_name' => 'string',
        'point_of_origin' => 'string',
        'start_time' => 'string',
        'destination' => 'string',
        'drop_time' => 'string',
        'ticket_no' => 'integer',
        'passenger_name' => 'string',
        'age' => 'integer',
        'contact_no' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'operator' => 'required|string|max:255',
        'bus_name' => 'required|string|max:255',
        'point_of_origin' => 'required|string|max:255',
        'start_time' => 'required|string|max:255',
        'destination' => 'required|string|max:255',
        'drop_time' => 'required|string|max:255',
        'ticket_no' => 'required',
        'passenger_name' => 'required|string|max:255',
        'age' => 'required|integer',
        'contact_no' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
