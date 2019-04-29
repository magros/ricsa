<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manpower extends Model
{
    protected $fillable = [
        'ric_id', 'description','price_hour','net_weight','cadence','hours','costo','total'
    ];
    public function ric(){
        return $this->belongsTo(Ric::class);
    }
}
