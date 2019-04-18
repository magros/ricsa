<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Metal extends Model
{
    protected $fillable = [
        'name', 'description','price'
    ];

}
