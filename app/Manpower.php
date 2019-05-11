<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manpower extends Model
{
    protected $fillable = [
        'ric_id', 'description', 'price_hour', 'net_weight', 'cadence', 'hours', 'costo', 'total'
    ];

    public function ric()
    {
        return $this->belongsTo(Ric::class);
    }

    public function getDescriptionNameAttribute()
    {
        if ($this->description == 1)
            return "cuerpo y tapas";
        if ($this->description == 2)
            return "csoportes";
        if ($this->description == 3)
            return "escaleras y barandales";
        if ($this->description == 4)
            return "boquillas";
        if ($this->description == 5)
            return "ingeniería";
        return 'Invalid material';
    }
}
