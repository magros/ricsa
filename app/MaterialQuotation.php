<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Ric extends Model
{
    protected $fillable = [
        'quantity', 'price','total','quotatio_id','material_id'
    ];

}
