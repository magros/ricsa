<?php

namespace App;

use App\MaterialType;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'description','specification','thickness','dimension','length',
        'net_weight','gross_weight', 'trademark','price','r_rc','provider_id','material_type_id','family_id'
    ];

    public function materialType()
    {
        return $this->belongsTo(MaterialType::class);
    }
    public function materialQuotation(){
        return $this->hasMany(MaterialQuotation::class);
    }
    public function inventory(){
        return $this->hasMany(Inventory::class);
    }
    public function materialEngineering(){
        return $this->hasMany(MaterialEngieneering::class);
    }
}
