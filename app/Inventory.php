<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'quantity','material_id','ric_id'
    ];

    public function material(){
        return $this->belongsTo(Material::class);
    }

    public function ric(){
        return $this->belongsTo(Ric::class);
    }
}
