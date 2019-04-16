<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Material extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name', 'description', 'trademark','price','magnitude','specification','material','r/rc',
        'dimension','weight', 'provider_id', 'material_type_id','family_id'
    ];
}
