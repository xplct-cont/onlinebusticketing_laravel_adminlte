<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Buses
 * @package App\Models
 * @version April 11, 2022, 9:59 am UTC
 *
 * @property string $bus_name
 * @property integer $maximum_seats
 * @property string $plate_no
 * @property integer $franchise_no
 */
class Buses extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'buses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'bus_name',
        'maximum_seats',
        'plate_no',
        'franchise_no'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'bus_name' => 'string',
        'maximum_seats' => 'integer',
        'plate_no' => 'string',
        'franchise_no' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'bus_name' => 'required|string|max:255',
        'maximum_seats' => 'required',
        'plate_no' => 'required|string|max:255',
        'franchise_no' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
