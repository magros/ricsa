<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'name', 'description', 'trademark','price','magnitude','specification','material','r/rc',
        'dimension','weight', 'provider_id', 'material_type_id','family_id'
    ];
}
