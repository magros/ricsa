<?php

namespace App;

use App\Inventory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'name', 'description', 'trademark','price','magnitude','specification','material','r/rc',
        'dimension','weight', 'provider_id', 'material_type_id','family_id'
    ];
    public function materialQuotation(){
        return $this->hasMany(MaterialQuotation::class);
    }
    public function inventory(){
        return $this->hasMany(Inventory::class);
    }
}
