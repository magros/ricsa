<?php

namespace App;

use App\Ric;
use Illuminate\Database\Eloquent\Model;

class MaterialEngineering extends Model
{

    protected $fillable = [
        'quantity','price', 'total', 'missing', 'ric_id','material_id'
    ];

    public function ric(){
        return $this->belongsTo(Ric::class);
    }
    public function material(){
        return $this->belongsTo(Material::class);
    }
}
