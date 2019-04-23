<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Dollar extends Model
{
    protected $fillable = [
        'name', 'price'
    ];

}
