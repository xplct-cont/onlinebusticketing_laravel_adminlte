<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;

    protected $table = 'operators';
    protected $fillable = [
           'profile_image',
           'operator_name',
           'address',
           'contact_no'

    ];
}
