<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable=[
        'vehicle_name',
        'vehicle_type',
        'fuel_type',
        'mileage',
        'year',
        'Model',
        'Make',
        'regnumber',
        'Location',
        'condescription',
        'feadescription',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',

    ];
}
