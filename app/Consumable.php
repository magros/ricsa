<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumable extends Model
{
    protected $fillable = [
        'ric_id', 'description','quantity','unit_price','total'
    ];
    public function ric(){
        return $this->belongsTo(Ric::class);
    }
}
