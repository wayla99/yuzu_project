<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;

    protected $table = 'ads';

    protected $fillable = [
        'location',
        'file',
        'ads_type',
        'status',
        'created_by',
    ];


    protected $casts = [
        'location' => 'collection',//For collection
        'location' => 'array'//For array
    ];
}
