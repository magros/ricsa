<?php

namespace App;

use App\Material;
use Illuminate\Database\Eloquent\Model;

class MaterialType extends Model
{
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name'
    ];

    public function materials()
    {
        return $this->hasMany(Material::class);
    }
}
