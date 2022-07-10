<?php

namespace App\Transition\Models;

use Illuminate\Database\Eloquent\Model;

class Transition extends Model
{
    protected $table = 'transitions';

    protected $fillable = [
        'token',
        'long_url'
    ];


    protected $attributes = [
        'clicks' => 0
    ];
}
